<?PHP
$a1 = $_GET["id"];
$fgt = file_get_contents("pwd.php");
$stronk = str_replace("<?PHP exit(0); ?>","",$fgt);

if($a1 == "$stronk")
{
	$fgt = file_get_contents ("datap.php");
	$str = str_replace ("<?PHP exit(0); ?>", "", $fgt);
	$pragus = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $str);
	echo $pragus ;
}
else
{
	echo ("Wrong database!");
}

?>