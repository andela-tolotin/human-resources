<!--banner-->
<div class="banner">
    <div class="header"><!--header-->
        <div class="container">     
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a  href="index.html">MAX</a></h1>
                </div>
                <!--navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="#about" class="scroll">About</a></li>
                        <li><a href="#features" class="scroll">Features</a></li>
                        <li><a href="#team" class="scroll">Team</a></li>
                        <li><a href="#portfolio" class="scroll">Portfolio</a></li>
                        <li><a href="#contact" class="scroll">Contact Us</a></li>
                    </ul>   
                    <div class="clearfix"> </div>   
                </div>
            </nav>
        </div>
        <div class="cd-main-header">
            <ul class="cd-header-buttons">
                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
            </ul> <!-- cd-header-buttons -->
        </div>
        <div id="cd-search" class="cd-search">
            <form action="#" method="post">
                <input name="Search" type="search" placeholder="Search...">
            </form>
        </div>
    </div>
    <!--//header-->
    <!--banner-text-->
    <div class="banner-text">
        <!--banner Slider starts Here-->
        <script src="{{ URL::asset('js/responsiveslides.min.js') }}"></script>
        <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 3
                  $("#slider3").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                  },
                  after: function () {
                      $('.events').append("<li>after event fired.</li>");
                  }
              });
                  
              });
          </script>
          <!--//End-slider-script-->
          <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <h2>We Give the best solutions<br>for Improvement</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi est.</p>
                    <a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">Register Now</a>
                </li>
                <li>
                    <h3>Sollicitudin feugiat blandit<br>Quisque feugiat.</h3>
                    <p>Duis euismod massa ut sem fringilla blandit ipsum.</p>
                    <a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">Register Now</a>
                </li>
                <li>
                    <h3>Nam erat purus, malesuada<br> Venenatis ut velit.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi est.</p>
                    <a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">Register Now</a>
                </li>
            </ul>
        </div>
    </div>
    <!--//banner-text-->
</div>
<!--//banner-->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body login-modal">
        <div class="clearfix"></div>
        <div id="social-icons-conatainer">
          <div class="modal-body-left">
            <form class="col-md-12 " method="POST" id="signUpForm">
              {!! csrf_field() !!}
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="username" id="username">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" name="email" id="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm password" name="cpassword" id="cpassword">
            </div>
            <div class="preloader-wrapper small active" style="display:none;">
                <img src="{{ URL::to('/') }}/images/preloader.gif" title="preloader" alt="preloader">
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary" id="signup">Sign up</button>
          </div>
      </form>
  </div>
  <div class="modal-body-right">
      <div class="modal-social-icons">
        <a href="{{ url('/auth/facebook') }}" class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Sign up with Facebook </a>
        <a href="{{ url('/auth/twitter') }}" class="btn btn-default twitter"> <i class="fa fa-twitter modal-icons"></i> Sign up with Twitter </a>
        <a href="/login" class="btn btn-default border custom-button-width">Log In</a>
    </div> 
</div>  
<!-- <div id="center-line"></div> -->
</div>                                                        
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="modal-footer login_modal_footer">
</div>
</div>
</div>
</div>