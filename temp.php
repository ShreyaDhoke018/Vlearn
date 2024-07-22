<!DOCTYPE html>
<html>
<head>
	
	

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>File Upload PHP Script - Pure Coding</title>
</head>
<body>
	<div class="file__upload">
		<div class="header">
			<p><i class="fa"></i><span><span>up</span>load</span></p>			
		</div>
		<form action="try.php" method="POST" enctype="multipart/form-data" class="body">
			
			<input type="file" name="file[]" id="upload" multiple  required>
			<label for="upload">
				<i class="fa "></i>
				<p>
					<strong>Drag and drop</strong> files here<br>
					or <span>browse</span> to begin the upload
				</p>
			</label>
			<button name="upload" class="btn">Upload</button>
			
		</form>
	</div>
</body>
</html


