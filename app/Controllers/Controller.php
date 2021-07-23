<?php

namespace App\Controllers;

class Controller {
	public function index() {
		return view('index');
	}
	public function docs() {
		return view('docs');
	}
	public function installation() {
		return view('installation');
	}
	public function directories() {
		return view('directories');
	}
	public function routing() {
		return view('routing');
	}
}