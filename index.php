<?php include 'includes/head.inc.php'; ?>
<?php include 'includes/nav.inc.php'; ?>

<body>

	<header class="container-fluid">
		<h1>Riley Cravens</h1>
		<hr class="intro-divider">
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Resume</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
								<h4>Profile</h4>
								<ul>
									<li>
										Web Development and Design student at Portland Community College
									</li>
								</ul>
								<h4>Skills</h4>
									<div class="col-md-12">
										<ul>
											<li>
												HTML5 (Bootstrap, Bulma)
											</li>
											<li>
												CSS3(Sass)
											</li>
											<li>
												JavaScript (jQuery)
											</li>
											<li>
												Git/Github
											</li>
											<li>
												Agile Development(Jira/Kanban)
											</li>
											<li>
												LAMP Stack
											</li>
											<li>
												WordPress CMS
											</li>
											<li>
												UX/UI Design
											</li>
											<li>
												Photoshop
											</li>
										</ul>
									</div>
									<h4>Education</h4>
									<h5>Associate of Applied Science – Web Design and Development </h5>
									<p>
										Portland Community College <br
										> Portland, OR <br> 2015-2018
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/Modal -->
	</header>

	<main id="work" class="container-fluid">
		<h2>My Recent Work</h2>
		<ul class="gridder">
			<li class="gridder-list" data-griddercontent="#gridder-content-1">
				<img src="https://fakeimg.pl/400x400/222222/fff/" class="img-fluid">
			</li>
			<li class="gridder-list" data-griddercontent="#gridder-content-2">
				<img src="https://fakeimg.pl/400x400/222222/fff/" class="img-fluid">
			</li>
			<li class="gridder-list" data-griddercontent="#gridder-content-3">
				<img src="https://fakeimg.pl/400x400/222222/fff/" class="img-fluid">
			</li>
		</ul>

		<div id="gridder-content-1" class="gridder-content">
			<div class="row">
				<div class="col-md-6">
					<img src="https://fakeimg.pl/1000x700/222222/fff/" class="img-fluid" />
				</div>
				<div class="col-sm-6">
					<h2>Item 1</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis,
						ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor
						augue vitae orci. Fusce semper eu ante ut faucibus.</p>
				</div>
			</div>
		</div>
		<div id="gridder-content-2" class="gridder-content">
			<div class="row">
				<div class="col-sm-6">
					<img src="https://fakeimg.pl/1000x700/222222/fff/" class="img-fluid" />
				</div>
				<div class="col-sm-6">
					<h2>Item 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis,
						ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor
						augue vitae orci. Fusce semper eu ante ut faucibus.</p>
				</div>
			</div>
		</div>
		<div id="gridder-content-3" class="gridder-content">
			<div class="row">
				<div class="col-sm-6">
					<img src="https://fakeimg.pl/1000x700/222222/fff/" class="img-fluid" />
				</div>
				<div class="col-sm-6">
					<h2>Item 3</h2>
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
	<script>
		$(document).ready(function() {
			// REMOVE AND ADD CLICK EVENT
			$('.doAddItem').on('click', function() {
				$(".gridder").data('gridderExpander').gridderAddItem('TEST');
			});
			// Call Gridder
			$(".gridder").gridderExpander({
				scrollOffset: 60,
				scrollTo: "panel", // "panel" or "listitem"
				animationSpeed: 400,
				animationEasing: "easeInOutExpo",
				showNav: true, // Show Navigation
				nextText: "", // Next button text
				prevText: "", // Previous button text
				closeText: "", // Close button text
				onStart: function() {
					console.log("Gridder Inititialized");
				},
				onExpanded: function(object) {
					console.log("Gridder Expanded");
				},
				onChanged: function(object) {
					console.log("Gridder Changed");
				},
				onClosed: function() {
					console.log("Gridder Closed");
				}
			});
		});
	</script>
</body>

</html>
