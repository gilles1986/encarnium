<?php
/**
 * UndefinedParameter
 * 
 * Developed under PHP Version 5.3.1
 *
 * LICENSE: GPL License 3
 *
 * @package      Error
 * @category     Core
 * @copyright    Encarnium Group since 2010
 * @link         http://encarnium.de/
 *
 * @since        2008-11-21
 * @author       Mark Giraud <infinity@encarnium.de>
 *
 * @version      SVN: $Id: UndefinedParameterException.php 353 2012-10-19 00:41:28Z g.meyer $
 * @filesource   $HeadURL: http://svn.babiel.com/Sandbox/trunk/Projekte/PWTool/Packages/Framework/Errors/UndefinedParameterException.php $
 * @revision     $Revision: 353 $
 * @modifiedby   $Author: g.meyer $
 * @lastmodified $Date: 2012-10-19 02:41:28 +0200 (Fr, 19 Okt 2012) $
 */
declare(ENCODING = 'utf-8');
namespace Framework\Errors;

/**
 * class UndefinedParameter
 * 
 * @desc		WrongConfiguration Error
 * @internal    
 * @version		Versionsnummer 1.0
 */
class UndefinedParameterException extends Exception {
	
	/**
	 * 
	 * Constructor
	 * @param String $message
	 */
	public function __construct($message){
		parent::__construct("<strong>Warning:</strong> Undefined Parameter see Log for more Information", "0003");
		$this->msg = $message;
	}
 
	/**
	 * 
	 * @return	void
	 */
	public function log() {
		$lines = explode("#",$this->getTraceAsString());
		\Framework\Logger::warning("Undefined Parameter '".$this->msg."' \r\n in ".$this->getFile()." on Line: ".$this->getLine()."\r\n See Stacktrace for mor information:", "Core");
		\Framework\Logger::warning("STACKTRACE: ".implode("\r\n #",$lines), "Core");
	}
	
}





?>