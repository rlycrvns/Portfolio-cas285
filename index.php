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
					<h2 class="col-6">
						Hi. I'm Riley Cravens, a web developer in Portland, OR. Please take a look at my recent work!
					</h2>
					<p class="col-6">
						I'm interested in translating beautiful designs into usable code.
					</p>
			</div>
		</div>
	</header>

	<main id="work" class="container-fluid">
		<h2 id="mainTitle">My Recent Work</h2>
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
