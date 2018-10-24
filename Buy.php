<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buy extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> library(array('table', 'form_validation'));
		$this -> load -> helper(array('form', 'url'));
		$this -> load -> model('buy_model', '', TRUE);
	}

	public function car_details($make_name, $product_id) {

		$data['select_title'] = $this -> buy_model -> select_title($product_id);
		$data['select_detail'] = $this -> buy_model -> select_detail($product_id);
		$select_title= $this -> buy_model -> select_title($product_id);
		foreach ($select_title as $query) {
			$data['title'] = $query -> title;
			$data['description'] = $query -> description;
			$data['keyword'] = $query -> keyword;
		}
		$this -> load -> view("include/head_menu.php", $data);

		$this -> load -> view('detail_view', $data);

		$this -> load -> view('include/footer');
	}

}
