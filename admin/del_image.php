<?
require_once("../model/m_action.php");
$m_action = new M_action;
$edit=false;
$advisor=null;
$count=0;
if (isset($_POST['type'])&&$_POST['type']=="temp") {
	unlink("../media/tmp/".$_POST['file']);
}
?>