<!DOCTYPE html>
<html lang="en">

<head>
    <title>Controllers - DinoPHP Framework</title>
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
    @include('links')
</head>

<body>
@include('navbar')

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            @include('docs-menu')
        </div>
        <div class="col-lg">
            <a href="#controllers"><h3 style="font-weight: bold"><span class="hashtag">#</span> Controllers</h3></a>
            <div id="controllers" style="margin-top: 5%;">

                <div id="intro">
                    <a href="#intro"><h4 style="font-weight: bold"><span class="hashtag">#</span> Introduction</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Instead of defining all of your request handling logic as closures in your route files, you may wish to organize this behavior using "controller" classes. Controllers can group related request handling logic into a single class. For example, a UserController class might handle all incoming requests related to users, including showing, creating, updating, and deleting users. By default, controllers are stored in the app/Controllers directory.
                    </p>

                </div>

                <div id="root-directory">
                    <div style="margin-top: 3%;">

                        <a href="#"><h4 style="font-weight: bold"><span class="hashtag">#</span> Writing Controller</h4></a>
                        <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Basic Controller</h5></a>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            Let's take a look at an example of a basic controller. Note that the controller extends the base controller class included with Dinophp: <b>App\Controllers\Controller :</b>
                        </p>

                        <div class="code">
							<?php
							highlight_string('
<?php

namespace App\Controllers;

class UserController
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view("user.profile");
    }
}
                        ');
							?>
                        </div>

                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            You can define a route to this controller method like so:
                        </p>

                        <div class="code">
							<?php
							highlight_string("
<?php

use App\Controllers\UserController;

Route::get('/user/{id}', [UserController::class, 'show']);

?>
                        ");
							?>
                        </div>

                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            When an incoming request matches the specified route URI, the show method on the App\Http\Controllers\UserController class will be invoked and the route parameters will be passed to the method.
                        </p>

                        <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Single Action Controllers</h5></a>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            If a controller action is particularly complex, you might find it convenient to dedicate an entire controller class to that single action. To accomplish this, you may define a single invoke method within the controller:
                        </p>

                        <div class="code">
							<?php
							highlight_string('
<?php

class ProvisionServer
{
    /**
     * Provision a new web server.
     */
    public function invoke($route, $params)
    {
        // ...
    }
}

?>
                        ');
							?>
                        </div>

                        <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Controller Middleware</h5></a>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            Middleware may be assigned to the controller's routes in your route files:
                        </p>

                        <div class="code">
							<?php
							highlight_string("
<?php

Route::get('profile', [UserController::class, 'show'])->middleware('auth');

?>
                        ");
							?>
                        </div>

                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            Or, you may find it convenient to specify middleware within your controller's constructor. Using the middleware method within your controller's constructor, you can assign middleware to the controller's actions:
                        </p>

                        <div class="code">
		                    <?php
		                    highlight_string('
<?php

class UserController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("auth");
        $this->middleware("log")->only("index");
        $this->middleware("subscribed")->except("store");
    }
}

?>
                        ');
		                    ?>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')
</body>
@include('scripts')

</html>