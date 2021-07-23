<!DOCTYPE html>
<html lang="en">

<head>
    <title>Url Generation - DinoPHP Framework</title>
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
            <a href="#url"><h3 style="font-weight: bold"><span class="hashtag">#</span> Url Generation</h3></a>
            <div id="url" style="margin-top: 5%;">
                <a href="#basics"><h4 style="font-weight: bold"><span class="hashtag">#</span> Introduction</h4></a>
                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    DinoPHP provides several helpers to assist you in generating URLs for your application. These helpers are primarily helpful when building links in your templates and API responses, or when generating redirect responses to another part of your application.
                </p>

                <a href="#basics"><h4 style="font-weight: bold"><span class="hashtag">#</span> The Basics</h4></a>
                <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Generating URLs</h5></a>
                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    Blade views may be returned from routes or controller using the global view helper. Of course, as mentioned in the documentation on views, data may be passed to the Blade view using the view helper's second argument:
                </p>
                <div class="code">
					<?php
					highlight_string("
<?php

Route::get('/', function () {
    return view('greeting', ['name' => 'Finn']);
});

?>
                        ");
					?>
                </div>


                <div id="root-directory">

                    <a href=""><h5 style="font-weight: bold"><span class="hashtag">#</span> Displaying Data</h5></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        You may display data that is passed to your Blade views by wrapping the variable in curly braces. For example, given the following route:
                    </p>

                    <div class="code">
						<?php
						highlight_string("
<?php
Route::get('/', function () {
    return view('welcome', ['name' => 'Samantha']);
});
?>
                        ");
						?>
                    </div>

                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        You may display the contents of the name variable like so:
                    </p>

                    <div class="code">
						<?php
						highlight_string('
<?php
Hello, {{ $name }}.
?>
                        ');
						?>
                    </div>

                    <a href=""><h5 style="font-weight: bold"><span class="hashtag">#</span> Rendering JSON</h5></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Sometimes you may pass an array to your view with the intention of rendering it as JSON in order to initialize a JavaScript variable. For example:
                    </p>
                    <div class="code">
						<?php
						highlight_string('
<?php echo json_encode($array); ?>
                        ');
						?>
                    </div>

                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        However, instead of manually calling json_encode, you may use the @ json Blade directive. The @ json directive accepts the same arguments as PHP's json_encode function. By default, the @ json directive calls the json_encode function with the JSON_HEX_TAG, JSON_HEX_APOS, JSON_HEX_AMP, and JSON_HEX_QUOT flags:
                    </p>
                    <div class="code">
						<?php
						highlight_string('
<?php
    $app = @json($array);
?>
                        ');
						?>
                    </div>

                    <a href=""><h5 style="font-weight: bold"><span class="hashtag">#</span> Displaying Unescaped Data</h5></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        By default, Blade {{}} statements are automatically sent through PHP's htmlspecialchars function to prevent XSS attacks. If you do not want your data to be escaped, you may use the following syntax:
                    </p>

                    <div class="code">
						<?php
						highlight_string('
<?php
Hello, {!! $name !!}.
?>
                        ');
						?>
                    </div>

                    <a href=""><h5 style="font-weight: bold"><span class="hashtag">#</span> If Statements</h5></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        You may construct if statements using the @ if, @ elseif, @ else, and @ endif directives. These directives function identically to their PHP counterparts:
                    </p>

                    <div class="code">
						<?php
						highlight_string('
<?php

@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I dont have any records!
@endif

?>
                        ');
						?>
                    </div>

                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        In addition to the conditional directives already discussed, the @ isset and @ empty directives may be used as convenient shortcuts for their respective PHP functions:
                    </p>

                    <div class="code">
						<?php
						highlight_string('
<?php

@isset($records)
    // $records is defined and is not null...
@endisset

@empty($records)
    // $records is "empty"...
@endempty

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

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php echo $__env->make('scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html><?php /**PATH C:\xampp\htdocs\DinoPHP-web\views/urls.blade.php ENDPATH**/ ?>