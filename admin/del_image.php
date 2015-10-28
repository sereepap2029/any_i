<?
require_once("../model/m_action.php");
$m_action = new M_action;
$edit=false;
$advisor=null;
$count=0;
if (isset($_POST['type'])&&$_POST['type']=="temp") {
	unlink("../media/tmp/".$_POST['file']);
}
if (isset($_POST['type'])&&$_POST['type']=="real") {
	unlink("../media/action/".$_POST['filename']);
	$m_action->delete_action_photo($_POST['id']);
}
require_once("../model/m_partner.php");
$m_partner = new M_partner;
if (isset($_POST['type'])&&$_POST['type']=="partner") {
	unlink("../media/partner/".$_POST['filename']);
	$m_partner->delete_partner($_POST['id']);
}
?>