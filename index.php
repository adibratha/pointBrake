<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Point Break</title>
    <!--  -->
    <link rel="stylesheet" href="assets/font/material-icons.css">
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--  -->
    <script src="assets/jquery/jquery.min.js"></script>
    <!--  -->
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
  </head>

<!-- ======================================================================= -->

  <body>
    <div class="nav-bar" id="nav-bar">
      <a href="index.php"><span class="logo"><img src="assets/img/logo.png"></span></a>
      <span class="nav">
        <ul>
          <a href="#"><li>ABOUT</li></a>
          <a href="#"><li>ABOUT</li></a>
          <a href="#"><li>ABOUT</li></a>
          <div class="burger" id="burger">
            <span id="burger-bot"></span>
          </div>
        </ul>
      </span>
    </div>

    <div class="mobile-nav" id="mobile-nav">
      <ul>
        <a href="#"><li>ABOUT</li></a>
        <a href="#"><li>ABOUT</li></a>
        <a href="#"><li>ABOUT</li></a>
      </ul>
    </div>

    <div class="con" id="con">
asdad
    </div>

    <div class="content">
      <?php include 'content/content.php' ?>
    </div>
  </body>

<!-- ======================================================================= -->

<!-- nav -->
<script type="text/javascript">
$(document).ready(function(){
    $(window).scroll(function(){
      if($(this).scrollTop() >=10){
        $('.nav-bar').css('background-color', 'blue');
      }else{
        $('.nav-bar').css('background-color', 'transparent')
      };
    });
});
</script>
<!-- burger -->
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('.burger').click(function() {
      if(!$('.burger').hasClass('cross'))
      $('.burger').addClass('cross');
    else
      $('.burger').removeClass('cross');
    });
  });
</script>
<!-- mobile menu -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#con").click(function(){
        $("#mobile-nav").slideUp("slow");
    });
});
</script>



</html>
