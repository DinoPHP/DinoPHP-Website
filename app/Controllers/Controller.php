<?php

namespace App\Controllers;

class Controller {
	public function index() {
		return view('files.index');
	}
	public function docs() {
		return view('files.docs');
	}
}