<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ALAN SAJI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SERVICES</a>
        </li>
        
         <li class="nav-item">
          <a class="nav-link" href="about.php">ABOUT</a>
        </li>

    <li class="nav-item">
          <a class="nav-link" href="#">CONTACT</a>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/php3.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/php4.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/php5.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">ABOUT US</h2>
	</div>
<div class="container-fluid">	
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
<img src="images/php6.jpg" class="aboutimage">

	</div>
		<div class="col-lg-6 col-md-6 col-12">
<h2 class="display-4">COVID-19 VACCINE</h2>
<p class="py-4">The COVID vaccine was launched on 16th January, 2021. The first group includes healthcare and frontline workers. The second group to receive COVID 19 vaccine will be persons over 50 years of age and persons under 50 years with comorbid conditions.</p>
<a href="https://www.mohfw.gov.in/covid_vaccination/vaccination/index.html" class="btn btn-success">CHECK HERE</a>
	</div>

		</div>

</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">VACCINES IN INDIA</h2>
	</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<div class="card" >
				<img class="card-img-top" src="images/php7.jpg" alt="Card image">
				
				<div class="card-body">
					<h4 class="card-title">COVISHIELD VACCINE</h4>
					<p class="card-text">manufactured in INDIA</p>
					<a href="https://mumbaimirror.indiatimes.com/in-photos-india-begins-dry-run-of-covid-19-vaccine/photostory/80072922.cms" class="btn btn-primary">See Profile</a>
				</div>
			</div>
			
		</div>

		<div class="col-lg-4 col-md-4 col-12">
			<div class="card" >
				<img class="card-img-top" src="images/php11.jpg" alt="Card image">
				
				<div class="card-body">
					<h4 class="card-title">CO-VACCINE</h4>
					<p class="card-text">manufactured in INDIA</p>
					<a href="https://economictimes.indiatimes.com/topic/coronavirus-vaccine-in-india" class="btn btn-primary">See Profile</a>
				</div>
			</div>
			
		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<div class="card" >
				<img class="card-img-top" src="images/php9.jpg" alt="Card image">
				
				<div class="card-body">
					<h4 class="card-title">COVISHIELD VACCINE</h4>
					<p class="card-text">manufactured in INDIA</p>
					<a href="https://www.businesstoday.in/latest/trends/india-rolls-out-covid-19-vaccination-drive-check-out-pics/story/428161.html" class="btn btn-primary">See Profile</a>
				</div>
			</div>
			
		</div>
		
	</div>
	
</div>
</section>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">GALLERY</h2>
	</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/pp.jpg" class="img-fluid pb-3">
		</div>
	</div>
</div>



</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">GALLERY</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>email</label>
				<input type="email" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>QUERY</label>
				<textarea class="form-control" name="comments">
					
				</textarea>
			</div>

<button type="submit" class="btn btn-success">Submit</button>


		</form>


	</div>
</section>
<footer class="bg-dark text-white text-center">
	<p class="p-3 bg-dark text-white">@ALANSAJI WEB DEVELOPING PRODUCTION</p>
		<p>services</p>
		<h5>contact</h5>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>