<?php
/**
 * Core
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
 * @version      SVN: $Id: Core.php 353 2012-10-19 00:41:28Z g.meyer $
 * @filesource   $HeadURL: http://svn.babiel.com/Sandbox/trunk/Projekte/PWTool/Packages/Framework/EF/Core.php $
 * @revision     $Revision: 353 $
 * @modifiedby   $Author: g.meyer $
 * @lastmodified $Date: 2012-10-19 02:41:28 +0200 (Fr, 19 Okt 2012) $
 */

declare(ENCODING = 'utf-8');
namespace Framework\EF;

/**
 * class Core
 *
 * Führt automatisch die per REQUEST übergebene action aus
 *
 * @internal     
 * @version		Versionsnummer 1.0
 * @package		Framework
 * @subpackage	EF
 */
class Core {
  
	/*
	* Grundliegende EF-Komponenten
	*/
	
	/**
	 * @var \Framework\EF\ActionController
	 */
	private $actionController;
	
	/**
	 * @var \Framework\EF\ValidatorManager
	 */
	private $validator;
	
	/**
	 * @var unknown_type
	 */
	private $rightSystem;
	
  
	/**
	 * Constructor
	 * @return void
	 */
	public function __construct() {
		//ClassLoader initializieren
		$this->initializeClassLoader();
		//DebugExceptionHandler initializieren
		$this->initializeDebugExceptionHandler();			
		//Logger initializieren
		$this->initializeLogger();	 
	}
	
	/**
	 * Setzt alle Constanten die benötigt werden
	 * @author	Nys Standop <nys.standop@yahoo.de>
	 * @return	void
	 */
	public static function setConstants() {
		if(!defined('ROOT')) {
			//Rootverzeichnes ermitteln
			$up = '../';
			define('ROOT', realpath(dirname(__FILE__).'/'.$up.$up).'/');
		}
		if(!defined('CONFIG')) {
			define('CONFIG', ROOT.'Config/');
		}
		if(!defined('CLASSES')) {
			define('CLASSES', ROOT.'Framework/');
		}
	    if(!defined('CRUDS')) {
			define('CRUDS', ROOT.'Packages/CRUD/');
		}
	  if(!defined('CONTROLLER')) {
			define('CONTROLLER', ROOT.'Packages/Controller/');
		}
		if(!defined('PHPLIBS')) {
			define('PHPLIBS', ROOT.'Framework/');
		}
		if(!defined('SMARTY_PLUGINS')) {
			define('SMARTY_PLUGINS', ROOT."Framework/Smarty/plugins/");
		}
		if(!defined('BASE_PATH')) {
			define('BASE_PATH', ROOT.'Packages/');
		}
		
	  if(!defined('SMARTY_PATH')) {
			define('SMARTY_PATH', ROOT.'Framework/Smarty/');
		}
		
		if(!defined('WEB_PATH')) {
			define('WEB_PATH', ROOT.'Web/');
		}
		if(!defined('VIEW_PATH')) {
			define('VIEW_PATH', BASE_PATH.'Views/');
		}
		if(!defined('ACTION_CONFIGS')) {
			define('ACTION_CONFIGS', ROOT.'Config/Actions/');
		}
	}
	
	/**
	 * initialisiert den ClassLoader
	 * @author	Nys Standop	<nys.standop@yahoo.de>
	 * @return	void
	 * @see http://www.php.net/manual/en/function.spl-autoload-register.php
	 */
	protected function initializeClassLoader() {
		$classLoader = realpath(ROOT . 'Framework/Source/ClassLoader.php');
		if(!is_file($classLoader)) throw new \Exception('ClassLoader not Found', 0004);
                require_once $classLoader;
		$this->classLoader = new \Framework\Source\ClassLoader();
		spl_autoload_register(array($this->classLoader, 'loadClass'));
	}
  
	
	/**
	 * initialisiert die Logger-Class
	 * @return void
	 */
	protected function initializeLogger() {
		\Framework\Logger::init();
	}
	
	
	/**
	 * initialisiert den DebugExceptionHandler
	 * @return void
	 */
	protected function initializeDebugExceptionHandler() {
		new \Framework\Errors\DebugExceptionHandler();
	}
	
	/**
	 * Lässt die Application ausführen
	 * @return void
	 */
	public function run() {
				
		$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : 'main';
\Framework\Logger::debug("run:: Action ist ".$action, "Core");
		
		$this->actionController = new \Framework\EF\ActionController($action);
		
		 $realAction = '';
		 $actionClassName = null;
		 try {
		   $actionConfig = $this->actionController->getActionConfig();
		   $realAction = $action;
		   $actionClassName = "\\Controller\\".$actionConfig['controller'];
		 } 
		 catch(\Framework\Errors\FileNotFound $error) {
			 $actionClassName = '\\Controller\\FatalError';
		 } 
		 catch(\Framework\Errors\ActionNotFoundException $error) {
		   
		 }
		 
\Framework\Logger::debug("run:: ActionClassName ist ".$actionClassName, "Core");

		 if( $actionClassName ) {
		 	$this->validator = new ValidatorManager($this->actionController->getActionConfig());
			$this->validator->validate($action, $_REQUEST);
			
			$actionClass = new $actionClassName($this->validator, $actionConfig['method'], $realAction);
		 } 
		 else {
		  
		     if(class_exists("\Controller\FatalError")) {
		       new \Controller\FatalError("actionNotFound",htmlspecialchars($action));  
		     } else {
		       echo "<h2>This Action does not exists</h2><p>If you want a custom Error Site please create a FatalError Controller</p>";
		     }
		     		   		   
		 }

		 
		 
	}
}

?>