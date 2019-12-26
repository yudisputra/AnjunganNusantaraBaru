<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailBarang extends CI_Controller {

	
	public function index()
	{
		$this->load->view('detailbarang');
	}
}
