<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset
        xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<url>
        <loc>https://dinophp.com/</loc>
        <lastmod>2021-07-24T22:56:31+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>https://dinophp.com/docs</loc>
        <lastmod>2021-07-24T22:56:31+00:00</lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>https://dinophp.com/installation</loc>
        <lastmod>2021-07-24T22:56:31+00:00</lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>https://dinophp.com/team</loc>
        <lastmod>2021-07-24T22:56:31+00:00</lastmod>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>https://dinophp.com/blog</loc>
        <lastmod>2021-08-04T22:56:31+00:00</lastmod>
        <priority>0.8</priority>
    </url>
    <?php

    $connect = mysqli_connect("us-cdbr-east-04.cleardb.com", "becd8d3bbbb6eb", "79adea6b", "heroku_47464723f5d8001");
    $sql = "SELECT * FROM blog ORDER BY id DESC";
    $query = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_assoc($query)) {
	    $id = $row['id'];
	    $title = $row['title'];
	    $date = $row['date'];
	    $content = base64_decode($row['content']);

	    $old_date_timestamp = strtotime($date);
	    $new_date = date('Y-m-d', $old_date_timestamp);
	    echo "
	        <url>
                <loc>https://dinophp.com/article?id=$id</loc>
                <lastmod>".$new_date."T22:56:31+00:00</lastmod>
                <priority>0.8</priority>
            </url>
	    ";
    }

    ?>

</urlset>