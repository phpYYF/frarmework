<?php
namespace Home\Model;
use Think\Model;
class MsgModel extends Model 
{
	protected $_auto = array(
        #array('created_at','date',1,'function',array('Y-m-d H:i:s')),
       
      array('created_at','time','1','function'),
    );
}