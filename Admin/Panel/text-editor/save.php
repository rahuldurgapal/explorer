<?php
include("../../app/db_connection.php"); 
if (isset($_POST['condition'])) {
    $condition = $_POST['condition'];
    $content = $_POST['content'];
    $fileName = $_POST['fileName'];
    $subject =  $_POST['subject'];
    $teacher =  $_POST['teacherName'];
    $topic = $_POST['topicname'];

    if($condition == 'save'){
        $sql = "insert into notes(notes_subject, notes_author, notes_topic, notes_link) values ('$subject', '$teacher', '$topic', '$fileName')";
        $q=mysqli_query($con,$sql);
        if($q)
        echo "Notes save successfully";
        else
        echo "Some error occured during insertion";
    }else{
        $result = mysqli_query($con,"select * from notes where notes_id = $_POST[id]");
        if (!$result) {
            echo 'Could not run query: ' . mysql_error();
            exit;
        }
        $row = mysqli_fetch_assoc($result);
        $topic_name = $row['notes_link'];
        unlink('../../Panel/Notes/'.$topic_name);

        $sql = "update notes set notes_subject = '$subject', notes_author = '$teacher', notes_topic = '$topic', notes_link = '$fileName' where notes_id = $_POST[id]";
        $q=mysqli_query($con,$sql);
        if($q)
        echo "Notes Update successfully";
        else
        echo "Some error occured during updation";
    }

    $filePath = '../../Panel/Notes/' . $fileName; // Specify the directory where you want to save the file
    
    if (file_put_contents($filePath, $content)) {
    } else {
        echo 'Error saving file.';
    }
}
?>
