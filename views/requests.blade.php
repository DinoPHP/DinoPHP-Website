<!DOCTYPE html>
<html lang="en">

<head>
    <title>Requests - DinoPHP Framework</title>
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
            <a href="#requests"><h3 style="font-weight: bold"><span class="hashtag">#</span> Requests</h3></a>
            <div id="requests" style="margin-top: 5%;">

                <div id="basics">
                    <a href="#basics"><h4 style="font-weight: bold"><span class="hashtag">#</span> Introduction</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        DinoPHP's DinoPHP\Http\Request class provides an object-oriented way to interact with the current HTTP request being handled by your application as well as retrieve the input, cookies, and files that were submitted with the request.
                    </p>
                </div>

                <div id="root-directory">

                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')
</body>
@include('scripts')

</html>