<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

		<?php foreach ($developers as $developers_info): ?>
			<?php echo img(base_url('uploads/developers/'.$developers_info['img'])); ;?>
	        <h3><?php echo $developers_info['title'];?> <?php echo $developers_info['name'];?></h3>
	        <div class="main">
	        	<?php echo $developers_info['job_description'];?>
	        </div>
	        <p><a href="<?php echo site_url('developers/'.$developers_info['slug']); ?>">View profile</a></p>
	        <hr>
		<?php endforeach; ?>

	</body>
</html>