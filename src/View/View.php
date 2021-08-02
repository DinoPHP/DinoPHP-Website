<?php

namespace DinoPHP\View;

use DinoPHP\File\File;
use DinoPHP\Session\Session;

class View {
	/**
	 * View Constructor
	 *
	 *
	 */
	private function __construct() {}

	/**
	 * Render view file
	 *
	 * @param string $path
	 * @param array $data
	 * @return string
	 */
	public static function render($path, $data = []) {
		$errors = Session::flash('errors');
		$old = Session::flash('old');
		$data = array_merge($data, ['errors' => $errors, 'old' => $old]);
		return static::bubbleRender($path, $data);
	}

	/**
	 * Render the view files using blade engine
	 *
	 * @param string $path
	 * @param array $data
	 * @return string
	 */
	public static function bubbleRender($path, $data = []) {
		$loader = new \Bubble\Loader\FilesystemLoader('../views');
		$hummer = new \Bubble\Environment($loader);
		return $hummer->render($path, $data);
	}

	/**
	 * Render view file
	 *
	 * @param string $path
	 * @param array $data
	 * @return string
	 */
	public static function viewRender($path, $data = []) {
		$path = 'views' . File::ds() . str_replace(['/', '\\', '.'], File::ds(), $path) . '.php';
		if (! File::exist($path)) {
			throw new \Exception("The view file {$path} is not exist");
		}

		ob_start();
		extract($data);
		include File::path($path);
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}

}
