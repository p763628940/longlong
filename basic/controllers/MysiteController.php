<?php
namespace app\controllers;
use yii\web\Controller;
use yii\web\cookie;
use app\models\Test;
use app\models\Customer;
use app\models\Order;
use app\models\Check_member;


/**
 * Created by PhpStorm.
 * User: Meiying
 * Date: 2015/12/21
 * Time: 10:57
 */
class MysiteController extends Controller{
    public function  actionIndex(){
        $request=\Yii::$app->request;
        $isAjax=  $request->get('isAjax');
        $do=  $request->get('do');

//        $do2="checkmember";
//        echo $do2;
        if(!$isAjax)
            return false;
        switch($do){
            case"checkmember":
                $username=  $request->get('username');
               $res= Check_member::find()->where(['username'=>'long'])->asArray()->one();
                echo(!empty($res)?json_encode($res):die("没有数据"));
                break;

            case"default":
                die("nothing");
                break;

        }


//     $response=\yii::$app->response;
//     $response->headers->add("location","http://www.baidu.com");
//     $this->redirect("http://www.baidu.com");
//     $response->sendFile("./robots.txt");
//     $session=\Yii::$app->session;
//     $session->open();
//     $session->set("name","zhangsan");
//     echo $session->get("name");
//     $cookies= \Yii::$app->response->cookies;
//     $cookie_data=array("name"=>"user","value"=>"zhaosi");
//     $cookies->add(new cookie($cookie_data));
//     $cookies->remove("user");
//     $cookies=\Yii::$app->request->cookies;
//     echo $cookies->getValue("user");
////
//     $str="jjjj";
//     $data=array();
//     $arr=array(1,2,"<script>alert('hello')</script>");
//     $data["view_arr"]=$arr;
//     return $this->render('about');
//        $sql= 'select * from test where id = :id ';
//       $res= Test::findBySql($sql,array(':id'=>3))->all();
//        echo $res[0]["title"];
//       $res= Test::find()->where(['>','id','0'])->asArray()->all();
//       $res= Customer::find()->where(['>','id','0'])->asArray()->all();
//        $arr=array();
//       foreach($res as $val){
//           echo $val['name'];
//       }
//foreach(Test::find()->batch(1)as $val){
//    print_r(count($val));
//
//        Test::deleteAll('id>:id',array(':id'=>0));
//
//        $test = new Test;
//        $test->title='title3';
//        $test->id=3;
//        $test->save();
//        $cus = Customer::find()->where(["name"=>'zhansan'])->asArray()->one();
//       echo($cus['name']);
//        $cus->hasMany(Order::className(),['customer_id'=>'id']);
//     echo''


 }
}