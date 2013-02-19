<?php
/**
 * EF_Group
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
 * @version      SVN: $Id: Group.php 353 2012-10-19 00:41:28Z g.meyer $
 * @filesource   $HeadURL: http://svn.babiel.com/Sandbox/trunk/Projekte/PWTool/Packages/Framework/EF/Group.php $
 * @revision     $Revision: 353 $
 * @modifiedby   $Author: g.meyer $
 * @lastmodified $Date: 2012-10-19 02:41:28 +0200 (Fr, 19 Okt 2012) $
 */

declare(ENCODING = 'utf-8');
namespace Framework\EF;

/**
 * class EF_Group
 *
 * ADD DESCRIPTION HERE
 *
 * @internal     
 * @version      Versionsnummer 1.0
 */
class Group {
	
	/**
	 * @var Object GroupDAO
	 */
	private $groupDAO;
	
	/**
	 * Constructor
	 * @return void
	 */
	public function __construct() {
		$this->groupDAO = new GroupDAO();
	}
	
}

?>