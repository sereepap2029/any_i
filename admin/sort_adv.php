<?
require_once("../model/m_advisor.php");
$m_advisor = new M_advisor;
$edit=false;
$advisor=null;
$count=0;
foreach ($_POST['id'] as $key => $value) {
	$count+=1;
	$data = array('sort_order' => $count);
	$m_advisor->update_advisor($data,$value);
	echo $count."<br>";
}
?>