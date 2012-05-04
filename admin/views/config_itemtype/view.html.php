<?php
/**
* @version		2.1.5
* @package		PagesAndItems com_pagesanditems
* @copyright	Copyright (C) 2006-2012 Carsten Engel. All rights reserved.
* @license		http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author		www.pages-and-items.com
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');
require_once(JPATH_COMPONENT_ADMINISTRATOR.DS.'views'.DS.'default'.DS.'view.html.php');
/**
 * HTML View class for the

 */


class PagesAndItemsViewConfig_itemtype extends PagesAndItemsViewDefault
{
	function display( $tpl = null )
	{
		if ($model = &$this->getModel('page'))
		{
			$this->assignRef('model', $model);
		}
		parent::display($tpl);
	}
}