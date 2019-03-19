<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myredis extends CI_Controller {

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
		$this->load->driver('cache');
		$this->cache->redis->save('foo', 'bar', 1000);

		
	}
	public function get()
	{
		$this->load->driver('cache');
		$foo = $this->cache->redis->get('foo'); 
		echo $foo;
	}	
}
