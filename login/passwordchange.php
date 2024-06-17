<?php
session_start();
if(isset($_SESSION['pass']))
{
    session_unset();
    session_destroy();
    session_abort();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
      <center>
       <br><br>
       <h1>Password change suceessfully</h1>
       <a href="../login/">Back to Login</a>
      </center>
</body>
</html>
<?php
}
  else
   header("Location: index.php");
?>