<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Public_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		//set path to theme for assets
		Assets::set_path(APPPATH.'themes/default');

		//set theme
		$this->template
			->set_theme('default')
			->set_partial('metadata', 'partials/metadata')
			->set_partial('scripts', 'partials/scripts');
	}
	
}