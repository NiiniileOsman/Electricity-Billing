<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Electric Management System</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/download.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">


  <link rel="stylesheet" href="OurTeam/styles.css"/>

</head>
<body style="background: #fff">

		<?php
        require_once('includes/sidebar.php');
		?>


		<div class="main-header">
		<?php
        require_once('includes/topbar.php');
		?>
		</div>



      <br /> <br /> <br /> <br />
	  <div class="wrapper">
    <h1 style="color:black">Our Team</h1>
    <div class="our_team">

      <div class="team_member">
        <div class="member_img">
          <img src="OurTeam/su.jpg" alt="our_team"/>
          <div class="social_media">
            <div class="facebook item"><i class="fab fa-facebook-f"></i></div>
            <div class="twitter item"><i class="fab fa-twitter"></i></div>
            <div class="instagram item"><i class="fab fa-instagram"></i></div>
          </div>
       </div>
       <h3>Suleiman Mohammed Mahdi</h3>
           <span>C118751</span>
       <p>He is the Leader of the group which plays a major role in the development of this Website.</p>
   </div>



   <div class="team_member">
    <div class="member_img">
      <img src="OurTeam/ma.jpg" alt="our_team"/>
      <div class="social_media">
        <div class="facebook item"><i class="fab fa-facebook-f"></i></div>
        <div class="twitter item"><i class="fab fa-twitter"></i></div>
        <div class="instagram item"><i class="fab fa-instagram"></i></div>
      </div>
   </div>
   <h3>Mahad Ali Siad</h3>
       <span>C118226</span>
   <p>He is one of the Man who designed this beautiful Website day and night with a big hand.</p>
</div>  

        <div class="team_member">
          <div class="member_img">
             <img src="OurTeam/1.jpg" alt="our_team"/>
            <div class="social_media">
               <div class="facebook item"><i class="fab fa-facebook-f"></i></div>
               <div class="twitter item"><i class="fab fa-twitter"></i></div>
               <div class="instagram item"><i class="fab fa-instagram"></i></div>
             </div>
          </div>
          <h3>Mohammed Hussein Ali</h3>
              <span>C118209</span>
          <p>He is one of the backbones of the group that has played a major role in Making This Website.</p>
        </div>

            
    </div>
</div>	
</div>
</div>	




		<?php
        require_once('includes/footer.php');
		?>
		

	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>

	
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>

	
</body>
</html>