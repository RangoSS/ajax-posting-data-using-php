
<?php
 
 include "conectionss.php";


   $sql="SELECT * FROM users ";
   $query=mysqli_query($connectDan,$sql);
  while($row=mysqli_fetch_assoc($query)){
  //$result=json_decode($row);
	$data[]=$row;
	
$output="";

  foreach ($data as $row) {
  	$output .='
  	 <tr>
  	     <td>'. $row->first_name .'</td>
  	      <td>'. $row->last_name.'</td>
          <td>'. $row->user_name.'</td>
          <td>'. $row->address.'</td>
          <td>'. $row->contact.'</td>
          <td>'. $row->gernder.'</td>
          <td>'. $row->occupation.'</td>
  	      <td> <button type="button" name="edit"
  	 class="btn btn-warning btn-xs edit" id="'.$row->user_id.'">Edit</button></td>
  	 <td><button type="button" name="delete"
  	 class="btn btn-warning btn-xs delete" id="'.$row->user_id.'">Delete</button></td> 
  	     
  	 </tr>
  	 ';
    }
  
}
  echo $output;
?>