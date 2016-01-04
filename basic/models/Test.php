<?php
/**
 * Created by PhpStorm.
 * User: Meiying
 * Date: 2015/12/21
 * Time: 15:53
 */
namespace app\models;
use yii\db\ActiveRecord;

class  Test extends Activerecord{
    public function rules(){
        return[
          ['id','integer'],
            []
        ];
    }
}