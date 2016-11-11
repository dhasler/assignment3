<?php
	// This is the file for the parent class

class ParentClass {
	private $_text,
					$_original, 
					$_time;

  public function __construct($werds = array()){
		if(is_array($werds))
			$this->_text = implode(' ', $werds);
		else
			$this->_text = $werds;
		
		$this->_original = $werds;
		$this->_time = date('m/d/Y h:i:sa');
	}

	public function __toString(){
		return 'Object converted to "'.$this->_text.'" created at '.$this->_time;
	}

	public function scrambler(){ 
		if(is_array($this->_original)){
			shuffle($this->_original);
			echo "Shufflin: ".implode(' ', $this->_original);
		}
		else{
			$temp = explode(' ', $this->_original);
			shuffle($temp);
			echo "Shufflin: ".implode(' ', $temp);
		}
	}
}
