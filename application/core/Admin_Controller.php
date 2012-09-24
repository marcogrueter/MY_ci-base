<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		if( ! $this->ion_auth->is_admin() )
		{
			redirect( base_url('/auth/login'), 'refresh');
		}

		//set path to theme for assets
		Assets::set_path(APPPATH.'themes/default_admin');

		//set theme
		$this->template
			->set_theme('default_admin')
			->set_partial('metadata', 'partials/metadata')
			->set_partial('scripts', 'partials/scripts');			
	}

}