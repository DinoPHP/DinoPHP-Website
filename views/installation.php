<!DOCTYPE html>
<html lang="en">

<head>
	<title>Installation - DinoPHP Framework</title>
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
            <a href="#how-to-install"><h3 style="font-weight: bold"><span class="hashtag">#</span> How to install ?</h3></a>
			<div id="how-to-install" style="margin-top: 5%;">

                <div id="install-windows">
                    <a href="#install-windows"><h4 style="font-weight: bold"><span class="hashtag">#</span> PHP Built-in Web Server</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        You need to setup php latest version to enable built-in web server and run your web application, open your command prompt in your project folder and run this command :
                    </p>
                    <div class="code">
                        php -S 127.0.0.1:8080 -t public/
                    </div>

                    <a href="#install-windows"><h4 style="font-weight: bold"><span class="hashtag">#</span> Getting started on Windows</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        You are ready to create your first Dinophp project. Launch Windows Terminal ( Git ) and begin a new terminal session. Next, you can use a simple terminal command to create a new Dinophp project. For example, to create a new Dinophp application in a directory named "DinoPHP", you may run the following command in your terminal
                    </p>
                    <div class="code">
                        composer create-project --prefer-dist dinophp/dinophp DinoPHP
                    </div>

                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Of course, you can change "DinoPHP" in this URL to anything you like. The Dinophp application's directory will be created within the directory you execute the command from.
                    </p>
                </div>
                <div id="install-macos">
                    <a href="#install-macos"><h4 style="font-weight: bold"><span class="hashtag">#</span> Getting started on MacOS</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    Coming Soon. Please keep in touch !
                    </p>
                </div>
                <div id="install-linux">
                    <a href="#install-linux"><h4 style="font-weight: bold"><span class="hashtag">#</span> Getting started on Linux</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Coming Soon. Please keep in touch !
                    </p>
                </div>
            </div>
		</div>
	</div>
</div>

{% include('footer.php') %}
</body>
{% include('scripts.php') %}

</html>