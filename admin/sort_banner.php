<?
require_once("../model/m_banner.php");
$m_banner = new M_banner;
$count=0;
foreach ($_POST['id'] as $key => $value) {
	$count+=1;
	$data = array('sort_order' => $count);
	$m_banner->update_banner($data,$value);
	echo $count."<br>";
}
?>