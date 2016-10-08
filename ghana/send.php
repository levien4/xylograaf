<?
mysql_connect("localhost","root","Levien442000");
mysql_select_db("ghanadates");

$name = mysql_real_escape_string($_POST['naam']);
$phone = mysql_real_escape_string($_POST['telefoon']);
$email = mysql_real_escape_string($_POST['email']);
$date = mysql_real_escape_string($_POST['datum']);
$order = "INSERT INTO dates (id, name, phone, email, datum) VALUES(NULL, '$name', '$phone', '$email', '$date')";

$result = mysql_query($order);
if($result){
        header("Location: gereed.php");
}else{
echo("er is iets fout gegaan");
}
?>
