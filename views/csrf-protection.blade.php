<!DOCTYPE html>
<html lang="en">

<head>
    <title>CSRF Protection - DinoPHP Framework</title>
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
            <a href="#controllers"><h3 style="font-weight: bold"><span class="hashtag">#</span> CSRF Protection</h3></a>
            <div id="controllers" style="margin-top: 5%;">

                <div id="intro">
                    <a href="#intro"><h4 style="font-weight: bold"><span class="hashtag">#</span> Introduction</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user. Thankfully, DinoPHP makes it easy to protect your application from cross-site request forgery (CSRF) attacks.
                    </p>

                </div>

                <div id="root-directory">
                    <div style="margin-top: 3%;">

                        <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Preventing CSRF Requests</h5></a>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            Anytime you define a "POST", "PUT", "PATCH", or "DELETE" HTML form in your application, so that the CSRF protection middleware can validate the request. For convenience, you may use the @csrf Blade directive to generate the hidden token input field:
                        </p>

                        <div class="code">
                            <code>
                                <input type='hidden' name='token' value='<?php highlight_string("{{ create_csrf() }}") ?>'>
                            </code>

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