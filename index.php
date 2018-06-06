<?php include 'includes/head.inc.php'; ?>
<?php include 'includes/nav.inc.php'; ?>

<body>

	<header class="container-fluid">
		<h1>Riley Cravens</h1>
		<hr class="intro-divider">
		<!-- Modal -->
		<div class="modal fade" id="resumeModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="resumeModalLabel">Resume</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							<img src="http://via.placeholder.com/500x700/222222/fff/?text=Resume">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Modal -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<h2>
						Hi. I'm a web developer based in Portland, OR. Please take a look at my recent work!
					</h2>
				</div>
				<div class="col-md-6">
					<p>
						I'm interested in translating beautiful designs into elegantly functional code and working on both sides of the stack to get the job done. I love to collaborate and have participated in and managed Agile workgroups using Jira and Github. When not working
						with Front-End Frameworks such as Bootstrap and Bulma, I like to use PHP to integrate databases via MySql into my projects.
					</p>
				</div>
			</div>
		</div>
	</header>

	<main class="container-fluid">
		<div id="skillbox" class="row">
			<div id="languages" class="col-md skills">
				<h3>Languages I Speak</h3>
				<hr class="intro-divider">
				<ul>
					<li>
						HTML5
					</li>
					<li>
						CSS3
					</li>
					<li>
						JavaScript
					</li>
					<li>
						PHP
					</li>
					<li>
						SQL
					</li>
					<li>
						C++ Literate
					</li>
				</ul>
			</div>
			<div id="tools" class="col-md skills">
				<h3>Tools I Like</h3>
				<hr class="intro-divider">
				<ul>
					<li>
						Bootstrap
					</li>
					<li>
						Bulma
					</li>
					<li>
						Sass
					</li>
					<li>
						jQuery
					</li>
					<li>
						MySql
					</li>
					<li>
						WordPress
					</li>
				</ul>
			</div>
			<div id="platforms" class="col-md skills">
				<h3>Platforms I Use</h3>
				<hr class="intro-divider">
				<ul>
					<li>
						MacOS
					</li>
					<li>
						Atom
					</li>
					<li>
						CodeKit
					</li>
					<li>
						Github
					</li>
					<li>
						Jira
					</li>
					<li>
						XAMPP
					</li>
					<li>
						PHPStorm
					</li>
					<li>
						Photoshop
					</li>
				</ul>
			</div>
		</div>
		<h2>My Recent Work</h2>
		<ul class="gridder">
			<li class="gridder-list" data-griddercontent="#gridder-content-1">
				<img src="images/nattystaggs-thumb.jpg" class="img-fluid">
			</li>
			<li class="gridder-list" data-griddercontent="#gridder-content-2">
				<img src="images/albina-thumb.jpg" class="img-fluid">
			</li>
			<li class="gridder-list" data-griddercontent="#gridder-content-3">
				<img src="images/ace-thumb.jpg" class="img-fluid">
			</li>
		</ul>

		<div id="gridder-content-1" class="gridder-content">
			<div class="row">
				<div class="col-md-6">
					<img src="images/nattystaggs.jpg" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<h2>Natty Staggs</h2>
					<p>
						I am currently working with local Portland artist and musician, Natty Staggs, to build her a portfolio website. The site is built using Bootstrap 4.1, Sass, and jQuery. The current version can viewed <a href="https://rileycravens.com/nattystaggs" target="_blank">here.</a>
					</p>
				</div>
			</div>
		</div>
		<div id="gridder-content-2" class="gridder-content">
			<div class="row">
				<div class="col-sm-6">
					<img src="images/albina.jpg" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<h2>Walk Albina's Black History</h2>
					<p>
						In the Spring of 2018 I collaborated with a team of fellow Capstone students to build a website for History 251, African American History since 1877, at Portland Community College. The students of this class put on an annual Tour of Historical Locations
						related to the Black History of the Albina Neighborhood in Portland, Oregon. The website serves as an informational page about the walk and includes essays from students about each location. The role that I performed in the group was to handle all
						JavaScript implementation as well as content editor. The website can viewed <a href="https://rileycravens.com/cas285" target="_blank">here,</a> temporarily until it goes live.
					</p>
				</div>
			</div>
		</div>
		<div id="gridder-content-3" class="gridder-content">
			<div class="row">
				<div class="col-sm-6">
					<img src="images/ace.jpg" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<h2>Ace in the Hole</h2>
					<p>
						In the Fall on 2017 I took the course Integrated Website Design(CAS222) at Portland Community College. The course project was to build a site for a fictional sporting event know as Ace in the Hole Multisport Event. The site can be viewed <a href="https://rileycravens.com/cas222" target="_blank">here.</a>
					</p>
				</div>
			</div>
		</div>
	</main>

	<article id="contact" class="container-fluid">
		<br>
		<h2>What can I do for you?</h2>
		<?php include 'php/mailer.php';?>
	</article>


	<?php include 'includes/footer.inc.php'; ?>
	<?php include 'includes/scripts.inc.php'; ?>
</body>

</html>
