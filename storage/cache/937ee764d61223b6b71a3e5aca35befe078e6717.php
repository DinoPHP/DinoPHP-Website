<!DOCTYPE html>
<html lang="en">

<head>
	<title>Directory Structure - DinoPHP Framework</title>
	<style>

        .menu-link {
            font-weight: bold;
        }
        ul {
            list-style: none;
        }
        .menu-docs {
            line-height: 2em;
        }

	</style>
	<?php echo $__env->make('links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<?php echo $__env->make('docs-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
		<div class="col-lg">
			<a href="#directory-structure"><h3 style="font-weight: bold"><span class="hashtag">#</span> Directory Structure</h3></a>
			<div id="directory-structure" style="margin-top: 5%;">

                <div id="introduction">
                    <a href="#introduction"><h4 style="font-weight: bold"><span class="hashtag">#</span> Introduction</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        The default Dinophp application structure is intended to provide a great starting point for both large and small applications. But you are free to organize your application however you like. DinoPHP imposes almost no restrictions on where any given class is located - as long as Composer can autoload the class.
                    </p>
                </div>

				<div id="root-directory">
					<a href="#root-directory"><h4 style="font-weight: bold"><span class="hashtag">#</span> Root Directory</h4></a>

                    <div style="margin-top: 3%;">

                    <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> App Directory</h5></a>
					<p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        The app directory contains the core code of your application. We'll explore this directory in more detail soon; however, almost all of the classes in your application will be in this directory.
                    </p>

                    <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Bootstrap Directory</h5></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        The bootstrap directory contains the app.php file which bootstraps the framework. This directory also houses a cache directory which contains framework generated files for performance optimization such as the route and services cache files. You should not typically need to modify any files within this directory.
                    </p>

                   <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Config Directory</h5></a>
                   <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                       The config directory, as the name implies, contains all of your application's configuration files. It's a great idea to read through all of these files and familiarize yourself with all of the options available to you.
                   </p>

                   <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Public Directory</h5></a>
                   <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                       The public directory contains the index.php file, which is the entry point for all requests entering your application and configures autoloading. This directory also houses your assets such as images, JavaScript, and CSS.
                   </p>

                   <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Routes Directory</h5></a>
                   <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                       The routes directory contains all of the route definitions for your application. By default, several route files are included with DinoPHP: web.php, api.php, console.php, and channels.php.
                   </p>
                   <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                       The <b>web.php</b> file contains routes that the RouteServiceProvider places in the web middleware group, which provides session state, CSRF protection, and cookie encryption. If your application does not offer a stateless, RESTful API then it is likely that all of your routes will most likely be defined in the web.php file.
                   </p>
                   <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                       The <b>api.php</b> file contains routes that the RouteServiceProvider places in the api middleware group. These routes are intended to be stateless, so requests entering the application through these routes are intended to be authenticated via tokens and will not have access to session state.
                   </p>

                   <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Storage Directory</h5></a>
                   <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                       The storage directory contains your <b>logs</b>, compiled <b>Blade templates</b>, <b>file based sessions</b>, <b>file caches</b>, and other files generated by the framework. This directory is segregated into <b>app</b>, <b>framework</b>, and <b>logs directories</b>. The app directory may be used to store any files generated by your application. The framework directory is used to store framework generated files and caches. Finally, the logs directory contains your application's log files.
                   </p>

                   <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Vendor Directory</h5></a>
                   <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                       The vendor directory contains your <b><a href="https://getcomposer.org/">Composer</a></b> dependencies.
                   </p>

                   <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Http Directory</h5></a>
                   <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                       The Http directory contains your controllers, middleware, and form requests. Almost all of the logic to handle requests entering your application will be placed in this directory.
                   </p>

                   </div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php echo $__env->make('scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html><?php /**PATH C:\xampp\htdocs\DinoPHP-web\views/directories.blade.php ENDPATH**/ ?>