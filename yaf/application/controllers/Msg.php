<?php

class MsgController extends Yaf_Controller_Abstract {
	public function indexAction()
	{
		$msgmodel = new MsgModel();
		$msgs = $msgmodel->get("select * from msg");
		$this->getView()->assign("msgs",$msgs);
		return $this->getView()->render('msg/index.phtml');
	}
	public function addAction()
	{
		if($this->getRequest()->isPost()){
			$uname = $this->getRequest()->getPost('uname');
			$content = $this->getRequest()->getPost('content');
			$created_at = time();
			$updated_at = time();
			$sql = "insert into msg values(null,'{$uname}','{$content}','{$created_at}','{$updated_at}')";
			$msgmodel = new MsgModel();
			$rs = $msgmodel->add($sql);
			if($rs){
				echo "<script>alert('添加成功');location.href='/yaf/msg/index';</script>";
			}else{
				echo "<script>alert('添加失败');location.href='/yaf/msg/index';</script>";
			}
		}
	}
}
