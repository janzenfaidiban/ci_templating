<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->view('partial/header');
		$this->load->view('who_we_are');
		$this->load->view('partial/footer');
	}

	public function who_we_are()
	{
		$this->load->view('partial/header');
		$this->load->view('who_we_are');
		$this->load->view('partial/footer');
	}

	public function what_we_do()
	{
		$this->load->view('partial/header');
		$this->load->view('what_we_do');
		$this->load->view('partial/footer');
	}

	public function our_services()
	{
		$this->load->view('partial/header');
		$this->load->view('our_services');
		$this->load->view('partial/footer');
	}

	public function join_with_us()
	{
		$this->load->view('partial/header');
		$this->load->view('join_with_us');
		$this->load->view('partial/footer');
	}

	public function give_contribution()
	{
		$this->load->view('partial/header');
		$this->load->view('give_contribution');
		$this->load->view('partial/footer');
	}

	public function contact_us()
	{
		$this->load->view('partial/header');
		$this->load->view('contact_us');
		$this->load->view('partial/footer');
	}
}
