<html>

<head>
	<title>DinoPHP - The PHP Framework</title>
	 <?php echo $__env->make('links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<style>

	</style>
</head>

<body>
	<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="main-home">
		<div class="container">
			<div class="row">
				<div class="col-lg" style="text-align: center;">
					<h3 style="text-transform: capitalize;font-weight: 800;font-size: 40px;line-height: 45px;margin-bottom: 2%;">The PHP Framework for <br>Developers</h3>
					<p style="font-weight: 400;font-size: 16px;color: #757575;margin-bottom: 2%;">DinoPHP is a web application framework with expressive, elegant syntax.<br>freeing you to create without sweating the small things.</p>
					<a href="docs"><button class="doc-btn"><i class="far fa-folders"></i> Documentation</button></a>
					<a href="partners"><button class="partner-btn">Become a Partner</button></a>
				</div>
			</div>
		</div>
		<a href="#why-dinophp" class="scroll-down">
			<div class="mouse_scroll">
				<div class="mouse">
					<div class="wheel"></div>
				</div>
				<div>
					<span class="m_scroll_arrows unu"></span>
					<span class="m_scroll_arrows doi"></span>
					<span class="m_scroll_arrows trei"></span>
				</div>
			</div>
		</a>
	</div>

	<div id="why-dinophp">
		<div class="container">
			<h3 style="margin-top: 5%;text-transform: uppercase;font-weight:bold;margin-bottom:2%">Why DinoPHP ?</h3>
				<br>
				<div class="row">
					<div class="col-lg">
						<div style="display:flex;gap:10px;margin-bottom:10%">
							<i class="fas fa-rocket-launch" style="color: #e92644;font-size:55px"></i>
							<div>
								<span style="font-weight: bold;text-transform: capitalize;font-size: 18px;">Exceptional performance</span>
								<p style="font-weight: 400;">DinoPHP consistently outperforms most of its competitors.</p>
							</div>
						</div>
						<div style="display:flex;gap:10px;margin-bottom:10%">
							<i class="fad fa-hourglass-start" style="color: #e92644;font-size:55px"></i>
							<div>
								<span style="font-weight: bold;text-transform: capitalize;font-size: 18px;">Simple solutions</span>
								<p style="font-weight: 400;">DinoPHP encourages MVC, to make it easier for you to write the code</p>
							</div>
						</div>
					</div>
					<div class="col-lg">
						<div style="display:flex;gap:10px;margin-bottom:10%">
							<i class="fad fa-book" style="color: #e92644;font-size:55px"></i>
							<div>
								<span style="font-weight: bold;text-transform: capitalize;font-size: 18px;">Clear documentation</span>
								<p style="font-weight: 400;">DinoPHP consistently outperforms most of its competitors.</p>
							</div>
						</div>

						<div style="display:flex;gap:10px;margin-bottom:10%">
							<i class="fad fa-shield-alt" style="color: #e92644;font-size:55px"></i>
							<div>
								<span style="font-weight: bold;text-transform: capitalize;font-size: 18px;">Security</span>
								<p style="font-weight: 400;">We take security seriously, with built-in protection against CSRF and XSS attacks</p>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>

	<div class="become-partner" style="margin-top: 5%;margin-bottom:10%">
		<div class="container">
			<div style="background: white;padding: 25px;max-width: 1000px;margin-left: auto;margin-right: auto;box-shadow: 0px 0px 19px 1px #e0e0e0;border-radius: 5px;">
				<h3 style="font-weight: 400;">Become a DinoPHP Partner</h3>
				<p style="font-size: 18px;color: #888;font-weight: 300;">DinoPHP Partners are elite shops providing top-notch DinoPHP development and consulting. Each of our partners can help you craft a beautiful, well-architected project.</p>
				<a href="pratners.php"><button class="doc-btn">Become a Partner</button></a>
			</div>
		</div>
	</div>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php echo $__env->make('scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html><?php /**PATH C:\xampp\htdocs\DinoPHP-web\views/index.blade.php ENDPATH**/ ?>