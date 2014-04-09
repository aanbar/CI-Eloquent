<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()	{
		$this->load->model('users_model');
		var_dump($this->users_model->first()->toArray());
	}
}
