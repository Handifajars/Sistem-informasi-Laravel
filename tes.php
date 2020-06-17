<?php
  $conn = oci_connect('system','oracle','localhost/orcl','AL32UTF8');
  if (!$conn){
	$e = oci_error();
	trigger_error(htmlentities($e{'massage'}, ENT_QUOTES, E_USER_ERROR));
	}
	else echo "connection success";
?>