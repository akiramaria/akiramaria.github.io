<?php get_header();?>


<?php $blog = get_field('blog'); ?>
	<head>
		<title>Yes</title>
		<!-- Bootstrap -->
    	<link rel="stylesheet" href="css/bootstrap.css">
    	<!-- JQUERY -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    	<script>
			$(document).ready(function(){
			  // Add smooth scrolling to all links
			  $("a").on('click', function(event) {

			    // Make sure this.hash has a value before overriding default behavior
			    if (this.hash !== "") {
				    
				    event.preventDefault();

				    // Store hash
				    var hash = this.hash;

				    $('html, body').animate({
				        scrollTop: $(hash).offset().top
				    }, 800, function(){
				        window.location.hash = hash;
				    });
			    } // End if
			  });
			});
		</script>
    	<!-- CSS -->
    	<style>
			/* The sidebar menu */
			.sidenav {
			  	height: 70%; /* Full-height: remove this if you want "auto" height */
			  	/*width: 200px;  Set the width of the sidebar */
			  	position: fixed; /* Fixed Sidebar (stay in place on scroll) */
			  	z-index: 1;  /*1 to stay on top */
			  	top: 1;  /*Stay at the top */
			  	/*left: 0; */
			  	margin: 40px 20px 20px 0px;
			  	padding-top: 20px;
			}

			/* The navigation menu links */
			.sidenav a {
			  	padding: 6px 0px 6px 0px;
			  	text-decoration: none;
			  	font-size: 18px;
			  	color: #818181;
			  	display: block;
			}

			/* When you mouse over the navigation links, change their color */
			.sidenav a:hover {
			  	color: #000;
			}

			.profilepicture{
				margin-left: 50px;
			}

			.name{
				color:white;
				font-size: 20px;
			}

			/* Style page content */
			.main-summary {
			  	/*margin-left: 200px;  Same as the width of the sidebar */
			  	min-height: 100vh;
			  	padding: 20px 0px 0px 250px;
			  	background-color: #0000;
			}

			#main-experience{
			  	/*margin-left: 200px;  Same as the width of the sidebar */
			  	min-height: 100vh;
			  	padding: 20px 0px 0px 250px;
			  	background-color: #FFFF;
			}

			.main-education{
			  	/*margin-left: 200px;  Same as the width of the sidebar */
			  	min-height: 100vh;
			  	padding: 20px 0px 0px 250px;
			  	background-color: #FF6347;
			}

			.profile-photo{
				padding-top:100px;
			}

			.profile-summary{
				margin-top:-300px;
				padding-left:400px;
			}


			/* Start new timeline */
			.blur {
			    -webkit-box-shadow: 0 0 15px rgba(188,191,200,0.1),0 0 15px rgba(188,191,200,0.2) !important;
			    box-shadow: 0 0 15px rgba(188,191,200,0.1),0 0 15px rgba(188,191,200,0.2) !important;
			}
			.mr-5 {
			    margin-right: 5px !important;
			}
			.va-middle {
			    vertical-align: middle !important;
			}
			.bg-img {
			    background-repeat: no-repeat;
			    background-size: cover;
			    background-position: center center;
			}
			.timeline {
			    list-style: none;
			    padding: 20px 0;
			    position: relative;
			}
			.timeline:before {
			    top: 0;
			    bottom: 0;
			    position: absolute;
			    content: " ";
			    width: 4px;
			    background-color: #dddfe6;
			    left: 50%;
			    margin-left: -2px;
			}
			.timeline.w-icons:before {
			    top: 0;
			    bottom: 0;
			    position: absolute;
			    content: " ";
			    width: 3px;
			    background-color: #dddfe6;
			    left: 50%;
			    margin-left: -1.5px;
			}
			.timeline > li {
			    margin-bottom: 20px;
			    position: relative;
			}
			.timeline > li:before,
			.timeline > li:after {
			    content: " ";
			    display: table;
			}
			.timeline > li:after {
			    clear: both;
			}
			.timeline > li:before,
			.timeline > li:after {
			    content: " ";
			    display: table;
			}
			.timeline > li:after {
			    clear: both;
			}
			.timeline > li > .timeline-panel {
			    background-color: #fff;
			    width: 50%;
			    float: left;
			    border-radius: 5px;
			    padding: 20px;
			    position: relative;
			    -moz-transition: 0.2s ease-in-out;
			    -o-transition: 0.2s ease-in-out;
			    -webkit-transition: 0.2s ease-in-out;
			    transition: 0.2s ease-in-out;
			    box-shadow: 0 2px 12px rgba(188, 191, 200, 0.1), 0 2px 12px rgba(188, 191, 200, 0.2) !important;
			}
			.timeline > li > .timeline-panel:hover {
			    transform: translateY(-3px);
			    -webkit-box-shadow: 0 3px 20px rgba(188, 191, 200, 0.1), 0 3px 20px rgba(188, 191, 200, 0.3) !important;
			    box-shadow: 0 3px 20px rgba(188, 191, 200, 0.1), 0 3px 20px rgba(188, 191, 200, 0.3) !important;
			}
			.timeline > li:not(.timeline-inverted) {
			    padding-right: 50px;
			}
			.timeline > li.timeline-inverted {
			    padding-left: 50px;
			}
			.timeline.w-icons > li:not(.timeline-inverted) {
			    padding-right: 85px;
			}
			.timeline.w-icons > li.timeline-inverted {
			    padding-left: 85px;
			}
			.timeline > li > .timeline-badge {
			    color: #fff;
			    background: #dddfe6;
			    width: 25px;
			    height: 25px;
			    line-height: 15px !important;
			    font-size: 0.75rem;
			    text-align: center;
			    position: absolute;
			    top: 20px;
			    left: 50%;
			    margin-left: -12.5px;
			    z-index: 100;
			    border: 5px solid #fff;
			    border-radius: 50%;
			    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
			}
			.timeline.w-icons > li > .timeline-badge {
			    color: #fff;
			    background: #5d3997;
			    width: 60px;
			    height: 60px;
			    line-height: 65px !important;
			    font-size: 1rem;
			    text-align: center;
			    position: absolute;
			    top: 20px;
			    left: 50%;
			    margin-left: -30px;
			    z-index: 100;
			    border: 0;
			    border-radius: 50%;
			    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
			}
			.timeline.w-icons > li > .timeline-badge .material-icons {
			    line-height: 60px !important;
			}
			.timeline > li.timeline-inverted > .timeline-badge {
			    top: 0;
			}
			.timeline > li.timeline-inverted > .timeline-panel {
			    float: right;
			}
			ul.timeline {
			    margin-bottom: 0;
			}
			.timeline-body > p,
			.timeline-body > ul {
			    margin-bottom: 0;
			}
			.timeline-body > p + p {
			    margin-top: 5px;
			}

    	</style>
	</head>
	<body>
		<div class="sidenav col-sm-2">
			<ul>
				<a class="nav-link" href="#main-summary">summary<span class="sr-only"></span></a>
				<a class="nav-link" href="#main-experience">experience<span class="sr-only"></span></a>
				<!--<a class="nav-link" href="#">Projects<span class="sr-only">(current)</span></a>-->
				<a class="nav-link" href="#main-certification">certifications, seminars, workshops<span class="sr-only"></span></a>
				<a class="nav-link" href="#">others<span class="sr-only"></span></a>
				<a class="nav-link" href="http://akiram.test/blog/">blog</a>
			</ul>
		</div>
		
		<div class="main-summary col-lg-12" id="main-summary">
			<div class="profile-photo col-sm-6 ">
				<img src="img/avatar.jpg" class="profilepicture p-x-15 blur" style="width:300px; height:300px">
			</div>
			<div class="profile-summary col-sm-10">
				<h1>Hello!</h1>
				<span>I am Akira Maria</span>
				<p>Location: Jakarta, Indonesia</p>
				<p>Programming language: HTML, CSS, Python, JS
				Project management tools: JIRA
				CRM: Salesforce
				Product development: MS Visio, MIRO</p>
				<p>Skills and Tools</p>
				<p>CRM: Salesforce</p>
				<p><a href="#">LinkedIn<span class="sr-only">(current)</span></a>
				<a href="#">GitHub<span class="sr-only">(current)</span></a></p>
				<button href="#" type="button" class="btn btn-primary">Download CV</button>
			</div>
		</div>

		<div class="container mt-5" id="main-experience">
		        <div class="row">
		            <!--<div class="col-md-4 bg-img" style="background-image: url(https://via.placeholder.com/600x600/FFB6C1/000000); min-height:320px"><p class="mb-0"></p>
		            </div>-->
		            <!-- box-bg-image -->
		            <div class="col-md-8 col-md-offset-6 p-30 text-center bg-white">
		                    <h1 class="mb-50 fw-bold">Experience</h1>
		                    <ul class="timeline">
		                        <li class="timeline">
		                            <div class="timeline-badge"></div>
		                            <div class="timeline-panel">
		                                <div class="timeline-heading">
		                                	<h5 class="timeline-title">Project Coordinator </h5>
		                                    <p class="text-sm">XpertiseNow, Singapore</p>
		                                    <p class="timeline-meta text-xs">
		                                    	<i class="fas fa-map-marker-alt va-middle mr-5"></i> 
			                                    <span class="va-middle mr-5">Full time</span> 
			                                    <i class="fas fa-calendar-alt va-middle mr-5"></i> <span class="va-middle">August 2020 - Present (8 months)</span>
			                                </p>
		                                </div><!-- / time-line-heading -->
		                                <div class="timeline-body">
		                                    <p>Quisque sit amet urna et neque porttitor mattis.</p>
		                                </div><!-- / timeline-body -->
		                            </div><!-- / timeline-panel -->
		                        </li><!-- timeline -->

		                        <li class="timeline-inverted">
		                            <div class="timeline-badge"></div>
		                            <div class="timeline-panel">
		                                <div class="timeline-heading">
		                                    <h5 class="timeline-title">Business Analyst</h5>
		                                    <p class="text-sm">XpertiseNow, Singapore</p>
		                                    <p class="timeline-meta text-xs"><i class="fas fa-map-marker-alt va-middle mr-5"></i> <span class="va-middle mr-5">Full time</span> <i class="fas fa-calendar-alt va-middle mr-5"></i> <span class="va-middle">June 2020 - August 2020</span></p>
		                                </div><!-- / time-line-heading -->
		                                <div class="timeline-body">
		                                    <p>Quisque sit amet urna et neque porttitor mattis.</p>
		                                </div><!-- / timeline-body -->
		                            </div><!-- / timeline-panel -->
		                        </li><!-- timeline-inverted -->

		                        <li class="timeline">
		                            <div class="timeline-badge"></div>
		                            <div class="timeline-panel">
		                                <div class="timeline-heading">
		                                    <h5 class="timeline-title">Assistant Business Analyst</h5>
		                                    <p class="text-sm">Yagu Information Technology, China</p>
		                                    <p class="timeline-meta text-xs"><i class="fas fa-map-marker-alt va-middle mr-5"></i> <span class="va-middle mr-5">Internship</span> <i class="fas fa-calendar-alt va-middle mr-5"></i> <span class="va-middle">March 2020 - May 2020</span></p>
		                                </div><!-- / time-line-heading -->
		                                <div class="timeline-body">
		                                    <p>Quisque sit amet urna et neque porttitor mattis.</p>
		                                </div><!-- / timeline-body -->
		                            </div><!-- / timeline-panel -->
		                        </li><!-- timeline-inverted -->

		                        <li class="timeline-inverted">
		                            <div class="timeline-badge"></div>
		                            <div class="timeline-panel">
		                                <div class="timeline-heading">
		                                    <h5 class="timeline-title">M. Eng, Computer Science</h5>
		                                    <p class="text-sm">Dalian University of Technology, China</p>
		                                    <p class="timeline-meta text-xs"><i class="fas fa-map-marker-alt va-middle mr-5"></i> <span class="va-middle mr-5"></span> <i class="fas fa-calendar-alt va-middle mr-5"></i> <span class="va-middle">2017-2020</span></p>
		                                </div><!-- / time-line-heading -->
		                                <div class="timeline-body">
		                                    <p>Quisque sit amet urna et neque porttitor mattis.</p>
		                                </div><!-- / timeline-body -->
		                            </div><!-- / timeline-panel -->
		                        </li><!-- timeline-inverted -->

		                        <li class="timeline">
		                            <div class="timeline-badge"></div>
		                            <div class="timeline-panel">
		                                <div class="timeline-heading">
		                                    <h5 class="timeline-title">System Engineer</h5>
		                                    <p class="text-sm">Wirecard, Indonesia</p>
		                                    <p class="timeline-meta text-xs"><i class="fas fa-map-marker-alt va-middle mr-5"></i> <span class="va-middle mr-5">Full time</span> <i class="fas fa-calendar-alt va-middle mr-5"></i> <span class="va-middle">June 2016 - August 2017</span></p>
		                                </div><!-- / time-line-heading -->
		                                <div class="timeline-body">
		                                    <p>Quisque sit amet urna et neque porttitor mattis.</p>
		                                </div><!-- / timeline-body -->
		                            </div><!-- / timeline-panel -->
		                        </li><!-- timeline-inverted -->

		                        <li class="timeline-inverted">
		                            <div class="timeline-badge"></div>
		                            <div class="timeline-panel">
		                                <div class="timeline-heading">
		                                    <h5 class="timeline-title">BSc. Information Technology</h5>
		                                    <p class="text-sm">President University of Technology, Indonesia</p>
		                                    <p class="timeline-meta text-xs"><i class="fas fa-map-marker-alt va-middle mr-5"></i> <span class="va-middle mr-5"></span> <i class="fas fa-calendar-alt va-middle mr-5"></i> <span class="va-middle">2012-2016</span></p>
		                                </div><!-- / time-line-heading -->
		                                <div class="timeline-body">
		                                    <p>Quisque sit amet urna et neque porttitor mattis.</p>
		                                </div><!-- / timeline-body -->
		                            </div><!-- / timeline-panel -->
		                        </li><!-- timeline-inverted -->
		                    </ul><!-- / timeline -->
		            </div><!-- / column -->
		        </div><!-- / row -->
		    </div><!-- / p-15 -->
		</div>

		<div class="main-summary col-lg-12" id="main-certification">
			<div class="profile-photo col-sm-6 ">
				<img src="img/avatar.jpg" class="profilepicture p-x-15 blur" style="width:300px; height:300px">
			</div>
			<div class="profile-summary col-sm-10">
				<h1>Certifications</h1>
				<p>HSK 3</p>
			</div>
		</div>
	</body>
	<?php wp_footer(); ?>