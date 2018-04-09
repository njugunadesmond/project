<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php echo $error;?>

		<?php echo form_open_multipart('file_upload/upload_form');?>
		<form>
			<input type="file" name="userfile" size="20" />
			<br><br>

			<label for="username">Username:</label>
			<input type="text" name="username" placeholder="John Doe">

			<br /><br />

			<input type="submit" value="upload" />

		</form>
	</body>
</html>