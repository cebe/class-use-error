<?php

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@app', __DIR__);

$user = new \app\models\User;
$post = new \app\models\Post;

