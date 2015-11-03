<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->user_session = $this->session->userdata("user_session");
		$this->view_data['user_session'] = $this->user_session;
		$this->load->model('Book');
	}
	public function index()
	{
		$this->load->view('index');
		$all_data = $this->Book->all_data();
		$this->session->set_userdata('all_data', $all_data);
	}

	public function register()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|matches[confirm]|md5");
		$this->form_validation->set_rules("confirm", "Confirm Password", "trim|required|md5");

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata("registration_errors", validation_errors());
			redirect(base_url());
		}
		else
		{
		$this->load->model('Book');
		$register_info = $this->input->post();
		$insert_user = $this->Book->register($register_info);

			if($insert_user)
			{
				$this->session->set_userdata("user_session", $insert_user);
				$this->session->set_flashdata("registration_errors", "Registration Successful. Please log-in");
				redirect('/');
			}
			else
			{
				$this->session->set_flashdata("registration_errors", "Sorry but your info was not registered please try again.");
			}
		}
	}


	public function login()
  {
  $this->load->library("form_validation");
  $this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
  $this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|md5");

  if($this->form_validation->run() === FALSE)
    {
      $this->session->set_flashdata('login_errors', validation_errors());
      redirect(base_url());
    }
    else {
      $this->load->model('Book');
      $get_user = $this->Book->login($this->input->post());

      if($get_user)
      {
        $this->session->set_userdata("user_session", $get_user);
        redirect('/books/review');
      }
      else
      {
        $this->session->set_flashdata("login_errors", "Invalid email and/or password.");
        redirect(base_url());
      }
    }
  }

	public function review()
	{
		$this->load->view('books/reviews', $this->view_data);
	}

	public function add()
	{
		$this->load->view('books/add');
	}

}
