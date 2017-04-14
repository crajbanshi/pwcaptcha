<?php


use PW\PwCaptcha;

require_once '../src/PwCaptcha.php';

$captcha = new pw\PwCaptcha();

// set min text length 
$captcha->setMinLength(2);

// set max text length
$captcha->setMaxLength(5);

// set no of background lines
$captcha->setNumberOfLines(20);

// set true for multicolor text output
$captcha->setIsMultiColourText(true);

$captcha->writeCaptchaImage();
