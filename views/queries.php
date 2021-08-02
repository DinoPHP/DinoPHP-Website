<!DOCTYPE html>
<html lang="en">

<head>
    <title>Queries - DinoPHP Framework</title>
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
            <a href="#query"><h3 style="font-weight: bold"><span class="hashtag">#</span> Query Builder</h3></a>
            <div id="query" style="margin-top: 5%;">

                <a href="#introduction"><h4 style="font-weight: bold"><span class="hashtag">#</span> Introduction</h4></a>
                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    DinoPHP's database query builder provides a convenient, fluent interface to creating and running database queries. It can be used to perform most database operations in your application and works perfectly with all of DinoPHP's supported database systems.
                </p>

                <a href="#queries"><h3 style="font-weight: bold"><span class="hashtag">#</span> Database Queries</h3></a>
                <a href="#queries"><h4 style="font-weight: bold"><span class="hashtag">#</span> Check if database is exist</h4></a>
                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    You can check if the database exists with the data you set in <b>config/database</b> file and return Exception from your controller:
                </p>

                <div class="code">
return Database::instance();
                </div>

                <a href="#queries"><h4 style="font-weight: bold"><span class="hashtag">#</span> Retrieving All Rows</h4></a>
                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    You may use the <b>table</b> or <b>query</b> method provided by the Database facade to begin a query. The table method returns a fluent query builder instance for the given table, allowing you to chain more constraints onto the query and then finally retrieve the results of the query using the get method:
                </p>

                <div class="code">
$db = Database::query("SELECT * FROM users")->get();
// OR
$db = Database::table("users")->get();
                </div>

                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    This is the same function but with table and where method :
                </p>

                <div class="code">
$db = Database::table("users")->where("id", ">", "1")->get();
                </div>

                <a href="#queries"><h4 style="font-weight: bold"><span class="hashtag">#</span> Retrieving single Row</h4></a>
                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    If you just need to retrieve a single row from a database table, you may use the Database facade's <b>first</b> method :
                </p>
                <div class="code">
$db = Database::table("users")->first();
                </div>

                <a href="#queries"><h4 style="font-weight: bold"><span class="hashtag">#</span> All Methods</h4></a>
                <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    Here you will find all methods you will use it in any dynamically project with database :
                </p>
                <div class="code">
$db = Database::table("users")
                ->select("name", "age")
                ->rightJoin("roles", "roles.id", "=", "users.role_id")
                ->leftJoin("roles", "roles.id", "=", "users.role_id")
                ->join("roles", "roles.id", "=", "users.role_id")
                ->where("id", "=", "20")
                ->orWhere("name", "=", "ahmed")
                ->orderBy("id", "desc")
                ->limit(20)
                ->offset(20)
                ->getQuery();
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