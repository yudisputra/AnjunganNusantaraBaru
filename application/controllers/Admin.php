<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller {
    
        public function index()
        {   
            $data=[
                'content' => "admin/dashboard_view",
                'data' => array()
            ];

            $this->load->view('admin/layout_template', $data);
        }

        public function ma_pembeli()
        {   
            $data=[
                'content' => "admin/ma-pembeli_view",
                'data' => array()
            ];

            $this->load->view('admin/layout_template', $data);
        }

        public function ma_penjual()
        {   
            $data=[
                'content' => "admin/ma-penjual_view",
                'data' => array()
            ];

            $this->load->view('admin/layout_template', $data);
        }
    }
    
?>