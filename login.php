<?php 
include 'config.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysql_query("select * from petugas where username='$username' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:examples/dashboard.php");
}else{
	header("location:index.php");	
}
 
?>




<?php 
mysql_connect('localhost','root','');
mysql_select_db('pengaduan');
?>
