<?php
/**
 * JSClassIncluder
 *
 * Developed under PHP Version 5.3.1
 *
 * LICENSE: GPL License 3
 *
 * @package      
 * @subpackage   
 * @category     
 * @copyright    Encarnium Group since 2010
 * @license		 GPL License 3
 * @link         http://encarnium.de/
 *
 * @since        2008-11-21
 * @author       Username <yourEmail@adress.de>
 *
 * @version      SVN: $Id: JSClassIncluder.php 353 2012-10-19 00:41:28Z g.meyer $
 * @filesource   $HeadURL: http://svn.babiel.com/Sandbox/trunk/Projekte/PWTool/Packages/Framework/Logic/Utils/JSClassIncluder.php $
 * @revision     $Revision: 353 $
 * @modifiedby   $Author: g.meyer $
 * @lastmodified $Date: 2012-10-19 02:41:28 +0200 (Fr, 19 Okt 2012) $
 */
declare(ENCODING = 'utf-8');
namespace Framework\Logic\Utils;

/**
 * class JSClassIncluder
 *
 * Bindet den JSClassIncluder ein
 *
 * @internal     
 * @version		Versionsnummer 1.0
 * @package		Framework
 * @subpackage	Controller
 */
class JSClassIncluder {
  
  private function __construct(){}
  
  /**
   * Bindet die per jsArray übergebenden JS-Datein ein
   * @param Array $jsArray
   */
  public static function load(Array $jsArray) {
    $scriptString = "";
    
    for($i=0; $i < count($jsArray); $i++) {       
        $scriptString .= "<script type='text/javascript' src='includes/js/".$jsArray[$i]."'></script>\r\n";
    }
    
    
    return $scriptString;
      
  }
  
}


?>