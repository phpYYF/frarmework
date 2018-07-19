<?php

class TestController extends Yaf_Controller_Abstract {
	public function indexAction()
	{
		$testModel = new TestModel();
		$abc = $testModel->add("insert into t4 values(null,'aaaa','aaaa')");
		echo "<pre>";
		var_dump($abc);
		exit;
		return $this->getView()->render('test/index.phtml');
	}
}
