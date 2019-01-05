<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class t extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('test');
	}

	public function test($namamesin){
		$hasil = $this->db->query("CREATE TABLE `layoutmesin`.`$namamesin` ( 
			`NamaCustomer` VARCHAR(100) NOT NULL ,
			`KodePack` VARCHAR(50) NOT NULL , 
			`NamaArtikel` VARCHAR(100) NOT NULL , 
			`LayoutPotongBlanko` VARCHAR(100) NOT NULL , 
			`UkuranKertasPanjang` INT(10) NOT NULL , 
			`UkuranKertasLebar` INT(10) NOT NULL , 
			`PlanoCetak` INT(10) NOT NULL , 
			`LayoutPlanoCetak` VARCHAR(100) NOT NULL , 
			`UkuranSheetPanjang` INT(10) NOT NULL , 
			`UkuranSheetLebar` INT(10) NOT NULL , 
			`UP` INT(10) NOT NULL , 
			`JenisPlate` VARCHAR(100) NOT NULL , 
			`MaxProduksi` INT(20) NOT NULL , 
			PRIMARY KEY (`KodePack`)) ENGINE = InnoDB;");
		var_dump($hasil);
	}
}

		

