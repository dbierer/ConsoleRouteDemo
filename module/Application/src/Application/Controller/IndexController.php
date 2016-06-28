<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;
use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    /**
     * NOTE: to test this run the following:
     * php /path/to/public/index.php test --id 12345 TEST1 TEST2
     */
    public function routeAction()
    {
        echo __METHOD__ . PHP_EOL;
		// make sure this is a console request
		$request = $this->getRequest();
		if (!$request instanceof ConsoleRequest){
			echo 'ERROR: Non-console request made';
			exit;
        }

		echo 'Inputs: ' . PHP_EOL;
		var_dump($request->getParams());
        exit;
    }
}
