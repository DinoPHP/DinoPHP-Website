<!DOCTYPE html>
<html lang="en">

<head>
	<title>Blog - DinoPHP Framework</title>
	{% include('links.php') %}
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
	{% include('navbar.php') %}

	<div class="container" style="max-width: 800px;">
		<div class="header">
			<h3 style="font-weight: bold;">Latest News</h3>
			<p style="font-weight: 300;color: #e4e4e4;">This is the official DinoPHP Framework blog where you'll find release announcements and community news.</p>
			<a href="#"><button class="subscribe"><i class="far fa-rss"></i> Subscribe with RSS</button></a>
		</div>

		{% for article in blog %}
		<div class="col-lg" style="margin-bottom: 2%;">
			<div class="card" style="padding: 10px">
				<a href="article.php?id={{ article.id }}" class="article-title">
					<h4 style="text-decoration: underline">{{ article.title }}</h4>
				</a>
				<p style="margin-top: 1%;display: block;color: #484848;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
					{{ article.content }}
				</p>
				<span style="font-size: 13px;color: #848484;">{{ article.date }}</span>
			</div>
		</div>
		{% endfor %}

	</div>
</body>
{% include('scripts.php') %}

</html>