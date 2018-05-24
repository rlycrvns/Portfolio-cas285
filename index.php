<?php include 'includes/head.inc.php'; ?>
<?php include 'includes/nav.inc.php'; ?>

<body>

	<header class="container-fluid">
					<h1>Riley Cravens</h1>
					<hr class="intro-divider">
	</header>

	<main id="work" class="container-fluid">
		<h2>Work</h2>
		<ul class="gridder">
			<li class="gridder-list" data-griddercontent="#gridder-content-1">
				<img src="https://fakeimg.pl/350x200/AABBE0/000/" class="img-fluid">
			</li>
			<li class="gridder-list" data-griddercontent="#gridder-content-2">
				<img src="https://fakeimg.pl/350x200/AABBE0/000/" class="img-fluid">
			</li>
			<li class="gridder-list" data-griddercontent="#gridder-content-3">
				<img src="https://fakeimg.pl/350x200/AABBE0/000/" class="img-fluid">
			</li>
		</ul>

		<div class="container-fluid">
			<div id="gridder-content-1" class="gridder-content">
				<div class="row">
					<div class="col-md-6">
						<img src="http://fakeimg.pl/600/300/?text=1" class="img-fluid" />
					</div>
					<div class="col-sm-6">
						<h2>Item 1</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae
							erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit
							mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
					</div>
				</div>
			</div>
			<div id="gridder-content-2" class="gridder-content">
				<div class="row">
					<div class="col-sm-6">
						<img src="http://fakeimg.pl/600/600/?text=2" class="img-fluid" />
					</div>
					<div class="col-sm-6">
						<h2>Item 2</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae
							erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit
							mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
					</div>
				</div>
			</div>
			<div id="gridder-content-3" class="gridder-content">
				<div class="row">
					<div class="col-sm-6">
						<img src="http://fakeimg.pl/600/600/?text=3" class="img-fluid" />
					</div>
					<div class="col-sm-6">
						<h2>Item 3</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae
							erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit
							mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
					</div>
				</div>
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
		jQuery(document).ready(function($) {
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
