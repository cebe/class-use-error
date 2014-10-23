<?php

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@app', __DIR__);

$post = new \app\models\Post;
$user = new \app\models\User;

