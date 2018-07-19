<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\T1;

class TestController extends Controller
{
    public function actionIndex()
    {
      return $this->render("index",[
       	"username"=>"十亿女人的梦",
       	"order" => [
       		'a' => "寒冰",
       		'b' => "蛮王",
       	],
       ]);
    }
    public function actionAdd(){
        echo 'add';
    }
    public function actionDel()
    {
        $t1 = T1::findOne(2);
        $t1->delete();
    }
}
