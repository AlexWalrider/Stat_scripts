<?PHP
@header('X-Robots-Tag: "none, noindex, nofollow, noarchive, nosnippet, noodp, notranslate, noimageindex"');
$a1 = $_GET["u1"];
$a2 = $_GET["u2"];
$a3 = substr("$a1", -1);
$a4 = str_replace ("$a3", "", $a1);
$aa = $a4+1;
$ab = $a3+1;
$ua = $_SERVER['HTTP_USER_AGENT'];
//////////////////////add client///
$FileP = "ph.php";
$linesP = file($FileP);//file in to an array
$fgtpm = file_get_contents ("datap.php");
$stringsrc = $linesP[$aa];
//echo ("$fgtpm<br>***<br>");
//echo ("$stringsrc");
if(strpos($fgtpm, $stringsrc))
{
	//echo ("EXISTS");
}
else
{
	//echo ("SAVE");
file_put_contents ("datap.php", "$linesP[$aa]\n", FILE_APPEND);
}
//////////////////////redirect///
$File = "lnk.php";
$lines = file($File);//file in to an array
header("Location: $lines[$ab]");
?>