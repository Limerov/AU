session_start();
$login=$_POST['login'];
$pas=$_POST['password'];
$db=mysqli_connect('localhost', 'root', '', 'mybase');
$query="SELECT * FROM users WHERE login='$login' AND BINARY pas='$pas'";
$result=mysqli_query($db, $query);
if (mysqli_num_rows($result))
$_SESSION['login']=$login;
else
$_SESSION['login']='er login';
header("Location: formreg.php");
mysqli_close($db);