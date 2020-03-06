<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $cake = $_POST['cake'];
    $quantity = $_POST['quantity'];
    $dod = $_POST['dod'];
    //Database connection
    $conn = new mysqli('localhost','root','','impbakery');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into ordercake(name,number,email,address,cake,quantity,dod) values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sisssis",$name, $number, $email, $address, $cake, $quantity, $dod);
        $stmt->execute();
        echo "Thank You for placing order...";
        $stmt->close();
        $conn->close(); 
    }
    
?>