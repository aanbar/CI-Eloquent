<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model as Eloquent;

class MY_Model extends Eloquent {

	public function __construct () {
		parent::__construct();
		include(APPPATH.'config/database.php');
		$Capsule = new Capsule;
		$Capsule->addconnection(
			array(
				'driver'	=> $db['default']['dbdriver'],
				'host'		=> $db['default']['hostname'],
				'database'	=> $db['default']['database'],
				'username'	=> $db['default']['username'],
				'password'	=> $db['default']['password'],
				'collation'	=> $db['default']['dbcollat'],
				'charset'	=> $db['default']['char_set'],
		));

		$Capsule->setAsGlobal();
		$Capsule->bootEloquent();
	}


}
