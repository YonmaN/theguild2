<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class TipsController extends AbstractRestfulController
{
    public function getList() {
        return new JsonModel(array(
        	array(
	        	'attribute' => 'hospitality',
        		'rating' => '5',
        		'quote' => '',
        		'description' => ''
	        )
        ));
    }
}
