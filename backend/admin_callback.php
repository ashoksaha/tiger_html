<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/own.css">
  <script src="js/jquery.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
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
				<li class="active"><a href="#">Dashboard <span class="sr-only"></span></a></li>
				<li class="active"><a href="#">LMS <span class="sr-only"></span></a></li>
				<li class="active"><a href="#">Student <span class="sr-only">(current)</span></a></li>
				<li class="active"><a href="#">Billing <span class="sr-only">(current)</span></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i> <b>Praveen</b> <span class="badge">1</span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dashboard_pic text-center">
						  <img src="images/dash_pic.png"/>
						</li>
						<li class="dashboard_name text-center"><strong>PRAVEEN DIXIT</strong></li>
						<li class="text-center">Praveendixit@gamial.com</li>
						<li class="dashboard_btn text-center"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>
						<li class="dashboard_btn text-center"><a href="#">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!--header-->
<div class="conatiner-fluid dashboard_page">
  <div class="row">
    <div class="col-sm-3 col-sm-offset-1">
	  <div class="row">
	    <div class="col-sm-5">
		 <img src="images/mentor.png" class="img-responsive das_mentor_pic" alt="dsahboardpic"/>
		</div>
		<div class="col-sm-7">
		 <h1 class="das_title">
		 Chokkalingam
		 </h1>
		 <p class="view_profile text-center"><a href="#">View Profile</a></p>
		</div>
	  </div>
	</div>
	<div class="col-sm-1 col-sm-offset-5">
        <button type="button" class="btn btn-primary btn-lg pull-right das_ins_btn">Admin</button>
	</div>
  </div>
</div>
<!--end dasboar banner end-->
<div class="container main-container">

    <div class="col-md-9 content">
        <div class="panel panel-default">
        	<div class="panel-heading">
        		<h2 class="lms">LMS<small> Callback</small></h2>
				<div class="row">
				  <div class="col-sm-9 admin_course_searchbar">
				      <div id="custom-search-input">
                         <div class="input-group col-md-12">
                            <input type="text" class="  search-query form-control" placeholder="Search Course" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                       <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </span>
                          </div>
                      </div>
				   </div>
				  <div class="col-sm-3">
				    <a class="btn-clean pull-right" href="add_new_course.php">
                     <i class="fa fa-plus" aria-hidden="true"></i>&nbsp; &nbsp;Add New
                     </a>
				  </div>
				</div>
        	</div>
        	<div class="panel-body">
               <ul class="nav nav-tabs">
                 <li class="active"><a data-toggle="tab" href="#category_ActiveCourse">Active Courses</a></li>
                 <li><a data-toggle="tab" href="#categoryinActive">InActive Courses</a></li>
               </ul>

              <div class="tab-content">
			   
                 <div id="category_ActiveCourse" class="tab-pane fade in active">
				  <!--table-->
                   <table class="table table-bordered">
                    <thead>
                      <tr>
                      <th>Sn.</th>
                      <th>Name</th>
                      <th>Email</th>
					  <th>Mobile</th>
					  <th>Requset Date</th>
					  <th>Course</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td>1.</td>
                      <td>Prashant</td>
                      <td>Prashantthapa901@gamil.com</td>
					  <td>991209808</td>
					  <td>2017-05-16</td>
					  <td>Essay Foundation Classes</td>
                      </tr>
                      <tr>
                      <td>3.</td>
                      <td>Moe</td>
                      <td>mary@example.com</td>
					  <td>john@example.com</td>
					  <td>john@example.com</td>
					  <td>john@example.com</td>
                      </tr>
                      <tr>
                      <td>4.</td>
                      <td>Dooley</td>
                      <td>july@example.com</td>
					  <td>john@example.com</td>
					  <td>john@example.com</td>
					  <td>john@example.com</td>
                      </tr>
                    </tbody>
                   </table>
				  <!--table-->
                 </div>
                 <div id="categoryinActive" class="tab-pane fade">
                   <h3>Coming Soon</h3>
                   <p>Currently no inactive courses categories..</p>
                 </div>
               </div>
        	</div>
        </div>
  	</div>
	<!--sidebar-->
	 <div class="col-md-2 col-md-offset-1 sidebar">
  	  <div class="row">
	<!-- uncomment code for absolute positioning tweek see top comment in css -->
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">
					<li class="active"><a href="admin_course.php"><span class="glyphicon glyphicon-dashboard"></span> Courses</a></li>
					<li><a href="admin_categories.php"><span class="glyphicon glyphicon-dashboard"></span></span> Categories</a></li>
					<li><a href="admin_allunits.php"><span class="glyphicon glyphicon-dashboard"></span></span> All Units</a></li>
					<li><a href="admin_callback.php"><span class="glyphicon glyphicon-dashboard"></span></span> Callback Request</a></li>
					<li><a href="admin_course_review.php"><span class="glyphicon glyphicon-dashboard"></span></span> Course Review</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-dashboard"></span></span> Settings</a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>
</div>

 </div>


<!--footer start here-->
<div class="container-fluid footer">
  <div class="row">
    <div class="col-md-3 col-sm-6 col-lg-3 col-xs-12">
	<h3 class="fot_title1">Help</h3>
	 <ul>
	   <li><a href="#">Exam Help Center</a></li>
	   <li><a href="#">Courses Offered</a></li>
	   <li><a href="#">Privacy Policy</a></li>
	   <li><a href="#">Shipping Policy</a></li>
	   <li><a href="#">Cancellation Policy</a></li>
	   <h3 class="fot_title1">PAYMENTS WE ACCEPT</h3>
	    <img src="images/pay.png"/>
	 </ul>
	</div>
   <div class="col-md-2 col-sm-6 col-lg-2 col-xs-12">
	<h3 class="fot_title1">FLAVIDO</h3>
	 <ul>
	   <li><a href="#">Careers</a></li>
	   <li><a href="#">About Us</a></li>
	   <li><a href="#">Contact Us</a></li>
	   <li><a href="#">Students Stories</a></li>
	 </ul>
	</div>
	 <div class="col-md-4 col-sm-12 col-lg-4 col-xs-12">
	<h3 class="fot_title1">MAKE MONEY WITH FLAVIDO</h3>
	 <ul>
	   <li><a href="#">Careers</a></li>
	   <li><a href="#">About Us</a></li>
	   <li><a href="#">Contact Us</a></li>
	   <li><a href="#">Students Stories</a></li>
	   	<li>
	    <h3 class="fot_title1">DWONLOAD APP</h3>
		 <img src="images/app.png"/>
	   </li>
	 </ul>
	</div>
	<div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
	<h3 class="fot_title1">STAYED CONNECTED</h3>
	 <ul>
	   <li>
	     Subscribe over the internet, website footers are
          saving the day, catching visitors like a safety
          net, before they hit the bottom of the page hard.
	   </li>
	    <br/>
	    <li><form action="#">
         <div class="form-group">
         <input type="email" class="form-control" id="email" placeholder="Enter email"  name="email">
        </div>
          <button type="button" class="btn btn-primary">Submit</button>
        </form>
		</li>
		<br/>
	   <li>
	     <a href="#"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	     <a href="#"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
		 <a href="#"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
		 <a href="#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
	   </li>
	 </ul>
	</div>
  </div>
</div>

<!--footer one pert end-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 fotter-description">
	 <h3 class="fot_title1">TRENDING SEARCHES FOR ON FLAVIDO STORE</h3>
	 <h5 class="description_text1"><strong>Most Searched:</strong></h5>
     <h5 class="description_text1">Sociology |Vision IAS|ForumIAS |Current Affairs |Vajiram|Sriram Economics|Shankar IAS|Insights|Anthroplogy|IASBABA</h5>
     <h5 class="description_text1"><strong> Flavido Classes:</strong></h5>
     <h5 class="description_text1">Chokkalingam|Vikash Ranjan|Himanshu Sharma|DR. Rambabu Paladudgu</h5>
     <h5 class="description_text1"><strong>Optional Notes:</strong></h5>
     <h5 class="description_text1">Philosophy|Geography|Public Administration</h5>
     <h5 class="description_text1"><strong>GS Notes:</strong></h5>
     <h5 class="description_text1">Economy|Polity|Geography GS</h5>
     <h5 class="description_text1"><strong>Hindi Notes:</strong></h5>
     <h5 class="description_text1">Vision IAS|Indian Polity|Ethics|Old NCERT|Public Administration|Sociology|Philosophy</h5>
     <h5 class="description_text1"><strong>Popular Coaching Notes:</strong></h5>
     <h5 class="description_text1"><strong>Vajiram| Sriram|Vision IAS| Insights|Drishti</h5>
     <h5 class="description_text1"><strong>IES/Gate Notes:</strong></h5>
     <h5 class="description_text1">Electronics & Communication|Electrical Engineering|Computer Engineering|Civil Engineering</h5>
     <h5 class="description_text1"><strong>SSC Notes:<strong></h5>
     <h5 class="description_text1">Paramount</h5><br/>
	</div>
  </div>
  <div class="row">
    <div class="col-sm-12"><br/>
<p class="small">Gone are the days, when you had to go to pricey & exhaustive coaching classes to prepare for IAS examination. Today, with everything going digital, everything you need is right at the comfort of your home.
If you are doing your graduation or are currently working, it is difficult to find the time and right resources for preparation.  What do you do?
@Flavido we source top rated study material, hand written notes from successful aspirants & live/online classes from most recommended  faculties & educational institutions, and provide them at affordable price.
Why Online IAS preparation?</p>

<p class="small">Most of the aspirants feel there is a need to leave their present jobs & home cities and move to Rajinder Nagar/Karol Bagh for IAS Preparation. Students don’t estimate the high opportunity cost of leaving a job or the level of
expenses in these overpriced areas of Central Delhi. A student only needs right guidance, resources and peer group to clear the examination. Right Guidance and peer group is available online on forums and multiple preparation </p>
websites. Resources for preparation like notes, online classes, mentors and recommended faculties is where we are trying to pitch in and ease out your IAS Preparation.



<p class="strong">Flavido Promises</p>

<p class="small">Flavido makes online education more convenient and hassle-free. You can always be rest assured about the quality of IAS notes you are buying online at our site. Together with our trusted printing vendors we promise to deliver
the appropriate IAS books or online IAS notes from Delhi. We have the best quality IAS online courses that can be subscribed from the comfort of your home. These courses are being done by the most recommended IAS trainers 
in their respective fields. These online IAS classes are checked thoroughly for their content, quality and timely delivery.</p>

<p class="strong">Features of Online Classes</p>

<p class="strong">Flexible Schedule</p>

<p class="small">Classes on Flavido can be watched by students as per their own flexible schedule. Usually the offline classes are on a pre-defined time and if you miss the class you can only rely on someone else’s notes. 
This will not be the case with online classes as the student can study as per their comfort and timetable. This is really important as IAS preparation needs a disciplined approach with lot of self study.</p>

<p class="strong">Revise the Classes</p>

<p class="small">This option is not available in offline format; in online mode students can watch the classes again for revision. Revision helps in strengthening the concepts.</p>

<p class="strong">Access to Resources only available in Delhi</p>

<p class="small">Sometimes you have made up your mind of studying under a specific teacher/trainer who teaches only in Delhi. This leaves you no option but to migrate to Delhi for IAS Preparation. We bring those offline classes online for you.
Doubts can be discussed during office hours telephonically. We provide access to teachers on our platform to the students enrolled.</p>

<p class="strong">Shop on the App</p>

<p class="small">So there might be times when you don’t feel like booting up your laptop in your free time. We have a great idea, listen to your playlist, relax and also shop for much needed IAS preparation notes, IAS Study material and watch 
classes by specific teacher on-the-go on our mobile app.</p>

<p class="small">So, which course are you opting for today?</p>
	</div>
  </div>
  <!--decription end-->
  <div class="row">
  <div class="col-sm-12 last-footer">
  <strong>Copyright ©2016 Flavido Store. All Rights Reserved.</strong>
  </div>
  </div>
</div>



</body>
</html>
