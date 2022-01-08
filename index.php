<html>
<head>
	<title>Belajar upload File menggunakan PHP dan AJAX</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="container">
	<div class="row">
		<div class="jumbotron text-center">
		  	<h1>Belajar Upload File PHP</h1>
		  	<p>Resize this responsive page to see the effect!</p> 
		</div>
	</div>
	<div class="row">
		<div class="box">
			<div class="col-md-6 col-sm-12">
			  	<div id="targetPhoto">Preview Image Here</div>
			</div>
			<div class="col-md-6 col-sm-12 uploadFormContent">
			  	<form id="uploadForm" action="upload.php" method="post">
				  	<div class="form-group">
				    	<label for="file">Browse Your File :</label>
				    	<input name="userImage" type="file" class="inputFile" />
				  	</div>
				  	<input type="submit" value="Submit" class="btn btn-default btnSubmit" />
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<p class="text-center">Credit by <a href="mailto:iwan.webdeveloper@gmail.com">iwan.webdeveloper@gmail.com</a></p>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function (e) {
		$("#uploadForm").on('submit',(function(e) {
			e.preventDefault();
			var formData = new FormData(this);
			$.ajax({
	        	url: "upload.php",
				type: "POST",
				data:  formData,
				contentType: false,
	    	    cache: false,
				processData:false,
				success: function(data) {
					console.log('Sukses-',data);
					$("#targetPhoto").html(data);
			    },
			  	error: function() 
		    	{
		    		console.log('Error');
		    	} 	        
		   });
		}));
	});
</script>

</body>
</html>