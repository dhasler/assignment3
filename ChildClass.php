<?php 
	class ChildClass extends ParentClass {

		public $_len,
					 $_type,
					 $_size,
					 $_objClone;

		public function __construct($stuffs = array()){
			parent::__construct($stuffs);
			if(is_array($stuffs)){
				foreach($stuffs as &$item){
					$this->_len += strlen($item);
					$this->_type = "Array";
					$this->_size = $this->_len*8;
				}
			}
			else{
				$this->_len = strlen($item);
				$this->_type = "String";
				$this->_size = $this->_len*8;
			}
		}

		public function __clone(){
			$this->_objClone = clone $this;
		}

		public function __toString(){
			return "The parent data has the following attributes: <br /> Data Type: ".$this->_type."<br /> Data Length: ".$this->_len."<br /> Data Size: ".$this->_size." bits (est)";
		}
	}
