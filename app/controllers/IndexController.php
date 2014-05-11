<?php 

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->name= "Kittipong";
		$this->view->items = array (
			"data-1",
			"data-2",
			"data-3"
		);
    }

}
?>