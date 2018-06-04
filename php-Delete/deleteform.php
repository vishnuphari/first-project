<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div class="container">
    <div class="row">
		<div class="span12">
			<form class="form-horizontal" action='delete.php' method="POST">
			  <fieldset>
			    <div id="legend">
			      <legend class="">Delete</legend>
			    </div>
			    <div class="control-group">
			      
			      <label class="control-label"  for="firstname">First Name</label>
			      <div class="controls">
			        <input type="text" id="username" name="firstname" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      
			      <label class="control-label" for="email">Email</label>
			      <div class="controls">
			        <input type="email" id="password" name="email" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      
			      <div class="controls">
			        <button class="btn btn-success">delete</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		</div>
	</div>
</div>

</body>
</html>



