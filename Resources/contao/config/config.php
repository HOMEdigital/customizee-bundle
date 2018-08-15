<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 13.12.2017
 * Time: 14:50
 */

#-- hooks --------------------------------------------------------------------------------------------------------------
$GLOBALS['TL_HOOKS']['getArticle'][] = array('Home\CustomizeeBundle\Resources\contao\hooks\GetArticle', 'setCustomClasses');

#-- redirects ----------------------------------------------------------------------------------------------------------
$GLOBALS['BE_MOD']['design']['Module'] = array(
    'callback'   => 'Home\PearlsBundle\Resources\contao\Helper\BeModRedirect',
    'action'     => array('link'=>'/contao?do=themes&table=tl_module&id=1'),
);
#$GLOBALS['BE_MOD']['design']['Main-Layout'] = array(
#    'callback'   => 'Home\PearlsBundle\Resources\contao\Helper\BeModRedirect',
#    'action'     => array('link'=>'/contao?do=themes&table=tl_layout&id=1&act=edit'),
#);