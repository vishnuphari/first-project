<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<style>
	form label {
        display: inline-block;
        width: 100px;
    }
 
    form div {
        margin-bottom: 10px;
    }
	</style>
</head>
<body>
	
	<form method="POST" action="insertexa.php">
  <div>
    <label for="firstname">First Name:</label>
    <input type="text"  name="firstname"></input>
  </div>
 
  <div>
    <label for="email">Email:</label>
    <input type="email"  name="email"></input>
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" name="password"></input>
  </div>
  <div>
    <input type="submit" value="Submit" />
  </div>
</form>
   
</body>
</html>