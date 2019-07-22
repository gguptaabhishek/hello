<?php

class Master extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!is_valid(1)) {
            redirect(site_url());
        }
        
        $user = $this->session->userdata('LOGGED_USER');
        $this->loginId = $user->users_id;
        $this->content = array('title' => 'Plan');
        
    }
    
     /* Company */

    public function addCompany() {

        $postData = $this->input->post();
        if (!empty($postData)) {
            $this->form_validation->set_rules('companyName', 'Company Name', 'required');
            $this->form_validation->set_rules('companyPrefix', 'Company Prefix', 'required');
            $this->form_validation->set_rules('companyAddress', 'Company Name', 'required');
            $this->form_validation->set_rules('email', 'Company Email', 'required|valid_email||is_unique[company.email]');
            $this->form_validation->set_rules('contact', 'Company Contact', 'required|numeric');
            $this->form_validation->set_rules('companyWeb', 'Company Webside', 'required');
            $this->form_validation->set_rules('hrPolicy', 'Hr Policy', 'required');
            $this->form_validation->set_rules('companyPolicy', 'Company Policy', 'required');

            if ($this->form_validation->run() == FALSE) {
                setAlert('error', validation_errors());
            } else {
                $headerImage = $footerImage = '';
                if ($_FILES['companyHeader']['size'] > 0) {
                    $image = upload_file('companyHeader', './public/images/', 'gif|jpg|png|jpeg', '5896899', '2400', '1850');
                    if ($image) {
                        $imagePath = explode('public/images/', $image['full_path']);
                        $headerImage = $imagePath[1];
                    }
                }
                if ($_FILES['companyFooter']['size'] > 0) {
                    $image = upload_file('companyFooter', './public/images/', 'gif|jpg|png|jpeg', '5896899', '2400', '1850');
                    if ($image) {
                        $imagePath = explode('public/images/', $image['full_path']);
                        $footerImage = $imagePath[1];
                    }
                }
                  $companyLogo = '';
                if ($_FILES['companyLogo']['size'] > 0) {
                    $image = upload_file('companyLogo', './public/images/', 'gif|jpg|png|jpeg', '5896899', '2400', '1850');
                    if ($image) {
                        $imagePath = explode('public/images/', $image['full_path']);
                        $companyLogo = $imagePath[1];
                    }
                }

                $addCompany['companyName'] = $this->input->post('companyName');
                $addCompany['companyPrefix'] = $this->input->post('companyPrefix');
                $addCompany['companyAddress'] = $this->input->post('companyAddress');
                $addCompany['email'] = $this->input->post('email');
                $addCompany['contact'] = $this->input->post('contact');
                $addCompany['companyWeb'] = $this->input->post('companyWeb');
                $addCompany['companyHeader'] = $headerImage;
                $addCompany['companyFooter'] = $footerImage;
//                $addCompany['hrPolicy'] = $this->input->post('hrPolicy');
//                $addCompany['companyPolicy'] = $this->input->post('companyPolicy');
                $addCompany['updateBy'] = $this->userName;
                $addCompany['createdDate'] = date('Y-m-d H:i:s');
                $addCompany['companyGST'] = $this->input->post('companyGST');
                $addCompany['companylogo'] = $companyLogo;

                $result = $this->common->addCompany($addCompany);

                if ($result) {
                    setAlert('success', 'Records successfully added');
                    redirect('dashboard/getAllCompany');
                }
            }
        }

        $this->load->view('common/header', $this->content);
        $this->load->view('company/addCompany', $this->content);
        $this->load->view('common/footer', $this->content);
    }

    public function getAllCompany() {

        $this->content['company'] = $this->common->getAllCompany();
        //echo '<pre>'; print_r($this->content['company']); die;
        $this->load->view('common/header', $this->content);
        $this->load->view('company/company', $this->content);
        $this->load->view('common/footer', $this->content);
    }

    public function updateCompany() {

        $companyId = $this->input->get('id');

        $updateData = $this->input->post();
        if (!empty($updateData)) {
            $this->form_validation->set_rules('companyName', 'Company Name', 'required');
            // $this->form_validation->set_rules('companyPrefix', 'Company Prefix', 'required');
            //  $this->form_validation->set_rules('companyAddress', 'Company Name', 'required');
            //   $this->form_validation->set_rules('contact', 'Company Contact', 'required|numeric');
            // $this->form_validation->set_rules('companyWeb', 'Company Webside', 'required');
            //   $this->form_validation->set_rules('hrPolicy', 'Hr Policy', 'required');
            //    $this->form_validation->set_rules('companyPolicy', 'Company Policy', 'required');

            if ($this->form_validation->run() == FALSE) {
                setAlert('error', validation_errors());
            } else {

                if ($_FILES['companyHeader']['size'] > 0) {
                    $image = upload_file('companyHeader', './public/images/', 'gif|jpg|png', '5896899', '2400', '1850');
                    if ($image) {
                        $imagePath = explode('public/images/', $image['full_path']);
                        $headerImage = $imagePath[1];
                    }
                }

                if ($_FILES['companyFooter']['size'] > 0) {
                    $image = upload_file('companyFooter', './public/images/', 'gif|jpg|png', '5896899', '2400', '1850');
                    if ($image) {
                        $imagePath = explode('public/images/', $image['full_path']);
                        $footerImage = $imagePath[1];
                    }
                }
                
                   $companyLogo = '';
                if ($_FILES['companyLogo']['size'] > 0) {
                    $image = upload_file('companyLogo', './public/images/', 'gif|jpg|png', '5896899', '2400', '1850');
                    if ($image) {
                        $imagePath = explode('public/images/', $image['full_path']);
                        $companyLogo = $imagePath[1];
                    }
                }
                if (!empty($footerImage))
                    $update['companyFooter'] = $footerImage;

                if (!empty($headerImage))
                    $update['companyHeader'] = $headerImage;
                
                if (!empty($companyLogo))
                    $update['companyLogo'] = $companyLogo;

                if (!empty($this->input->post('companyName')))
                    $update['companyName'] = $this->input->post('companyName');

                if (!empty($this->input->post('companyPrefix')))
                    $update['companyPrefix'] = $this->input->post('companyPrefix');

                if (!empty($this->input->post('companyAddress')))
                    $update['companyAddress'] = $this->input->post('companyAddress');

                if (!empty($this->input->post('email')))
                    $update['email'] = $this->input->post('email');

                if (!empty($this->input->post('contact')))
                    $update['contact'] = $this->input->post('contact');

                if (!empty($this->input->post('companyWeb')))
                    $update['companyWeb'] = $this->input->post('companyWeb');
                
                if (!empty($this->input->post('companyGST')))
                    $update['companyGST'] = $this->input->post('companyGST');

//                if (!empty($this->input->post('hrPolicy')))
//                    $update['hrPolicy'] = $this->input->post('hrPolicy');

//                if (!empty($this->input->post('companyPolicy')))
//                    $update['companyPolicy'] = $this->input->post('companyPolicy');
                $update['updateBy'] = $this->userName;

                $update = $this->common->updateCompany($update, $companyId);
                if ($update) {
                    setAlert('success', 'Records successfully updated');
                    redirect('dashboard/getAllCompany');
                }
            }
        }
        $this->content['company'] = $this->common->getCompany($companyId);

        $this->load->view('common/header', $this->content);
        $this->load->view('company/update_company', $this->content);
        $this->load->view('common/footer', $this->content);
    }

    public function deleteCompany() {
        $companyId = $this->input->get('id');
        $delete = $this->common->deleteCompany($companyId);
        if ($delete) {
            setAlert('error', 'Records successfully deleted');
            redirect('dashboard/getAllCompany');
        }
    }

    /* end of company */
    
}