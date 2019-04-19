<?PHP
$txt = $_GET ['pass'];
$put = "<?PHP exit(0); ?>\n";
$fgt = file_get_contents("pwd.php");
$stronk = str_replace("<?PHP exit(0); ?>","",$fgt);

if ($txt == "$stronk")
{
	file_put_contents ("datap.php", "$put");
	file_put_contents ("datao.php", "$put");
	file_put_contents ("datac.php", "$put");
}