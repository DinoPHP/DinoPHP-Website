<!DOCTYPE html>
<html lang="en">

<head>
    <title>Validation - DinoPHP Framework</title>
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
            <a href="#sessions"><h3 style="font-weight: bold"><span class="hashtag">#</span> Validation</h3></a>
            <div id="sessions" style="margin-top: 5%;">

                <div id="basics">
                    <a href="#basics"><h4 style="font-weight: bold"><span class="hashtag">#</span> Introduction</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        DinoPHP provides approach to validate your application's incoming data. It is most common to use the validate method available on all incoming HTTP requests. However, we will discuss other approaches to validation as well.
                    </p>
                </div>

                <div id="root-directory">
                    <div style="margin-top: 3%;">
                        <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Writing the validation method</h5></a>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            Now we are ready to fill in our store method with the logic to validate the new blog post. To do this, we will use the validate method provided by the \Http\Request object. If the validation rules pass, your code will keep executing normally; however, if validation fails, an exception will be thrown and the proper error response will automatically be sent back to the user.
                        </p>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            If validation fails during a traditional HTTP request, a redirect response to the previous URL will be generated. If the incoming request is an XHR request, a JSON response containing the validation error messages will be returned.
                        </p>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            To get a better understanding of the validate method, let's jump back into the store method:
                        </p>

                        <div class="code">
							<?php
							highlight_string('
<?php
$validation = $validator->validate($_POST + $_FILES, $rules);
$errors = $validation->errors();
?>
                        ');
							?>
                        </div>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            As you can see, the validation rules are passed into the validate method. Don't worry - all available validation rules are documented. Again, if the validation fails, the proper response will automatically be generated. If the validation passes, our controller will continue executing normally.
                        </p>
                        <div class="code">
		                    <?php
		                    highlight_string('
<?php
$validatedData = $request->validate([
    "title" => ["required", "unique:posts", "max:255"],
    "body" => ["required"],
]);
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