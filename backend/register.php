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
    <div class="container-fluid">
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
				<li class="active"><a href="#">Login / Register<span class="sr-only">(current)</span></a></li>
			</ul>
		</div>
</div>
</nav>
<!--header-->
<div class="container">
  <div class="row">
     <div class="col-md-6 col-md-offset-3 main_login_container">
        <div id="signupbox"  class="mainbox col-md-12">                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Name">
                                    </div>
                                </div>
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>
                                    
 

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                    </div>
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div> 
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
