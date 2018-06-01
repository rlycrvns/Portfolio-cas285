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
						I'm interested in translating beautiful designs into elegantly functional code and working on both sides of the stack to get the job done. I love to collaborate and have participated in and managed Agile workgroups using Jira and Github. When not working with Front-End Frameworks such as Bootstrap and Bulma, I like to use PHP to integrate Relational Databases into my project.
					</p>
				</div>
			</div>
		</div>
	</header>

	<main class="container-fluid">
			<div id="skillbox" class="row">
				<div id="frontend" class="col-md skills">
					<h3 id="work">Front-End</h3>
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
							Less
						</li>
						<li>
							jQuery
						</li>
						<li>
							WordPress
						</li>
					</ul>
				</div>
				<div id="backend" class="col-md skills">
					<h3>Back-End</h3>
					<hr class="intro-divider">
					<ul>
						<li>
							PHP
						</li>
						<li>
							MySql
						</li>
						<li>
							JavaScript
						</li>
						<li>
							JSON
						</li>
					</ul>
				</div>
				<div id="tools" class="col-md skills">
					<h3>Dev Tools</h3>
					<hr class="intro-divider">
					<ul>
						<li>
						MacOS
						</li>
						<li>
							Atom
						</li>
						<li>
							Koala
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
				<img src="http://via.placeholder.com/400x400/222222/fff?text=Asset+1" class="img-fluid">
			</li>
			<li class="gridder-list" data-griddercontent="#gridder-content-2">
				<img src="http://via.placeholder.com/400x400/222222/fff?text=Asset+2" class="img-fluid">
			</li>
			<li class="gridder-list" data-griddercontent="#gridder-content-3">
				<img src="http://via.placeholder.com/400x400/222222/fff?text=Asset+3" class="img-fluid">
			</li>
		</ul>

		<div id="gridder-content-1" class="gridder-content">
			<div class="row">
				<div class="col-md-6">
					<img src="http://via.placeholder.com/1000x700/222222/fff?text=Asset+1" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<h2>Asset 1</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis,
						ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor
						augue vitae orci. Fusce semper eu ante ut faucibus.</p>
				</div>
			</div>
		</div>
		<div id="gridder-content-2" class="gridder-content">
			<div class="row">
				<div class="col-sm-6">
					<img src="http://via.placeholder.com/1000x700/222222/fff?text=Asset+2" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<h2>Asset 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis,
						ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor
						augue vitae orci. Fusce semper eu ante ut faucibus.</p>
				</div>
			</div>
		</div>
		<div id="gridder-content-3" class="gridder-content">
			<div class="row">
				<div class="col-sm-6">
					<img src="http://via.placeholder.com/1000x700/222222/fff?text=Asset+3" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<h2>Asset 3</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis,
						ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor
						augue vitae orci. Fusce semper eu ante ut faucibus.</p>
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
