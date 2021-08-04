<!DOCTYPE html>
<html lang="en">

<?php
$connect = mysqli_connect("us-cdbr-east-04.cleardb.com", "becd8d3bbbb6eb", "79adea6b", "heroku_47464723f5d8001");
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM blog WHERE id = $id";
	$query = mysqli_query($connect, $sql);
	if(mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_assoc($query)) {
			$title = $row['title'];
			$date = $row['date'];
			$content = base64_decode($row['content']);
		}
	} else {
		echo "<script>history.back()</script>";
		die();
    }
} else {
	header('Location: /blog');
	die();
}
?>

<head>
    <title><?php echo "$title" ?> - DinoPHP Framework</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="pics/DinoPHP-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
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

        .resp-sharing-button__link,
        .resp-sharing-button__icon {
            display: inline-block
        }

        .resp-sharing-button__link {
            text-decoration: none;
            color: #fff;
            margin: 0.5em
        }

        .resp-sharing-button {
            border-radius: 5px;
            transition: 25ms ease-out;
            padding: 0.3em 0.60em;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif
        }

        .resp-sharing-button__icon svg {
            width: 1em;
            height: 1em;
            margin-right: 0.4em;
            vertical-align: top
        }

        .resp-sharing-button--small svg {
            margin: 0;
            vertical-align: middle
        }

        /* Non solid icons get a stroke */
        .resp-sharing-button__icon {
            stroke: #fff;
            fill: none
        }

        /* Solid icons get a fill */
        .resp-sharing-button__icon--solid,
        .resp-sharing-button__icon--solidcircle {
            fill: #fff;
            stroke: none
        }

        .resp-sharing-button--twitter {
            background-color: #55acee
        }

        .resp-sharing-button--twitter:hover {
            background-color: #2795e9
        }

        .resp-sharing-button--pinterest {
            background-color: #bd081c
        }

        .resp-sharing-button--pinterest:hover {
            background-color: #8c0615
        }

        .resp-sharing-button--facebook {
            background-color: #3b5998
        }

        .resp-sharing-button--facebook:hover {
            background-color: #2d4373
        }

        .resp-sharing-button--tumblr {
            background-color: #35465C
        }

        .resp-sharing-button--tumblr:hover {
            background-color: #222d3c
        }

        .resp-sharing-button--reddit {
            background-color: #5f99cf
        }

        .resp-sharing-button--reddit:hover {
            background-color: #3a80c1
        }

        .resp-sharing-button--google {
            background-color: #dd4b39
        }

        .resp-sharing-button--google:hover {
            background-color: #c23321
        }

        .resp-sharing-button--linkedin {
            background-color: #0077b5
        }

        .resp-sharing-button--linkedin:hover {
            background-color: #046293
        }

        .resp-sharing-button--email {
            background-color: #777
        }

        .resp-sharing-button--email:hover {
            background-color: #5e5e5e
        }

        .resp-sharing-button--xing {
            background-color: #1a7576
        }

        .resp-sharing-button--xing:hover {
            background-color: #114c4c
        }

        .resp-sharing-button--whatsapp {
            background-color: #25D366
        }

        .resp-sharing-button--whatsapp:hover {
            background-color: #1da851
        }

        .resp-sharing-button--hackernews {
            background-color: #FF6600
        }

        .resp-sharing-button--hackernews:hover,
        .resp-sharing-button--hackernews:focus {
            background-color: #FB6200
        }

        .resp-sharing-button--vk {
            background-color: #507299
        }

        .resp-sharing-button--vk:hover {
            background-color: #43648c
        }

        .resp-sharing-button--facebook {
            background-color: #3b5998;
            border-color: #3b5998;
        }

        .resp-sharing-button--facebook:hover,
        .resp-sharing-button--facebook:active {
            background-color: #2d4373;
            border-color: #2d4373;
        }

        .resp-sharing-button--twitter {
            background-color: #55acee;
            border-color: #55acee;
        }

        .resp-sharing-button--twitter:hover,
        .resp-sharing-button--twitter:active {
            background-color: #2795e9;
            border-color: #2795e9;
        }

        .resp-sharing-button--email {
            background-color: #777777;
            border-color: #777777;
        }

        .resp-sharing-button--email:hover,
        .resp-sharing-button--email:active {
            background-color: #5e5e5e;
            border-color: #5e5e5e;
        }

        .resp-sharing-button--whatsapp {
            background-color: #25D366;
            border-color: #25D366;
        }

        .resp-sharing-button--whatsapp:hover,
        .resp-sharing-button--whatsapp:active {
            background-color: #1DA851;
            border-color: #1DA851;
        }

        .resp-sharing-button--telegram {
            background-color: #54A9EB;
        }

        .resp-sharing-button--telegram:hover {
            background-color: #4B97D1;
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
            <h1 style="font-size: 1.75rem;font-weight: bold;"><?php echo "$title" ?></h1>
        </div>
        <div class="share">
                <!-- Sharingbutton Facebook -->
                <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" target="_blank" rel="noopener" aria-label="">
                    <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small">
                        <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Sharingbutton Twitter -->
                <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Check <?php echo $title ?> at DinoPHP framework official blog&amp;url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" target="_blank" rel="noopener" aria-label="">
                    <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small">
                        <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Sharingbutton E-Mail -->
                <a class="resp-sharing-button__link" href="mailto:?subject=Check <?php echo $title ?> at DinoPHP framework official blog&amp;body=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" target="_self" rel="noopener" aria-label="">
                    <div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--small">
                        <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M22 4H2C.9 4 0 4.9 0 6v12c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7.25 14.43l-3.5 2c-.08.05-.17.07-.25.07-.17 0-.34-.1-.43-.25-.14-.24-.06-.55.18-.68l3.5-2c.24-.14.55-.06.68.18.14.24.06.55-.18.68zm4.75.07c-.1 0-.2-.03-.27-.08l-8.5-5.5c-.23-.15-.3-.46-.15-.7.15-.22.46-.3.7-.14L12 13.4l8.23-5.32c.23-.15.54-.08.7.15.14.23.07.54-.16.7l-8.5 5.5c-.08.04-.17.07-.27.07zm8.93 1.75c-.1.16-.26.25-.43.25-.08 0-.17-.02-.25-.07l-3.5-2c-.24-.13-.32-.44-.18-.68s.44-.32.68-.18l3.5 2c.24.13.32.44.18.68z" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Sharingbutton WhatsApp -->
                <a class="resp-sharing-button__link" href="whatsapp://send?text=<?php echo "Check $title at DinoPHP framework official blog" . "<br>" . "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?> target="_blank" rel="noopener" aria-label="">
                    <div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--small">
                        <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20.1 3.9C17.9 1.7 15 .5 12 .5 5.8.5.7 5.6.7 11.9c0 2 .5 3.9 1.5 5.6L.6 23.4l6-1.6c1.6.9 3.5 1.3 5.4 1.3 6.3 0 11.4-5.1 11.4-11.4-.1-2.8-1.2-5.7-3.3-7.8zM12 21.4c-1.7 0-3.3-.5-4.8-1.3l-.4-.2-3.5 1 1-3.4L4 17c-1-1.5-1.4-3.2-1.4-5.1 0-5.2 4.2-9.4 9.4-9.4 2.5 0 4.9 1 6.7 2.8 1.8 1.8 2.8 4.2 2.8 6.7-.1 5.2-4.3 9.4-9.5 9.4zm5.1-7.1c-.3-.1-1.7-.9-1.9-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1s-1.2-.5-2.3-1.4c-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6s.3-.3.4-.5c.2-.1.3-.3.4-.5.1-.2 0-.4 0-.5C10 9 9.3 7.6 9 7c-.1-.4-.4-.3-.5-.3h-.6s-.4.1-.7.3c-.3.3-1 1-1 2.4s1 2.8 1.1 3c.1.2 2 3.1 4.9 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.3-.3-.4-.6-.5z" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Sharingbutton Telegram -->
                <a class="resp-sharing-button__link" href="https://telegram.me/share/url?text=<?php echo "Check $title at DinoPHP framework official blog" ?>&amp;url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" target="_blank" rel="noopener" aria-label="">
                    <div class="resp-sharing-button resp-sharing-button--telegram resp-sharing-button--small">
                        <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M.707 8.475C.275 8.64 0 9.508 0 9.508s.284.867.718 1.03l5.09 1.897 1.986 6.38a1.102 1.102 0 0 0 1.75.527l2.96-2.41a.405.405 0 0 1 .494-.013l5.34 3.87a1.1 1.1 0 0 0 1.046.135 1.1 1.1 0 0 0 .682-.803l3.91-18.795A1.102 1.102 0 0 0 22.5.075L.706 8.475z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

        <?php
        echo '
            <span style="font-size: 13px;color: #848484;">Posted by DinoPHP team at ' . $date . '</span>
            <div style="margin-top: 1%;display: block;color: #484848;">
                ' . $content . '
            </div>
        ';
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