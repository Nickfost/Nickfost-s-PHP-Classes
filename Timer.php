<?php
/**
 *	Timer v1
 *	Author: Nick Foster
 *	Date: 6-14-2014
**/

class Timer{
	// Set all vars
	private $starttime;
	private $stoptime;
	private $seconds;
	private $minutes;
	private $hours;

	// Start recording time as soon as instance is created	
	function __construct(){
		$this->starttime = microtime(true);
	}
	
	//Calculate some things
	private function timecalc(){
		
	 	$this->seconds = $this->stoptime - $this->starttime; 
		$this->minutes = $this->seconds / 60; 
		$this->hours = $this->minutes / 60; 
		return true;
	} 
	
	//Stop timer function 
	public function stop(){
		$this->stoptime = microtime(true);
	}
	
	//Return data users
	public function gettime($inc = ""){
		$this->timecalc();
		if($inc == "" || $inc == "secs" || $inc == "seconds"){
			return $this->seconds;
		}
		
		if($inc == "minutes" || $inc == "mins"){	
			return $this->minutes;
		}
		
		if($inc == "hours" || $inc == "hrs"){	
			return $this->hours;
		}
		
	}

}
?>