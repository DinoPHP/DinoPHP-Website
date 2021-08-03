<!DOCTYPE html>
<html lang="en">

<head>
    <title>Middleware - DinoPHP Framework</title>
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
    <?php include('links.php') ?>
</head>

<body>
<?php include('navbar.php') ?>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <?php include('docs-menu.php') ?>
        </div>
        <div class="col-lg">
            <a href="#middleware"><h3 style="font-weight: bold"><span class="hashtag">#</span> Middleware</h3></a>
            <div id="middleware" style="margin-top: 5%;">

                <div id="intro">
                    <a href="#intro"><h4 style="font-weight: bold"><span class="hashtag">#</span> Introduction</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Middleware provide a convenient mechanism for inspecting and filtering HTTP requests entering your application. For example, Dinophp includes a middleware that verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to your application's login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application.
                    </p>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Additional middleware can be written to perform a variety of tasks besides authentication. For example, a logging middleware might log all incoming requests to your application. There are several middleware included in the Dinophp framework. All of these middleware are located in the app/Middleware directory.
                    </p>

                </div>

                <div id="root-directory">
                    <div style="margin-top: 3%;">

                        <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Defining Middleware</h5></a>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            To create a Middleware you should go to app\Middleware to create it, this is an example on Middleware function :
                        </p>

                        <div class="code">
namespace App\Middleware;

class User {
	public function handle() {
		if (1 !== 1) {
			die('test');
		}
	}
}
                        </div>

                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            You will see this code in User.php file in Middleware you should change it if you need to any middleware you need to use it in your route
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

<?php include('footer.php') ?>
</body>
<?php include('scripts.php') ?>

</html>