<!DOCTYPE html>
 <html lang="en" class="no-js">
    <head>
    <style>

/* for bullet  */
.bullet {
  height: 7px;
  width: 7px;
  background-color: white;
  border-radius: 50%;
  display: inline-block;
  
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: block;}
img {vertical-align: middle;}
html,body{
	overflow-x:hidden;
}
p{
	text-align: justify;
    hyphens: auto;
    -webkit-hyphens: auto;
    word-spacing: -2px;
}
/* The dots/bullets/indicators */
.dot {
  height: 1px;
  width: 1px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}


</style>

    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>Seeders </title>		
		<!-- Meta Description -->
        <meta name="description" content="Seeders Gaming Application">
        <meta name="keywords" content="">
      
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->

		<!-- movie css -->
		<link rel="stylesheet" href="css/movie.css">
		<!-- carousel css -->
		<link rel="stylesheet" href="css/carousal.css">
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="styleshepet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <style>
            
			.masthead {
    background-size: cover;
    min-height: 100vh;
    position: relative;
    color: white;
    text-shadow: 2px 2px 2px rgba(0,0,0,.5);
}
/* 
.masthead1 {
    background-size: cover;
    min-height: 100vh;
    position: relative;
    color: white;
    text-shadow: 2px 2px 2px rgba(0,0,0,.5);
} */


@media only screen and (max-width: 1850px) {
    .masthead  {
        min-height: 90vh;
		min-width:60vh;
		margin-top:60px;
		background-image:url('img/ban_35.png');
    }
  }

  @media (max-width: 850px) {
    .masthead {
		margin-top:75px;
        min-height: 60vh;
		background-image:url('img/ipad_banner.png');
		
    }
    h1 {
        font-size: calc(1.525rem + 3.3vw);
    }
}

@media (max-width: 768px) {
    .masthead1 {
        min-height: 30vh;
        min-width: 40vh;
    }
    h1 {
        font-size: calc(1.525rem + 3.3vw);
    }
}
@media (max-width: 768px) {
    .masthead {
        min-height: 30vh;
    }
    h1 {
        font-size: calc(1.525rem + 3.3vw);
    }
}

@media (max-width: 420px) {
    /* .masthead {
        min-height: 40vh;
        min-width: 23vh;
		background-image:url('img/new.png');
    } */
	
.masthead {
    margin-top: -3px;
    min-height: 50vh;
    min-width: 3vh;
    background-image: url('img/new.png');
}
    h1 {
        font-size: calc(1.525rem + 3.3vw);
    }
}


@media (max-width: 768px) {
    .masthead1 {
        min-height: 30vh;
        min-width: 40vh;
    }
    h1 {
        font-size: calc(1.525rem + 3.3vw);
    }
}

@media only screen and (max-width: 420px)
   {
	.masthead1 {
        min-height: 65vh;
        min-width: 43vh;
    }
    h1 {
        font-size: calc(1.525rem + 3.3vw);
    }
}


@media only screen and (max-width: 420px)
   {
    
      
    .navbar-brand img {
      padding: 10px ;
      margin-left:1px;
    }
  }
   
		</style>
    </head>
	
    <body id="body">
	
		<!-- preloader -->
		<div id="preloader">
			<img src="img/preloader.gif" alt="Preloader">
		</div>
		<!-- end preloader -->

        
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar" style="background-color:#0eb493" >
            <div class="container" style="background-color:#0eb493">
                <div class="navbar-header" style="background-color:#0eb493" >
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                   
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="img/logo.png" alt="Seeders">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    

                <body data-spy="scroll"  data-target="#spy-scroll-id"   > 


    <div id="spy-scroll-id" style="background-color:#0eb493" class="collapse navbar-collapse" data-toggle="collapse" data-target=".navbar-collapse" >
      <ul class="nav navbar-nav">
        <li class="active"><a href="#body">Home</a></li>
		<li><a href="#withseeders">With Seeders</a></li>
		<li><a href="#vision">Vision</a></li>
		<li><a href="#concept">Concept</a></li>
         <li><a href="#uniquefeatures">Unique Features</a></li>
         <li><a href="#team">Team</a></li>
                        
                        <li><a href="#roadmap">Road Map</a></li>
                         <li><a href="#manifest">Manifest</a></li>

                        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </div> 
                    <!-- <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#features">Our Story</a></li>
                       
					
					    
					</li>
                        <li><a href="#vision">Vision</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#games">Games</a></li>
                        <li><a href="#roadmap">Road Map</a></li>
                         <li><a href="#works">News</a></li>

                        <li><a href="#contact">Contact Us</a></li>
                    </ul> -->
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
		
        <!--
        Home Slider
        ==================================== -->
		
		<!-- <section id="slider" style="background-image: url('img/ban_35.png');background-repeat: no-repeat;background-size:cover ;">
			
		</section> -->
        <div class="masthead" > 
</div>

<div class="slideshow-container">

		<div class="mySlides zoom-in-out-box">
		<div class="goalsText" style="color:yellow" >goals</div>
		</div>

		<div class="mySlides zoom-in-out-box">
		<div class="text">ideas&nbsp;&nbsp;</div>
		</div>

		<div class="mySlides zoom-in-out-box">
		<div class="text">projects</div>
		</div>

		<div class="mySlides zoom-in-out-box">
		<div class="text">wishes</div>
		</div>

		<div class="text2">Achieve your</div>
		<div class="mySlides zoom-in-out-box">
		<div class="text">dreams</div>
		</div>
		<div class="text3">Together !</div>

</div>

</div>
        <!--
        End Home SliderEnd
        ==================================== -->
        <!-- <div id="AchieveYourGOALS" class="AchieveYourGOALS">
        <p style="text-align:center;color:#0eb493;padding:2px 5px">
        <b>
            Achieve Your GOALS* Together
            </b>

</p>
</div> -->

        <!--
        Features
        ==================================== -->
		
		<section id="withseeders" class="withseeders"
        style="background-image: url('img/manifest.jpeg'); background-repeat: ;width: 100%;height: 100%;" >
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>With SEEDERS</h2>
						<!-- <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div> -->
					</div>

					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item" >

							 <div class="service-icon">
								<i class="fa fa-volume-up"></i>
							</div> 
							
							 <div class="service-desc" >
								<!-- <h3>Branding</h3> -->
								<h3 style="color:#FFFFFF">Speak out your wishes, your ideas, your projects, your dreams</h3>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-pagelines"></i>
							</div> 
							
							<div class="service-desc" >
								<!-- <h3>Development</h3> -->
								<h3 style="color:#FFFFFF">Grow the ideas you like with others</h3>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-check"></i>
							</div>
							
							<div class="service-desc" style="color:#FFFFFF"> 
								<!-- <h3>Consulting</h3> -->
								<h3 style="color:#FFFFFF">And accomplish them together in real life</h3>
							</div>
						</div>
					</div>
					<!-- end service item -->
						
				</div>
			</div>
		</section>
		
        <!--
        End Features
        ==================================== -->
		

		<!--Tree chat -->
<!-- 
			<section id="features" class="features">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Tree Chat By Seeders</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">

							 <div class="service-icon">
								<i class="fa fa-volume-up"></i>
							</div> 
							
							 <div class="service-desc">
								<h3>Branding</h3>
								<h3>Speak out your wishes, your ideas, your projects, your dreams</h3>
							</div>
						</div>
					</div>
				
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-pagelines"></i>
							</div> 
							
							<div class="service-desc">
								<h3>Development</h3>
								<h3>Grow the ideas you like with others</h3>
							</div>
						</div>
					</div>
				
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-check"></i>
							</div>
							
							<div class="service-desc">
								<h3>Consulting</h3>
								<h3>And accomplish them together in real life</h3>
							</div>
						</div>
					</div>
					
						
				</div>
			</div>
		</section> -->

		<!-- end tree chat-->

        



	
	
		
	

</div>

        <!--
        Vision
        ==================================== -->
		
		<section id="vision" class="vision" 
        style="background-image: url('img/unique_features.png'); background-repeat:;width: 100%;height: 100%;" >
			<div class="container" >
				<div class="row" style="text-align:justify;">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                    <div> <h2> <i class="fa fa-eye" ></i><b> &nbsp;&nbsp;VISION</b></span></h2>
                    <!--<i class="fa fa-eye" style="font-size:30px;color:#0000FF"></i>  -->
                    <!-- <div>  <span style="font-size:40px;color:#1EA78D"><i class="fa fa-eye" ></i> <h2>Vision</h2></span> -->
</div>
                    
						<!-- <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div> -->
					</div>

					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item" style="color:#FFFFFF">

							 <div class="service-icon">
								<!-- <i class="fa fa-volume-up"></i> -->
							</div> 
							
							 <div class="service-desc" >
								
								<h3 style="font-size:22px;color:#FFFFFF;text-align:center"> <b>Philosophy</b></h3><br> <p>
                                <div style="font-size:17px;">
                                <p>We believe the internet should help people achieve their 
                                dreams together,
 
All of us should achieve our dreams. 
Dreams are just ideas that are not
realized yet and dreams do come true when people come together.</p>
<br>
<div style="text-align:center">
<span class="bullet"></span>
</div>

<br><p>The best way to realize an idea is to bring it to fruition with other
people. 
Most achievements are made possible with the help of others,
as teams.
Successful ideas turn into Experiences and spread.</p>
<br>
<div style="text-align:center">
<span class="bullet"></span>
</div>


<br><p>Experiences are unique and priceless. Life is made of memorable
experiences. Life is driven by our experiences.</p>
</p>
</div> </p>

							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                    <div class="service-item" style="font-size:;color:#FFFFFF">
							<div class="service-icon">
								<i class="fa fa-seedling"></i>
							</div> 
							
							<div class="service-desc">
								<!-- <h3>Development</h3> -->
                                 
                                
                                <h3 style="font-size:22px;color:#FFFFFF;text-align:center">Ethics</h3> <p>
                                <div style="font-size:17px;"><p><img alt="" style="height:17px" src="img/logo.png" style="padding-bottom: 13px; width: 138px; height: 40px;" title="">&nbsp;positive impact is the utmost SOCIAL IMPACT : bring back
the sense of BELONGING. What really matters is
individuation not individualism.</p>
<br>
<div style="text-align:center">
<span class="bullet"></span>
</div>
<br><p>   « The purpose of a human life is to blossom within a
community ».Edgar Morin, anthropologist.</p>
<br>
<div style="text-align:center">
<span class="bullet"></span>
</div>
<br><p>Seeders is an aggregator of Collective intelligence, for an Internet of
humans in action together.</p>
<br>
<div style="text-align:center">
<span class="bullet"></span>
</div>
<br><p>No spectators, only actors : seed an idea or grow an existing one. and
bring it to fruition together, within a micro-community.</p>
<br><p>An idea comes to fruition when the right people grow it at the right
time, as a team.</p> </div>

                              

							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
                    <div class="service-item" style="font-size:;color:#FFFFFF">
							<div class="service-icon">
								<i class="fa fa-seedling"></i>
							</div>
							
							<div class="service-desc">
								<!-- <h3>Consulting</h3> -->
                                <h3 style="font-size:22px;color:#FFFFFF;text-align:center">Economy</h3>
								
                                <div style="font-size:17px;"><p><img alt="" style="height:17px" src="img/logo.png" style="padding-bottom: 13px; width: 138px; height: 40px;" title="">&nbsp;from content creation to value creation.The next step in Digital consumer is co-creation of value and shared
revenue, enabled by web3 tools for ownership. Value is best created by
small groups of people, by enriching basic content in an iterative way.</p>

<br>
<div style="text-align:center">
<span class="bullet"></span>
</div>

<br><p>The new model for social media is « really social » where users are
individuals not consumers , where users belong to micro-networks and
everyone is an actor, where people achieve goals together.</p>

<br>
<div style="text-align:center">
<span class="bullet"></span>
</div>

<br><p>The new digital frontier is the real world. Online or offline does not
matter to younger generations. Consumption of goods, services and
content is not enough anymore. Users want to live experiences, online
and/or offline.</p>
<br>
<div style="text-align:center">
<span class="bullet"></span>
</div>

<br><p>With more and more independent workers, mass consumption and mass
entertainment are to be replaced by mass customization and mass
innovation.</p>
</div>
 
							</div>
						</div>
					</div>
					<!-- end service item -->
						
						
				</div>
			</div>
		</section>
		
        <!--
        End Vision
        ==================================== -->
		
		
		
        <!--
        Our Works
        ==================================== -->
<!-- 		
		<section id="works" class="works clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2>Works</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center">
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
					</div>
					
					<div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
						<ul class="text-center">
							<li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
							<li><a href="javascript:;" data-filter=".branding" class="filter">Branding</a></li>
							<li><a href="javascript:;" data-filter=".web" class="filter">web</a></li>
							<li><a href="javascript:;" data-filter=".logo-design" class="filter">logo design</a></li>
							<li><a href="javascript:;" data-filter=".photography" class="filter">photography</a></li>
						</ul>
					</div>
					
				</div>
			</div>
			
			<div class="project-wrapper">
			
				<figure class="mix work-item branding">
					<img src="img/works/item-1.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-1.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item web">
					<img src="img/works/item-2.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-2.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item logo-design">
					<img src="img/works/item-3.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-3.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item photography">
					<img src="img/works/item-4.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-4.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
			
				<figure class="mix work-item branding">
					<img src="img/works/item-5.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-5.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item web">
					<img src="img/works/item-6.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-6.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item logo-design">
					<img src="img/works/item-7.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-7.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item photography">
					<img src="img/works/item-8.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-8.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
			</div>
		

		</section>
		 -->
        <!--
        End Our Works
        ==================================== -->
		


        <!--
        Video start
        ==================================== -->
		 <!-- <section id="tree-chat" class="tree-chat">
			<div class="container">
				<div class="row">
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
					<h2>Gamified Tree-Chat</h2>
						
					</div>
				<div class="col-md-5">
					<img src="img/mobile-frame.jpeg" height="650px" style="z-index: -9999;"/>
<iframe width="215px" height="460px" style="border-radius: 20px;" src="img/movie1.mp4"
 frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				</div>
					
				<div class="col-md-7" style="padding: 25px;">

					<h4>Gamified Tree-Chat</h4>
					<h5>1 tree = 1 micro-community = 1 experience = 1 achievement</h5>
					<div class="row col-md-12" style="padding: 25px;">
						<div class="col-md-6 right-rect-box">People grow ideas together until they blossom and bear fruits</div>
						<div class="col-md-4 circ-icon" ><i class="fa fa-pagelines" style="font-size: 38px;
    color: green;"></i></div>
					</div>
					<br/>
					<div class="row col-md-12" style="padding: 25px;">
					<div class="col-md-4 circ-icon" ><i class="fa fa-apple-alt" style="font-size: 38px;color: red;"></i></div>
						<div class="col-md-6 left-rect-box" >Successful ideas and experiences take root and spread</div>
					</div>
				</div>
				</div>
						
				</div>
			</div>
		</section> 
  -->

  
        <!--
         Gamified Tree-Chat strat
        ==================================== -->
	

<br>
		<section id="concept" class="concept" style="padding:0px">
			<div class="container">
				<div class="row">
				
					<div  style="height: 12px;" class="sec-title text-center  wow bounceInDown animated" data-wow-duration="500ms">
                    <h2>Concept</h2>
                    
                    <h4 style="color:#EA2F64;padding:10px"><b>1 tree = 1 micro-community = 1 experience = 1 achievement</b></h4>
                    <br>
                    <h3><b>Gamified Tree-Chat</b></h3>
						<!-- <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div> -->
					</div>

					<!-- service item -->
					<!-- <div class="col-md-12 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">							
							
							 <div class="service-desc" > -->
								<div class="movie">
									                             <center>
        
<video width="300" height="680" playsinline loop muted id="autoplay"   >
  <source src="img/movie1.mp4" type="video/mp4">
</video> </center>
<div  style="height: 40px;" class="  wow bounceInDown animated" data-wow-duration="500ms">
                   
                    
                    
                    
                    <p style="color:#EA2F64;text-align:center;font-size:15px;
					    margin-top: -47px;"><b>Tree navigation demo,<br>
Mobile screen capture<br>
(made with Unity)</b></p> 
						
					
						
				</div>

</div>

				
					
			</div>
		</section>
		
        <!--
        End of Gamified Tree-Chat
        ==================================== -->
	
		

<!--
    Unique features
    ================ -->
    <section id="uniquefeatures" class="uniquefeatures" 
style="background-image: url('img/manifest.jpeg'); background-repeat: ;width: 100%;height: 100%;margin-top:50px" >   
<!-- style="background-image: url('img/seeders_tree_chart_background.png'); background-repeat: ;width: 100%;height: 100%;" > -->
			<div class="container" > 
				<div class="row" style="text-align:justify;">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                    <div>  <h2>UNIQUE FEATURES</h2>
                    <!--<i class="fa fa-eye" style="font-size:30px;color:#0000FF"></i>  -->
                    <!-- <div>  <span style="font-size:40px;color:#1EA78D"><i class="fa fa-eye" ></i> <h2>Vision</h2></span> -->
</div>
                    
						<!-- <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div> -->
					</div>

					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item" style="color:#FFFFFF">

							 <div class="service-icon">
								<!-- <i class="fa fa-volume-up"></i> -->
							</div> 
							
							 <div class="service-desc" >
								
								<h3 style="font-size:22px;color:#FFFFFF;text-align:center"> <b>Decentralization</b></h3> <p>
                                <div style="font-size:17px;">
                                <p>When people take action together, they own their decisions, they own
their ideas, they own their actions outcomes. Decentralization is about
individual autonomy as well as data sovereignty.</p>

<br>

<div style="text-align:center">
	<span class="bullet">
	</span>
</div>

<br>
<p>In Seeders social network, data is grown by local micro-communities,
that can interconnect and form large communities of entrepreneurs.
</p>


<div style="text-align:center">
<span class="bullet"></span>
</div>

<br><p>Forest as a model : biomimicry of the forest helps us design the most
efficient decentralized social network, in pursuit of real individuation.</p>

<br>

<div style="text-align:center">
<span class="bullet"></span>
</div>

<br><p>Progressive decentralization model: Tokenization is to take place
immediately after Launch, starting with Seeders current community.</p>
</p>


<br>
<div style="text-align:center">
	<span class="bullet">
	</span>
</div>

<br>
<p>
Introducing  Proof-of-Experience NFTs.
</p>
<br>

</div> 

</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                    <div class="service-item" style="font-size:;color:#FFFFFF">
							<div class="service-icon">
								<i class="fa fa-seedling"></i>
							</div> 
							
							<div class="service-desc">
								<!-- <h3>Development</h3> -->
                                 
                                
                                <h3 style="font-size:22px;color:#FFFFFF;text-align:center"><b>Experiences</b></h3> <p>
                                <div style="font-size:17px;">
                                <p>User-generated Experiences are to replace User-generated content.
People want to live not consume, so coaches and brands want to help
their customers live great real-world experiences
Seeders takes users from online navigation to real-world experiences,
online and offline.<br>
<br>
<div style="text-align:center">
<span class="bullet"></span>
</div>

<br><p>Experiences are related to Games :
"Game arises when an experience is repeated. And the rules of the
game are the description of the experience." Guy Debord, situationist</p>
<br>
<div style="text-align:center">
<span class="bullet"></span>
</div>


<br><p><img alt="" style="height:17px" src="img/logo.png" style="padding-bottom: 13px; width: 138px; height: 40px;" title="">&nbsp;helps people create experiences together.
</p> </div>

                               
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
                    <div class="service-item" style="font-size:;color:#FFFFFF">
							<div class="service-icon">
								<i class="fa fa-seedling"></i>
							</div>
							
							<div class="service-desc">
								<!-- <h3>Consulting</h3> -->
                                <h3 style="font-size:22px;color:#FFFFFF;text-align:center"><b>Gamification</b></h3>
								
                                <div style="font-size:17px;"><p>
                                
Seeders gamification provides a disruptive user-experience :</p>

<br>
<div style="text-align:center">
<span class="bullet"></span>
</div>
    <br><p>with Tree-chat, users NAVIGATE ideas. No vertical threads anymore, no
scrolling and flushing content anymore. Exploring ideas is easy and fun,
and leads to action. Users gather micro-communities in real-time.</p>

<br>
<div style="text-align:center">
<span class="bullet"></span>
</div>
<br><p>The forest is not only Seeders world, it is also Seeders core mechanic.
An idea is reprensented by a bud, and the world of ideas grows like a
forest. Seeders : a virtual forest for real-world achievements.</p>
</div>
 
                			</div>
						</div>
					</div>
					<!-- end service item -->
						
				</div>
			</div>
		</section>
		
        <!--
        End Unique Features
        ==================================== -->

 <!--
        Meet Our Team
        ==================================== -->
        	   
<style>#round {
  border-radius: 25px;
  border: 2px solid white;
  padding: 2px; 
  width: 200px;
  height: 150px;  
}	</style>		
		<br>
		<section id="team" class="team" style="padding:0px">
        <!-- style="background-image: url('img/team.jpg'); background-repeat: no-repeat;width: 100%;height: 100%;" > -->
			<div class="container">
				<div class="row">
		
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2> Team</h2>
						<h3 style="color:#EA2F64;padding:5px 10px">World class international team</h3>
						
					</div>
					
					<br>

					
					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
						
						<center><img alt="Guillaume Asselot" src="img/Guillaume-ASSELOT.jpg" title="Guillaume asselot" class="img-responsive" style="height: 200px; width: 200px;" id="round"> </center></p>
                        <!-- <img src="img/team/member-2.png" alt="Team Member" class="img-responsive"> -->
				
						</div>

						<div class="text-center" >
							<p style="color: #062033;
  font-size: 18px;
  font-weight: 600;
  line-height: 24px;text-align:center;margin: 15px 0 0px;">Guillaume ASSELOT</p>
					
						
							<span>CEO, co-founder</span></div>
							 <br>
						  
						
						<div class="text-center" style="font-size: 14px;padding:2px">
							<b>Experince:
							
                        <br> <span>Capgemini Eng.</b>
					</span>
					</div>
					<br>
					<span>Expertise: </span>
                                    <br> <span>Mobile networks,</span>
									<br>
									<span>international affairs</span>
						               
                                                 </br><br>
                 <img alt="" src="img/france.jpg" 
				 style="padding-bottom: 18px; width: 9-px; height: 45px;" title="">

				<a href="https://www.linkedin.com/in/guillaume-asselot-6882ab41?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B%2FX9nbYGiT3e7KPhAOZFzkg%3D%3D"  target="_blank">
					<i class="fa fa-linkedin-square" style="font-size:35px;color:skyblue">
					</i>
				</a>
				<hr size="8" width="100%" color="#EA2F64">
				<br>
									
									
								        
								
					 </figure>
					<!-- end single member -->

                   <!-- single member -->
					 <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
                      <center> 
                      <!--<img alt="Frederic markus" src="img/Frederic-MARKUS.jpg" -->
                      <img alt="Frederic markus" src="img/Frederic-MARKUS.png"
                      style="height: 200px; width: 200px;" id="round" class="img-responsive">
							 </center>
                               </div>
							
						 <div class="text-center" >
							<p style="color: #062033;
  font-size: 18px;
  font-weight: 600;
  line-height: 24px;text-align:center;margin: 15px 0 0px;">Frederic MARKUS</p></div>
						<span>Head of Design, 
                                      co-founder
                                    </span>
						
									<br><br>
						  
						
						<div class="text-center" style="font-size: 14px;padding:2px">
						<b>Experience:  Disney,<br>
							 Epic, Ubisoft</br>
                                </b></b>
					</span>
					</div><br>
						
									<span>Expertise: <br>
                                        Game Design,<br></span>
										 <span>Prototyping<br></span> <br>
											    <img alt="" src="img/france.jpg" style="padding-bottom: 18px; width: 9-px; height: 45px;" title="">
											    <img alt="" src="img/us.png" style="padding-bottom: 18px; width: 9-px; height: 45px;" title="">
											    <a href="https://www.linkedin.com/in/frederik-markus-5a30b2153?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BXi1Cjgx0TQebAx8XWH0rOA%3D%3D" target="_blank"><i class="fa fa-linkedin-square" style="font-size:35px;color:skyblue"></i></a>
                                                <hr size="8" width="100%" color="#EA2F64">    
												<br>
									
							
					</figure>
					<!-- end single member -->
					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
                        <center><img alt="Alex-RECHIE" src="img/Alex-RECHE.jpg" style="height: 200px; width: 200px;" id="round"
							 class="img-responsive"></center>
                              </div>
							 <div class="text-center" >
							<p style="color: #062033;
  font-size: 18px;
  font-weight: 600;
  line-height: 24px;text-align:center;margin: 15px 0 0px;">Alex RECHE</h4></div>
						<span>Head of Research
                                      co-founder
                                    </span><br>
						
						<br>
						<div class="text-center" style="font-size: 14px;padding:2px">
						<b>Experience: <br>
						                                 MARSS, <br> INRIA
												   <br>
												  
                                                         </b>
					</span>
					</div><br>
						
									<span>Expertise: </span>
									<span>AI, 
                                        <br>AR/VR</span>
                                             
								<br>
								<img alt="" src="img/spain.jpg" style="padding-bottom: 18px; width: 9-px; height:45px;" title="">
									<a href="https://www.linkedin.com/in/alex-ritchie-b5846565?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B0KJA2abPThmBlTTo5SUcbA%3D%3D" target="_blank"><i class="fa fa-linkedin-square" style="font-size:35px;color:skyblue"></i></a>
									<hr size="8" width="100%" color="#EA2F64">     
							
					</figure>
					<!-- end single member -->
					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
                        <center><img alt="Alex-RECHIE" src="img/Mark-FIDELMAN.jpg" style="height: 200px; width: 200px;" id="round"
							 class="img-responsive"></center>
                              </div>
							 <div class="text-center" >
							<p style="color: #062033;
  font-size: 18px;
  font-weight: 600;
  line-height: 24px;text-align:center;margin: 15px 0 0px;">Mark FIDELMAN </h4></div>
						<span>CMO</span><br><br>
						
								
						  
						
						  <div class="text-center" style="font-size: 14px;padding:2px">
						  <b>Experience: 	Fanatics</span><br>
							                           <span>Media - clients include</span><br> 
							                          <span> Microsoft, Oracle, Google</span><br>
                                                         </b>
					  </span>
					  </div><br>
						
						

									<span>Expertise: Social networks<br> 
                                          Author of book “Socialized!”
                                                                           </span>
                                             
								<br><br>
								<img alt="" src="img/us.png" style="padding-bottom: 18px; width: 9-px; height: 45px;" title="">
									<a href="https://www.linkedin.com/in/alex-ritchie-b5846565?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B0KJA2abPThmBlTTo5SUcbA%3D%3D" target="_blank"><i class="fa fa-linkedin-square" style="font-size:35px;color:skyblue"></i></a>
                                             
									<hr size="8" width="100%" color="#EA2F64">  
							
							
					</figure>
</div>

                    </div>
					<!-- end single member -->
                    <br> 
                    <div class="container" style="padding:10px 10px">
					<div class="row" style="padding:10px 10px">
		
					
					
					
		<!-- single member -->
		<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
			<div class="member-thumb">
			<center>
			    <!--<img alt="Junaili-LIE" src="img/Junaili-LIE.jpg" -->
			    <img alt="Junaili-LIE" src="img/Junaili-LIE.png" 
		title="Junaili-LIE" class="img-responsive" style="height: 200px; width: 200px;"id="round"> </center>
	    <!-- <img src="img/team/member-2.png" alt="Team Member" class="img-responsive"> -->
	    </div>
				 <div class="text-center" >
							<p style="color: #062033;
  font-size: 18px;
  font-weight: 600;
  line-height: 24px;text-align:center;margin: 15px 0 0px;">Junaili LIE </h4></div>
			<span>CTO
				 </span><br><br>
				 <div class="text-center" style="font-size: 14px;padding:2px">
				 <span><b>Experience: <br></span>
			                         <span>Fortnite, Accelbyte </span><br>
								  </b>
					  </span>
					  </div><br>
			
						<span>Expertise: </span><br>
						<span>Back-End for games<br></span>
					<br>
					<img alt="" src="img/us.png" style="padding-bottom: 18px; width: 9-px; height: 45px;" title="">
						<a href=https://www.linkedin.com/in/junaili-lie-09b941?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BkKPewTfJSy6rgpz8Ga%2FWwA%3D%3D target="_blank"" target="_blank" target="_blank"> <i class="fa fa-linkedin-square" style="font-size:35px;color:skyblue"></i></a>
<br>
<hr size="8" width="100%" color="#EA2F64">  
						
			
				
		</figure>
		<!-- end single member -->
		<!-- single member -->
		<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
                       	<center> 
							<img alt="Anup-PAI" src="img/Anup-PAI.jpg" style="height: 200px; width: 200px;" id="round"
							 class="img-responsive">
						</center>
						</div>
						<div class="text-center" >
							<p style="color: #062033;
  font-size: 18px;
  font-weight: 600;
  line-height: 24px;text-align:center;margin: 15px 0 0px;">Anup PAI</h4>
					</div>
						<span>Strategic Partner for
							 Launch in India</span><br><br>
							 <div class="text-center" style="font-size: 14px;padding:2px">
							 <span><b>Experience: Fintellix,</span><br>
						                                  <span>eSamudaay </b></span>
							</div><br>
									<span>Expertise: Decentralized<br>
									Finance, Local Commerce<br></span>
					  </span>
					  
							 
						<br>
									 <img alt="" src="img/india.jpg" style="padding-bottom: 18px; width: 9-px; height: 45px;" title="">
									
									 <a href="https://www.linkedin.com/in/anup-p-395985159?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B0vBigc%2FMSWis6loPGMKpOA%3D%3D" target="_blank"><i class="fa fa-linkedin-square" style="font-size:35px;color:skyblue"></i></a>

<hr size="8" width="100%" color="#EA2F64">  
							
						
					</figure>
					<!-- end single member --> 
					<!-- single member -->
		<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
                       <center>
						 
						 <img alt="Junaili-LIE" src="img/Christophe-GODIN.png" 
						 style="height: 200px; width: 200px;" id="round"
							 class="img-responsive">
							</center>
						</div>
							 <div class="text-center" >
							<p style="color: #062033;
  font-size: 18px;
  font-weight: 600;
  line-height: 24px;text-align:center;margin: 15px 0 0px;">Christophe GODIN</h4>
							</div>
						<span>Research Partner</span><br><br>
						 
						<div class="text-center" style="font-size: 14px;padding:2px">

						<span><b>INRIA/CNRS MOSAIC <br>
						                            laboratory</b></span></div> <br>
													<span>Expertise: Virtual Plants - </span><br>
									<span>modeling and analysis of plants</span>
					  </span>
						
									
									
					  
						 <br><br>
									
									
									 <img alt="" src="img/france.jpg" style="padding-bottom: 18px; width: 9-px; height: 45px;" title="">
									 <a href= "https://www.linkedin.com/in/christophe-godin-38b8b996?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BhEoEAmVuTEakF0izY3dZ6A%3D%3D" target="_blank"><i class="fa fa-linkedin-square" style="font-size:35px;color:skyblue"></i></a>

<hr size="8" width="100%" color="#EA2F64"> 
							
						
					</figure>
					<!-- end single member --> 
					
					
				</div>
                </div>
			
		</section>
        <!--
        End Meet Our Team
        ==================================== -->
	
		
		<!--
        Some fun facts
        ==================================== -->		
<!-- 		
		<section id="facts" class="facts">
			<div class="parallax-overlay">
				<div class="container">
					<div class="row number-counters">
						
						<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2>Some Fun Facts</h2>
							<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
						</div>
						
						
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
							<div class="counters-item">
								<i class="fa fa-clock-o fa-3x"></i>
								<strong data-to="3200">0</strong>
								
								<p>Hours of Work</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
							<div class="counters-item">
								<i class="fa fa-users fa-3x"></i>
								<strong data-to="120">0</strong>
								
								<p>Satisfied Clients</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="counters-item">
								<i class="fa fa-rocket fa-3x"></i>
								<strong data-to="360">0</strong>
								
								<p> Projects Delivered </p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
							<div class="counters-item">
								<i class="fa fa-trophy fa-3x"></i>
								<strong data-to="6454">0</strong>
								
								<p>Awards Won</p>
							</div>
						</div>
						
				
					</div>
				</div>
			</div>
		</section>

         -->
        <!--
        Road Map Start
        ==================================== -->
		
		<section id="roadmap" class="roadmap"
        
        style="background-image: url('img/unique_features.png'); background-repeat: ;width: 100%;height: 100%;" >
        <!-- style="background-image: url('img/roadmap.png'); background-repeat: ;width: 100%;height: 100%;" > -->
        <!-- style="background-image: url('img/roadmap111.png'); background-repeat: ;width: 100%;height: 100%;" > -->
        
        <!-- style="background-image: url('img/seeders_tree_chart_background.png'); background-repeat: ;width: 100%;height: 100%;" > -->
		
        <div class="container">
				<div class="row" style="text-align:justify;">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                    
                    <div> <h2><i class="fa fa-road"  ></i> &nbsp;&nbsp;RoadMap</h2>
					</div>
					<h3>
				



					</h3>
                    <!-- <h2>Road Map</h2> -->
						<!-- <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div> -->
					</div>

					<!-- service item -->
					<div class="col-md-3 col-lg-3 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item" style="color:#FFFFFF">

							 <div class="service-icon">
								<!-- <i class="fa fa-volume-up"></i> -->
							</div> 
							
							 <div class="service-desc" >
								<!-- <h3>Branding</h3> -->
                                <h3 style="font-size:22px;color:#FFFFFF;text-align:center">
                                
                                    Built and tested Concept prototype, Q1'2019</h3>
                                    <div style="font-size:17px;"><p>Tree-chat Webapp
									</p>

                                <br><p> Tree navigation, forest navigation</p>
                                <br><p> Social grow, seed, team up, join, invite, post</p>
                                <br><p> Blossom, fructify, reseed</p>
                                <br><p> Basic item box : SeedBox </p>
                                <br><p> Logging, anonymous</p>
                                <br><p> Notifications</p> </div>
 
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item" style="color:#FFFFFF">
							<div class="service-icon">
								<i class="fa fa-seedling"></i>
							</div> 
							
							<div class="service-desc"  >
								<!-- <h3>Development</h3> -->

                                <h3 style="font-size:22px;color:#FFFFFF;text-align:center">
                                
                                
                                 Build App and Launch App in India, Q3'2023</h3>
                                 <div style="font-size:17px;"><br><p>Indian use case : micro-entrepreneurs bring ideas to market. They
									gather in small groups, circles, micro-communities and co-create value.</p>
									<br><p> Multimedia trees: propositions made of text, image or short video</p>
									<br><p> Location, forest on map</p>
									<br><p> Extensive forest navigation, Tree connections</p>
									<br><p> Teams, friends</p>
									<br><p> Extended Seed library (basic seeds, filter seeds, challenge seeds)</p>
									<br><p> Seed customization : SeedCreator</p>
									<br><p> Moderation : cut branch, reputation, abuse report</p></div>

                           

 							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-3 col-lg-3 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
                    <div class="service-item" style="color:#FFFFFF">
							<div class="service-icon">
								<i class="fa fa-seedling"></i>
							</div>
							
							<div class="service-desc">
								<!-- <h3>Consulting</h3> -->
                                <h3 style="font-size:22px;color:#FFFFFF;text-align:center">
                                
                                
                                 
                                 
								Tokenize and Monetize, Q2'2024</h3>
                                <div style="font-size:17px;"><p> Progressive decentralization</p>
                                <br><p> Monetization: SeedBox and SeedStore,
                                     exchange items for easier access to experiences</p>
									<br><p> Tokenization: register propositions and exchange seeds onchain</p>
									<br><p> API for web and apps (export micro-communities and events, import events)</p> </div>
							</div>
						</div>
					</div>
					<!-- end service item -->

<!-- service item -->
<div class="col-md-3 col-lg-3 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
		<div class="service-item" style="color:#FFFFFF">
							<div class="service-icon">
								<i class="fa fa-seedling"></i>
							</div>
							<div class="service-desc" >
								
								<h3 style="font-size:22px;color:#FFFFFF;text-align:center"> 
								<b>Growth potential:</b></h3> <p>
                                <div style="font-size:17px;">
                                	<p>Develop in emerging countries</p>

										<div style="text-align:center">
											<span class="bullet"></span>
										</div>

										<p>Web3 marketplace where people take Challenges</p>
										<br>
										<div style="text-align:center">
											<span class="bullet"></span>
										</div>


										<p>Become a metaverse : a virtual forest for real-world Achievements</p>
										</p>
										

										<div style="text-align:center">
											<span class="bullet"></span>
										</div>


										<br><p>Fully decentralized social network, owned and governed by its users</p>
										</p>



										<div style="text-align:center">
										<span class="bullet"></span>
										</div>


										<br><p>Augmented Reality: forest on top of camera. &nbsp;Virtual reality</p>
										</p>

										</p>

							</div>
						</div>
					</div>
					<!-- end service item -->
							
						
				</div>
			</div>
		</section>

        <script>
  let slideIndex = 0;
  showSlides();
  
  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}  
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
  </script>		
        <!--
        End Road Map
        ==================================== -->
		<!--

        <div class="siteWidth">
	<div class="TitleWidthWhiteLeft TitleColor padThis">
		<div class="TitleIcon">
			
		</div>
		<div class="TitleTitle">
			<h3>
				<span id="dnn_ctr406_dnnTITLE_titleLabel" class="noClass"><br><i class="fas fa-road"></i>&nbsp;&nbsp;RoadMap</span>



			</h3>
		</div>
		<div id="dnn_ctr406_ContentPane" class="TitleContentpane"><div id="dnn_ctr406_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
	<div id="dnn_ctr406_HtmlModule_lblContent" class="Normal">
	
		
		
		
		
		
		<p>&nbsp;</p>

<p style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal;"><span style="font-style: normal; font-variant-ligatures: normal; 
font-variant-caps: normal; font-weight: 400; font-size: 20.8px; font-family: 
Lato;"><strong>Seeders 1st prototype : 2020, Q2</strong><br>
Tree chat Webapp </span></p>

<p style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal;"><span style="font-style: normal; font-variant-ligatures: normal; 
font-variant-caps: normal; font-weight: 400; font-size: 20.8px; font-family: 
Lato;">- tree navigation, forest navigation<br>
- social grow, seed, team up, post<br>
- blossom, fructify, reseed, item box<br>
- logging, anonymous<br>
- notifications, teams, friends</span></p>

<p style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;
 letter-spacing: normal;">&nbsp;</p>

<p style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;
 letter-spacing: normal;"><span style="font-style: normal; font-variant-ligatures: normal; 
font-variant-caps: normal; font-weight: 400; font-size: 20.8px; font-family: 
Lato;"><strong>Seeders 2nd prototype : 2020, Q4</strong><br>
Tree chat App &amp; Webapp, full spec</span></p>

<p style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;
 letter-spacing: normal;"><span style="font-style: normal; font-variant-ligatures: normal; 
font-variant-caps: normal; font-weight: 400; font-size: 20.8px; font-family: 
Lato;">-&nbsp;</span><span style="font-family: Lato; font-size: 20.8px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0px;">multimedia trees:&nbsp; propositions made of text, image or short video</span></p><p style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;
 letter-spacing: normal;"><span style="font-style: normal; font-variant-ligatures: normal; 
font-variant-caps: normal; font-weight: 400; font-size: 20.8px; font-family: 
Lato;">- location, forest on map<br>
- monetization: seed store,&nbsp;Sight seeds (filters), Challenge seeds<br>
- extended Seeds library, seed creator (customized seeds)<br>
- reputation, cut branch, abuse report<br>
- IP on the blockchain: register seeds on blockchain<br>
-&nbsp;API for web and apps (export tree as event, import event as a tree) </span></p>

<p style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;
 letter-spacing: normal;">&nbsp;</p>

<p style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;
 letter-spacing: normal;"><span style="font-style: normal; font-variant-ligatures: normal; 
font-variant-caps: normal; font-weight: 400; font-size: 20.8px; font-family: 
Lato;"><strong>Seeders 3rd prototype : 2021, Q3&nbsp;</strong><br>
Full mobile video game, adapted from Tree chat. </span></p>

<p style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;
 letter-spacing: normal;"><span style="font-style: normal; font-variant-ligatures: normal; 
font-variant-caps: normal; font-weight: 400; font-size: 20.8px; font-family: 
Lato;">- strong retention and monetization<br>
- fully decentralized App&nbsp; (IP registration, donations, bets)</span><span style="font-style: normal; font-variant-ligatures: normal; 
font-variant-caps: normal; font-weight: 400; font-size: 20.8px; font-family: 
Lato;"><br>
- augmented Reality: forest on top of camera. &nbsp;&nbsp;&nbsp;Virtual reality: 1st demo</span></p>

	
	
	
	
	
	
</div>

</div></div>
		<div class="clearfix"></div>
	</div>
</div> -->
        <!--
        End Some fun facts
        ==================================== -->
		
       
        
<!-- 
    parchment starting
     ==================================== -->    
     <section id="manifest" class="manifest" style="padding:0px">
         
        <!-- style="background-image: url('img/features.png'); background-repeat: ;width: 100%;height: 100%;" > -->
        <!-- style="background-image: url('img/manifest.png'); background-repeat: ;width: 100%;height: 100%;" > -->
  <br>
<div class="container">
<div class="row mb50">
<div class="col-md-12 ">
<center>
<!-- <div class="masthead1" style="background-image:url('img/parchment_with_text_black_color.jpg');"> -->
<img class="masthead1" src="img/parchment222.jpg" alt="Snow" style="width:50%;height:50%" ></center>
<!-- <img class="masthead1" src="img/parchment_digital.jpeg" alt="Snow" style="width:50%;height:50%" ></center> -->
<!-- <img class="masthead1" src="img/parchment_digital-removebg-preview.png" alt="Snow" style="width:50%;height:50%" ></center> -->

</div>
</div>
</div>

                            </section>
<!-- 
    parchment Ending
     ==================================== -->    


		<!--
        Contact Us
        ==================================== -->		
		<br><br>
		<section id="contact" class="contact" style="padding:0px">
			<div class="container">
			<div class="row mb50">
				
				<div class="sec-title text-center  wow fadeInDown animated" data-wow-duration="500ms">
			
						<h2>Contact</h2> <br>
						
					</div>
					
					<div  style="margin: 5px  15px;" class=" text-center wow rubberBand animated" data-wow-duration="1000ms">
					
					
					
					<h5>Happy to hear from you</h5> <br>
						<h4 style="  padding: 3px 9px; "><b>
						<span >Guillaume ASSELOT</b></h4></span>
						<span ><b>CEO, co-founder</b></span>
								<li style="list-style: none;"> 
									<span style="color:#1EA78D;font-size:15px">&#9993;</span>
                    <span>
						<a href="mailto:gasselot@gmail.com" style="color:#1EA78D;font-size:15px"> 
						 gasselot@gmail.com 
						</a>
						</span>
					 </li>
								
					</div>
					<br> 
					<!-- contact address -->
					 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms"
					 style="padding:0px">
						<div class="contact-address"> <center>
						<!-- <h7>Happy to hear from you</h7><br>
								<h7>Guillaume Asselot, co-founder and CEO</h7>
								<li   > 
                    <span><a href="mailto:gasselot@gmail.com" style="color:#1EA78D">  gasselot@gmail.com </a></span> </li>
								</center> -->
						</div>
					</div> 
					<!-- end contact address class="footer_email -->
					
					<!-- contact form -->
					<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
                        <div class="container" style="margin-bottom:25px;">
								<div class="row h-90 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6" style="  border-style: solid;border-width: 3px;border-radius: 20px;
                 padding: 20px;box-shadow: 5px 10px #EA2F64;">

							<h3 style="color:#EA2F64">Contact Us</h3>

							<form id="contact_form" name="contact_form" method="POST" 
							action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return contact_validation();" novalidate="">
						    
						   

							<!--<form action="#" id="contact-form"> -->
								<div class="input-group name-email">
									<div class="input-field">
										<input type="text" name="name" id="name" placeholder="Name *" class="form-control" required>
									</div>
									<div class="input-field">
										<input type="email" name="email" id="email" placeholder="Email *" class="form-control" required>
									</div>
								</div>
                                <div class="input-group">
                                <div class="input-field">
										<input type="text" name="company_Name" id="company_Name" placeholder="Company Name " class="form-control" >
									</div>
                                </div> 
                                <div class="input-group">
                                <div class="input-field">
										<!-- <input type="text" name="company_Name" id="company_Name" placeholder="Company Name " class="form-control" > -->
									</div>
                                </div>    
								<div class="input-group">
									<textarea name="message" id="message" placeholder="Message *" class="form-control"></textarea>
								</div>
								<div class="input-group">
									<input type="submit" name="submit" id="submit" class="pull-right" class="btn btn-primary"
                                    style="background-color:#FFFFFF;color:#1EA78D;border-radius:10px;justify-content: center;" value="Send message"> 
									<!-- style="background-color:#1EA78D;color:#ffffff;border-radius:10px;justify-content: center;" value="Send message"> -->
                                    
                                </div>
							</form>
						</div>
					</div>
                    </div>
					</div></div>
					<!-- end contact form -->
					
					<!-- footer social links -->
					<!-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<ul class="footer-social">
							<li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
							<li><a href="https://www.twitter.com/"><i class="fa fa-twitter fa-2x" style="color:#1D9BF0"></i></a></li>
							<li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x" ></i></a></li>
                            <li><a href="https://www.facebook.com/"><img src="img/Facebook_logo.jpg" style="width: 26px;;height: 26px;"></a></li>
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook fa-2x" style="color:#1D9BF0"></i></a></li>
						</ul>
					</div> -->
					<!-- end footer social links -->
					
				</div>
			</div>
			
			<!-- Google map -->
			<!-- <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div> -->
			<!-- End Google map -->
			
		</section>
		<br>
        <!--
        End Contact Us
        ==================================== -->
				
		<!-- <footer id="footer" class="footer" style="height:40px;padding:0px"> -->
		<!-- <footer>-->	

		<div id="footer1" class="footer1 col-md-12" style="text-align:center;padding:20px;color:#FFFFFF;margin: bottom 10px;margin:top 30px;background-color:#1ea78d;;margin-top:-70px;">
		    
<h5 >Copyright © 2022 <a  href="" >Seeders. </a>
		<!-- <h5 >Copyright © 2022 <b><a style="color:#EA2F64" href="http://themefisher.com/" >Seeders </a>. </b></h5> -->

		All rights reserved. Designed & developed by <a href="https://www.iiiqbets.com/">
										iiiQbets
									</a>
</h5>

</div>



		<!-- <div id="footer" class="footer" 
		 style="height:50px;padding:0px" > 
			<div class="container">
				<div class="row" >
					<div class=" col-lg-2 ">
							
					</div>
			
					<div class=" col-lg-2 col-md-12">
							<p class="copyright text-center" >
								<img alt="" src="img/logo.png" 
										style="padding-bottom: 0px;margin:0px " title="">
								</p>
					</div>
				
					<div class=" col-lg-6 col-md-12">
							
								<p class="copyright " >
								<center>
									Copyright © 2022 
									<a href="http://themefisher.com/" >
										Seeders
									</a>.
							
									All rights reserved. Designed & developed by
									<a href="https://www.iiiqbets.com/">
										iiiQbets
									</a>
									</center>  
								</p>
					</div>
					<div class=" col-lg-2 ">
							
					</div>

				</div>
			</div>
		</div> -->
		
		<!-- </footer>  -->
		<!-- </footer>  -->
		
		<a href="javascript:void(0);" id="back-top">
            <!-- <i class="fa fa-angle-up fa-3x"></i> -->
            <i class="fa fa-angle-up fa-3x" style="color:#EA2F64"></i>

        </a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
		<!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="js/wow.min.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="js/custom.js"></script>
		
		<!-- <script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script> -->


     
<script type="text/javascript">
 
	function contact_validation()
	{
	
	  var phoneno=/^\d{10}$/;
	  var email1=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
	  var letters = /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/;
	 // var ph=document.contact_form.phone.value;
	  var em=document.contact_form.email.value;
	  var name=document.contact_form.name.value;
	  var message=document.contact_form.message.value;
      var company_Name=document.contact_form.company_Name.value;
	  //var sponserid=document.join.referid.value;
	  //alert("hello from validation");
	  if(ph === " " && ph === null && em === null  && em === " "  && name === " "  && name === null  && message === " " 
				   && message === null)
	  {
		alert("Please Enter All The Fields");
		return false;
	  }
	  if(name.match(letters))
	  {

            if (em.match(email1))
            {
                return true;
            }
            else
            {
                alert("You have entered an invalid email address!")
                return false;
            }
		

	  return true;
	  }

	  else
	  {
		alert("Not a correct name ,Enter only alphabets");
		//document.contact.names.focus();
		return false;
	  }
	 
	}
  
  </script>
  
  <?php

  include("config.php");
  if(isset($_POST["submit"]))
  {
  
  $name = mysqli_escape_string($conn,$_POST["name"]);
  // $email = mysqli_escape_string($conn,$_POST["email"]);
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  //$phone = mysqli_escape_string($conn,$_POST["phone"]);
  $company_Name = mysqli_escape_string($conn,$_POST["company_Name"]);
  $message = mysqli_escape_string($conn,$_POST["message"]);
//  company_Name
  //date_default_timezone_set('Asia/Kolkata');
  //$date1 =  date("d-m-Y");
  //$time1 = date("h:i:sa");
  
   $error_msg="";
   if($name == " ") 
	  {
		echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">You Did not entered name.</small>';
	  }
	  elseif($email == "") {
		echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">You Did not entered Email id.</small>';
	  }
	  elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
	 echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">You Did not entered a valid Email id.</small>';
	  }
	//   elseif($phone == ""){
	//   echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Phone Number.</small>';
	//   }
	//   elseif(is_numeric(trim($phone)) == false){
	//   echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Phone Number.</small>';
	//   }
	//   elseif(strlen($phone)<10){
	//  echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Correct 10 digit Phone Number.</small>';
	//   }
	  elseif($message == ""){
	  echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Message.</small>';
	  }
  else
  {
	  $id="";
	  $result=mysqli_query($conn,"select id from contact where id=(select max(id) from contact)");
	  if($row=mysqli_fetch_array($result))
	  {
	  $id=$row['id']+1;
	  }
	  $sql = "INSERT INTO contact(id,name,email,company_Name,message) VALUES
								   ('$id','$name','$email','$company_Name','$message')";
	//	echo $sql;
	  if ($conn->query($sql) === TRUE) 
	  {
		   // echo '<script>alert("Thank You for contacting us we will get back to you soon!");</script>';
 		 $to1="gasselot@gmail.com";

// $to1 = "abhijithmavatoor@gmail.com";
			
		$subject1="New User Contact Info";
		$from1="info@potauto.in";
	//	$from1="gasselot@gmail.com";
		$message1= "Hi Team,".'<br/><br/>'."New User filled the contact form. Following are the User information.".'<br/><br/>'."Name : " . $name .'<br/>'."Email : " .$email.'<br/>'.
        '<br/>' ."Company Name : ".$company_Name. '<br/>' ."Message : ".$message.'<br/><br/><br/>'."Regards".'<br/>'. "Seeders" .'<br/>'
		.'<a href="">seeders.com</a>' . '<br/>' . 
		'<img src=""  style="" width="160px" height="60px"/>'. '<br/>';
	
// 		$headers1 = "MIME-Version: 1.0" . "\r\n";
// 		  $headers1 .= "From: Seeders<info@potauto.in>"."\r\n";
// 	//	$headers1 .= "From: Seeders<gasselot@gmail.com>"."\r\n";
// 		$headers1 .= "Content-type: text/html; charset=utf8\r\n ";
		
		
		$headers1 = "MIME-Version: 1.0" . "\r\n";
      $headers1 .= "From: Seeders <info@potauto.in>"."\r\n";
      $headers1 .= "Content-type: text/html; charset=utf8\r\n ";
	 
		 if(mail($to1,$subject1,$message1,$headers1,'-finfo@potauto.in'))
	//	if(mail($to1,$subject1,$message1,$headers1,'fgasselot@gmail.com'))
		{  
		  
		$to=$email;
		$subject="Greetings from Seeders!!!";
		$from="gasselot@gmail.com";
		
		$message= '<html><body><table width="100%" style="background-color:#dadada;border-collapse:collapse;border-spacing:0;border-collapse:collapse;border-spacing:0"><tbody><tr><td align="center"><table width="682" style="border-collapse:collapse;border-spacing:0"><tbody><tr class="m_-1958935385513098443header">
  <td bgcolor="#eeeeee"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
  <tbody><tr><td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="12">&nbsp;</td>
  </tr><tr><td><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
  <tbody><tr><td width="35">&nbsp;</td><td width="557"><table width="100%" border="0">
  <tbody><tr><center><td width="45%"><a href="" target="_blank""><img src="https://iqbetspro.com/seeders/img/logo.png" width="140px" ></a></td></center></tr>
  </tbody></table></td><td width="35">&nbsp;</td></tr></tbody></table></td></tr><tr>
  <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left;border-bottom:3px solid #2f94d7" height="18">&nbsp;</td></tr></tbody></table></td></tr><tr><td bgcolor="#ffffff"> 
  <table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
  <tbody><tr><td width="20" style="font-size:0;line-height:0">&nbsp;</td><td width="640" style="font-size:0;line-height:0"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
  <tbody><tr><td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="15">&nbsp;</td>
  </tr><tr><td style="background-color:#f8f8f8;border:1px solid #ebebeb"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
  <tbody><tr><td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="15">&nbsp;</td>
  </tr><tr><td style="margin:0;color:#1e4a7b;font-size:20px;line-height:24px;font-family:Arial,Helvetica,sans-serif;font-style:normal;font-weight:normal;text-align:center">
  Greetings from SEEDERS!!!!</td></tr><tr>
  <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="5">&nbsp;</td>
  </tr></tbody></table></td></tr></tbody></table>
  <table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
  <tbody><tr>
  <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
  </tr>
  <tr>
  <td style="vertical-align:top;margin:0;padding:0;font-size:16px;color:#231f20;line-height:24px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;text-align:left">Dear '.$name.',
  </td></tr>
  <tr>
  <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
  </tr>
  <tr>
  <td style="margin:0;padding:0;font-size:16px;color:#231f20;line-height:24px;text-align:center;font-family:Arial,Helvetica,sans-serif;font-weight:normal">
  
  <div style="text-align:left"></div><div style="text-align:left"><span style="background-color:transparent">
  Thank you for contacting us, We will get back to you soon!! </span>
  
  </div>
  </td>
  </tr>
  <tr>
  <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
  </tr>
  <tr>
  <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
  </tr>
  <tr>
  <td style="margin:0;padding:0;font-size:16px;color:#231f20;line-height:21px;font-family:Arial,Helvetica,sans-serif;font-weight:normal">Regards,<br><span class="il">Seeders</span> Team</td>
  </tr>
  <tr>
  <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="10">&nbsp;</td>
  </tr>
  <tr>
  <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="10">&nbsp;</td>
  </tr>
  </tbody></table>
  
  </td>
  <td width="20" style="font-size:0;line-height:0">&nbsp;</td>
  </tr>
  </tbody></table></td></tr>
  
  
  <tr>
  <td bgcolor="#eeeeee"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
  <tbody><tr>
  <td width="35">&nbsp;</td>
  <td width="557"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
  <tbody><tr>
  <td><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
  <tbody><tr>
  <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:center" height="25">&nbsp;</td>
  </tr>
  <tr>
  <td style="margin:0;color:#999999;font-size:11px;line-height:20px;font-family:Arial,Helvetica,sans-serif;font-style:normal;font-weight:normal;text-align:center">' . date('Y').'<span class="il">  Seeders</span> |
   | <a href="https://iqbetspro.com/seeders/index.php#contact" style="color:#999999;font-size:11px;line-height:20px;font-family:Arial,Helvetica,sans-serif;font-style:normal;font-weight:normal;text-decoration:none" target="_blank" >Contact Us</a> <br>
   </td>
  </tr>
  <tr>
  <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
  </tr>
  <tr>
  <td style="text-align:center"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
  </table></td>
  </tr>
  </tbody></table></td>
  </tr>
  <tr>
  <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left;border-bottom:1px solid #dadada" height="20">&nbsp;</td>
  </tr>
  <tr>
  <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="25">&nbsp;</td>
  </tr>
  
  </tbody></table></td>
  <td width="35">&nbsp;</td>
  </tr>
  </tbody></table></td>
  </tr>
  
  </tbody></table></td>
  </tr>
  </tbody></table></body></html>';
	   
		$headers = "MIME-Version: 1.0" . "\r\n";
		 $headers .= "From: Seeders <gasselot@gmail.com>"."\r\n";
		$headers .= "Content-type: text/html; charset=utf8\r\n ";
	  
		if(mail($to,$subject,$message,$headers,'-fgasselot@gmail.com'))
		{
  
   
		// echo '<div class="error-handle error-1" id="mydiv" onclick="this.style.display = \'none\'">Thank you!! Registered successfully!! <span onclick="this.parentElement.style.display=\'none\'" class="topright">&times</span></div>';
		echo '<script>alert("Thank you!, Our team will get back to you soon");window.location.href="index.php";</script>';
		
		 //echo "email sent ";
		}
	}
		else{
  // echo '<div class="error-2 error-1" id="mydiv" onclick="this.style.display = \'none\'">Sorry Failed to send try again.</div>';
		  echo '<script>alert("failed to submit");window.location.href="index.php";</script>';
		// echo "not sent email";
   //print_r(error_get_last());
		  }
  
  } 
		else 
		{
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}
  
	}
  $conn->close();
	  
  //}
  
  }
  
  ?>

<script>

$(".nav a").on("click", function(){  $(".nav").find(".active").removeClass("active"); 
     $(this).parent().addClass("active");});

</script>

<script>
    window.onload=function(){
        document.getElementById("autoplay").play();
    }
</script>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


    </body>
</html>
