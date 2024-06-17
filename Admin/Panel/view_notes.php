<?php
session_start();
if(isset($_GET['id']) && (isset($_SESSION['user']) || isset($_SESSION['std_name'])))
{

  include("../app/db_connection.php");
  error_reporting(E_WARNING|E_NOTICE);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  $result = mysqli_query($con,"SELECT * FROM notes WHERE notes_id = $_GET[id]");
  if (!$result) {
      echo 'Could not run query: ' . mysql_error();
      exit;
  }
  $row = mysqli_fetch_assoc($result);
  $topic = "$row[notes_topic]";
  $Author = "$row[notes_author]";
  $Subject = "$row[notes_subject]";
  $html_url = '../Panel/Notes/'.$row['notes_link'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes- <?=$topic?></title>
    <!-- It is a Awasome Font Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="light">
    <header>
        <img src="../image/d.png" width="200px">
    </header>
    <button id="mode"><i class="fa fa-moon-o fa-2x" style="color: white"></i></button>
    <?php include($html_url)?>
    <footer>
        <div>Subject Name : <span><?=$Subject?></span></div>
        <div>Author Name : <span><?=$Author?></span></div>
        <div>@Copyright <img src="../image/d.png" width="100px"></div>
    </footer>
</body>

</html>


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Courier New';
    }

    header {
        z-index: 9999;
        width: 100%;
        padding: 10px;
        position: fixed;
        backdrop-filter: blur(2px);
        box-shadow: 0px -5px 10px 1px;
        display: flex;
        align-items: center;
        gap: 20px;
        justify-content: center;
    }

    .dark {
        background-color: rgb(30, 30, 30);
        color: white;
    }

    .light {
        background-color: white;
        color: rgb(0, 0, 0);
    }

    #mode {
        padding: 10px;
        border-radius: 50%;
        border: none;
        background-color: rgb(71, 68, 68);
        float: right;
        z-index: 9999;
        right: 15px;
        bottom: 30px;
        position: fixed;
        transition: all 0.1s;
    }

    #mode:hover {
        border: 1px solid;
    }

    .notes_block {
        padding: 100px;
        width: 70%;
        display: flex;
        flex-flow: column;
        gap: 25px;
        margin: auto;
    }

    .notes_block pre,
    .notes_block code {
        /*      white-space: pre-wrap;
    word-wrap: break-word; */
        background-color: #434343;
        padding: 3px ;
        line-height: 1.8;
        overflow: auto;
        color: rgb(255, 255, 13);
        font-weight: bolder;
        border-radius: 5px;
    }

    .notes_block img{
        max-width: 600px;
    }
    .notes_block iframe{
        max-width: 500px;
        max-height: 300px
    }

    a {
        color: rgb(255, 115, 0);
    }

    footer div{
        width: 100%;
        padding: 10px;
        background-color: rgb(101, 7, 97);
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        gap: 5px;
        font-weight: bolder;
        font-size: larger;
    }

    footer span{
        color: rgb(255, 255, 5);
    }

    @media (max-width:1100px) {
        .notes_block {
            padding: 100px 30px;
            width: 100%;
            display: flex;
            flex-flow: column;
            gap: 25px;
            margin: auto;
        }
        .notes_block iframe{
            max-width: 100%;
        }
    }
</style>

<script>
    document.querySelector('#mode').addEventListener('click', () => {
        if (document.querySelector('#mode').innerHTML == '<i class="fa fa-moon-o fa-2x" style="color: white"></i>') {
            document.getElementsByTagName('body')[0].classList = 'dark';
            document.querySelector('#mode').innerHTML = `<i class="fa fa-sun-o fa-2x" style="color: yellow;"></i>`;
        } else {
            document.getElementsByTagName('body')[0].classList = 'light';
            document.querySelector('#mode').innerHTML = `<i class="fa fa-moon-o fa-2x" style="color: white"></i>`;
        }
    })

</script>
<?php
}
else
 header("location: notes.php");
?>