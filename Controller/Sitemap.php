<?php
/**
 * @TODO LICENCE
 */
namespace dentakon\Sitemap\Controller;

use \OxidEsales\Eshop\Application\Controller\FrontendController;

/**
 *
 */
class Sitemap extends \OxidEsales\Eshop\Application\Controller\FrontendController
{
    protected $_sThisTemplate = '';	

    public function __construct()
    {

    }	    


    /**
    *
    * @return string
    */
    public function render()
    {   

        $articleTable = getViewName('oxarticles');

        $sql = "SELECT * FROM $articleTable WHERE $articleTable.oxactive = 1";

	$oArticleList = oxNew( 'oxarticlelist' );
	$oArticleList->selectString($sql);

	foreach($oArticleList->getList() as $oArticle)
	{
	 echo ($oArticle->getLink())."\r\n";
	}
	
	return $this->_sThisTemplate;
    }

}
