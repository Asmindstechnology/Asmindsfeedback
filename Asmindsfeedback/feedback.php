<!DOCTYPE html>
	<head>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
		<script>
		$(document).ready(function(){
			var result = document.getElementById("result").value;
			if(result == 1)
			{
				swal("Thank you For your feedback").then(function(result){
					window.location = "index.php";
					});
			}
		
		});
		</script>
	</head>
	<body>
	</body>
</html>


<?php
	if(isset($_POST["as-feedback"])){
		if(empty($_POST["star"])){
			header("Location:index.php?empty=1");
		}else{

		$conn = mysqli_connect("localhost","root","","asminds_feedback");
		$sql = "INSERT INTO `asminds_feedback`.`as_feedback` ( `username`, `email`, `mobile`, `degree`, `passedout`, `feedback`, `rating`) VALUES ( '".$_POST["uname"]."', '".$_POST["email"]."', '".$_POST["mob"]."', '".$_POST["deg"]."', '".$_POST["passedout"]."', '".$_POST["feedback_area"]."', '".$_POST["star"]."');";
		$result = mysqli_query($conn,$sql);
		echo "<input type = 'hidden' id = 'result' value = $result>" ;
	}
	}

?>
