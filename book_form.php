<?php

    $connection = mysqli_connect('localhost:8111','chirag','','book_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

        // mysqli_query() function performs a query against a database.
        mysqli_query($connection, $request);

        //sends raw http header to a client
        header('location:book.php');
    }else{
        echo 'something went wrong try again';
    }
?>