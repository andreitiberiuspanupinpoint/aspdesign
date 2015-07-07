<?php 

$host="localhost";
$user="aspdesig_user";
$password="gl!?K.TI~HI&";
$database="aspdesig_test";
$con=mysqli_connect($host,$user,$password,$database);

?>
<!doctype html>
<html lang="EN">
	<head>
	<meta charset="UTF-8">
	<title>ASP-Design - Andrei Spanu</title>
	<meta name="viewport" content="width=device-width, user-scalable=no" "initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="stylesheets/reset.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
	<script src="javascript/jquery.js"></script>
	<script src="javascript/bjqs.js"></script>
	<script src="javascript/functions.js"></script>
	<link type="text/css" rel="Stylesheet" href="stylesheets/bjqs.css" />
	</head>
	<body>
	<div class="main-wrapper">
		<header class="cf">
			
		<div id="logo">
			<p>aspdesign<span>*</span></p>
		</div>

		<nav class="cf top-nav">
			
			<ul>
				
			<li class="selected"><a href="#">home</a></li>
			<li><span>.</span></li>
			<li><a href="#vision">vision</a></li>
			<li><span>.</span></li>
			<li><a href="#portfolio">portfolio</a></li>
			<li><span>.</span></li>
			<li><a href="#about">about</a></li>
			<li><span>.</span></li>
			<li><a href="#contact">contact</a></li>

			</ul>

		</nav>

		</header>

		<div id="slider">
			
			<ul class="bjqs" id="home">
				
				<li><img src="images/slide_1.jpg"></li>
				<li><img src="images/slide_2.png"></li> 

			</ul>

		</div>

		<div id="vision">

			<div id="our_services">	

				<h1>Vision</h1>

				<p>I consider myself to be an explorer opened to new challenges, fit for the ever changing technological and social landscape of today.  Programming, for me, transformed from a hobby to a lifestyle and then turned into a fruitful career. Who I am is the end result of many hours, days, months of continuous preparation, testing and learning.</p>
				<br/>
				<p>The future is bright because I still have the same firmness of purpose to succeed, to upgrade my skills and to improve as an individual. I feel every day the same joy as when I wrote my first "Hello World!".</p>
				<br/>
			 	<p>The programming languages gradually add up like an puzzle of electronic knowledge, every single one allowing for deeper understanding of the mysterious analytical world. Programming is art, science and determination, all in one place, under a very rewarding and highly addictive form. It defines my personality.</p>
			 	<br/>
			 	<p>For each and every step forward I have rewarded myself a star :</p>
			</div>


			<div class="row cf">
					
				<div class="cell cf">
					
					<img src="images/star.png">
					<div id="right">
						<h2>HTML 5</h2>
						<p>The very first step in my journey of becoming a web developer. From doctype declaration up to new semantic and multimedia elements.</p>
					</div>
				</div>


				<div class="cell cf">
					
					<img src="images/star.png">
					
					<div id="right">
						<h2>CSS / CSS3</h2>
						<p>Excellent! where would the style go? from regular to new features as transforamations and animations. But never inline.</p>
					</div>	
				</div>


				<div class="cell cf">
					
					<img src="images/star.png">
					<div id="right">
						<h2>Javascript</h2>
						<p>I just love to see how Javascript takes control over the DOM. ECMAScript 5 is the name of the game.</p>
					</div>	
				</div>

			</div>



			<div class="row cf">
				
				<div class="cell cf">
						
					<img src="images/star.png">
					<div id="right">
						<h2>jQuery</h2>	
						<p>From sliders to counters, from page elements animations to front validation, just like Javascript only more fun.</p>
					</div>	
				</div>


				<div class="cell cf">
						
					<img src="images/star.png">
					<div id="right">
						<h2>Adobe Suite</h2>	
						<p>Ps, Ai, Fw, Fl, Dw. Yes! Every day, every time! A must have in the suitcase of skills.</p>
					</div>	
				</div>


				<div class="cell cf">
					
				<img src="images/star.png">
					<div id="right">
						<h2>Responsive Design</h2>	
						<p>Fixed layout is obsolete. With all the new mobile devices and screen sizes, responsive design is the key.  
						</p>
					</div>
				</div>


			</div>
			
			<div class="row cf">	

				<div class="cell cf">
					
				<img src="images/star.png">
					<div id="right">
						<h2>MySQL</h2>	
						<p>The most widely used open-source Database Management System. Since my designs became more complex, I needed this upgrade.</p>
					</div>
				</div>

				<div class="cell cf">
					
				<img src="images/star.png">
					<div id="right">
						<h2>PHP</h2>	
						<p>Now a brand new chapter opened: dynamic websites, database queries, server-side validations, user acces, sessions and many more. </p>
					</div>
				</div>

				<div class="cell cf">
					
				<img src="images/star.png">
					<div id="right">
						<h2>Ajax</h2>	
						<p>Works with the server and PHP to deliver fast, dynamic content.</p>
					</div>
				</div>

			</div>



		<div id="portfolio">
		
				


			<h1>Portfolio</h1>
			<p>Depending on the categories there are a few examples to chose from. From active websites to projects and mockups.</p>

			<nav>
				<ul class="cf">
				
				<?php	
					if(isset($_GET['cat'])){
						switch($_GET['cat']){
							case 'w':
							echo "	<li><a href=\"index.php?#portfolio\">All</a></li>
									<li class=\"nav2_selected\"><a href=\"index.php?cat=w#portfolio\">Web Design</a></li>
									<li><a href=\"index.php?cat=p#portfolio\">Projects</a></li>
									<li><a href=\"index.php?cat=m#portfolio\">Slices</a></li>
								";
							break;	


							case 'p':
							echo "	<li><a href=\"index.php?#portfolio\">All</a></li>
									<li><a href=\"index.php?cat=w#portfolio\">Web Design</a></li>
									<li class=\"nav2_selected\"><a href=\"index.php?cat=p#portfolio\">Projects</a></li>
									<li><a href=\"index.php?cat=m#portfolio\">Slices</a></li>
								";	
							break;	

							case 'm':
							echo "	<li><a href=\"index.php?#portfolio\">All</a></li>
									<li><a href=\"index.php?cat=w#portfolio\">Web Design</a></li>
									<li><a href=\"index.php?cat=p#portfolio\">Projects</a></li>
									<li class=\"nav2_selected\"><a href=\"index.php?cat=m#portfolio\">Slices</a></li>
								";	
							break;	

						}
					}else{
						echo "		<li class=\"nav2_selected\"><a href=\"index.php?#portfolio\">All</a></li>
									<li><a href=\"index.php?cat=w#portfolio\">Web Design</a></li>
									<li><a href=\"index.php?cat=p#portfolio\">Projects</a></li>
									<li><a href=\"index.php?cat=m#portfolio\">Slices</a></li>
								";
					}

				?>

					

				</ul>
			</nav>	


			<ul class="cf" id="imagini">
				
			<?php 

				if(isset($_GET['cat'])){
					switch($_GET['cat']){

						case 'w':

						$qry="SELECT * FROM `all` WHERE cat='w'";
						$query=mysqli_query($con, $qry);
						while($row=mysqli_fetch_assoc($query)){
						echo "<li><a href=\"".$row['link_path']."\"><img src=images/".$row['image_path']."></a></li>";
						}

						break;


						case 'p':

						$qry="SELECT * FROM `all` WHERE cat='p'";
						$query=mysqli_query($con, $qry);
						while($row=mysqli_fetch_assoc($query)){
						echo "<li><a href=\"".$row['link_path']."\"><img src=images/".$row['image_path']."></a></li>";
						}

						break;


						case 'm':

						$qry="SELECT * FROM `all` WHERE cat='m'";
						$query=mysqli_query($con, $qry);
						while($row=mysqli_fetch_assoc($query)){
						echo "<li><a href=\"".$row['link_path']."\"><img src=images/".$row['image_path']."></a></li>";
						}

						break;
					}
				}else{

					$qry="SELECT * FROM `all`";
					$query=mysqli_query($con, $qry);
					while($row=mysqli_fetch_assoc($query)){
					echo "<li><a href=\"".$row['link_path']."\"><img src=images/".$row['image_path']."></a></li>";
					}

				}


			?>

					
			</ul>




		</div>




	<div id="about" class="cf">

		<h1>Andrei Spanu</h1>
		<p>Date /Place of Birth: 29 September 1982 / Constanta, Romania</p>
		<br />
		<p>Currently I am working for one of the biggest names in advertising in Romania, a proud agency that delivers its products in a professional manner. 
		I have been employed since August 2014 and enjoyed every project whether is about redesigning, building media campaigns or maintenance 
		of the existing websites. A normal day here includes high workload in a short time span but on the upside the large variety of tasks needed 
		to be done as soon as possible helped upgrading my skills exponentially.</p>
		<br />

		<div class="small_container">
			<div class="right">
				
			
				<p>With important clients such as Honda, Praktiker, Generali, CeC Bank, Gecad, Microsoft, Total, Skoda, Cosmopolis, Tagor, Rompetrol and many more, my first concern is about quality 
				and punctuality, nevertheless innovation is also considered.</p>
				<br />
				<p>As usual, an important role in my career has been the constant learning process. I study a lot of different materials from different sources as participating at taking part in classes, books, articles or tutorials. 
				I am currently enrolled at the Hyperion University, remotely studying Informatics.</p>
				<br />
				<p>Working for about a year in the free-lancing market has been a great opportunity to get acquainted to working with customers, but the experience acquired while dealing
				 with multiple factors in an agency has dramatically improved my skills. I am able to deliver on time and willing to go the extra mile to improve.
				 I have patience and I am able to negotiate. I have a positive attitude since I enjoy my work and I am proud to see the end result.</p>

			</div>


			

			<div class="cell_2">
			
				<img src="images/me.jpg">
				
				<h2>Andrei Spanu</h2>
				<p>Gave up the work in the shipping sector for pursuing the long time passion for design and graphics.</p>
				
				<div class="social">
					
					<a href="https://www.facebook.com/andrei.spanu.82"><img src="images/fbook.png"></a>
					<a href="https://plus.google.com/u/0/106091874377360017214/posts"><img src="images/google.png"></a>
					<a href="#"><img src="images/tweet.png"></a>
					<a href="http://ro.linkedin.com/in/andreispanu" target="_blank"><img src="images/linked.png"></a>

				</div>
			</div> <!-- cell 2 -->

		</div> <!-- small container -->

	</div> <!--about-->




		<div id="contact" class="cf">
			
			<h1>Get in touch</h1>

			<p>I want to hear from you. Whether you're a prospective client, interested in my work or looking for opportunities, send me a note. I am working hard but will try and respond to you within a few hours.</p>


			<div id="row_2" class="cf">

				<form method="POST" action="#">
				
					<input type="text" required="required" name="name" placeholder="Name (required)"><br>
					<input type="email" required="required" name="email" placeholder="Email (required)"><br>
					<input type="text"  required="required" name="subject" placeholder="Subject"><br>
					<textarea placeholder="Describe your project in detail..." name="message"></textarea><br>
					<input type="submit" value="send">
				</form>


				<div id="contact_info">

					<h2>Contact Information</h2>
					<p>I am happy to hear from you, please fill out the request for proposal form and I will be in touch shortly.</p>


					<p><img src="images/location.png">Valeriu Braniste St. / Bucharest</p>
					<p><img src="images/phone.png">0040 770 742 591</p>
					<p><img src="images/sms.png">office@aspdesign.ro</p>

				</div>

			</div>

			<div class="footer-nav">
				
				<nav class="cf bottom-nav">
			
					<ul>
						
						<li class="selected"><a href="#logo">home</a></li>
						<li><span>.</span></li>
						<li><a href="#vision">vision</a></li>
						<li><span>.</span></li>
						<li><a href="#portfolio">portfolio</a></li>
						<li><span>.</span></li>
						<li><a href="#about">about</a></li>
						<li><span>.</span></li>
						<li><a href="#contact">contact</a></li>

					</ul>

				</nav>	


			</div>

			

			<?php

				$to='andrei.spanu@gmail.com';
				$subject='mesaj trimis de la script';
				$name=$_POST['name'];
				$email=$_POST['email'];
				$message=$_POST['message'];

	$message=<<<EMAIL

Hi my name is $name.

$message

From $name
My e-mail is $email
	
EMAIL;

$header=$date;

if($_POST){
	mail($to,$subject,$message);
	$feedback="Thank you for your e-mail";
}


	echo $feedback;

?>

		
		</div><!--contact-->


		<footer class="cf">
				
			<p>© Copyright 2015 · by aspdesign</p>
			<div class="social_footer">
				<a href="https://www.facebook.com/andrei.spanu.82"><img src="images/fbook.png"></a>
				<a href="https://plus.google.com/u/0/106091874377360017214/posts"><img src="images/google.png"></a>
				<a href="#"><img src="images/tweet.png"></a>
				<a href="http://ro.linkedin.com/in/andreispanu" target="_blank"><img src="images/linked.png"></a>
			</div>	

		</footer>
		
	</div>

	<script type="text/javascript">

	

	jQuery(document).ready(function($) {
    $('#slider').bjqs({
        'height' : 600,
        'width' : 1025,
        'showmarkers' : false,
        'responsive' : true,
        'nexttext' : '',
        'prevtext' : '',
    	});



$('#imagini a').on('click', function(){
	$('#viewer').fadeIn(2000);
});



    $(document).ready(function(){
	$('.top-nav a, .footer-nav a').on('click',function (e) {
		    e.preventDefault();

		    var target = this.hash;
		    var $target = $(target);

		    $('html, body').stop().animate({
		        'scrollTop': $target.offset().top
		    }, 900, 'swing', function () {
		        window.location.hash = target;
		    });
		});
	});



   

	});
	




	</script>
	</body>
</html>