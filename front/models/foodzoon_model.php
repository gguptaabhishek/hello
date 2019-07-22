<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Foodzoon_model extends CI_Model {

    function __construct() {
        parent::__construct();
//        date_default_timezone_set('Asia/Kolkata');
        
        $this->banner = "banner";
        $this->category = "z_m_category";
        $this->unit = "unit";
        $this->type = "type";
        $this->subtype = "subtype";
        $this->location = "location";
        $this->subcategory = "subcategory";
        $this->users_profile ="users_profile";
        $this->wishlist = "wishlist";
        $this->contactus = "contactus";
        $this->product_detail = "z_m_product_details";
        $this->review ="review";
        
        $this->blog ="blog";
        $this->blog_comment ="blog_comment";
        $this->comboproduct = "comboproduct";
        $this->branch ="branch";
        $this->order = 'order';
        $this->users = 'users';
        $this->cart = "cart";
        $this->tags = "tags";
        $this->brand = "z_m_brand";
        $this->product = "z_m_product";
        $this->user_site ="user_site";
         $this->subscribe ="subscribe";
         $this->blog_comment ="blog_comment";
    }
    
    
    public function getBanner($id = "") {
        if ($id)
            $this->db->where($this->banner . ".id", $id);

        $this->db->select($this->banner . '.*');
        $this->db->from($this->banner);
        $query = $this->db->get();

        $result = $query->result();
        if ($result)
            return $result;
        else
            return FALSE;
    }
    
    
     public function getAllCategory() {
    
//         $this->db->select($this->users . '.username');
        $this->db->select($this->category . '.*');
        $this->db->from($this->category);
//         $this->db->join($this->users, $this->users . '.users_id = ' . $this->category . '.updateby', 'left');
       
        
        $this->db->where($this->category . '.delete', '0');
        
        $getCategory = $this->db->get();
      
        if ($getCategory->num_rows() > 0) {
            return $getCategory->result();
        } else {
            return FALSE;
        }
        
    }
    
    
    public function getAllsubCategory() {
    
//         $this->db->select($this->users . '.username');
        $this->db->select($this->subcategory . '.*');
        $this->db->from($this->subcategory);
//         $this->db->join($this->users, $this->users . '.users_id = ' . $this->category . '.updateby', 'left');
       
        
        $this->db->where($this->subcategory . '.delete', '0');
        
        $getCategory = $this->db->get();
      
        if ($getCategory->num_rows() > 0) {
            return $getCategory->result();
        } else {
            return FALSE;
        }
        
    }
    
    
    public function getProduct($id = "", $sid = "",$serch="",$cid="",$startprice="",$lastprice="" ,$newess="",$lowtohigh ="",$hightolow="",$limit="" , $orderbydesc="" ,$start="" ,$limitforpage="") {
       
        $this->db->select($this->product . '.*');

        $this->db->select($this->category . '.categoryName');
        $this->db->select($this->location . '.locationName');
        $this->db->select($this->subcategory . '.subcategory_name');
        $this->db->select($this->type . '.typeName');
        $this->db->select($this->subtype . '.subtype_name');
        $this->db->select($this->brand . '.brandName');
//        $this->db->select($this->review . '.rating');

        $this->db->from($this->product);

        $this->db->join($this->category, $this->category . '.categoryId =.' . $this->product . '.categoryId', 'left');
        $this->db->join($this->location, $this->location . '.location_id =.' . $this->product . '.location_id', 'left');
//         $this->db->join($this->review, $this->review . '.product_id=' . $this->product . '.productId', 'left');
        $this->db->join($this->subcategory, $this->subcategory . '.subcategory_id =.' . $this->product . '.subcategoryId', 'left');
        $this->db->join($this->type, $this->type . '.type_id =.' . $this->product . '.typeId', 'left');
        $this->db->join($this->subtype, $this->subtype . '.subtypeId =.' . $this->product . '.subtypeId', 'left');

        $this->db->join($this->brand, $this->brand . '.brandId =.' . $this->product . '.brandId', 'left');

        if ($id) {


            $this->db->where($this->product . '.productId', $id);
        }
        
        if ($sid) {

            $this->db->where($this->product . '.subcategoryId', $sid);
        }
        
        if ($cid) {

            $this->db->where($this->product . '.categoryId', $cid);
        }
        
        if ($startprice) {

            $this->db->where($this->product . '.price >=', $startprice);
            $this->db->order_by($this->product . '.price', 'asc');
            
        }
        
         if ($lastprice) {

            $this->db->where($this->product . '.price <=', $lastprice);
             $this->db->order_by($this->product . '.price', 'asc');
        }
        
        if($serch){
            $this->db->like($this->product . '.productName', $serch);
            $this->db->or_like($this->category . '.categoryName', $serch);
        }
        
        if ($lowtohigh) {

            $this->db->order_by($this->product . '.price', 'asc');
        }
        
        if ($hightolow) {

            $this->db->order_by($this->product . '.price', 'desc');
        }
        
         if ($newess) {

            $this->db->order_by($this->product . '.productId', 'desc');
        }

        
        if ($limit){
            $this->db->limit($limit, 0);
            
        }
        
        
        
        if ($orderbydesc){
            $this->db->limit($orderbydesc , 0);
            $this->db->order_by($this->product . '.productId', 'desc');
        }
        
        if($limitforpage){
           $this->db->limit($limitforpage , $start);
        }
        
        $this->db->where($this->product . '.delete', 0);


        $query = $this->db->get();


        if ($query) {

            if ($id) {
                $output = $query->row();
            } else {
                $output = $query->result();
            }

            return $output;
        } else {
            return FALSE;
        }
    }
    
    
    public function product_num_rows() {
        $this->db->select('*');
        $this->db->from($this->product);
        $this->db->where('delete', 0);
        $info = $this->db->get();
        return $info->num_rows();
    }
    
    
    
    public function getAll_product_by_catfront($cid = '',$id="") {
        
      
        $this->db->select($this->product . '.*');
        $this->db->select($this->category . '.categoryImage');
        $this->db->select($this->category . '.categoryName');
        $this->db->from($this->product);
        $this->db->join($this->category, $this->category . '.categoryId=' . $this->product . '.categoryId', 'left');
        $this->db->where($this->product . '.delete', '0');
        
        if($cid){
        
        $this->db->where($this->product . '.categoryId', $cid);
        
        }
       
        $sql = $this->db->get();

        if ($sql->num_rows() > 0) {
            if (!empty($id)) {
                return $sql->row();
            } else {
                return $sql->result();
            }
        } else {
            return FALSE;
        }
    }
    
     
    public function getAll_product_by_rating($id = '') {

       
        $this->db->select($this->product . '.*');
        $this->db->select($this->category . '.categoryImage');
        $this->db->select($this->category . '.categoryName');
        $this->db->select($this->review . '.rating');
        $this->db->from($this->product);
        $this->db->limit(5);
        $this->db->join($this->category, $this->category . '.categoryId=' . $this->product . '.categoryId', 'left');
        $this->db->join($this->review, $this->review . '.product_id=' . $this->product . '.productId', 'left');
        $this->db->where($this->product . '.delete', '0');
        $this->db->order_by($this->review . '.rating', 'desc');
//        $this->db->where($this->product . '.categoryId', '5');
        if (!empty($id)) {
            $this->db->where($this->product . '.productId', '');
        }
        $sql = $this->db->get();

        if ($sql->num_rows() > 0) {
            if (!empty($id)) {
                return $sql->row();
            } else {
                return $sql->result();
            }
        } else {
            return FALSE;
        }
    }
    
    
    public function contact_insert($data) {
        if (!empty($data)) {
            $insert = $this->db->insert($this->contactus, $data);
//            $last_id = $this->db->insert_id();
            return $insert;
        } else {
            return FALSE;
        }
    }
    
    
     public function getAllreview_by_id($blogId) {
        $this->db->select($this->review . '.*');
//        $this->db->select($this->employee . '.username');
        $this->db->from($this->review);
//        $this->db->join($this->employee, $this->employee . '.id =' . $this->blog . '.updatedBY', 'left');

        $this->db->where($this->review . '.delete', 0);
        $this->db->where($this->review . '.aprovale', 1);
        
        $this->db->where('product_id', $blogId);
        $sql = $this->db->get();

        if ($sql->num_rows()) {
            return $sql->result();
        } else {
            return FALSE;
        }
    }
    
    
     public function getAllreview_by_comboproduct_id($blogId) {
        $this->db->select($this->review . '.*');
//        $this->db->select($this->employee . '.username');
        $this->db->from($this->review);
//        $this->db->join($this->employee, $this->employee . '.id =' . $this->blog . '.updatedBY', 'left');

        $this->db->where($this->review . '.delete', 0);
        $this->db->where($this->review . '.aprovale', 1);
        
        $this->db->where('combo_product_id', $blogId);
        $sql = $this->db->get();

        if ($sql->num_rows()) {
            return $sql->result();
        } else {
            return FALSE;
        }
    }
    
    
     public function review_insert($data) {
        if (!empty($data)) {
            $insert = $this->db->insert($this->review, $data);
//            $last_id = $this->db->insert_id();
            return $insert;
        } else {
            return FALSE;
        }
    }
    
    
    public function getAllBlog($serch="", $tagid="",$start="",$limit="") {
        $this->db->select($this->blog . '.*');
//        $this->db->select($this->employee . '.username');
        $this->db->from($this->blog);
//        $this->db->join($this->employee, $this->employee . '.id =' . $this->blog . '.updatedBY', 'left');
//        $this->db->limit(3);
//        $this->db->order_by('blogId', 'DESC');
//        $this->db->join($this->category, $this->category . '.categoryId =.' . $this->product . '.categoryId', 'left');
        if($serch){
            $this->db->like($this->blog . '.blogTitleHindi', $serch);
            $this->db->or_like($this->blog . '.blogTitleEnglish', $serch);
        }
        
         
        if ($tagid) {

            $this->db->like($this->blog . '.tags', $tagid);
        }
        
        if($limit){
           $this->db->limit($limit , $start);
        }
        
        $this->db->where($this->blog . '.delete', 0);

        $sql = $this->db->get();

        if ($sql->num_rows()) {
            return $sql->result();
        } else {
            return FALSE;
        }
    }
    
    
    
     public function getAllBlog_by_limit() {
        $this->db->select($this->blog . '.*');
//        $this->db->select($this->employee . '.username');
        $this->db->from($this->blog);
//        $this->db->join($this->employee, $this->employee . '.id =' . $this->blog . '.updatedBY', 'left');
        $this->db->limit(3);
        $this->db->order_by('blogId', 'DESC');
        $this->db->where($this->blog . '.delete', 0);

        $sql = $this->db->get();

        if ($sql->num_rows()) {
            return $sql->result();
        } else {
            return FALSE;
        }
    }
    
    
    
     public function getAllHinglishBlog($blogId) {
        $this->db->select($this->blog . '.*');
//        $this->db->select($this->employee . '.username');
        $this->db->from($this->blog);
//        $this->db->join($this->employee, $this->employee . '.id =' . $this->blog . '.updatedBY', 'left');

        $this->db->where($this->blog . '.delete', 0);
        $this->db->where('blogId', $blogId);
        $sql = $this->db->get();

        if ($sql->num_rows()) {
            return $sql->row();
        } else {
            return FALSE;
        }
    }
    
    
    public function getAllTags() {
        $sql = $this->db->select('*')
                ->from($this->tags)
                ->where('delete', 0)
                ->get();
        if ($sql->num_rows()) {
            $result = $sql->result();
            return $result;
        } else {
            return FALSE;
        }
    }
    
    
     public function getAllcomment_by_limit($id) {
        $this->db->select($this->blog_comment . '.*');
//        $this->db->select($this->employee . '.username');
        $this->db->from($this->blog_comment);
//        $this->db->join($this->employee, $this->employee . '.id =' . $this->blog . '.updatedBY', 'left');
        $this->db->limit(4);
        $this->db->order_by('comment_id', 'DESC');
        $this->db->where($this->blog_comment . '.delete', 0);
        $this->db->where($this->blog_comment . '.aprovale', 1);
        $this->db->where('blog_id', $id);

        $sql = $this->db->get();

        if ($sql->num_rows()) {
            return $sql->result();
        } else {
            return FALSE;
        }
    }
    
    
    
    public function user_login($email, $password) {
        if (!empty($email) && !empty($password)) {
            $where = array(
                'email' => $email,
                'password' => $password,
                'delete' => 0,
            );
            $sql = $this->db->select("*")
                    ->from($this->user_site)
                    ->where($where)
                    ->get();
            $result = $sql->row();
            return $result;
        } else {
            return FALSE;
        }
    }
    
    
    public function usersite_insert($data) {
        if (!empty($data)) {
            $insert = $this->db->insert($this->user_site, $data);
//            $last_id = $this->db->insert_id();
            return $insert;
        } else {
            return FALSE;
        }
    }
    
    
     public function getusersite($id = "") {
        if ($id)
            $this->db->where($this->user_site . ".id", $id);

        $this->db->select($this->user_site . '.*');
        $this->db->from($this->user_site);
        $query = $this->db->get();

        $result = $query->result();
        if ($result)
            return $result;
        else
            return FALSE;
    }
    
    
    public function cart_insert($data) {
        if (!empty($data)) {
            $insert = $this->db->insert($this->cart, $data);
//            $last_id = $this->db->insert_id();
            return $insert;
        } else {
            return FALSE;
        }
    }
    
    
    
    
    
    public function deletecart($Id) {
        if (!empty($Id)) {
            $this->db->set('delete', 1);
            $this->db->where('cart_id', $Id);
            $this->db->update($this->cart);
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    
    public function getCart($id = "", $ip = "", $cheklogin ="") {
        $this->db->select($this->cart . '.*');
        $this->db->select($this->product . '.productImage');
        $this->db->from($this->cart);
        $this->db->join($this->product, $this->product . '.productId = ' . $this->cart . '.product_id', 'left');
        $this->db->where($this->cart . '.delete', 0);
        if ($id){
            $this->db->where($this->cart . ".userssite_id", $id);
        }
         
        if ($ip){
            $this->db->where($this->cart . ".ip_address", $ip);
        }
        
        if ($cheklogin){
            $this->db->where($this->cart . ".chek_login", $cheklogin);
        }
       
        $query = $this->db->get();

        $result = $query->result();
        if ($result)
            return $result;
        else
            return FALSE;
    }
    
    public function getTagById($tag_data) {
        if (!empty($tag_data)) {
            $sql = $this->db->select('*')
                    ->from($this->tags)
                    ->where('id', $tag_data)
                    ->get();
            $result = $sql->row();
            return $result;
        } else {
            return FALSE;
        }
    }
    
    public function wishlist_insert($data) {
        if (!empty($data)) {
            $insert = $this->db->insert($this->wishlist, $data);
//            $last_id = $this->db->insert_id();
            return $insert;
        } else {
            return FALSE;
        }
    }
    
    
    public function getWishlist($id = "" ,$ip = "", $cheklogin= "" ) {
        $this->db->select($this->wishlist . '.*');
        $this->db->select($this->product . '.productImage');
        $this->db->from($this->wishlist);
        $this->db->join($this->product, $this->product . '.productId = ' . $this->wishlist . '.product_id', 'left');
        $this->db->where($this->wishlist . '.delete', 0);
        if ($id){
            $this->db->where($this->wishlist . ".userssite_id", $id);
        }
        
        if ($ip){
            $this->db->where($this->wishlist . ".ip_address", $ip);
        }
        
        if ($cheklogin){
            $this->db->where($this->wishlist . ".chek_login", $cheklogin);
        }
        
       
        $query = $this->db->get();

        $result = $query->result();
        if ($result)
            return $result;
        else
            return FALSE;
    }
    
    
     public function deletewishlist($Id) {
        if (!empty($Id)) {
            $this->db->set('delete', 1);
            $this->db->where('w_id', $Id);
            $this->db->update($this->wishlist);
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    
    
    public function getAllCproduct($id = "",$limit="") {
    
//         $this->db->select($this->users . '.username');
        $this->db->select($this->comboproduct . '.*');
        $this->db->from($this->comboproduct);
//         $this->db->join($this->users, $this->users . '.users_id = ' . $this->category . '.updateby', 'left');
       
        
        $this->db->where($this->comboproduct . '.com_delete', '0');
        if ($id){
            $this->db->where($this->comboproduct . ".com_id", $id);
        }
        
         if ($limit){
            $this->db->limit($limit);
        }
        
         $this->db->order_by($this->comboproduct . ".com_id", 'desc');
        
        $getCategory = $this->db->get();
      
        if ($getCategory->num_rows() > 0) {
            return $getCategory->result();
        } else {
            return FALSE;
        }
        
    }
    
    public function subscribe_insert($data) {
        if (!empty($data)) {
            $insert = $this->db->insert($this->subscribe, $data);
//            $last_id = $this->db->insert_id();
            return $insert;
        } else {
            return FALSE;
        }
    }
    
    
    
    public function order_insert($data) {
        if (!empty($data)) {
            $insert = $this->db->insert($this->order, $data);
//            $last_id = $this->db->insert_id();
            return $insert;
        } else {
            return FALSE;
        }
    }
    
    
     public function userinsert($insertuser) {

        if (!empty($insertuser)) {
            $insert = $this->db->insert($this->users_profile, $insertuser);
            $insert_id = $this->db->insert_id();
            return $insert_id;
        } else {
            return FALSE;
        }
    }
    
    
    
    
     public function comment_insert($data) {
        if (!empty($data)) {
            $insert = $this->db->insert($this->blog_comment, $data);
//            $last_id = $this->db->insert_id();
            return $insert;
        } else {
            return FALSE;
        }
    }
    
    
    public function edit_cart_data( $tag_id , $data) {
        if (!empty($data) && !empty($tag_id)) {
            $sql = $this->db->where('cart_id', $tag_id)
                    ->update($this->cart, $data);
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    
    
    
    public function getSubcategory($id="",$cid="") {

        $this->db->select($this->subcategory . '.*');
        $this->db->select($this->category . '.categoryName');
        $this->db->from($this->subcategory);
        $this->db->join($this->category, $this->category . '.categoryId = ' . $this->subcategory . '.category_id', 'left');
        
        
        if ($id) {
            $this->db->where($this->subcategory . ".subcategory_id", $id);
        }
        if ($cid) {
            $this->db->where($this->subcategory . ".category_id", $cid);
        }

        $query = $this->db->get();

        if ($query) {
           
            $result = $query->result();
            
            return $result;
        } else {
            return FALSE;
        }
    }
    
    
    
    public function getcomboProduct($id = "") {

        $this->db->select($this->comboproduct . '.*');
        $this->db->from($this->comboproduct);
        $this->db->select($this->review . '.rating');
        $this->db->join($this->review, $this->review . '.combo_product_id=' . $this->comboproduct . '.com_id', 'left');
        if ($id) {

            $this->db->where($this->comboproduct . '.com_id', $id);
        }
        
        $this->db->where($this->comboproduct . '.com_delete', 0);
        $query = $this->db->get();


        if ($query) {

            if ($id) {
                $output = $query->row();
            } else {
                $output = $query->result();
            }

            return $output;
        } else {
            return FALSE;
        }
    }
    
    public function getproductbyid($mobilenum= "") {

        $this->db->select($this->product . '.*');
        $this->db->from($this->product);
        if ($mobilenum) {

        $this->db->where($this->product .'.productId', $mobilenum);
        }
        $this->db->where($this->product .'.delete', 0);
        $query = $this->db->get();

//        print_r($query);die;
        if ($query) {

            if ($mobilenum) {
//                $output = $query->result();
                $output = $query->row();
            } else {
                $output = $query->result();
            }

            return $output;
        } else {
            return FALSE;
        }
    }
    
    
    
    public function getserchProduct($id = "", $name = "", $state = "", $city = "", $fuel = "") {
        $this->db->select('*');
        $this->db->from($this->product);
        $this->db->where('delete', 0);
        $this->db->where('status', 0);

        if ($name) {
            $this->db->like('productName', $name);
        }

//        if ($state) {
//            $this->db->like('state', $state);
//        }
//
//        if ($city) {
//            $this->db->like('city', $city);
//        }
//
//        if ($fuel) {
//            $this->db->like('fuel_type', $fuel);
//        }

        $sql = $this->db->get();

        if ($sql->num_rows() > 0) {
            $result = $sql->result();
            return $result;
        } else {
            return false;
        }
    }
    
    
     
     public function getAllBrand() {

        $this->db->select($this->subcategory . '.subcategory_name');
        $this->db->select($this->brand . '.*');
        $this->db->from($this->brand);
        $this->db->join($this->subcategory, $this->subcategory . '.subcategory_id =' . $this->brand . '.subcategoryId', 'left');
        $this->db->where($this->brand . '.delete', '0');
         $this->db->order_by($this->brand . '.brandPriority', 'ASC');

        $query = $this->db->get();

        if ($query) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    
    
    public function getProductonsingle($id = "", $sid = "") {
       
        $this->db->select($this->product . '.*');

        $this->db->select($this->category . '.categoryName');
        $this->db->select($this->location . '.locationName');
        $this->db->select($this->subcategory . '.subcategory_name');
        $this->db->select($this->type . '.typeName');
        $this->db->select($this->subtype . '.subtype_name');
        $this->db->select($this->brand . '.brandName');
        $this->db->select($this->review . '.rating');

        $this->db->from($this->product);

        $this->db->join($this->category, $this->category . '.categoryId =.' . $this->product . '.categoryId', 'left');
        $this->db->join($this->location, $this->location . '.location_id =.' . $this->product . '.location_id', 'left');
         $this->db->join($this->review, $this->review . '.product_id=' . $this->product . '.productId', 'left');
        $this->db->join($this->subcategory, $this->subcategory . '.subcategory_id =.' . $this->product . '.subcategoryId', 'left');
        $this->db->join($this->type, $this->type . '.type_id =.' . $this->product . '.typeId', 'left');
        $this->db->join($this->subtype, $this->subtype . '.subtypeId =.' . $this->product . '.subtypeId', 'left');

        $this->db->join($this->brand, $this->brand . '.brandId =.' . $this->product . '.brandId', 'left');

        if ($id) {


            $this->db->where($this->product . '.productId', $id);
        }
        
        if ($sid) {

            $this->db->where($this->product . '.subcategoryId', $sid);
        }
        
         $this->db->where($this->product . '.delete', 0);


        $query = $this->db->get();


        if ($query) {

            if ($id) {
                $output = $query->row();
            } else {
                $output = $query->result();
            }

            return $output;
        } else {
            return FALSE;
        }
    }
    
    
    
    
    
    
    
 
    
   
}

