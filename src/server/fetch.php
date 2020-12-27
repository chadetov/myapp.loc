<?
	
	$cn = $_REQUEST['cn'];

	$arr['called'] = $cn;
	echo json_encode($arr);

?>