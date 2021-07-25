<?php

namespace Dinophp\Csrf;

session_start();

Class CSRF {
	public static function create_csrf() {

		/**
		 * Generate Token
		 */
		$token = md5(time());

		/**
		 * Set this token in session
		 */
		$_SESSION['token'] = $token;
		echo "<input type='hidden' name='token' value='$token'>";
	}

	/**
	 * Validate CSRF Token
	 * @param $token
	 */
	public static function validate_csrf($token) {
		return isset($_SESSION['token']) && $_SESSION['token'] == $token;
	}
}