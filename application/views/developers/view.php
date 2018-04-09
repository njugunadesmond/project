<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<style>
		h1, h2, h3 {
			text-align: center;
		}
	</style>
	<body>
		<?php
			echo img(base_url('uploads/developers/'.$developers_info['img']));
			echo '<h1>'.$developers_info['name'].'</h1>';
			echo '<h2>'.$developers_info['job_description'].'</h2>';
			echo "<h4>ID Number: </h4>", $developers_info['id_number'], " ", '<br/>';
			echo "<h4>Milestone: </h4>", $developers_info['milestone'];
			echo "<h3><ins>CONTACTS</ins></h3>";
			echo "<h4>Phone Number: </h4>",$developers_info['phone_number']," ", '<br/>';
			echo "<h4>Email Address: </h4>", $developers_info['email'], " ", '<br/>';
			echo "<h4>Physical Address: </h4>",$developers_info['address'];
		?>
	</body>
</html>