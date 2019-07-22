<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ajax extends CI_Controller {

// set user role and redirectiton goes here
    function __construct() {
        parent::__construct();
        ob_start();
        
        $this->content = array('vars' => array());
      
        $this->load->model('admin/Stock_model', 'stock');
        $this->load->model('Common_model', 'common');
        $this->load->model('admin/product_model', 'product');
        $this->load->model('Ecommerce_model', 'ecommerce');
        $this->load->model('admin/subtype_model', 'subtype');
        $this->load->model('admin/type_model', 'type');
    }

    public function getStateByCountry() {
        if ($this->input->is_ajax_request()) {
            $cid = $this->input->post('id');
            if ($cid != "") {
                $result = $this->common->getState('', $cid);
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

     public function getDistrictByState() {
        if ($this->input->is_ajax_request()) {
            $sid = $this->input->post('id');
            if ($sid != "") {
                $result = $this->common->getDistrict('', $sid);
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
    
     public function getCityByDistrict() {
        if ($this->input->is_ajax_request()) {
            $did = $this->input->post('id');
            if ($did != "") {
                $result = $this->common->getCity('', $did);
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
   public function getSubcategoryByCategory() {
        if ($this->input->is_ajax_request()) {
            $cid = $this->input->post('id');
            if ($cid != "") {
                $result = $this->ecommerce->getSubcategory('', $cid);
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

   public function getSubtypeByType() {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
//            print_r($id);die;
            if ($id != "") {
                $result = $this->subtype->getSubtype('', $id);
//                print_r($result);die;
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
    
       public function getSubcategoryByCate() {
        if ($this->input->is_ajax_request()) {
            $cid = $this->input->post('id');
            if ($cid != "") {
                $result = $this->ecommerce->getSubcategory('', $cid);
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
       public function getSubtypeByT() {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
//            print_r($id);die;
            if ($id != "") {
                $result = $this->subtype->getSubt('', $id);
//                print_r($result);die;
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
    
       public function getProductBysubCategory() {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            if ($id != "") {
//              
                $result = $this->product->getProductbyajax('', $id);
              
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
    
     public function getBranchbyCompny() {
        if ($this->input->is_ajax_request()) {
            $cid = $this->input->post('id');
            
            if ($cid != "") {
                $result = $this->common->getBranchbyCompny($cid);
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
    
       public function getStockdata() {
 
        if ($this->input->is_ajax_request()) {   
            $pid = $this->input->post('id');
         
     
          if ($pid != "") {
                $result = $this->stock->getpricebystock($pid);
              
            
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
}