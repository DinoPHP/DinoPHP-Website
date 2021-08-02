<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sessions - DinoPHP Framework</title>
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
            <a href="#sessions"><h3 style="font-weight: bold"><span class="hashtag">#</span> Sessions</h3></a>
            <div id="sessions" style="margin-top: 5%;">

                <div id="basics">
                    <a href="#basics"><h4 style="font-weight: bold"><span class="hashtag">#</span> Introduction</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Since HTTP driven applications are stateless, sessions provide a way to store information about the user across multiple requests. That user information is typically placed in a persistent store / backend that can be accessed from subsequent requests.
                    </p>
                </div>

                <div id="root-directory">
                    <div style="margin-top: 3%;">
                        <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Configuration</h5></a>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            Your application's session configuration file is stored at src/session.php. Be sure to review the options available to you in this file. By default, Dinophp is configured to use the file session driver, which will work well for many applications. If your application will be load balanced across multiple web servers, you should choose a centralized store that all servers can access, such as Redis or a database.
                        </p>

                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            The session driver configuration option defines where session data will be stored for each request. Dinophp ships with several great drivers out of the box:
                        </p>

                        <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Retrieving All Session Data</h5></a>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            If you would like to retrieve all the data in the session, you may use the <b>all</b> method:
                        </p>

                        <div class="code">
							<?php
							highlight_string('
<?php
$data = $request->session()->all();
?>
                        ');
							?>
                        </div>

                        <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Determining If An Item Exists In The Session</h5></a>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            To determine if an item is present in the session, you may use the <b>has</b> method. The has method returns true if the item is present and is not null:
                        </p>

                        <div class="code">
							<?php
							highlight_string('
<?php
if ($request->session()->has("users")) {
    //
}
?>
                        ');
							?>
                        </div>

                        <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Storing Data</h5></a>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            To store data in the session, you will typically use the request instance's <b>set</b> method or the global session helper:
                        </p>

                        <div class="code">
							<?php
							highlight_string('
<?php
if ($request->session()->set("users")) {
    //
}
?>
                        ');
							?>
                        </div>

                        <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Start Session</h5></a>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            To start the session, you will typically use the <b>start</b> method or the global session helper:
                        </p>

                        <div class="code">
							<?php
							highlight_string("
<?php
if (! session_id()) {
	ini_set('session.use_only_cookies', 1);
	session_start();
}
?>
                        ");
							?>
                        </div>

                        <a href="#"><h5 style="font-weight: bold"><span class="hashtag">#</span> Remove / Unset Session</h5></a>
                        <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                            To unset the session, you will typically use the <b>remove</b> method or the global session helper:
                        </p>

                        <div class="code">
							<?php
							highlight_string('
<?php
unset($_SESSION[$key]);
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

{% include('footer.php') %}
</body>
{% include('scripts.php') %}

</html>