<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo "I am Main Class!";
	}

	public function hello()
	{
		echo "Hell World!";
	}

	public function say()
	{
		echo "HI";
	}

	public function say_anything($any)
	{
		echo strtoupper($any);
	}

	public function danger()
	{
		redirect('/main');
	}

	public function ninjas($num)
	{
		$view_data['num'] = array(
		    'ninja' => $num
		);
		$ninjas = $num;
	    $this->load->view('main/ninjas',$view_data);
	}

	public function world()
	{

		$this->load->view('main/world');
	}

	public function users()
	{
		echo "Hello Users!";
	}
}
