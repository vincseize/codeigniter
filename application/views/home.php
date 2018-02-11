<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>my_css/bootstrap3.3.5.min.css" />
<!-- 	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>my_css/font-awesome.css" />  -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>my_css/font-awesome.min.css" />  
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>my_css/my_css.css" /> <!-- after bootstrap !important -->

	<script src="<?php echo base_url()?>my_js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url()?>my_js/bootstrap3.3.5.min.js"></script>
	<script src="<?php echo base_url()?>my_js/readMoreJS.min.js"></script>

	<?php 
	foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>

</head>

<body>
	<header>
	    <div id="header">
	        <?php
	        	require_once(APPPATH.'libraries/Mobile_Detect.php');
				require_once('login.php'); 
				if(isset($_GET['logout'])){unset($_SESSION['password']); header("Location: " . base_url() ); }
	          	$this->load->view('header');
	        ?>
	    </div>
	</header>
	<section id="section-container">
	    <!-- Beginning content -->
	     <div id="section-container--content">
	        <?php 
				// echo $output; 
				$this->load->view('blog');
	        ?>
	     </div>  
	    <!-- End of content --> 
	</section>
	<footer>
	    <div id="footer">
	        <?php
				$this->load->view('footer');
	        ?>
	    </div>
	</footer>
</body>

</html>
