<!DOCTYPE html>
<html>
<head>
	<title>Upload file</title>
</head>
<body>
	<form action="upload" id="upload" enctype="multipart/form-data">
		<input type="file" name="file[]"><br />
		<input type="submit">
	</form>			

	<script>
		var form = document.getElementById('upload');
		var request = new XMLHttpReques();

		form.addEventListener('submit', function(e){
			e.preventDefault();
			var formdata = new FormData(form);

			request.open('post', '/upload');
			request.addEventListener("load", transferComplete);
			request.send(formdata);
		});

		function transferComplete(data){
			console.log(data.currentTarget.response);
		}
	</script>
</body>
</html>