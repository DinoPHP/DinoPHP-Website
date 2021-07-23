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
	public function middleware() {
		return view('middleware');
	}
	public function controllers() {
		return view('controllers');
	}
	public function requests() {
		return view('requests');
	}
	public function response() {
		return view('response');
	}
	public function blade_template() {
		return view('blade-template');
	}
	public function urls() {
		return view('urls');
	}
}