<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="card searchbar">
	
	<select id = searchbox>
		<option disabled selected>Search Book By</option>
		<option id = 1>Name</option>
		<option id = 2>Author</option>
		<option id = 3>Number</option>
	</select>
	<form  method = post action ="">
		<div id = loadtextbox>
	
			<input type= text name = searchname placeholder = "Enter the book name">
		</div>
		<br><br>	
		<input type = submit name="b1" value = Submit>
	</form>
</div>
<?php

	if(isset($_POST['b1'])){ 
		echo "ok";
	
	}

?>

<script>	
	$(document).ready(function(){
	  $("#1").click(function(){
	    $("#loadtextbox").load('searchby/name.php');
	  });
	  
	  $("#2").click(function(){
	    $("#loadtextbox").load('searchby/author.php');
	  });
	  
	  $("#3").click(function(){
	   $("#loadtextbox").load('searchby/number.php');
	  });
	  
	   $("#submit").click(function(){
	   $("#result").load('searchbookby.php');
	  });
	 
	  
	});
</script>  
