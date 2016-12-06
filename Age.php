<?php 

class Age{
	
	public $hitungAge;
	
	public function Age($hitungAge) {
		$date_ob = new DateTime($hitungAge);
		$today = new DateTime();
		
		$diff = $today->diff($date_ob);
		return $diff;
	}
}

?>