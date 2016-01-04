
<?php
    use yii\helpers\Html;
    use yii\helpers\HtmlPurifier;
?>
<h1><?=Html::encode($view_arr[0].$view_arr[2])?></h1>
<h1><?=HtmlPurifier::process($view_arr[0].$view_arr[2])?></h1>
<?php echo $this->render('about',array("hel"=>"hello world about"));?>
<?php
/**
 * Created by PhpStorm.
 * User: Meiying
 * Date: 2015/12/21
 * Time: 14:16
 */
