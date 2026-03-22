<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tayyab.Registration Form</title>
</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	body{
		background: url(img.jpg);
		background-size: 500px;
		background-position: 50px 0px;
	}
	div.main{
		width: 400px;
		margin: 100px auto 0px auto;
	}
	h2{
		text-align: center;
		padding: 20px;
		font-family: sans-serif;
	}
	div.register{
		background-color: white;
		width: 100%;
		font-size: 18px;
		border-radius: 10px;
		border:1px solid black;
		box-shadow: 5px 5px;
	}
	form#register{
		margin: 40px;
	}
	label{
		font-family: sans-serif;
		font-size: 18px;
		font-style: italic;
	}
	input#name{
		width: 300px;
		border: 1px solid black;
		border-radius: 3px;
		outline: 0;
		padding: 7px;
		background-color: #fff;
		box-shadow: inset 1px 1px 5px rgba(0, 0, 0, 0.3);
	}
	input#submit{
		width: 200px;
		padding: 7px;
		font-size: 16px;
		font-family: sans-serif;
		font-weight: 600;
		border: none;
		border-radius: 3px;
		background-color: rgba(250, 100, 0, 0.8);
		color: #fff;
		curser: pointer;
		border: 1px solid rgba(255, 255, 255, 0.8);
		box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
		margin-bottom: 20px;
	    }
	    label,span,h2{
	    	text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
	    }
</style>
<body>
<div class="main">
	<div class="register">
		<h2>Register Here</h2>
		<form id="register" method="post" action="insert.php">
			<label>First Name : </label>
			<br>
			<input type="text" name="Firstname" id="name" pattern="[A-Za-z ]+" 
           title="Please enter letters only" 
           placeholder="Enter Your First Name" required ">
			<br><br>
            <label>Last  Name : </label>
			<br>
			<input type="text" name="Lastname" id="name" pattern="[A-Za-z ]+" 
           title="Please enter letters only" 
           placeholder="Enter Your Last Name" required>
			<br><br>
            <label>Your Age : </label>
			<br>
			<input type="number" name="Age" id="name" placeholder="How old are you? ">
			<br><br>
			<label>Email : </label>
			<br>
			<input type="email" name="Email" id="name" placeholder="Enter your valid email ">
			<br><br>
            Gender : 
            <input type="radio" name="Gender" value="male" required>
            <label>Male</label>
            <input type="radio" name="Gender" value="female" >
            <label>Female</label>
            <br><br>
            <input type="submit" value="Submit" id="submit" name="save">

		</form>
	</div>
</div>
</body>
</html>