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
    	
    	$tipsXml = simplexml_load_file(APP_ROOT_DIR . DIRECTORY_SEPARATOR . 'data/tips.xml');
    	$tipsArray = array();
    	foreach ($tipsXml->children() as $tip) {
    		foreach ($tip->scores->children() as $score) {
	    		$tipsArray[] = array(
	    						'label' => (string)$tip->name,
	    						'attribute' => (string)$tip['id'],
	    						'rating' => (string)$score['value'],
	    						'quote' => (string)$score->quote,
	    						'description' => (string)$score->text
	    				);
    		}
    	}
        return new JsonModel($tipsArray);
    }
}
