<?php
/**
 * Ihush App
 *
 * @category   Ihush
 * @package    Ihush_App_Frontend
 * @author     James.Huang <shagoo@gmail.com>
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 * @version    $Id$
 */
 
require_once 'Ihush/App/Frontend/Page.php';

/**
 * @package Ihush_App_Frontend
 */
class IndexPage extends Ihush_App_Frontend_Page
{
	public function indexAction () 
	{
		$this->view->setCache(true, 5);
		$this->view->welcome = 'Welcome to Hush Framework (Frontend) !';
		
		$userDao = $this->dao->acl->load('Acl_User');
		$user = $userDao->read(1);
		$this->debug($user, 'From db ihush_acl :');
		
		$productDao = $this->dao->app->load('App_Product');
		$product = $productDao->read(1);
		$this->debug($product, 'From db ihush_app :');
	}
}
