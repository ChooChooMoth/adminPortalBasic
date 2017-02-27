<?php

if (Yii::$app->user->isGuest)
    header('Location: site/login');
else
    header('Location: computers/index');

