<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog - DinoPHP Framework</title>
    {% include('links.php') %}
    <style>
        a {
            color: #1e6887 !important;
        }
    </style>
</head>

<body>
    {% include('navbar.php') %}

    <div class="container">
        <div class="col-lg">
                <div class="card" style="padding: 10px">
                    <a href="#">
                        <h4 style="text-decoration: underline">Test Article</h4>
                    </a>
                    <span style="font-size: 13px;color: #848484;">Created at : 02/08/2021 By DinoPHP Team</span>
                    <p style="margin-top: 1%;display: block;color: #484848;">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
        </div>
    </div>

</body>
{% include('scripts.php') %}

</html>