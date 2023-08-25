<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {
	public function mostrar($page = 'home')

	{
		if ( ! file_exists('application/views/pruebas/'.$page.'.php'))
		{
		// Oh, oh... no tenemos una pagina para esto!
		show_404();
		}
		$data['title'] = ucfirst($page); // Capitaliza la primera letra
		$this->load->view('pruebas/header', $data);
		$this->load->view('pruebas/'.$page, $data);
		$this->load->view('pruebas/about', $data);
		$this->load->view('pruebas/footer', $data);
	}
}
