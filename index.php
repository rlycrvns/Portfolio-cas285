<?php include 'includes/head.inc.php'; ?>
<?php include 'includes/nav.inc.php'; ?>

<body>

	<button onclick="topFunction()" id="topBtn" title="Go to top"<i class="fas fa-angle-up"></i></button>
	<header class="container-fluid">
		<h1>Riley Cravens</h1>
		<hr class="intro-divider">
		<!-- Modal -->
		<div class="modal fade" id="resumeModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							<img src="images/RileyCravens.jpg" alt="Resume of Riley Cravens">
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
						I am passionate about translating beautiful designs into elegantly functional code and working on both ends of the stack to get the job done. I love to collaborate and have participated in and managed Agile workgroups using Jira and Github. When not working
						with Front-End Frameworks such as Bootstrap and Bulma, I like to use PHP to integrate databases via MySql into my projects. Lately, I have been dipping my toes into the world of JavaScript Frameworks.
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
				<h3>Tools I Use</h3>
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
					<li>
						Git
					</li>
				</ul>
			</div>
			<div id="platforms" class="col-md skills">
				<h3>Platforms I Run</h3>
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
						Slack
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
		<h2 id="work">Recent Work</h2>
		<ul class="gridder">
			<li class="gridder-list" data-griddercontent="#gridder-content-1">
				<img src="images/nattystaggs-thumb.jpg" alt="Screenshot of Natty Staggs Webpage" class="img-fluid">
			</li>
			<li class="gridder-list" data-griddercontent="#gridder-content-2">
				<img src="images/albina-thumb.jpg" alt="Screenshot of Walk Albina's Black History Webpage" class="img-fluid">
			</li>
			<li class="gridder-list" data-griddercontent="#gridder-content-3">
				<img src="images/moviedb-thumb.jpg" alt="Screenshot of Movie DB webpage" class="img-fluid">
			</li>
		</ul>

		<div id="gridder-content-1" class="gridder-content">
			<div class="row">
				<div class="col-md-6">
					<img src="images/nattystaggs.jpg" alt="Image of Walk Albina's Black History Webpage viewed on an iPhone" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<h2>Natty Staggs</h2>
					<div class="row detail-header">
						<div class="col">
							<h4>
								Year:
							</h4>
							 <h5>
								2018
							</h5>
						</div>
						<div class="col">
							<h4>
								Role:
							</h4>
								<h5>
									 Designer and Developer
								</h5>
						</div>
						<div class="col">
							<h4>
								Client:
							</h4>
							<h5>
								Natty Staggs
							</h5>
						</div>
					</div>
					<p>
						I am currently interning as a Designer and Developer for Natty Staggs, a Portland artist, and musician, to furnish a complete overhaul of her portfolio website. I worked with Natty to create a wish list of features and design specifics. From this list, I used Balsamiq Mockups 3 and Photoshop to build a prototype design.
						 Once approved by Natty, I used Bootstrap, Sass, and jQuery to develop the site and bring her wish list to life.
						 The site is still under contruction, but the current version can be viewed below.
					</a>
					</p>
					<a class="btn btn-dark" role="button" href="https://rileycravens.com/nattystaggs" target="_blank">View the site</a>
				</div>
			</div>
		</div>
		<div id="gridder-content-2" class="gridder-content">
			<div class="row">
				<div class="col-sm-6">
					<img src="images/albina.jpg" alt="Image of Walk Albina's Black History Webpage viewed on an iPhone" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<h2>Walk Albina's Black History</h2>
					<div class="row detail-header">
						<div class="col">
							<h4>
								Year:
							</h4>
							 <h5>
								2018
							</h5>
						</div>
						<div class="col">
							<h4>
								Role:
							</h4>
								<h5>
									 JavaScript Developer, Editor
								</h5>
						</div>
						<div class="col">
							<h4>
								Client:
							</h4>
							<h5>
								Dr. Andrea Lowgren
							</h5>
						</div>
					</div>
					<p>
						As my Capstone project, I collaborated with a team of four fellow students to build a website for History 251, African American History since 1877, at Portland Community College. The students of this class put on an annual Tour of Historical Locations
						related to the Black History of the Albina Neighborhood in Portland, Oregon. The website serves as an informational page about the walk and includes essays from students about each location. The role that I performed in the group was to handle all
						JavaScript implementation as well as content editor.
						<br>
						<br>
						Three teams were formed out of 15 students to each build the same site. Upon soft launch, each site was evaluated and one was chosen to be deployed by the students of HST 251. My team's site was the one selected and can be viewed below at the live domain.
					</p>
					<a class="btn btn-dark" role="button" href="https://pcc-webtech.com/albina/" target="_blank">View the Site</a>
				</div>
			</div>
		</div>
		<div id="gridder-content-3" class="gridder-content">
			<div class="row">
				<div class="col-sm-6">
					<img src="images/moviedb.jpg" alt="Screenshot of Movie DB webpage" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<h2>Movie Database API</h2>
					<div class="row detail-header">
						<div class="col">
							<h4>
								Year:
							</h4>
							 <h5>
								2018
							</h5>
						</div>
						<div class="col">
							<h4>
								Role:
							</h4>
								<h5>
									 Project Manager
								</h5>
						</div>
						<div class="col">
							<h4>
								Client:
							</h4>
							<h5>
								Class Project
							</h5>
						</div>
					</div>
					<p>
						As the final project for CAS265, Emerging Web Tools and Trends, I served as an Agile Group Project Manager for a web API project. The site allows a user to search for a movie title and makes recommendations based on that search. Here a search for Alien returns information about the movie as well as five movies the user might also like.
						<br>
						I managed the team tasks via a Jira Kanban board and we utilized Slack to communicate. Github was used to manage version control for our codebase. The project is currently ongoing but it's current iteration can be viewed below.
					</p>
					<a class="btn btn-dark" role="button" href="https://rileycravens.com/moviedb" target="_blank">View the Site</a>
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
