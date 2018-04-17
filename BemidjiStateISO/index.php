<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bemidji State ISO</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome CSS -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- CSS Animations -->
    <link href="css/animate.css" rel="stylesheet">

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'No. of students'],
          ['Nepal', 15],
          ['Ethiopia', 5],
          ['Canada', 10],
    		  ['Nigeria', 7],
    		  ['China', 18],
    		  ['Japan', 4],
    		  ['Saudi Arabia', 1],
    		  ['India', 1],
    		  ['England', 4],
    		  ['Germany', 1],
    		  ['Russia', 3],
        ]);

        var options = {colorAxis: {colors: [ '#b3ffb3','#009900']}};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>

  </head>

  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
      <div class="container">

		<a class="navbar-brand" href="#">
		<!-- hidden on sm

		<!-- hidden on /mdlg/xl-->
		<div class=".d-block .d-sm-none">
			<img src="https://www.bemidjistate.edu/mybsu/wp-content/themes/bsu2014/assets/mobile-logo-white-1x.png"  height="60"class="d-inline-block align-top" alt="">
		</div>

		</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link"  target="_blank" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#events">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Carousel -->
    <header>
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/0.jpg')">
            <div class="carousel-caption">
              <h3>49th Annual Festival of Nations: One Festival, Many Cultures </h3>
              <p>Location: Bemidji State University @ HMU Beaux Arts Ballroom</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/1.jpg')">
            <div class="carousel-caption">
              <h3>CDEI Opening Ceremony by President Hensrud</h3>
              <p>Bemidji State University Hobson Memorial Union</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/2.jpg')">
            <div class="carousel-caption">
              <h3>Chinese Music at Festival of lights 2017</h3>
              <p>ISO Event at AIRC 127 Gathering Place</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </header>

  <div id="about" class="free-space"> </div>
	<div>
			<!-- About US -->
			<div class="container">

				<h2 class="my-4 title">About Us</h1>

				<!--Section -->
				<div class="row">
					<div class="col-xs-12 col-lg-6">
					<div class="container-fluid">
							<p>The International Student Organisation (ISO) coordinates programs and encourages conversations on equity and cultural understanding at Bemidji State University
						. We empower students and employees to explore a deeper understanding of and respect for diversity in its many forms. This extends to everyone, regardless of religion, race, ethnicity, gender, age,
						sexual orientation, socio-economic status, physical ability and national or regional origin.</p>

							<p>The mission of the ISO at Bemidji State University is to
						provide a diversity, inclusive, quality and comprehensive educational experience for students from all religions, races, ethnicities,
						genders, ages, sexual orientations and countries. We engage the campus and surrounding communities to promote and advocate for
						diversity, equity, inclusion and multiculturalism in high education.</p>
					</div>
					</div>

				<!--World map -->
					<div class="col-xs-12 col-lg-6">
					<div id="regions_div" style="width:100%; min-height: 450px;"></div>
					</div>
				</div>
			</div>
			<!-- /.row -->

			<!-- Team -->
			<section id="team">
			<div class="container">

				<div class="row">
					<div class="col-lg-12 text-center">
					       <h2 class="my-4">Our Team</h2>
					</div>
				</div>
			<!-- member 1 -->
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="team-member">
						<img class="mx-auto rounded-circle" src="images/4.jpg" alt="">
						<h4>Dr. Brian Xiang</h4>
						<p>Advisor</p>
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a href="https://www.twitter.com">
								<i class="fa fa-twitter"></i>
								</a>
							</li>
						<li class="list-inline-item">
						<a href="https://www.facebook.com">
						<i class="fa fa-facebook"></i>
						</a>
						</li>
						<li class="list-inline-item">
						<a href="https://www.linkedin.com">
						<i class="fa fa-linkedin"></i>
						</a>
						</li>
						</ul>
					</div>
				</div>
			<!-- member 2 -->
			<div class="col-md-4 col-sm-6">
  			<div class="team-member">
    			<img class="mx-auto rounded-circle" src="images/5.jpg" alt="">
    			<h4>Jelina Basnet</h4>
    			<p>President</p>
    			<ul class="list-inline social-buttons">
      			<li class="list-inline-item">
      			<a href="https://www.twitter.com">
      			<i class="fa fa-twitter"></i>
      			</a>
    			</li>
      			<li class="list-inline-item">
        			<a href="https://www.facebook.com">
        			<i class="fa fa-facebook"></i>
        			</a>
      			</li>
      			<li class="list-inline-item">
        			<a href="https://www.linkedin.com">
        			<i class="fa fa-linkedin"></i>
        			</a>
      			</li>
    			</ul>
  			</div>
			</div>
			<!-- member 3 -->
			<div class="col-md-4 col-sm-6">
  			<div class="team-member">
      			<img class="mx-auto rounded-circle" src="images/6.jpg" alt="">
      			<h4>Aatish Balla</h4>
      			<p>Technical Director</p>
      			<ul class="list-inline social-buttons">
        			<li class="list-inline-item">
          			<a href="https://www.twitter.com">
          			<i class="fa fa-twitter"></i>
          			</a>
      			  </li>
        			<li class="list-inline-item">
          			<a href="https://www.facebook.com">
          			<i class="fa fa-facebook"></i>
          			</a>
        			</li>
        			<li class="list-inline-item">
          			<a href="https://www.linkedin.com">
          			<i class="fa fa-linkedin"></i>
          			</a>
        			</li>
      			</ul>
    			</div>
    		</div>
        <!-- member 3 end-->
  		</div>
		</div>
		</section>


      <div id="events" class="free-space"> </div>
			<!-- Events Section -->
			<div class="container" id="events">
  			<h2 class="my-4 title">Events</h2>
  			<div class="row">

  			<div class="col-lg-3 col-sm-6 portfolio-item">
    			<div class="card h-100">
    			<a href="#"><img class="card-img-top" src="images/event-0.PNG" alt=""></a>
    			<div class="card-body">
      			<h4 class="card-title">
      			<a href="events/event-1.php">Mindfulness Meditation with Buddha Monks</a>
      			</h4>
      			<p class="card-text">Bemidji State University HMU Crying Wolf </p>
    			</div>
    			</div>
			  </div>

  			<div class="col-lg-3 col-sm-6 portfolio-item">
    			<div class="card h-100">
      			<a href="#"><img class="card-img-top" src="images/event-1.PNG" alt=""></a>
      			<div class="card-body">
        			<h4 class="card-title">
        			<a href="events/event-2.php">Bemidji Area Low-Income, People of Color, and Women’s Leadership & Capacity Workshop</a>
        			</h4>
        			<p class="card-text">AIRC - Gathering Room 1500 Birchmont Dr. NE #21 </p>
      			</div>
    			</div>
  			</div>

  			<div class="col-lg-3 col-sm-6 portfolio-item">
    			<div class="card h-100">
      			<a href="#"><img class="card-img-top" src="images/0.jpg" alt=""></a>
      			<div class="card-body">
        			<h4 class="card-title">
        			<a href="events/event-3.php">49th Annual Festival of Nations: One Festival, Many Cultures</a>
        			</h4>
        			<p class="card-text">Bemidji State University HMU Beaux Arts Ballroom </p>
      			</div>
    			</div>
  			</div>

  			<div class="col-lg-3 col-sm-6 portfolio-item">
    			<div class="card h-100">
      			<a href="#"><img class="card-img-top" src="images/event-2.PNG" alt=""></a>
        		<div class="card-body">
          			<h4 class="card-title">
          			<a href="events/event-4.php">Gender & Other Biases in Student Evaluations</a>
          			</h4>
          			<p class="card-text">Bridgeman 100 1500 Birchmont Dr NE </p>
      			</div>
    			</div>
  			</div>

			</div>

			<div class="row">

  			<div class="col-lg-3 col-sm-6 portfolio-item">
    			<div class="card h-100">
    			<a href="#"><img class="card-img-top" src="images/event-3.PNG" alt=""></a>
    			<div class="card-body">
      			<h4 class="card-title">
      			<a href="events/event-5.php">Edit-A-Thon: Wikipedia Gender Gap</a>
      			</h4>
      			<p class="card-text">A.C. Clark Library (Room 327) 1500 Birchmont Dr. NE #28 </p>
    			</div>
    			</div>
  			</div>

  			<div class="col-lg-3 col-sm-6 portfolio-item">
    			<div class="card h-100">
      			<a href="#"><img class="card-img-top" src="images/event-4.PNG" alt=""></a>
      			<div class="card-body">
      			<h4 class="card-title">
      			<a href="events/event-6.php">TISH NORMAN: Becoming Outstanding Women</a>
      			</h4>
      			<p class="card-text">Hobson Memorial Union (Ballroom) 1500 Birchmont Drive NE #31</p>
    			</div>
    			</div>
  			</div>

  			<div class="col-lg-3 col-sm-6 portfolio-item">
    			<div class="card h-100">
      			<a href="#"><img class="card-img-top" src="images/event-5.PNG" alt=""></a>
      			<div class="card-body">
        			<h4 class="card-title">
        			<a href="events/event-7.php">In Memory of Joe Neumann Blood Drive</a>
        			</h4>
        			<p class="card-text">Crying Wolf Room Bemidji State University</p>
      			</div>
    			</div>
  			</div>

			</div>

			</div>

			<!-- *** CONTACT ***
			_________________________________________________________ -->
			<div id="contact"class="container contact">
        <h2 class="my-4 title">Contact Us</h2>
          <div class="row">
            <div class="col">
                  <form id="contact-form" method="post" action="contact_me.php">
                      <div class="messages"></div>

                      <div class="row">
                          <div class="col-md-6">
                              <input type="text"  id="name" name="name" class="form-control" placeholder="Your firstname *" required="required">
                          </div>
                          <div class="col-md-6">
                              <input type="text" name="surname" class="form-control" placeholder="Your lastname *" required="required">
                          </div>
                          <div class="col-md-6">
                              <input type="text" id="email" name="email" class="form-control" placeholder="Your email *" required="required">
                          </div>
                          <div class="col-md-6">
                              <input type="text" id="phone" name="phone" class="form-control" placeholder="Your phone">
                          </div>
                          <div class="col-md-12">
                              <textarea id="message" name="message" class="form-control" placeholder="Message for us *" rows="4" required="required"></textarea>
                          </div>
                          <div class="col-md-12 text-center">
                              <input type="submit" class="btn btn-primary btn-lg" value="Send message">
                          </div>
                      </div>
                  </form>
              </div>
        </div>
      </div>

	 </div>

   <div id="footer" class="free-space"> </div>

    <!-- Footer -->
    <footer class="py-5">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018 BSU International Program Center</p>

      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>

</html>
