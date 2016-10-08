<?
mysql_connect("localhost","root","Levien442000");
mysql_select_db("todo");

$title = mysql_real_escape_string($_POST['title']);
$todo = mysql_real_escape_string($_POST['todo']);
$order = "INSERT INTO data_todo (title, todo) VALUES('$title', '$todo')";

$result = mysql_query($order);
if($result){
        header("Location: gereed.php");
}else{
echo("er is iets fout gegaan");
}
?>
