<!DOCTYPE html>
<html lang="en">

<head>
	<title>Routing - DinoPHP Framework</title>
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
	{% include('links.php') %}
</head>

<body>
{% include('navbar.php') %}

<div class="container">
	<div class="row">
		<div class="col-lg-3">
			{% include('docs-menu.php') %}
		</div>
		<div class="col-lg">
			<a href="#routing"><h3 style="font-weight: bold"><span class="hashtag">#</span> Routing</h3></a>
			<div id="routing" style="margin-top: 5%;">

				<div id="basics">
					<a href="#basics"><h4 style="font-weight: bold"><span class="hashtag">#</span> Basics</h4></a>
					<p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        The most basic Dinophp routes accept a URI and a closure, providing a very simple and expressive method of defining routes and behavior without complicated routing configuration files:
                    </p>
                    <div class="code">
use DinoPHP\Router\Route;

Route::get('/congrats', function () {
	return 'First application';
});
                    </div>
				</div>

				<div id="root-directory">
					<div style="margin-top: 3%;">

						<a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Default Route Folder</h5></a>
						<p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
							All Dinophp routes are defined in your route files, which are located in the routes directory. The routes/web.php file defines routes that are for your web interface. These routes are assigned the web middleware group. The routes in routes/api.php are stateless and are assigned the api middleware group.
						</p>

						<p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
							For most applications, you will begin by defining routes in your routes/web.php file. The routes defined in routes/web.php may be accessed by entering the defined route's URL in your browser. For example, you may access the following route by navigating to http://example.com/user in your browser:
						</p>

						<div class="code">
use DinoPHP\Router\Route;

Route::get('/home', 'HomeController@class');
						</div>

						<p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
							Routes defined in the routes/api.php file are nested within a route group. Within this group, the /api URI prefix is automatically applied so you do not need to manually apply it to every route in the file. You may modify the prefix and other route group options.
						</p>

						<a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Routes Methods</h5></a>
						<p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
							The router allows you to register routes that respond to any HTTP verb:
						</p>

						<div class="code">

Route::add($methods, $uri, $callback);
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::any($uri, $callback);
Route::prefix($prefix, $callback);
Route::middleware($middleware, $callback);
Route::handle();
Route::invoke($route, $params);
Route::executeMiddleware($route);

						</div>

						<p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
							Sometimes you may need to register a route that responds to multiple HTTP verbs. You may do so using the match method. Or, you may even register a route that responds to all HTTP verbs using the any method:
						</p>

						<div class="code">

Route::match(['get', 'post'], '/', function () {
    //
});

Route::any('/', function () {
    //
});

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{% include('footer.php') %}
</body>
{% include('scripts.php') %}

</html>