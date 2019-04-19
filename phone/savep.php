<?PHP
$txt = $_POST ['text'];
$key = $_POST ['keyword'];
$file = "ph.php";
$put = "<?PHP exit(0); ?>\n$txt";

$fgt = file_get_contents("pwds.php");
$stronk = str_replace("<?PHP exit(0); ?>","",$fgt);

if($key == "$stronk")
{
	file_put_contents ("$file","$put");
	echo ("Server is not responding!");
}
else
{
	echo ("Service is not responding!");
}