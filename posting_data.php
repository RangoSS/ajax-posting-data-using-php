<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link href="css/styleHeard.css" rel="stylesheet" id="bootstrap-css">
	<title>Posting data</title>
</head>
<body>

    <div class="container" style="background-color: silver;">
    	<div id="table_manager" class="modal-fade">
    		<div class="modal-dialog">
    			<div class="modal-header">
    				<h2 class="modal-title">Our Users</h2>
    			</div>
    			<div class="modal-body">
    				<label>first name</label>
    				<input type="text" class="form-control" id="first_name" name="first_name"><br>
    				<label>Last Name</label>
    				<input type="text" class="form-control" id="last_name" name="last_name"><br>
    				<label>user name</label>
    				<input type="text" class="form-control" id="user_name" name="user_name"><br>
    				<label>Address</label>
    				<input type="text" class="form-control" id="address" name="address"><br>
    				<label>Contact</label>
    				<input type="text" class="form-control" id="contact" name="contact"><br>
    				<label>Gender</label>
    				<input type="text" class="form-control" id="gender" name="gender"><br>
    				<label>Occupation</label>
    				<input type="text" class="form-control" id="occupation" name="occupation"><br>

    			</div>
    			<div class="modal-footer">
    				<input type="submit" value="save" class="btn btn-success" onclick="manageData('key')" id="addNew">
    			</div>
    		</div>
    	</div>

    	<div class="row">
    		<div class="col-md-8 col-md-offet-2">
    			<h1>Posting data using Ajax</h1>
             <input type="button" class="btn btn-success" value="Add New" style="float:right;">
             <table class="table table-hover table-bordered">
             	<thead>
             		<tr>
             			<th>First Name</th>
             			<th>Last Name</th>
             			<th>Username</th>
             			<th>Address</th>
             			<th>Contact</th>
             			<th>Gender</th>
             			<th>Occupation</th>
             		</tr>

             	</thead>
             </table>
    	</div>
	
</div>
</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){  

		$('#addNew').on('click',function(){
         $('#table_manager').modal('show'); 
		});
	});
    
    //parameter in a function is like a variable 
    //and is not assigned to anything ,it's only called on the function calling
	function manageData(key){
       var first_name=$('#first_name');
       var last_name=$('#last_name');
       var user_name=$('#user_name');
       var address=$('#address');
       var contact=$('#contact');
       var gender=$('#gender');
       var occupation=$('#occupation');

       $.ajax({
       	url:'john_wick.php',
       	method:'POST',
       	dataType:'text',
       	data:{
       		key:key,
       		first_name:first_name.val(),
       		last_name:last_name.val(),
       		user_name:user_name.val(),
       		address:address.val(),
       		contact:contact.val(),
       		gender:gender.val(),
       		occupation:occupation.val()
       	},
       	success:function(response){
          alert(response); 
       	}
       });
    
	}
</script>


