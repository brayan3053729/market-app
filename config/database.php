<?php
  //database connetion
  $host= "localhost";
  $user= "postgres";
  $password= "unicesmag";
  $dbname= "marketapp";
  
  $port="5432";
   
  $data_connection="
    host=$host
    user=$user
    password=$password
    dbname=$dbname
    port=$port
  
  " ;

  $conn = pg_connect($data_connection);

  if(!$conn){
      echo "Error";
  }else{
    echo "connection successfully :::";
  }







  ?>



