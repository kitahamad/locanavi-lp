<?php
/**
 * TransmitMail
 *
 * @package   TransmitMail
 * @license   MIT License
 * @copyright TAGAWA Takao, dounokouno@gmail.com
 * @link      https://github.com/dounokouno/TransmitMail
 */
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . '/lib/TransmitMail.php';
$tm = new TransmitMail('config/config.php');
echo $tm->tpl->fetch("./templates/header.html");
echo $tm->tpl->fetch("./templates/main.html");
$tm->run();
echo $tm->tpl->fetch("./templates/footer.html");
