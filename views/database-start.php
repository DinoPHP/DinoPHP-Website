<!DOCTYPE html>
<html lang="en">

<head>
    <title>Database - DinoPHP Framework</title>
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
            <a href="#handling"><h3 style="font-weight: bold"><span class="hashtag">#</span> Getting Started</h3></a>
            <div id="handling" style="margin-top: 5%;">

                <a href="#introduction"><h4 style="font-weight: bold"><span class="hashtag">#</span> Introduction</h4></a>
                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    Almost every modern web application interacts with a database. Dinophp makes interacting with databases extremely simple across a variety of supported databases using raw SQL, a fluent query builder.
                </p>

                <a href="#introduction"><h4 style="font-weight: bold"><span class="hashtag">#</span> Configuration</h4></a>
                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    The configuration for DinoPHP's database services is located in your application's config/database.php configuration file. In this file, you may define all of your database connections, as well as specify which connection should be used by default. Most of the configuration options within this file are driven by the values of your application's environment variables. Examples for most of DinoPHP's supported database systems are provided in this file.
                </p>

                <div class="code">
return [
	'host' => '127.0.0.1',
	'port' => '3306',
	'username' => 'root',
	'password' => '',
	'database' => 'DinoPHP',
	'charset' => 'utf8mb4',
	'collation' => 'utf8mb4_unicode_ci',
];
                </div>

                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    Typically, database connections are configured using multiple configuration values such as host, database, username, password, etc. Each of these configuration values has its own corresponding environment variable. This means that when configuring your database connection information on a production server, you need to manage several environment variables.
                </p>

                <div class="code">
driver://username:password@host:port/database?options
                </div>

                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    Some managed database providers such as AWS and Heroku provide a single database "URL" that contains all of the connection information for the database in a single string.
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