<!DOCTYPE html>
<html lang="en">
<head>
  <title>Course</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/course.css">
   <script>
   <script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script>
   </script>
</head>
<body style="background:#F4F4F4;">
<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="images/logo_gradient.png"/></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Geri bildirim</a></li>
						<li><a href="#">Yardım</a></li>
						<li class="divider"></li>
						<li><a href="#">Ayarlar</a></li>
						<li><a href="#exit">Çıkış yap</a></li>
					</ul>
				</li>
				<li class="active"><a href="#">Flavido Classes <span class="sr-only"></span></a></li>
				<li class="active"><a href="#">Hindi Classes <span class="sr-only"></span></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i> All Couress <span class="badge">0</span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#"><i class="fa fa-fw fa-tag"></i> <span class="badge">Hindi</span> sayfası</a></li>
						<li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Music</span> sayfasında iletiniz beğenildi</a></li>
						<li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Video</span> sayfasında iletiniz beğenildi</a></li>
						<li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Game</span> sayfasında iletiniz beğenildi</a></li>
					</ul>
				</li>
				<li class="active"><a href="#">Login <span class="sr-only">(current)</span></a></li>
				<li class="active"><a href="#">Signin <span class="sr-only">(current)</span></a></li>
			</ul>
    <form class="navbar-form navbar-right" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
    </form>
		</div>
	</div>
</nav>
  <!--header end-->
 <div class="container-fluid">
   <div class="row">
     <div class="col-sm-12 search_banner">
	 <h3>Search results for "Tutorials"</h3>
	 </div>
   </div>
   <!--end banner-->
   <div class="container">
     <div class="row">
         <div class="col-md-2 dropdown btn_div">
		 <button type="button" class="btn dropdown-toggle" id="drpDown" data-toggle="dropdown">
            CATEGORIES <span class="caret"></span>
         </button>
        
          <ul class="dropdown-menu multi-level drp_menu" role="menu" aria-labelledby="drpDown">
            <li><a>Menu Option 1</a></li>
            <li><a>Menu Option 2</a></li> 
		    <li><a>Menu Option 1</a></li>
            <li><a>Menu Option 2</a></li> 
          </ul>
         </div>
		 <!--left bnt en-->
         <div class="col-md-2 dropdown btn_div pull-right">
		 <button type="button" class="btn dropdown-toggle" id="drpDown" data-toggle="dropdown">
            MOST REVELANT <span class="caret"></span>
         </button>
        
          <ul class="dropdown-menu multi-level drp_menu" role="menu" aria-labelledby="drpDown">
            <li><a>Menu Option 1</a></li>
            <li><a>Menu Option 2</a></li> 
		    <li><a>Menu Option 1</a></li>
            <li><a>Menu Option 2</a></li> 
          </ul>
         </div>
	 </div>
	 <!--end btn part-->
	 <div class="row">
	   <div class="col-sm-12  full_box">
	     <div class="row">
		   <div class="col-sm-3">
		     <a href="#"><img src="images/recover_test_series.jpg" alt="pic1" class="img-responsive" /></a>
		   </div>
		   <div class="col-sm-7">
		     <h4 class="course_description">PHP for Beginners -Become a PHP Master - Project Included</h4>
			 <p class="small"><a href="#">Edwin Diaz• Software & Web Engineer, Coach & Premium Udemy Instructor</a></p>
			 <p class="small"><b>PHP</b> for Beginners: learn everything you need to become a professional <b>PHP</b> developer with practical exercises & projects.</p>
			 <div class="col-xs-12" style="height:40px;"></div>
			 <p>286 lectures30.5 hoursAll Levels</p>
		   </div>
		   <div class="col-sm-2">
			  <h3>₹640 <small><strike>₹12,800</strike></small></h3>
			  <p class="small"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
			  <i class="fa fa-star" aria-hidden="true"></i>
			  4.5</p>
			  <p>4,364 ratings)</p>
		   </div>
		 </div>
	   </div>
	 </div>
	 <!--first row end-->
	 	 <div class="row">
	   <div class="col-sm-12  full_box">
	     <div class="row">
		   <div class="col-sm-3">
		     <a href="#"><img src="images/recover_test_series.jpg" alt="pic1" class="img-responsive" /></a>
		   </div>
		   <div class="col-sm-7">
		     <h4 class="course_description">PHP for Beginners -Become a PHP Master - Project Included</h4>
			 <p class="small"><a href="#">Edwin Diaz• Software & Web Engineer, Coach & Premium Udemy Instructor</a></p>
			 <p class="small"><b>PHP</b> for Beginners: learn everything you need to become a professional <b>PHP</b> developer with practical exercises & projects.</p>
			 <div class="col-xs-12" style="height:40px;"></div>
			 <p>286 lectures30.5 hoursAll Levels</p>
		   </div>
		   <div class="col-sm-2">
			  <h3>₹640 <small><strike>₹12,800</strike></small></h3>
			  <p class="small"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
			  <i class="fa fa-star" aria-hidden="true"></i>
			  4.5</p>
			  <p>4,364 ratings)</p>
		   </div>
		 </div>
	   </div>
	 </div>
	 <!--2nd row-->
	 	 <div class="row">
	   <div class="col-sm-12  full_box">
	     <div class="row">
		   <div class="col-sm-3">
		     <a href="#"><img src="images/recover_test_series.jpg" alt="pic1" class="img-responsive" /></a>
		   </div>
		   <div class="col-sm-7">
		     <h4 class="course_description">PHP for Beginners -Become a PHP Master - Project Included</h4>
			 <p class="small"><a href="#">Edwin Diaz• Software & Web Engineer, Coach & Premium Udemy Instructor</a></p>
			 <p class="small"><b>PHP</b> for Beginners: learn everything you need to become a professional <b>PHP</b> developer with practical exercises & projects.</p>
			 <div class="col-xs-12" style="height:40px;"></div>
			 <p>286 lectures30.5 hoursAll Levels</p>
		   </div>
		   <div class="col-sm-2">
			  <h3>₹640 <small><strike>₹12,800</strike></small></h3>
			  <p class="small"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
			  <i class="fa fa-star" aria-hidden="true"></i>
			  4.5</p>
			  <p>4,364 ratings)</p>
		   </div>
		 </div>
	   </div>
	 </div>
	 
	 
   </div>
 </div>



</body>
</html>
