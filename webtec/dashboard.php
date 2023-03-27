<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap core CSS -->
    <link href="cyborg/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="cyborg/assets/css/fontawesome.css">
    <link rel="stylesheet" href="cyborg/assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="cyborg/cyborg/assets/css/owl.css">
    <link rel="stylesheet" href="cyborg/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>
<body>
    <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="cyborg/index.php" class="logo">
                        <img src="cyborg/assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="cyborg/index.php">Home</a></li>
                        <li><a href="cyborg/browse.php">Browse</a></li>
                        <li><a href="cyborg/details.php">Details</a></li>
                        <li><a href="cyborg/streams.php">Streams</a></li>
                        <li><a href="dashboard.php" class="active">Profile <img src="cyborg/assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="main-profile ">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="cyborg/assets/images/profile.jpg" alt="" style="border-radius: 23px;">
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                      <span>Offline</span>
                      <h4><?php echo $_SESSION['username']; ?></h4>
                      <p>You Haven't Gone Live yet. Go Live By Touching The Button Below.</p>
                      <div class="main-border-button">
                        <a href="#">Start Live Stream</a>
                         <a href="logout.php">Logout</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <ul>
                      <li>Games Downloaded <span>3</span></li>
                      <li>Friends Online <span>16</span></li>
                      <li>Live Streams <span>None</span></li>
                      <li>Clips <span>29</span></li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="clips">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="heading-section">
                            <h4><em>Your Most Popular</em> Clips</h4>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="cyborg/assets/images/clip-01.jpg" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>First Clip</h4>
                              <span><i class="fa fa-eye"></i> 250</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="cyborg/assets/images/clip-02.jpg" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>Second Clip</h4>
                              <span><i class="fa fa-eye"></i> 183</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="cyborg/assets/images/clip-03.jpg" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>Third Clip</h4>
                              <span><i class="fa fa-eye"></i> 141</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="cyborg/assets/images/clip-04.jpg" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>Fourth Clip</h4>
                              <span><i class="fa fa-eye"></i> 91</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="main-button">
                            <a href="#">Load More Clips</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class="gaming-library profile-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Your Gaming</em> Library</h4>
              </div>
              <div class="item">
                <ul>
                  <li><img src="cyborg/assets/images/game-01.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Dota 2</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>24/08/2036</span></li>
                  <li><h4>Hours Played</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li><img src="cyborg/assets/images/game-02.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Fortnite</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>22/06/2036</span></li>
                  <li><h4>Hours Played</h4><span>745 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li><img src="cyborg/assets/images/game-03.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>21/04/2022</span></li>
                  <li><h4>Hours Played</h4><span>632 H 46 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>

                  <!DOCTYPE html>
<html>

<head>
<title>CRUD Ajax</title>
<link type="text/css" rel="stylesheet" href="LINK_TO/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="LINK_TO/bootstrap-themes.css" />
</head>

<body>
<div class="container-fluid" style="padding: 0px; margin: 0px;">
<div class="jumbotron">
 <div class="gaming-library profile-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Your Gaming</em> Update</h4>
</div>
</div>
<div class="container" style="padding-top: 25px;">
<div class="row">
<div class="col-md-12">
<div class="pull-right">
<button class="btn btn-success" id="show-add">Add New Game</button>
</div>
<div id="link-add" class="form-inline">
<div class="form-group col-md-3">
<input type="text" name="name" id="name" placeholder="Game" class="form-control" required />
</div>
<div class="form-group col-md-3">
<input type="text" name="username" id="username" placeholder="Date Added" class="form-control" required/>
</div>
<div class="form-group col-md-3">
<input type="text" id="password" name="password" placeholder="Ratings" class="form-control" required />
</div>
<div class="form-group col-md-3">
<button type="button" class="btn btn-primary" id="add" name="add">Add Record</button>
<button type="button" href="javascript:void(0);" class="btn btn-default" id="cancel" name="add" onclick="$('#link-add').slideUp(400);$('#show-add').show(600);">Cancel</button>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div id="records_content"></div>
<br>
<div class="col-md-offset-1 col-md-10" id="table_content">
</div>
</div>
</div>
</div>
<!-- <script src="js/jquery-2.2.0.min.js"></script> -->
<script
  src="https://code.jquery.com/jquery-2.2.0.min.js"
  integrity="sha256-ihAoc6M/JPfrIiIeayPE9xjin4UWjsx2mjW/rtmxLM4="
  crossorigin="anonymous"></script>
<script src="LINK_TO/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="app.js"></script> -->
<script type="text/javascript">
$(document).ready(function() {

$.get("view.php", function(data) {
$("#table_content").html(data);
});

$('#link-add').hide();

$('#show-add').click(function() {
$('#link-add').slideDown(500);
$('#show-add').hide();
});

$('#add').click(function() {
var name = $('#name').val();
var username = $('#username').val();
var password = $('#password').val();

$.ajax({
url: "add.php",
type: "POST",
data: { name: name, username: username, password: password },
success: function(data, status, xhr) {
$('#name').val('');
$('#username').val('');
$('#password').val('');
$.get("view.php", function(html) {
$("#table_content").html(html);
});
$('#records_content').fadeOut(1100).html(data);
},
error: function() {
$('#records_content').fadeIn(3000).html('<div class="text-center">error here</div>');
},
beforeSend: function() {
$('#records_content').fadeOut(700).html('<div class="text-center">Loading...</div>');
},
complete: function() {
$('#link-add').hide();
$('#show-add').show(700);
}
});
});
});
</script>
</body>

</html>  
                </ul>
              </div>
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>

  

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        
        
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="cyborg/vendor/jquery/jquery.min.js"></script>
  <script src="cyborg/vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="cyborg/assets/js/isotope.min.js"></script>
  <script src="cyborg/assets/js/owl-carousel.js"></script>
  <script src="cyborg/assets/js/tabs.js"></script>
  <script src="cyborg/assets/js/popup.js"></script>
  <script src="cyborg/assets/js/custom.js"></script>

    
</body>
</html>
