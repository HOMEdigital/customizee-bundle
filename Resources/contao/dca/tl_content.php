<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 27.09.2017
 * Time: 16:33
 */

namespace Home\LibrareeBundle\Resources\contao\dca;
use Home\PearlsBundle\Resources\contao\Helper\Dca as Helper;

try{
    $tl_content = new Helper\DcaHelper('tl_content');

    #-- remove pallete groups - wird eigentlich nicht benötigt, da die ce im config-File entfernt werden müssen, aber so ist es übersichtlicher
    if (array_key_exists('customizee', $GLOBALS) && array_key_exists('removeCe', $GLOBALS['customizee'])) {
        foreach ($GLOBALS['customizee']['removeCe'] as $palette=>$group) {
            $tl_content->removePalette($palette);
        }
    }

    #-- remove headline field from all content elements ----------------------------------------------
    foreach($GLOBALS['TL_DCA']['tl_content']['palettes'] as $key=>$palette) {
        if (!is_array($palette) && strpos($palette, '{type_legend}') !== null) {
            $tl_content->addPaletteGroup('type', array('type'), $key, 1);
        }
    }

    #-- change fields/palette groups contao standard content elements -----------------------------------
    $tl_content
        ->removePaletteGroup('image_legend', 'text')
    ;

    #-- change layout --------------------------------------------
    $tl_content
        ->mergeFieldSettings('hm_design',  'options', array('bkg-light-grey', 'bkg-dark-grey', 'bkg-light-grey-50'))
    ;

    $tl_content
        ->addPaletteGroup('layout', array('inColumn','hm_layout', 'hm_design', 'hm_step_outer_top', 'hm_step_outer_bottom'), 'hm_container_start', 3)
    ;
}catch(\Exception $e){
    var_dump($e);
}