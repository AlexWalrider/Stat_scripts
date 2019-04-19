<?PHP
$a1 = $_GET["id"];
$fgt = file_get_contents("pwd.php");
$stronk = str_replace("<?PHP exit(0); ?>","",$fgt);
if($a1 == "$stronk")
{
	$fgt = file_get_contents ("datao.php");
	$str = str_replace ("<?PHP exit(0); ?>", "", $fgt);

	echo $str;
}
else
{
	echo ("Wrong database!");
}

?>