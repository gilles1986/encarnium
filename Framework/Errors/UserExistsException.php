<?php

declare(ENCODING = 'utf-8');
namespace Framework\Errors;

/**
 * class UserExists
 * 
 * @desc		UserExists Exception
 * @internal    
 * @version		Versionsnummer 1.0
 */
class UserExistsException extends Exception {

	/**
	 * @return	void
	 */
	public function __construct(){
		parent::__construct("User existiert bereits", "5001");
	}
	
}





?>