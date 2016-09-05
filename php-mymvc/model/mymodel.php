
<?php
class mymodel{
	private $_data=array(
			'title'=>"hello ruitear",
			'welcome'=>'welcome to rutear.com',
		);
	public function getData($key){
		return $this->_data[$key];
	}
}

?>