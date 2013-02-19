<?php
/**
* EF_Smarty
* 
* Developed under PHP Version 5.3.1
*
* LICENSE: GPL License 3
*
* @package      Encarnium Framework
* @category     Smarty
* @copyright    Encarnium Group since 2010
* @link         http://encarnium.de/
*
* @since        2008-11-21
* @author       Gilles Meyer <gilles@encarnium.de>
*
* @version      SVN: $Id: Smarty.php 355 2012-10-19 04:32:17Z g.meyer $
* @filesource   $HeadURL: http://svn.babiel.com/Sandbox/trunk/Projekte/PWTool/Packages/Framework/EF/Smarty.php $
* @revision     $Revision: 355 $
* @modifiedby   $Author: g.meyer $
* @lastmodified $Date: 2012-10-19 06:32:17 +0200 (Fr, 19 Okt 2012) $
*/

declare(ENCODING = 'utf-8');
namespace Framework\EF;

/**
 * class EF_Smarty
 * 
 * @desc		Die EF Smarty Klasse ist eine Erweiterung der Smarty Klasse und definiert alle für Smarty wichtigen Ordner.
 * @internal    
 * @version		Versionsnummer 1.0
 */
class Smarty extends \Smarty {

	
	/**
	 * Constructor
	 * @return	void
	 */
    public function __construct() {
      parent::__construct();
      $this->setCacheDir(realpath(ROOT."Data/Smarty/cached/"));
      $this->setCompileDir(realpath(ROOT."Data/Smarty/compiled/"));
      $this->setTemplateDir(realpath(ROOT."Data/Smarty/templates/"));
      $this->setConfigDir(realpath(ROOT."Data/Smarty/config/"));
    }
    
    
    
//     /**
//      * Gets the CacheDir
//      * @return	string The Cache Dir
//      */
//     public function getCacheDir() {
//     	return $this->cache_dir;
//     }
    
//     /**
//      * Gets the CompileDir
//      * @return	string The Compile Dir
//      */
//     public function getCompileDir() {
//     	return $this->compile_dir;
//     }
    
//     /**
//      * Gets the Template Dir
//      * @return	string The Template Dir
//      */
//     public function getTemplateDir() {
//     	return $this->template_dir;
//     }
    
//     /**
//      * Gets the Config Dir
//      * @return	string The Config Dir
//      */
//     public function getConfigDir() {
//     	return $this->config_dir;
//     }
    
//     /**
//      * Sets the Cache Dir
//      * @param sting $cacheDir
//      */
// 	public function setCacheDir($cacheDir) {
//     	$this->cache_dir = $cacheDir;
//     }
    
//     /**
//      * Sets the Compile Dir
//      * @param string $compileDir
//      */
//     public function setCompileDir($compileDir) {
//     	$this->compile_dir = $compileDir;
//     }
    
//     /**
//      * Sets the Template Dir
//      * @param string $templateDir
//      */
//     public function setTemplateDir($templateDir) {
//     	$this->template_dir = $templateDir;
//     }
    
//     /**
//      * Sets the Config Dir
//      * @param string $configDir
//      */
//     public function setConfigDir($configDir) {
//     	$this->config_dir = $configDir;
//     }
   
}

?>