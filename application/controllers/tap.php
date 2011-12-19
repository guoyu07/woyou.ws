<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tap extends CI_Controller {
	private $custom_key = '';
	private $public_key = '';
	public function __construct() {
		parent::__construct();
		$this->load->library('twitter_oauth', array($this->custom_key,$this->public_key));
	}
	public function index()
	{
		//$this->load->view('welcome_message');
		redirect('/', 'location', 301);
	}
	public function _remap($method) {
		$this->_proxy();
	}
	private function _proxy() {
		$segs = $this->uri->segment_array();
		
		foreach ($segs as $segment)
		{
			echo $segment;
			echo '<br />';
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */