<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users_model extends MY_Model {

	protected $table = 'users';

	public function __construct () {
		parent::__construct();
	}

}
