$login=$_POST['login'];
$pas=$_POST['password'];
$db=mysqli_connect('localhost', 'root', '', 'mybase');
$query="INSERT INTO users (login, pas) VALUES ('$login', '$pas')";
$result=mysqli_query($db, $query);
if ($result)
header("Location: formreg.php");
mysqli_close($db);