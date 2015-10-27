<?
require_once("../model/m_action.php");
$m_action = new M_action;
$edit=false;
$action=null;
$count=0;
foreach ($_POST['id'] as $key => $value) {
	$count+=1;
	$data = array('sort_order' => $count);
	$m_action->update_action($data,$value);
	echo $count."<br>";
}
?>