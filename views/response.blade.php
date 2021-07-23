<!DOCTYPE html>
<html lang="en">

<head>
    <title>Response - DinoPHP Framework</title>
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
            <a href="#response"><h3 style="font-weight: bold"><span class="hashtag">#</span> Response</h3></a>
            <div id="response" style="margin-top: 5%;">

                <div id="root-directory">

                    <a href="#basics"><h4 style="font-weight: bold"><span class="hashtag">#</span> Creating Responses</h4></a>

                    <a href=""><h5 style="font-weight: bold"><span class="hashtag">#</span> Strings and Arrays</h5></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        All routes and controllers should return a response to be sent back to the user's browser. Dinophp provides several different ways to return responses. The most basic response is returning a string from a route or controller. The framework will automatically convert the string into a full HTTP response:
                    </p>

                    <div class="code">
		                <?php
		                highlight_string("
<?php

Route::get('/', function () {
    return 'Hello World';
});

?>
                        ");
		                ?>
                    </div>

                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        All routes and controllers should return a response to be sent back to the user's browser. Dinophp provides several different ways to return responses. The most basic response is returning a string from a route or controller. The framework will automatically convert the string into a full HTTP response:
                    </p>

                    <div class="code">
		                <?php
		                highlight_string("
<?php

Route::get('/', function () {
    return [1, 2, 3];
});

?>
                        ");
		                ?>
                    </div>

                    <a href=""><h5 style="font-weight: bold"><span class="hashtag">#</span> Response Objects</h5></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Typically, you won't just be returning simple strings or arrays from your route actions. Instead, you will be returning full Illuminate\Http\Response instances or views.
                    </p>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Typically, you won't just be returning simple strings or arrays from your route actions. Instead, you will be returning full DinoPHP\Http\Response instances or views.
                    </p>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Returning a full Response instance allows you to customize the response's HTTP status code and headers. A Response instance inherits from the Symfony\Component\HttpFoundation\Response class, which provides a variety of methods for building HTTP responses:
                    </p>

                    <div class="code">
		                <?php
		                highlight_string("
<?php

Route::get('/home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
});

?>
                        ");
		                ?>
                    </div>

                    <a href=""><h5 style="font-weight: bold"><span class="hashtag">#</span> Eloquent Models & Collections</h5></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        You may also return ORM models and collections directly from your routes and controllers. When you do, Laravel will automatically convert the models and collections to JSON responses while respecting the model's hidden attributes:
                    </p>

                    <div class="code">
		                <?php
		                highlight_string('
<?php

use App\Models\User;

Route::get("/user/{user}", function (User $user) {
    return $user;
});

?>
                        ');
		                ?>
                    </div>

                    <a href=""><h5 style="font-weight: bold"><span class="hashtag">#</span> Attaching Headers To Responses</h5></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Keep in mind that most response methods are chainable, allowing for the fluent construction of response instances. For example, you may use the header method to add a series of headers to the response before sending it back to the user:
                    </p>

                    <div class="code">
		                <?php
		                highlight_string('
<?php

return response($content)
            ->header("Content-Type", $type)
            ->header("X-Header-One", "Header Value")
            ->header("X-Header-Two", "Header Value");

?>
                        ');
		                ?>
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