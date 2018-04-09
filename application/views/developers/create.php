<!DOCTYPE html>
<html>
	<style type="text/css">
		
	</style>
	<body>

		<?php echo validation_errors(); ?>

		<?php echo form_open_multipart('developers/create'); ?>
		<form enctype="multipart/form-data">
			<label for="file">Profile Picture</label><br>
		    <input type="file" name="filetoupload"		value="<?php echo set_value('filetoupload') ;?>" />
		    <br /><br />

		    <label for="title">Title</label><br>
		    <input type="input" name="title" 			value="<?php echo set_value('title') ;?>" placeholder="Mr/Mrs/Miss/Dr./" />
		    <br /><br />

		    <label for="name">Name</label><br>
		    <input type="input" name="developer_name" 	value="<?php echo set_value('developer_name') ;?>" placeholder="John Doe" />
		    <br /><br />

		    <label for="job">Job Description</label><br>
		    <input type="input" name="job_description" 	value="<?php echo set_value('job_description') ;?>" placeholder="Head Developer" />
		    <br /><br />

		    <label for="ID number">ID Number</label><br>
		    <input type="input" name="id_number" 		value="<?php echo set_value('id_number') ;?>" placeholder="23562356" />
		    <br /><br />

		    <label for="phone number">Phone Number</label><br>
		    <input type="input" name="phone_number" 	value="<?php echo set_value('phone_number') ;?>" placeholder="eg. +254700000000" />
		    <br /><br />

		    <label for="email">Email</label><br>
		    <input type="input" name="email" 			value="<?php echo set_value('email') ;?>" placeholder="e.g. johndoe@hotmail.com" />
		    <br /><br />

		    <label for="milestone">Milestone</label><br>
		    <input type="textarea" name="milestone" 	value="<?php echo set_value('milestone') ;?>" placeholder="work experience, projects e.t.c." />
		    <br /><br />

		    <label for="adress">Physical Address</label><br>
		    <input type="input" name="physical_address" value="<?php echo set_value('physical_address') ;?>" placeholder="Juja, Kiambu"/>
		    <br /><br />

		    <input type="submit" name="submit" value="Submit" />
		</form>
	</body>
</html>