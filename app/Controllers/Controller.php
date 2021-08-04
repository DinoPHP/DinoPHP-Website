<?php

namespace App\Controllers;

use DinoPHP\Database\Database;
use DinoPHP\View\View;

class Controller {
	public function index() {
		return view('index.php');
	}
	public function docs() {
		return view('docs.php');
	}
	public function installation() {
		return view('installation.php');
	}
	public function directories() {
		return view('directories.php');
	}
	public function routing() {
		return view('routing.php');
	}
	public function middleware() {
		return view('middleware.php');
	}
	public function controllers() {
		return view('controllers.php');
	}
	public function csrf() {
		return view('csrf-protection.php');
	}
	public function requests() {
		return view('requests.php');
	}
	public function response() {
		return view('response.php');
	}
	public function blade_template() {
		return view('blade-template.php');
	}
	public function sessions() {
		return view('sessions.php');
	}
	public function validation() {
		return view('validation.php');
	}
	public function team() {
		return view('team.php');
	}
	public function error_handle() {
		return view('error-handle.php');
	}
	public function database() {
		return view('database-start.php');
	}
	public function queries() {
		return view('queries.php');
	}
	public function pagination() {
		return view('pagination.php');
	}
	public function blog() {
		$blog = Database::table("blog")->orderBy('id', 'desc')->get();
		return View::render('blog/index.php', ['blog' => $blog]);
	}
	public function article() {
		return View::render('blog/article.php');
	}

}