<?php include 'includes/head.inc.php'; ?>
<?php include 'includes/nav.inc.php'; ?>

<body>

	<header id="top" class="container-fluid">
			<h1>Coding, Designing, and Troubleshooting</h1>
			<br>
			<p>Hi! My name is Riley Cravens and I'm a web developer located in Portland, OR.</p>
			<a class="btn btn-primary" href="#contact" role="button">Say Hello</a>
	</header>

	<main id="work" class="container-fluid">
		<h2>Main Content Here</h2>
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
