<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exemple extends CI_Controller {

	
	public function __construct() {
		parent::__construct();
		$this->load->helper("nasty_test");
	}
	
	public function index()
	{
		nasty_go();
	}
	
	function test_un_vaut_un() {
		assertTrue(1 == 1," 1 vaut 1 ?");
		assertEquals(1,1,"autre façon de vérifer si 1 == 1");
		assertNotEquals(1,2,"quoi !!!  1 est différent de  2 ?");
	}
	
	
	function test_rien_ne_va() {
		$tableau = array("hello","world");
		assertInArray($tableau,"moto");
		nasty_debug($tableau);
		fail("Faiiiiiiiil pour bien finir !!");
	}
}
