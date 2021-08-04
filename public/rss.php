<?php echo "<?xml version='1.0' encoding='UTF-8'?>" ?>
<rss version='2.0'>
	<channel>

        <title>Blog - Dinophp framework</title>
        <link>https://dinophp.com/blog</link>
        <description>This is the official DinoPHP Framework blog where you'll find release announcements and community news.</description>
        <language>en-us</language>

        <?php
    $connect = mysqli_connect("us-cdbr-east-04.cleardb.com", "becd8d3bbbb6eb", "79adea6b", "heroku_47464723f5d8001");
    $sql = "SELECT * FROM blog ORDER BY id DESC";
    $query = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_assoc($query)) {
	    $id = $row['id'];
	    $title = $row['title'];
	    $content = strip_tags(base64_decode($row['content']));
	    echo "
        	<item>
                <title>$title</title>
                <link>https://dinophp.com/article?id=$id</link>
                <description>$content</description>
            </item>
        ";
    }
    ?>


	</channel>
</rss>