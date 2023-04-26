<?php
    $conn= mysqli_connect("localhost","root","");
    if(!$conn)
    {
        //die("Sorry Failed to Connect to MYSQL");
    }
    else
    {
        $sql = "create database if not exists chatapp;";
        $result = mysqli_query($conn,$sql);
        if(!$result)
        {
            //die("Sorry Failed to create database");
        }
        else
        {
            $conn = mysqli_connect("localhost","root","","chatapp");
            if(!$conn)
            {
                //die("Sorry : Failed to connect to database");
            }
            else{
                $sql = "create table user(username varchar(100) , password varchar(100), status varchar(100));";
                mysqli_query($conn,$sql);
            }
            
        }
    }
    
?>