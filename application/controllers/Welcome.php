<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('view_home');
	}

	public function rombo(){
		$tam=$this->input->post('num');

		for ($i=1; $i <=$tam ; $i+=2) {
			$li="_ ";
			$vec=($tam-$i)/2;
			for ($a=1; $a <= $vec; $a++) {
				echo $li;
			}
			for ($k=1; $k <= $i; $k++) {
				echo " * ";
			}
			echo "<br>";
		}


		for ($m=$tam-2; $m >=1 ; $m-=2) {
			$li="_ ";
			$vec=($tam-$m)/2;
			for ($b=1; $b <= $vec; $b++) {
				echo $li;
			}
			for ($n=1; $n <= $m ; $n++) {
				echo " * ";
			}
			echo "<br>";
		}
	}

}
