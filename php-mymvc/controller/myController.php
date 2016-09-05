<?php
/**
* 
*/
class myController {
	
	function index($param)
	{

      require('view/index.php');
	  require('model/mymodel.php');
      $model = new mymodel();
      $view = new Index();
      $data = $model->getData($param);
      $view->display($data);

	}
}

?>