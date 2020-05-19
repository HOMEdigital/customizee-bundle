<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 13.12.2017
 * Time: 13:34
 */

use Home\PearlsBundle\Resources\contao\Helper\Dca as Helper;

try{
    $tl_article = new Helper\DcaHelper('tl_article');

    #-- change layout --------------------------------------------
    $tl_article
        ->mergeFieldSettings('hm_design',  'options', array('bkg-lightgrey', 'bkg-grey', 'bkg-darkgrey'))
    ;

    $tl_article
        ->addPaletteGroup('layout', array('inColumn', 'hm_layout', 'hm_design', 'hm_step_inner_top', 'hm_step_inner_bottom'), 'default', 2)
        ->removePaletteGroup('teaser_legend')
        ->removePaletteGroup('syndication_legend')
    ;

}catch(\Exception $e){
    var_dump($e);
}
