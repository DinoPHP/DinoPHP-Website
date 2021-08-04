<!DOCTYPE html>
<html lang="en">

<head>
	<title>Blog - DinoPHP Framework</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="pics/DinoPHP-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <meta name="description" content="DinoPHP is a web application framework for PHP with expressive, elegant syntax. We believe development must be an enjoyable experience to be truly">
    <meta property="og:description" content="DinoPHP is a web application framework for PHP with expressive, elegant syntax. We believe development must be an enjoyable experience to be truly">
    <meta property="og:image" content="https://dinophp.com/pics/DinoPHP-Red-01.jpg">
    <meta property="og:url" content="https://dinophp.com/">
    <meta name="google-site-verification" content="_o-T2rIVsN3zX6wyzp5NfyPbAAxwkLQ6Rt89soYwF7A" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
    <style>
		.article-title {
			color: #1e6887 !important;
		}

		.header {
			background-color: #3a3a3a;
			color: white;
			padding: 15px;
			border-radius: 5px;
			margin-bottom: 5%;
		}

		.subscribe {
			background: #e92644;
			padding: 8px;
			border-radius: 5px;
			border: 1px solid #e92644;
			color: white;
			font-size: 15px;
		}
		.card {
			background-color: transparent;
			border: none;
		}
	</style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="padding: 25px 0px 20px 140px;margin-bottom:5%">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="pics/DinoPHP-word.png" class="logo" style="width: 165px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="color:#444444;font-weight: 500;margin-top: 5px;margin-left:3%;font-size: 17px;">
                <li class="nav-item">
                    <a class="nav-link" href="/team">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/docs">Documentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/Ahmed-Ibrahimm/DinoPHP">Contribute</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://packagist.org/packages/dinophp/dinophp">Download</a>
                </li>
            </ul>
            <select onchange="location=this.value;" style="padding: 6px;border: 1px solid #CCC;border-radius: 5px;width: 200px;margin-left: auto;outline:none">
                <option value="/">DinoPHP v1.0 (current)</option>
            </select>
        </div>
    </div>
</nav>

<div class="container" style="max-width: 800px;">
		<div class="header">
			<h3 style="font-weight: bold;">Latest News</h3>
			<p style="font-weight: 300;color: #e4e4e4;">This is the official DinoPHP Framework blog where you'll find release announcements and community news.</p>
			<a href="#"><button class="subscribe"><i class="far fa-rss"></i> Subscribe with RSS</button></a>
		</div>

    <?php
    $connect = mysqli_connect("us-cdbr-east-04.cleardb.com", "becd8d3bbbb6eb", "79adea6b", "heroku_47464723f5d8001");
    $sql = "SELECT * FROM blog ORDER BY id DESC";
    $query = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_assoc($query)) {
        $id = $row['id'];
        $title = $row['title'];
        $date = $row['date'];
        $content = base64_decode($row['content']);

        echo '
            <div class="col-lg" style="margin-bottom: 2%;">
                <div class="card" style="padding: 10px">
                    <a href="article?id='.$id.'" class="article-title">
                        <h4 style="text-decoration: underline">'.$title.'</h4>
                    </a>
                    <div style="margin-top: 1%;color: #484848;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                        '.$content.'
                    </div>
                    <span style="font-size: 13px;color: #848484;">'.$date.'</span>
                </div>
            </div>
        ';
    }
    ?>

	</div>

	<hr class="dropdown-divider" style="margin-bottom: 2%;max-width: 81%;margin-left: auto;margin-right: auto;margin-top: 5%;">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg" style="display: flex;flex-direction: column;gap: 10px;">
                    <span style="font-weight: bold;text-transform: uppercase;font-size: 18px;">DinoPHP</span>
                    <a href="docs">Documentation</a>
                    <a href="team">Our Team</a>
                    <a href="installation">Getting Started</a>
                    <a href="#">Release Notes</a>
                </div>
                <div class="col-lg" style="display: flex;flex-direction: column;gap: 10px;">
                    <span style="font-weight: bold;text-transform: uppercase;font-size: 18px;">Services</span>
                    <a href="https://github.com/Ahmed-Ibrahimm/DinoPHP">Contribute</a>
                    <a href="https://www.patreon.com/ahmedmohammed">Donate</a>
                    <a href="#">Jobs</a>
                </div>
                <div class="col-lg" style="display: flex;flex-direction: column;gap: 10px;">
                    <span style="font-weight: bold;text-transform: uppercase;font-size: 18px;">Connects</span>
                    <a href="https://twitter.com/dino_php"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="https://github.com/DinoPHP"><i class="fab fa-github-alt"></i> Github</a>
                    <a href="#"><i class="fab fa-discord"></i> Discord</a>
                </div>
                <div class="col-lg" style="display: flex;flex-direction: column;gap: 10px;">
                    <span>DinoPHP is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. DinoPHP attempts to take the pain out of development by easing common tasks used in most web projects.</span>
                    <div class="copyright">
                        <span style="color:#7b7b7b;display:block">Trademark of Ahmed Mohamed Ibrahim</span>
                        <span style="color:#7b7b7b">Copyright © 2021 DinoPHP</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/1351.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script>
    document.querySelectorAll('div.code').forEach(el => {
        // then highlight each
        hljs.highlightElement(el);
    });
</script>
</html>