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
                            Anytime you define a "POST", "PUT", "PATCH", or "DELETE" HTML form in your application, so that the CSRF protection middleware can validate the request. For convenience, you may use the create_csrf() Blade directive to generate the hidden token input field:
                        </p>

                        <div class="code">
&lt;form method="POST" action="/profile"&gt;
<br>
&lt;input type="hidden" name="token" value="'{ { create_csrf () } }'"&gt;
<br>
&lt;/form&gt;
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