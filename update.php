
<html>

  <head>
    <title>ITF Lab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
  </head>

<body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>  
  <div class="container">
  <?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'finallaew.mysql.database.azure.com', 'rainy_dacht@finallaew', 'Phat272829', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$comment=$_REQUEST['comment'];
$link=$_REQUEST['link'];


$sql = "UPDATE guestbook SET name='$name' , comment='$comment' ,  link='$link' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo ('<div class="container"><h1 class="display-1">OK!!</h1></div>');
    echo (' <form method="get" action="show.php">
            <button type="submit" class="btn btn-success">Continue</button>
            </form>');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
if ($done)
{
    header("Location: https://phatrain.azurewebsites.net//show.php");
    exit();
}
?>
  </div>
</body>
</html>
