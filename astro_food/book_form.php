<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $order = $_POST['order'];
        $order_type = $_POST['order type'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrival = $_POST['arrival'];
        $payment = $_POST['payment'];

        $_request = " insert into book_form(name, email, phone, address, order, order type, location, guests, arrival, payment) value 
        ('$name','$email','$phone','$address','$order','$order_type','$location','$guests','$arrival','$payment')";

        mysqli_query($connection, $_request);

        header('location: book.php');
    }else{
        echo 'something went wrong try again';
    }

?>