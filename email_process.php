<?php 

    if(isset($_POST['btn-send']))
    {
       $Name = $_POST['Name'];
       $Email = $_POST['Email'];
       $Phone = $_POST['phone'];
       $Message = $_POST['Message'];

       if(empty($Name) || empty($Email) || empty($Phone) || empty($Message))
       {
           header('location:index.html?error');
       }
       else
       {
           $to = "abdullahalmahmud559@gmail.com";

           if(mail($to,$Phone,$Message,$Email))
           {
               header("location:index.html?success");
           }
       }
    }
    else
    {
        header("location:index.html");
    }
?>