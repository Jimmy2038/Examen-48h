<?php if($_SESSION['userid']==null)  redirect(base_url('welcome'));  ?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">
        
        <title>About - Progressus Bootstrap template</title>

        <link rel="shortcut icon" href="<?php echo base_url('assets/images/gt_favicon.png')?>">
        
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.css" media="screen')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">

        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
        <!-- style css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/ajoutObjet.css');?>" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
        <!-- Responsive-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>">
        <!-- fevicon -->
        <link rel="icon" href="<?php echo base_url('assets/images/fevicon.png')?>" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css')?>">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
        <!-- font awesome -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--  -->
        <!-- owl stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
        <link rel="stylesoeet" href="<?php echo base_url('assets/css/owl.theme.default.min.css')?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body class="home">
    <?php $this->load->view('pages/header'); ?>
    <?php $this->load->view('pages/'.$content); ?>
    <?php $this->load->view('pages/footer'); ?>
	
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/js/headroom.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jQuery.headroom.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/template.js')?>"></script>

</html>    