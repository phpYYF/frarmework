<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Msg;

class MsgController extends Controller
{
   //不加载layout
    public $layout = false;

     //关闭csrf攻击
    public $enableCsrfValidation = false;

    public function actionIndex()
    {   
        if(Yii::$app->request->isAjax){
           $time = Yii::$app->request->post('time');
           $arr = explode(" - ",$time);
           $start_time = strtotime($arr[0]);
           $stop_time = strtotime($arr[1]);
           $cond = ['and',"created_at > {$start_time}","created_at < {$stop_time}"];
           $msgs = Msg::find()->where($cond)->all();
           return $this->render('rongqi',['msgs'=>$msgs]);
        }
        $msgs = Msg::find()->all();
        return $this->render("index",["msgs"=>$msgs]);
    }

    public function actionAdd()
    {
        if(Yii::$app->request->isPost) {
           $uname = Yii::$app->request->post('uname');
           $content = Yii::$app->request->post('content');
           $msg = new Msg();
           $msg->uname = $uname;
           $msg->content = $content;
           $msg->created_at = $msg->updated_at = time();
           $msg->save();
           return $this->redirect(['/msg']);
        } 
    }
}
