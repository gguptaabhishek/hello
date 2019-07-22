<?php

class Foodzoon extends CI_Controller {

    function __construct() {
        parent::__construct();



//        $user = $this->session->userdata('LOGGED_USER');
//        $this->loginId = $user->users_id;

        $this->load->model('foodzoon_model', 'food');
        $this->load->model('User_model', 'user');
        $this->load->model('Common_model', 'common');

//        $this->content = array('title' => 'Brand');
    }

    public function index() {

        $this->content = array('title' => 'Home');


        $this->content['bannerresult'] = $this->food->getBanner();
        $this->content['category'] = $catindex = $this->food->getAllCategory();
        $this->content['product'] = $this->food->getProduct('', '', '', '', '', '', '', '', '', 20);
        $this->content['productbylimitdecricingorder'] = $this->food->getProduct('', '', '', '', '', '', '', '', '', '', 20);
        $this->content['brands'] = $this->food->getAllBrand();
        $this->content['hinglish'] = $this->food->getAllBlog();
        $this->content['cproduct'] = $comboindex = $this->food->getAllCproduct('', 5);
//         print_r($this->content['product']);die;


        $this->load->view('common/header', $this->content);
        $this->load->view('home/index', $this->content);
        $this->load->view('common/footer', $this->content);
    }

    public function shop() {
        $this->content = array('title' => 'Shop');

        $searchkey = "";
        $catID = "";
        $subID = "";
        $startingprice="";
        $lastprice ="";
        $newess="";
        $low="";
        $high="";
        $start = 0;
        
        
        
        
         if ($this->input->get('search')) {
            $searchkey = $this->input->get('search');
         }else if ($this->input->get('catID')) {
            $catID = $this->input->get('catID');
        
         }else if ($this->input->get('subID')) { 
            $subID = $this->input->get('subID'); 
             
         } else if ($this->input->get('pricebyserch')) {
            
            $pricet = $this->input->get('pricebyserch');
            $removeother = explode(': ', $pricet);
            $REMOVEDAS = explode(' - ', $removeother[1]);

            $removedollerf = explode('₹', $REMOVEDAS[0]);
            $startingprice = $removedollerf[1];

            $removedollers = explode('₹', $REMOVEDAS[1]);
            $lastprice = $removedollers[1];
            
         }else if ($this->input->get('searchorderby')) {

            if ($this->input->get('searchorderby') == 'newness') {
                $newess = $this->input->get('searchorderby');
                $low = '';
                $high = '';
            } else if ($this->input->get('searchorderby') == 'lower') {
                $newess = '';
                $low = $this->input->get('searchorderby');
                $high = '';
            } else if ($this->input->get('searchorderby') == 'higher') {
                $newess = '';
                $low = '';
                $high = $this->input->get('searchorderby');
            } else {
                $newess = '';
                $low = '';
                $high = '';
            }


        }
        
        $product = $this->food->getProduct('', $subID, $searchkey, $catID, $startingprice, $lastprice, $newess, $low, $high);
         
        $this->content['count'] = $count = count($product);

        $limit = 6;

        $this->content['pageno'] = $pageno = $this->input->get('pid');
        $this->content['pages'] = ($count / $limit);

        if ($pageno <= 1) {

            $start = 0;
            
            
        } else {

            $this->content['start'] = $start = (($pageno - 1) * $limit + 1);
        }
        
      
        
        $this->content['product'] = $this->food->getProduct('', $subID, $searchkey, $catID, $startingprice, $lastprice, $newess, $low, $high,'','',$start, $limit);
      
        
        $this->content['productbyrating'] = $this->food->getAll_product_by_rating();
        $this->content['subCategory'] = $this->food->getAllsubCategory();
        $this->content['category'] = $this->food->getAllCategory();
        $this->content['tag_result'] = $this->food->getAllTags();

        $this->load->view('common/header', $this->content);
        $this->load->view('shop', $this->content);
        $this->load->view('common/footer', $this->content);
    }

    public function shop_old() {

        $this->content = array('title' => 'Shop');


        print_r('vuixcyviuyvui');
        die;

        if ($this->input->get('search')) {

            $searchkey = $this->input->get('search');
            $product = $this->food->getProduct('', '', $searchkey);
        } else if ($this->input->get('catID')) {

            $product = $this->food->getProduct('', '', '', $this->input->get('catID'));
        } else if ($this->input->get('subID')) {
            $product = $this->food->getProduct('', $this->input->get('subID'));
        } else if ($this->input->post('pricebyserch')) {

            $pricet = $this->input->post('pricebyserch');
            $removeother = explode(': ', $pricet);
            $REMOVEDAS = explode(' - ', $removeother[1]);

            $removedollerf = explode('₹', $REMOVEDAS[0]);
            $startingprice = $removedollerf[1];

            $removedollers = explode('₹', $REMOVEDAS[1]);
            $lastprice = $removedollers[1];

            $product = $this->food->getProduct('', '', '', '', $startingprice, $lastprice);
        } else if ($this->input->get('searchorderby')) {

            if ($this->input->get('searchorderby') == 'newness') {
                $newess = $this->input->get('searchorderby');
                $low = '';
                $high = '';
            } else if ($this->input->get('searchorderby') == 'lower') {
                $newess = '';
                $low = $this->input->get('searchorderby');
                $high = '';
            } else if ($this->input->get('searchorderby') == 'higher') {
                $newess = '';
                $low = '';
                $high = $this->input->get('searchorderby');
            } else {
                $newess = '';
                $low = '';
                $high = '';
            }


            $product = $this->food->getProduct('', '', '', '', '', '', $newess, $low, $high);
//            print_r($product);die;
        } else {
            $product = $this->food->getProduct();
        }


        $this->content['count'] = $count = count($product);

        $limit = 6;

        $this->content['pageno'] = $pageno = $this->input->get('pid');
        $this->content['pages'] = ($count / $limit);

        if ($pageno <= 1) {

            $start = 0;
        } else {

            $this->content['start'] = $start = (($pageno - 1) * $limit + 1);
        }


//        print_r($count);
//        die;

        if ($this->input->get('search')) {

            $searchkey = $this->input->get('search');
            $this->content['product'] = $this->food->getProduct('', '', $searchkey, '', '', '', '', '', '', '', '', $start, $limit);
        } else if ($this->input->get('catID')) {

            $this->content['product'] = $this->food->getProduct('', '', '', $this->input->get('catID'), '', '', '', '', '', '', '', $start, $limit);
        } else if ($this->input->get('subID')) {
            $this->content['product'] = $this->food->getProduct('', $this->input->get('subID'), '', '', '', '', '', '', '', '', '', $start, $limit);
        } else if ($this->input->post('pricebyserch')) {

            $pricet = $this->input->post('pricebyserch');
            $removeother = explode(': ', $pricet);
            $REMOVEDAS = explode(' - ', $removeother[1]);

            $removedollerf = explode('₹', $REMOVEDAS[0]);
            $startingprice = $removedollerf[1];

            $removedollers = explode('₹', $REMOVEDAS[1]);
            $lastprice = $removedollers[1];

            $this->content['product'] = $this->food->getProduct('', '', '', '', $startingprice, $lastprice, '', '', '', '', '', $start, $limit);
        } else if ($this->input->get('searchorderby')) {

            if ($this->input->get('searchorderby') == 'newness') {
                $newess = $this->input->get('searchorderby');
                $low = '';
                $high = '';
            } else if ($this->input->get('searchorderby') == 'lower') {
                $newess = '';
                $low = $this->input->get('searchorderby');
                $high = '';
            } else if ($this->input->get('searchorderby') == 'higher') {
                $newess = '';
                $low = '';
                $high = $this->input->get('searchorderby');
            } else {
                $newess = '';
                $low = '';
                $high = '';
            }


            $this->content['product'] = $this->food->getProduct('', '', '', '', '', '', $newess, $low, $high, '', '', $start, $limit);
        } else {
            $this->content['product'] = $this->food->getProduct('', '', '', '', '', '', '', '', '', '', '', $start, $limit);
        }


        $this->content['productbyrating'] = $this->food->getAll_product_by_rating();
//       
        $this->content['subCategory'] = $this->food->getAllsubCategory();
        $this->content['category'] = $this->food->getAllCategory();
        $this->content['tag_result'] = $this->food->getAllTags();

        $this->load->view('common/header', $this->content);
        $this->load->view('shop', $this->content);
        $this->load->view('common/footer', $this->content);
    }

    public function blog() {

        $this->content = array('title' => 'Blog');

         $searchkey = "";
         $start = 0;

        if ($this->input->get('blogsearch')) {

            $searchkey = $this->input->get('blogsearch');
        
            $hinglish = $this->food->getAllBlog($searchkey);
        } else if ($this->input->get('tagID')) {
            $hinglish = $this->food->getAllBlog('', $this->input->get('tagID'));

        } else {
            $hinglish = $this->food->getAllBlog();
        }

        $this->content['count'] = $count = count($hinglish);
//        print_r($count);die;
        $limit = 4;

        $this->content['pageno'] = $pageno = $this->input->get('pid');
        $this->content['pages'] = ($count / $limit);
//        print_r($this->content['pages']);die;
        if ($pageno <= 1) {

            $start = 0;
            
            
        } else {

            $this->content['start'] = $start = (($pageno - 1) * $limit + 1);
        }
//        print_r($start);die;
         $this->content['hinglish'] = $this->food->getAllBlog($searchkey, $this->input->get('tagID'),$start, $limit);







//        $this->content['hinglish'] = $this->food->getAllBlog();
        $this->content['hinglishbylimt'] = $this->food->getAllBlog_by_limit();
        $this->content['category'] = $this->food->getAllCategory();
        $this->content['tag_result'] = $this->food->getAllTags();

//        print_r( $this->content['hinglishbylimt']);die;
        $this->load->view('common/header', $this->content);
        $this->load->view('blog', $this->content);
        $this->load->view('common/footer', $this->content);
    }

    public function blogdetail() {

        $this->content = array('title' => 'Blog Detail');

        $Id = $this->input->get('id');

        if (!empty($Id)) {


            $this->content['allcomment'] = $this->food->getAllcomment_by_limit($Id);
            $this->content['alldatablog'] = $this->food->getAllHinglishBlog($Id);
            $this->content['tag_result'] = $this->food->getAllTags();
            $this->content['hinglishbylimt'] = $this->food->getAllBlog_by_limit();
            $this->content['category'] = $this->food->getAllCategory();
            if ($this->input->post()) {


                $insert['commenter_name'] = $this->input->post('commenterName');
                $insert['commenter_email'] = $this->input->post('commenterEmail');
                $insert['comment'] = $this->input->post('commentMessage');
                $insert['website_name'] = $this->input->post('commenterWebsite');
                $insert['blog_id'] = $Id;
                $insert['delete'] = 0;
                $insert['status'] = 0;
                $insert['createdDate'] = date('Y-m-d H:i:s');
                $insert['updateDate'] = date('Y-m-d H:i:s');
                $insert['modifyBy'] = 0;

                $result = $this->food->comment_insert($insert);

                if ($result) {
                    setAlert('success', 'Comment Successfully Added');
                } else {
                    setAlert('error', 'Sorry Data Not inserted Please Try again !!');
                }
            }
            $this->load->view('common/header', $this->content);
            $this->load->view('blogdetail', $this->content);
            $this->load->view('common/footer', $this->content);
        } else {
            setAlert('error', 'Try again....!');
            redirect('blog');
        }
    }

    public function contact() {

        $this->content = array('title' => 'Contact');
//        $this->content['cssArray'] = array('plugins/datatables/dataTables.bootstrap.css', 'plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css');
//        $this->content['jsArray'] = array('plugins/datatables/jquery.dataTables.min.js', 'plugins/datatables/dataTables.bootstrap.min.js', 'plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js');
        if ($this->input->post()) {

            $this->form_validation->set_rules('customerName', 'Full Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('customerEmail', 'Last Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('contactSubject', 'Subject', 'trim|required|xss_clean');
            $this->form_validation->set_rules('contactMessage', 'Massage', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                setAlert('success', validation_errors);
                redirect('contact');
            } else {

                $data = array(
                    "c_fullname" => $this->input->post("customerName"),
                    "c_email" => $this->input->post("customerEmail"),
                    "c_subject" => $this->input->post("contactSubject"),
                    "c_message" => $this->input->post("contactMessage"),
                    "c_mobile" => $this->input->post("contactnumber"),
                    "created_date" => date('Y-m-d H:i:s'),
                    "delete" => 0,
                    "status" => 0,
                );
                $contact = $this->food->contact_insert($data);
                if ($contact) {
                    setAlert('success', 'Massage Successfully Posted....!');
                    redirect('contact');
                } else {
                    setAlert('success', 'Please Try Again ....!');
                    redirect('contact');
                }
            }
        } else {

            $this->load->view('common/header', $this->content);
            $this->load->view('contact', $this->content);
            $this->load->view('common/footer', $this->content);
        }
    }

    public function wishlist() {

        $this->content = array('title' => 'Wishlist');

//        $this->content['wishlist'] = $this->food->getWishlist();


        $this->load->view('common/header', $this->content);
        $this->load->view('wishlist', $this->content);
        $this->load->view('common/footer', $this->content);
    }

    public function checkout() {

        $this->content = array('title' => 'Checkout');
//        $this->content['data'] = $this->food->getProduct();
        if ($this->input->post()) {

            $session = $this->session->userdata("session_data");

            $user_id = $session->userssite_id;

            $this->form_validation->set_rules('custName', 'Name', 'required');
            $this->form_validation->set_rules('custemail', 'Brand Name', 'required');
            $this->form_validation->set_rules('mobile', 'mobile number', 'required = required|max_length[10]|min_length[10]|xss_clean');
            $this->form_validation->set_rules('pinnum', 'pin number', 'required');
            $this->form_validation->set_rules('custAddress', 'address', 'required');

            if ($this->form_validation->run() == FALSE) {
                setAlert('error', validation_errors());
            } else {



                $insertuser['fullname'] = $this->input->post('custName');
                $insertuser['email'] = $this->input->post('custemail');
                $insertuser['cust_mobile'] = $this->input->post('mobile');
                $insertuser['cust_pinno'] = $this->input->post('pinnum');
                $insertuser['cust_whatup_no'] = $this->input->post('whatapnumber');
                $insertuser['cust_address'] = $this->input->post('custAddress');


//                print_r($insertuser);die;
                $insert_id = $this->food->userinsert($insertuser);

                if ($insert_id) {


                    $pramount = $this->input->post('totalammount');
//                    $prperunitamount = implode(",", $pramount);
//                    $sumpramount = array_sum($pramount);


                    $subamount = $this->input->post('total');
                    $sumofsubamount = implode(",", $subamount);
                    $sumofsubamount = array_sum($subamount);

                    $discount = $this->input->post('discount');
//                    $discsum = implode(",", $discount);
//                    $sumofdiscount = array_sum($discount);


                    $hsnCode = $this->input->post('hsnCode');
//                    print_r($hsnCode);die;

                    $price = $this->input->post('price');
                    $prqty = $this->input->post('prqty');
                    $productDetail = $this->input->post('productDetail');


//                    print_r($productDetail);die;
                    for ($i = 0; $i < count($prqty); $i++) {
                        $summry[] = array(
                            'perunitammount' => $subamount[$i],
                            'hsnCode_id' => $hsnCode[$i],
                            'prize_perunit' => $price[$i],
                            'quantity' => $prqty[$i],
                            'productName' => $productDetail[$i],
                            'discount' => 0,
                        );
                    }

//                    print_r($summry);die;
//                    $ammount = '';
//
//                    $pramount = $this->input->post('prammount');
//                    $prperunitamount = implode(",", $pramount);
//                    $sumpramount = array_sum($pramount);
//
//                    $hsnCodesum = $this->input->post('hsnCode');
//                   
//                    $price = $this->input->post('price');
//                    $pricesum = implode(",", $price);
//
//                    $prqty = $this->input->post('prqty');
//                    $prqtysum = implode(",", $prqty);
//
//                    $productDetail = $this->input->post('productDetail');
//                    $productDetailsum = implode(",", $productDetail);
//                    
//                    $discount = $this->input->post('discount');
//                    $discsum = implode(",", $discount);


                    $insert = array(
                        'users_profile_id' => $insert_id,
                        'custname' => $this->input->post('custName'),
                        'email' => $this->input->post('custemail'),
                        'cust_mobile' => $this->input->post('mobile'),
                        'cust_pinno' => $this->input->post('pinnum'),
//                        'cust_whatup_no' => $this->input->post('whatapnumber'),
                        'cust_address' => $this->input->post('custAddress'),
                        'ramark' => $this->input->post('remark'),
                        'userssite_id' => $user_id,
                        'allorderdata' => json_encode($summry),
                        'orderammount' => $pramount,
                        'sumofsubamount' => $sumofsubamount,
                        'total_discount' => 0,
//                        'product_id' => $hsnCodesum,
//                        'productName' => $productDetailsum,
//                        'discount' => json_encode($discsum),
                        'created_date' => date('Y-m-d H:i:s'),
                        'updated_date' => date('Y-m-d H:i:s'),
                        'delete' => 0,
                        'status' => 0,
                        'modify_by' => 1,
                    );



//                    print_r($insert);die;
                    $result = $this->food->order_insert($insert);

                    if ($result) {
                        setAlert('success', 'Order successfully added');
                        redirect('home');
                    } else {
                        setAlert('error', 'Sorry Data Not inserted Please Try again !!');
//                    redirect('admin/addOrder');
                    }
                }
            }
        } else {

            $this->load->view('common/header', $this->content);
            $this->load->view('checkout', $this->content);
            $this->load->view('common/footer', $this->content);
        }
    }

    public function newsletter() {

        $this->content = array('title' => 'Checkout');

        if ($this->input->post()) {

            $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                setAlert('error', validation_errors);
//                redirect('contact');
            } else {

                $data = array(
                    "email" => $this->input->post("email"),
                    "created_date" => date('Y-m-d H:i:s'),
                    "delete" => 0,
                    "status" => 0,
                );
                $contact = $this->food->subscribe_insert($data);
                if ($contact) {
                    echo "<script>alert('setAlert('success', 'Thanks for your subscribe us !');');</script>";
//                    setAlert('success', 'Thanks for your subscribe us !');
                    redirect('home');
                } else {
                    setAlert('error', 'Please try again.');
                }
            }
        } else {


            $this->load->view('common/header', $this->content);
//        $this->load->view('checkout', $this->content);
            $this->load->view('common/footer', $this->content);
        }
    }

    public function singleproduct() {

        $this->content = array('title' => 'Single Product');
        $Id = $this->input->get('id');
//        print_r($Id);die;

        if (!empty($Id)) {

            $this->content['productdata'] = $this->food->getProductonsingle($Id);
//        print_r($this->content['productdata']);die;
            $this->content['product'] = $this->food->getProduct();
            $this->content['review'] = $this->food->getAllreview_by_id($Id);
//        print_r($this->content['review']);die;
            if ($this->input->post()) {


                $insert['review_name'] = $this->input->post('Rname');
                $insert['review_email'] = $this->input->post('remail');
                $insert['review'] = $this->input->post('review');
                $insert['rating'] = $this->input->post('rating');
                $insert['product_id'] = $Id;
                $insert['combo_product_id'] = 0;
                $insert['createdDate'] = date('Y-m-d H:i:s');
                $insert['updateDate'] = date('Y-m-d H:i:s');
                $insert['status'] = 0;
                $insert['delete'] = 0;
                $insert['aprovale'] = 0;

//                print_r($insert);die;
                $result = $this->food->review_insert($insert);

                if ($result) {
                    setAlert('success', 'Review Successfully Added');
                } else {
                    setAlert('error', 'Sorry Data Not inserted Please Try again !!');
                }
            }
            $this->load->view('common/header', $this->content);
            $this->load->view('single_product', $this->content);
            $this->load->view('common/footer', $this->content);
        } else {
            setAlert('error', 'Try again....!');
            redirect('single-product');
        }
    }

    public function cart() {

        $this->content = array('title' => 'Cart');
//        $this->content['cart'] = $this->food->getCart();


        $this->load->view('common/header', $this->content);
        $this->load->view('cart', $this->content);
        $this->load->view('common/footer', $this->content);
    }

    public function singlecomboproduct() {

        $this->content = array('title' => 'Single  Combo Product');
        $Id = $this->input->get('id');
        if (!empty($Id)) {


            $this->content['comboproductreview'] = $this->food->getAllreview_by_comboproduct_id($Id);
            $this->content['comboproductdata'] = $data = $this->food->getcomboProduct($Id);

            $this->content['productimagesdata'] = json_decode($data->combo_data);



            $this->content['product'] = $this->food->getProduct();

            if ($this->input->post()) {


                $insert['review_name'] = $this->input->post('Rname');
                $insert['review_email'] = $this->input->post('remail');
                $insert['review'] = $this->input->post('review');
                $insert['rating'] = $this->input->post('rating');
                $insert['product_id'] = 0;
                $insert['combo_product_id'] = $Id;
                $insert['createdDate'] = date('Y-m-d H:i:s');
                $insert['updateDate'] = date('Y-m-d H:i:s');
                $insert['status'] = 0;
                $insert['delete'] = 0;
                $insert['aprovale'] = 0;

//                print_r($insert);die;
                $result = $this->food->review_insert($insert);

                if ($result) {
                    setAlert('success', 'Review Successfully Added');
                } else {
                    setAlert('error', 'Sorry Data Not inserted Please Try again !!');
                }
            }
            $this->load->view('common/header', $this->content);
            $this->load->view('single_comboproduct', $this->content);
            $this->load->view('common/footer', $this->content);
        } else {
            setAlert('error', 'Try again....!');
            redirect('single-comboproduct');
        }
    }

    public function login() {

        $this->content = array('title' => 'Login');
        if ($this->input->post()) {



            $email = $this->input->post("email");
            $password = $this->input->post("pass");
            $login = $this->food->user_login($email, $password);
            if ($login) {

                $this->session->set_userdata('session_data', $login);
                redirect("my-account");
            } else {
                echo "NO login";
            }
        } else {
            $this->load->view('common/header', $this->content);
            $this->load->view('loginRegister', $this->content);
            $this->load->view('common/footer', $this->content);
        }
    }

    public function userlogout() {
        $this->session->unset_userdata("session_data");
        $this->session->sess_destroy();
        redirect("login");
    }

    public function register() {

        $this->content = array('title' => 'Register');

        if ($this->input->post()) {

            $this->form_validation->set_rules('fname', 'Full Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('cpass', 'conferm password', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                setAlert('success', validation_errors);
                redirect('register');
            } else {

                $data = array(
                    "first_name" => $this->input->post("fname"),
                    "last_name" => $this->input->post("lname"),
                    "email" => $this->input->post("email"),
                    "password" => $this->input->post("password"),
                    "created_date" => date('Y-m-d H:i:s'),
                    "delete" => 0,
                );
//                print_r($data);die;
                $insert = $this->food->usersite_insert($data);
                if ($insert) {
                    setAlert('success', 'Record Successfully inserted....!');
                    redirect('login');
                } else {
                    setAlert('success', 'Please Try Again ....!');
                    redirect('register');
                }
            }
        } else {
            $this->load->view('common/header', $this->content);
            $this->load->view('register', $this->content);
            $this->load->view('common/footer', $this->content);
        }
    }

//    public function add_to_cart(){ 
//        $data = array(
//            'product_idPrimary' => $this->input->post('product_id'), 
//            'product_name' => $this->input->post('product_name'), 
//            'product_price' => $this->input->post('product_price'), 
//            'product_image' => $this->input->post('product_price'), 
//            'product_qty' => $this->input->post('quantity'), 
//        );
//        $this->food->cart_insert($data);
////        echo $this->show_cart(); 
//    }

    public function add_to_cart() {
        if ($this->input->is_ajax_request()) {

            $session = $this->session->userdata("session_data");

//            $user_id = $session->userssite_id;
            if (!empty($session)) {

                $user_id = $session->userssite_id;
                $cheklogin = 2;
            } else {

                $user_id = 0;
                $cheklogin = 1;
            }
//            print_r($user_id);die;
            $data = array(
                'product_id' => $this->input->post('product_id'),
                'product_name' => $this->input->post('product_name'),
                'product_price' => $this->input->post('product_price'),
                'product_qty' => $this->input->post('product_qty'),
                'userssite_id' => $user_id,
                'created_date' => date('Y-m-d H:i:s'),
                'updated_date' => date('Y-m-d H:i:s'),
                'delete' => 0,
                'ip_address' => $_SERVER['REMOTE_ADDR'],
                'chek_login' => $cheklogin
            );

//            $cid = $this->input->post('id');
            if ($data != "") {
                $result = $this->food->cart_insert($data);
                if ($result) {

                    $addcartpage = $this->load->view('ajaxaddtocart');

                    print_r($addcartpage);
                } else {
                    echo '0';
                }
            } else {
                echo '0';
            }
        } else {
            echo '0';
        }
    }

    public function delete_cart() {
        if ($this->input->is_ajax_request()) {

            $cid = $this->input->post('row_id');
            if ($cid != "") {
                $result = $this->food->deletecart($cid);
                if ($result) {
                    echo json_encode($result);
                } else {
                    echo '0';
                }
            } else {
                echo '0';
            }
        } else {
            echo '0';
        }
    }

    public function edit_cart() {
        if ($this->input->is_ajax_request()) {

            $cid = $this->input->post('cartid');

            if ($cid != "") {

                $data = array(
                    'product_qty' => $this->input->post('product_pqty'),
                    'updated_date' => date('Y-m-d H:i:s'),
                );

//            print_r($data);die;
                $result = $this->food->edit_cart_data($cid, $data);
                if ($result) {
                    echo json_encode($result);
                } else {
                    echo '0';
                }
            } else {
                echo '0';
            }
        } else {
            echo '0';
        }
    }
    
    
    public function aboutus(){
        
          $this->content = array('title' => 'About us');
        
          $this->load->view('common/header', $this->content);
          $this->load->view('aboutus', $this->content);
          $this->load->view('common/footer', $this->content);
        
        
    }
    
    
    public function delivery_Information(){
        
          $this->content = array('title' => 'Delivery Information');
        
          $this->load->view('common/header', $this->content);
          $this->load->view('deliveryInformation', $this->content);
          $this->load->view('common/footer', $this->content);
        
        
    }
    
    public function privacy_Policy(){
        
          $this->content = array('title' => 'Privacy Policy');
        
          $this->load->view('common/header', $this->content);
          $this->load->view('privacyPolicy', $this->content);
          $this->load->view('common/footer', $this->content);
        
        
    }
    
    public function termscondition(){
        
          $this->content = array('title' => 'Terms & Condition');
        
          $this->load->view('common/header', $this->content);
          $this->load->view('termscondition', $this->content);
          $this->load->view('common/footer', $this->content);
        
        
    }
    
    public function news(){
        
          $this->content = array('title' => 'News');
        
          $this->load->view('common/header', $this->content);
          $this->load->view('news', $this->content);
          $this->load->view('common/footer', $this->content);
        
        
    }
    
    public function homedetail(){
        
          $this->content = array('title' => 'Home');
        
          $this->load->view('common/header', $this->content);
          $this->load->view('homedetail', $this->content);
          $this->load->view('common/footer', $this->content);
        
        
    }
    
    public function Process(){
        
          $this->content = array('title' => 'Process');
        
          $this->load->view('common/header', $this->content);
          $this->load->view('process', $this->content);
          $this->load->view('common/footer', $this->content);
        
        
    }
    
    public function productsdetail(){
        
          $this->content = array('title' => 'product');
        
          $this->load->view('common/header', $this->content);
          $this->load->view('productdetail', $this->content);
          $this->load->view('common/footer', $this->content);
        
        
    }
    
    

//    public function edit_cart() {
//
//        $this->content = array('title' => 'Edit Cart ');
//
//        $tagId = $this->input->get('id');
////        print_r($tagId);die;
//        if ($this->input->post() && $tagId) {
//            if ($tagId) {
//
//                $insert['product_qty'] = $this->input->post("prqty");
//                $insert['updated_date'] = date('Y-m-d H:i:s');
////                print_r($insert);die;
//                $result = $this->food->edit_cart_data($insert, $tagId);
//                if ($result) {
//                    setAlert('success', 'Cart Successfully Updated!');
//                    redirect('cart');
//                }
//            }
//        }
//        $this->content['result'] = $this->keyword->get_tagdata_by_id($tagId);
//        $this->load->view('common/header', $this->content);
//        $this->load->view('cart', $this->content);
//        $this->load->view('common/footer', $this->content);
//    }
//    

    public function add_to_wishlist() {
        if ($this->input->is_ajax_request()) {

            $session = $this->session->userdata("session_data");

//            $user_id = $session->userssite_id;
            if (!empty($session)) {

                $user_id = $session->userssite_id;
                $cheklogin = 2;
            } else {

                $user_id = 0;
                $cheklogin = 1;
            }



            $data = array(
                'product_id' => $this->input->post('product_id'),
                'product_name' => $this->input->post('product_name'),
                'product_price' => $this->input->post('product_price'),
                'userssite_id' => $user_id,
                'delete' => 0,
                'created_date' => date('Y-m-d H:i:s'),
                'updated_date' => date('Y-m-d H:i:s'),
                'ip_address' => $_SERVER['REMOTE_ADDR'],
                'chek_login' => $cheklogin
            );

//            $cid = $this->input->post('id');
            if ($data != "") {
                $result = $this->food->wishlist_insert($data);
                if ($result) {
                    echo json_encode($result);
                } else {
                    echo '0';
                }
            } else {
                echo '0';
            }
        } else {
            echo '0';
        }
    }

    public function delete_wishlist() {
        if ($this->input->is_ajax_request()) {

            $cid = $this->input->post('row_id');
            if ($cid != "") {
                $result = $this->food->deletewishlist($cid);
                if ($result) {
                    echo json_encode($result);
                } else {
                    echo '0';
                }
            } else {
                echo '0';
            }
        } else {
            echo '0';
        }
    }

    public function get_product_by_id() {
        if ($this->input->is_ajax_request()) {

            $cid = $this->input->post('product_id');
//          print_r($cid);die;
            if ($cid != "") {
                $this->content['data'] = $result = $this->food->getproductbyid($cid);
                if ($result) {

                    $productdata = $this->load->view('ajax/sigelproductajax', $this->content);

                    print_r($productdata);
//                    print_r(json_encode($result));
                } else {
                    echo '0';
                }
            } else {
                echo '0';
            }
        } else {
            echo '0';
        }
    }

    public function sgetSerchproductdata() {
        if ($this->input->is_ajax_request()) {
            if ($this->input->post()) {
                $name = $this->input->post('name');
//                $state = $this->input->post('state');
//                $city = $this->input->post('city');
//                $fuel = $this->input->post('fuel');

                $data = $this->food->getserchProduct('', $name, $state, $city, $fuel);

                if ($data) {
                    echo json_encode($data);
                } else {
                    echo 0;
                }
            } else {
                echo 0;
            }
        } else {
            echo 0;
        }
    }

    public function getSerchproductdata() {

        if ($this->input->post()) {

            $name = $this->input->post('search');

//             print_r($name);die;
            $result = $this->food->getserchProduct($name);
            print_r($result);
            die;
            if ($result) {
                setAlert('success', 'Product successfully added');
//                redirect('admin/subtype');
            } else {
                setAlert('error', 'Sorry Data Not inserted Please Try again !!');
//                redirect(site_url('admin/subtype'));
            }
        }
    }

}
