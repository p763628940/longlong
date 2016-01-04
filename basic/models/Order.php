<?php
/**
 * Created by PhpStorm.
 * User: Meiying
 * Date: 2015/12/22
 * Time: 9:16
 */

namespace app\models;
use yii\db\ActiveRecord;


class Order extends ActiveRecord
{
public function getcustomer(){
    return $this->hasOne(Customer::className(),['id'=>'customer_id'])->asArray();
}
}