<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
		$this->load->view('users/index.php');
	}

	public function new()
	{
		$this->load->view('users/new.php');
	}

	public function create()
	{
		if ($this->input->post('action') == TRUE)
		{
		    echo 'This feature is coming soon!';
		} 
		else
		{
			redirect('users/');
		}
	}

	public function count()
	{
		$visit = $this->session->userdata('counter');
		$visit++;
		$this->session->set_userdata('counter', $visit);
		echo "You visited here for " . $visit . " times.";
	}

	public function reset()
	{
		$this->session->unset_userdata('counter');
		$this->load->view('users/reset.php');
	}

	public function say($message, $num)
	{
		if (is_numeric($num)) 
		{
			$view_data['say'] = array('input' => $message, 'number' => $num);
			$this->load->view('users/say.php', $view_data);
		} 
		else 
		{
			echo  "Sorry. This url does not meet our requirement.";
		}
	}

    public function mprep()
    {
       	$view_data['user'] = array(
           	'name' => "Michael Choi",
           	'age'  => 40,
           	'location' => "Seattle, WA",
           	'hobbies' => array( "Basketball", "Soccer", "Coding", "Teaching", "Kdramas")
      	);
      	$this->load->view('users/mprep', $view_data);
     }

}
