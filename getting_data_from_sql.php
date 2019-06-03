
<?php
 
 include "conectionss.php";

/*
   $sql="SELECT * FROM users ";
   $query=mysqli_query($connectDan,$sql);
   while($row=mysqli_fetch_assoc($query)){
	$data[]=$row;
	//$data=json_decode
	
 }

 foreach ($data as $list) {
	echo $list->first_name;
}
*/
$arr = array(1, 2, 3, 4);
$show="";
foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    $show .="{$key} => {$value} ";
  //  print_r($arr);
}
  print_r($show) ;
?>