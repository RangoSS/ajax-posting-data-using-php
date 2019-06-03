<?php

include "conectionss.php";
     if(isset($_POST['key'])){

     	$first_name=$_POST['last_name'];
     	$last_name=$_POST['last_name'];
     	$user_name=$_POST['user_name'];
     	$address=$_POST['address'];
     	$contact=$_POST['contact'];
     	$occupation=$_POST['occupation'];
     	$gender=$_POST['gender'];
     	
     }

     $query="INSERT INTO users(first_name,last_name,user_name,address,contact,occupation,gernder)
                        VALUES('$first_name','$last_name','$user_name','$address','$contact','$occupation','$gender')";

                        $results=mysqli_query($connectDan,$query);
                        exit("one Record Has inserted");
?> 







<?php
/*
          <td>'. $row->first_name .'</td>
  	      <td>'. $row->last_name.'</td>
          <td>'. $row->user_name.'</td>
          <td>'. $row->address.'</td>
          <td>'. $row->contact.'</td>
          <td>'. $row->gernder.'</td>
          <td>'. $row->occupation.'</td>
*/
          ?>