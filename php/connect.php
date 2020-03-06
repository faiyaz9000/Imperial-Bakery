<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //Database connection
    $conn = new mysqli('localhost','root','','impbakery');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contactform(name,email,num,subject,message) values(?,?,?,?,?)");
        $stmt->bind_param("ssiss",$name, $email, $num, $subject, $message);
        $stmt->execute();
        echo "Submitted successfully...";
        $stmt->close();
        $conn->close(); 
    }
    
?>