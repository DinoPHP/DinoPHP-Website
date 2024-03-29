<!DOCTYPE html>
<html lang="en">

<head>
    <title>Error Handling - DinoPHP Framework</title>
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
            <a href="#handling"><h3 style="font-weight: bold"><span class="hashtag">#</span> Error Handling</h3></a>
            <div id="handling" style="margin-top: 5%;">

                <a href="#introduction"><h4 style="font-weight: bold"><span class="hashtag">#</span> Introduction</h4></a>
                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    When you start a new DinoPHP project, error and exception handling is already configured for you. The src\Exceptions\Whoops class is where all exceptions thrown by your application are logged and then rendered to the user. We'll dive deeper into this class throughout this documentation.
                </p>

                <a href="#introduction"><h4 style="font-weight: bold"><span class="hashtag">#</span> How To Write Exception</h4></a>
                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    This is an example of how to write a function for handle the errors for know where is this error in your code and more details like requests information and etc ..
                </p>

                <div class="code">
if (1 != 1) {
	throw new \Exception("This is error");
}
                </div>

                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    This is an error handling for invalid callback function to show us what the error in this callback
                </p>

                <div class="code">
if (is_callable($callback)) {
	call_user_func($callback);
} else {
	throw new \BadFunctionCallException("Please provide valid callback function");
}
                </div>

                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    This is an error handling for Reflection to show us what the error :
                </p>

                <div class="code">
throw new \ReflectionException("This is Reflection error");
                </div>

                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    How to write a code for handling invalid argument errors ? This is an example of simple code :
                </p>

                <div class="code">
throw new \InvalidArgumentException("This is argument exception");
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