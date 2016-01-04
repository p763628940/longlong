<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php if(isset($this->blocks['block1'])):?>
    <?= $this->blocks['block1'];?>
<?php else:?>
    <h1>thisis common</h1>
<?php endif?>
</body>
</html>
<?php
///**
// * Created by PhpStorm.
// * User: Meiying
// * Date: 2015/12/21
// * Time: 14:56
// */