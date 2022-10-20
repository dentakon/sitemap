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
	 $oConfig = oxNew("oxconfig");

	#    echo '<pre>';
	#	print_r($oConfig->getConfigParam("sShopDir"));
	#    echo '</pre>';

        $articleTable = getViewName('oxarticles');

        $sql = "SELECT * FROM $articleTable WHERE $articleTable.oxactive = 1";

	$oArticleList = oxNew( 'oxarticlelist' );
	$oArticleList->selectString($sql);

	$f1 = fopen($oConfig->getConfigParam("sShopDir")."sitemap.txt","w+");

	foreach($oArticleList->getList() as $oArticle)
	{
		 fwrite($f1, $oArticle->getLink()."\r\n");
	}

	fclose($f1);

	return $this->_sThisTemplate;
    
 
   }
}
