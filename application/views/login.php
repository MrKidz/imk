<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url().'assets/Admin/css/font-face.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/font-awesome-4.7/css/font-awesome.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/font-awesome-5/css/fontawesome-all.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/mdi-font/css/material-design-iconic-font.min.css'?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url().'assets/Admin/vendor/bootstrap-4.1/bootstrap.min.css'?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url().'assets/Admin/vendor/animsition/animsition.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/wow/animate.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/css-hamburgers/hamburgers.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/slick/slick.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/select2/select2.min.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/Admin/vendor/perfect-scrollbar/perfect-scrollbar.css'?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url().'assets/Admin/css/theme.css'?>" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
					
		<?php
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "<div class='alert alert-danger alert-danger'>";
					echo $this->session->flashdata('alert');
					echo "</div>";
				}else if($_GET['pesan'] == "logout"){
					if($this->session->flashdata())
					{
						echo "<div class='alert alert-danger alert-success'>";
						echo $this->session->flashdata('Anda Telah Logout');
						echo "</div>";
					}
					//echo "<div class='alert alert-success'>Anda telah logout.</div>";
				}else if($_GET['pesan'] == "belumlogin"){
					if($this->session->flashdata())
					{
						echo "<div class='alert alert-danger alert-primary'>";
						echo $this->session->flashdata('alert');
						echo "</div>";
					}
					//echo "<div class='alert alert-primary'>Silahkan login dulu.</div>";
				}
			}else{
				if($this->session->flashdata())
				{
					echo "<div class='alert alert-danger alert-message'>";
					echo $this->session->flashdata('alert');
					echo "</div>";
				}
			}
		?>
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url().'assets/Admin/images/icon/logo.png'?>" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?php echo base_url().'welcome/login' ?>" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="admin_username" placeholder="Username">
									<?php echo form_error('username'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password"name="admin_password" placeholder="Password">
									<?php echo form_error('password'); ?>
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <!-- Jquery JS-->
    <script src="<?php echo base_url().'assets/Admin/vendor/jquery-3.2.1.min.js'?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url().'assets/Admin/vendor/bootstrap-4.1/popper.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/Admin/vendor/bootstrap-4.1/bootstrap.min.js'?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url().'assets/Admin/vendor/slick/slick.min.js'?>">
    </script>
    <script src="<?php echo base_url().'assets/Admin/vendor/wow/wow.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/Admin/vendor/animsition/animsition.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/Admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js'?>">
    </script>
    <script src="<?php echo base_url().'assets/Admin/vendor/counter-up/jquery.waypoints.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/Admin/vendor/counter-up/jquery.counterup.min.js'?>">
    </script>
    <script src="<?php echo base_url().'assets/Admin/vendor/circle-progress/circle-progress.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/Admin/vendor/perfect-scrollbar/perfect-scrollbar.js'?>"></script>
    <script src="<?php echo base_url().'assets/Admin/vendor/chartjs/Chart.bundle.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/Admin/vendor/select2/select2.min.js'?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url().'assets/Admin/js/main.js'?>"></script>

</body>

</html>
<!-- end document-->
