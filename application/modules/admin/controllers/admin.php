<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {

	public function index()
	{
		$this->template
			->set_title('Admin')
			->build('example_body');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */