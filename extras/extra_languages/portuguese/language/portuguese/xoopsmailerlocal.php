<?php
// $Id: xoopsmailerlocal.php 1040 2011-11-06 05:24:00Z mikhail $
if (!defined('XOOPS_ROOT_PATH')) exit();
class XoopsMailerLocal extends XoopsMailer {
function XoopsMailerLocal() {
$this->multimailer = new XoopsMultiMailerLocal();
$this->reset();
$this->charSet = 'UTF-8';
$this->encoding = '8bit';
$this->multimailer->CharSet = $this->charSet;
$this->multimailer->SetLanguage('pt');
$this->multimailer->Encoding = "8bit";
}
}
class XoopsMultiMailerLocal extends XoopsMultiMailer {
function XoopsMultiMailerLocal() {
parent::XoopsMultiMailer();
}
}
?>