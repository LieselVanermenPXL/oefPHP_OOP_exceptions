<?php
//require_once 'src/tool/Tool.php';
//require_once 'src/tool/Broom.php';
//require_once 'src/worker/Worker.php';
//require_once 'src/worker/Handyman.php';

require_once 'vendor/autoload.php';

use tool\Broom;
use worker\Handyman;

$broom = new Broom();
$henry = new Handyman($broom);
$henry->work();
