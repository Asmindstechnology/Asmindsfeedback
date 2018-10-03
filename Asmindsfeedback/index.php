<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
		<style>
			div.stars {
			
			width: 270px;
			
			display: inline-block;
			
			}
			
			input.star { display: none; }
			
			label.star {
			
			float: right;
			
			padding: 10px;
			
			font-size: 36px;
			
			color: #444;
			
			transition: all .2s;
			
			}
			
			input.star:checked ~ label.star:before {
			
			content: '\f005';
			
			color: #FD4;
			
			transition: all .25s;
			}
			
			input.star-5:checked ~ label.star:before {
			
			color: #FE7;
			
			text-shadow: 0 0 20px #952;
			
			}
			
			input.star-1:checked ~ label.star:before { color: #F62; }
			
			label.star:hover { transform: rotate(-15deg) scale(1.3); }
			
			label.star:before {
				
			content: '\f006';
			
			font-family: FontAwesome;
			
			}
			.head{
				margin-top:4%;
				background-color:#e9eaed;
				border-radius:10%;
			}
			body{
				background-color:#3b5999;
			}
			
			::placeholder {
				color: red;
				font-style:italic;
			
			}
			.pass{
				background-color:#D1D1D1;
				border:#FD4;
			}
			
		</style>
		<script>
		$(document).ready(function(){
			var result = document.getElementById("star").value;
			if(result == 1)
			{
				swal("Please Rate Asminds Technology");
					
			}
		
		});
		</script>
	</head>
	<body>
		<div class="container-fluid">
		<div class="panel panel-default col-md-offset-3 col-md-6 head">
		<div class="panel-body  ">
			
			<div class="header col-md-offset-5">
			<h2>Feedback</h2>
			</div>
			<form class="form-horizontal" action="feedback.php" method = "post">
			<div class="form-group">
			  <label class="control-label col-md-3" for="uname"></label>
			  <div class="col-md-6">
				<input type="text" class="form-control pass" id="uname" placeholder="Enter Username" name="uname" required>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-md-3" for="email"></label>
			  <div class="col-md-6">
				<input type="email" class="form-control pass" id="email" placeholder="Enter E-mail ID" name="email" required>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-md-3" for="mob"></label>
			  <div class="col-md-6">
				<input type="text" class="form-control pass" id="mob" placeholder="Enter Mobile Number" name="mob" required>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-md-3" for="deg"></label>
			  <div class="col-md-6">
				<input type="text" class="form-control pass" id="deg" placeholder="Enter Degree / Department" name="deg" required>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-md-3" for="passedout"></label>
			  <div class="col-md-6">          
				<input type="text" class="form-control pass" id="passedout" placeholder="Enter Passsedout Year" name="passedout" required>
			  </div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3" for="feedback"></label>
				<div class="col-md-6"> 
					<textarea class="form-control rounded-0 pass" name = "feedback_area" id="feedback" placeholder="Enter Your Feedback Here" rows="3" required></textarea>
					<div class="stars">

				<input class="form-control star star-5" name="star" value="5" id="star-5" type="radio" name="star"/>
				
				<label class="control-label star star-5" for="star-5"></label>
				
				<input class="form-control star star-4" name="star"   value="4" id="star-4" type="radio" name="star"/>
				
				<label class="control-label star star-4" for="star-4"></label>
				
				<input class="form-control star star-3" name="star"  value="3" id="star-3" type="radio" name="star"/>
				
				<label class="control-label star star-3" for="star-3"></label>
				
				<input class="form-control star star-2"  name="star"  value="2" id="star-2" type="radio" name="star"/>
				
				<label class="control-label star star-2" for="star-2"></label>
				
				<input class="form-control star star-1" name="star"  value="1" id="star-1" type="radio" name="star"/>
				
				<label class="control-label star star-1" for="star-1"></label>

			</div>
				</div>
			</div>

			<div class="form-group">        
			  <div class="col-md-offset-3 col-md-12">
				<button type="submit" name = "as-feedback" class="btn btn-warning col-md-5 pass" style="color:#A2A2A2; height:40px;">Submit</button>
			  </div>
			</div>
			</form>
			</div>
		</div>
		</div>
	</body>
</html>
<?php
if($_REQUEST){
	if($_REQUEST["empty"] == 1)
	{
		echo "<input type = 'hidden' id = 'star' value = '1'>" ;
	}
}

?>
