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

        //Manajemen Akun
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

        public function ma_admin()
        {   
            $data=[
                'content' => "admin/ma-penjual_view",
                'data' => array()
            ];

            $this->load->view('admin/layout_template', $data);
        }

        //Manajamen Produk
        public function mpr_kategoridansubkategori()
        {   
            $data=[
                'content' => "admin/mpr-kategoridansubkategori_view",
                'data' => array()
            ];

            $this->load->view('admin/layout_template', $data);
        }

        public function mpr_daftarukm()
        {   
            $data=[
                'content' => "admin/mpr-daftarukm_view",
                'data' => array()
            ];

            $this->load->view('admin/layout_template', $data);
        }

        public function mpr_daftarproduk()
        {   
            $data=[
                'content' => "admin/mpr-daftarproduk_view",
                'data' => array()
            ];

            $this->load->view('admin/layout_template', $data);
        }

        //Manajemen Penjualan
        public function mpj_daftarbank()
        {   
            $data=[
                'content' => "admin/mpj-daftarbank_view",
                'data' => array()
            ];

            $this->load->view('admin/layout_template', $data);
        }

        public function mpj_daftarpesanan()
        {   
            $data=[
                'content' => "admin/mpj-daftarpembelian_view",
                'data' => array()
            ];

            $this->load->view('admin/layout_template', $data);
        }

        public function mpj_daftargrafikpenjualan()
        {   
            $data=[
                'content' => "admin/mpj-daftargrafikpenjualan_view",
                'data' => array()
            ];

            $this->load->view('admin/layout_template', $data);
        }
    }
    
?>