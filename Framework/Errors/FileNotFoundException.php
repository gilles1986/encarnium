<?php
/**
 * FileNotFound
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
 * @author       Gilles Meyer <gilles@encarnium.de>
 *
 * @version      SVN: $Id: FileNotFoundException.php 353 2012-10-19 00:41:28Z g.meyer $
 * @filesource   $HeadURL: http://svn.babiel.com/Sandbox/trunk/Projekte/PWTool/Packages/Framework/Errors/FileNotFoundException.php $
 * @revision     $Revision: 353 $
 * @modifiedby   $Author: g.meyer $
 * @lastmodified $Date: 2012-10-19 02:41:28 +0200 (Fr, 19 Okt 2012) $
 */
declare(ENCODING = 'utf-8');
namespace Framework\Errors;

/**
 * class FileNotFound
 * 
 * @desc		FileNotFound Error
 * @internal    
 * @version		Versionsnummer 1.0
 */
class FileNotFoundException extends Exception {
	
	/**
	 * Constructor
	 * @param String $filename
	 */
	public function __construct($filename){
		parent::__construct("Datei $filename wurde nicht gefunden", "00001");
	}
	
}





?>