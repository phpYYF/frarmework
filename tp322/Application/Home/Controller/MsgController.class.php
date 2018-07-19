<?php 
namespace Home\Controller;

use Think\Controller;
// use Home\Model\Msg;
class MsgController extends Controller
{
	public function index()
	{	
		$msgModel = D('msg');
		if(IS_AJAX){
			$time = I("time");
			if(!empty($time)){
				$arr = explode(" - ",$time);
				$start_time = strtotime($arr[0]);
				$stop_time = strtotime($arr[1]);
				$where = "created_at > {$start_time} and created_at < {$stop_time}";
				// echo $where;exit;
				$msgs = $msgModel->where("$where")->select();
				$this->assign("msgs",$msgs);
				echo json_decode(['rongqi'=>$this->display('Msg/rongqi')]);
				exit;
			}
		}
		
		$msgs = $msgModel->where("$where")->select();
		// $msgs = M('msg')->select();
		$this->assign('msgs',$msgs);
		$this->assign('time',$time);
		return $this->display('index');	
	}
	public function add()
	{
		if(IS_POST){
			$postData = I('post.');
			// $postData['created_at'] = $postData['updated_at'] = time();
			// $rs = M('msg')->add($postData);
			$msgModel = D('msg');
			$rs=$msgModel->create($postData);

			#$msgModel->data($postData)->add();
			$msgModel->add();
			if($rs){
				$this->success("添加成功",U('home/msg/index'));
			}else{
				$this->error("添加失败",U('home/msg/index'));
			}
		}
	}
}