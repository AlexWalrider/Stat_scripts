<?PHP
$txt = $_GET ['mail'];
$file = "datac.php";
$fgt = file_get_contents("datac.php");
$put = "<?PHP exit(0); ?>\n$txt";

if(strpos($fgt, $txt))
{
	//echo ("EXISTS");
}
else
{
	//echo ("SAVE");
file_put_contents ("$file", "$txt\n", FILE_APPEND);
}


echo ("<h2>Вы успешно отписались от рассылки</h2>");