<?php
class Autocomplate extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
 
	function CariSupplayer(){
		if (isset($_GET['term'])){
			$result = $this->M_Autocomplate->SearchNamaSupplayer($_GET['term']);
			if (count($result) > 0){
				foreach ($result as $row)
				$ArrResult[]=$row->NamaSupplayer;
				echo json_encode($ArrResult);
			}
		}
	}

	function CariMesinLipat(){
		if (isset($_GET['term'])){
			$result = $this->M_Autocomplate->SearchMesinLipat($_GET['term']);
			if (count($result) > 0){
				foreach ($result as $row)
				$ArrResult[]=$row->NamaMesin;
				echo json_encode($ArrResult);
			}
		}
	}
}