<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Main controller
 *
 * @author chenriquez
 */

class Main extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->load->helper('url');

		
		$this->load->view('templates/tmp_header');
        $this->load->view('templates/tmp_navbar');
        $this->load->view('home');
        $this->load->view('templates/tmp_footer');
	}

	public function about()
	{
		$this->load->helper('url');

		
		$this->load->view('templates/tmp_header');
        $this->load->view('templates/tmp_navbar');
        $this->load->view('about');
        $this->load->view('templates/tmp_footer');
	}

	public function services()
	{
		$this->load->helper('url');

		
		$this->load->view('templates/tmp_header');
        $this->load->view('templates/tmp_navbar');
        $this->load->view('services');
        $this->load->view('templates/tmp_footer');
	}
}
