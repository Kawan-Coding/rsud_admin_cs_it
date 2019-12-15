<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_csit extends CI_Controller
{
	protected $template = array(
		'sidebar' => 'component/csit_sidebar',
		'navbar_header' => 'component/csit_navbar_header',
	);
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
		$data = array(
			'content' => 'content/csit_dasboard',
		);
		$this->load->view('template', array_merge($data, $this->template));
	}

	public function laporcepat()
	{
		$data = array(
			'content' => 'content/csit_laporcepat',
		);
		$this->load->view('template', array_merge($data, $this->template));
	}

	public function perbaikan()
	{
		$data = array(
			'content' => 'content/csit_perbaikan',
		);
		$this->load->view('template', array_merge($data, $this->template));
	}

	public function maintenance()
	{
		$data = array(
			'content' => 'content/cist_maintenance',
		);
		$this->load->view('template', array_merge($data, $this->template));
	}
	public function profil_admin_edit()
	{
		$data = array(
			'content' => 'content/ap_profil_admin_edit',
		);
        $this->load->view('template', array_merge($data,$this->template));
	}
	public function Login()
	{
        $this->load->view('login');
	}
	public function welcome()
	{
        $this->load->view('ap_setelah_login');
	}
}
