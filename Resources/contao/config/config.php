<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 13.12.2017
 * Time: 14:50
 */

/**
 * remove contao standard content elements
 *
 * das Array wird auch im dca verwendet um die Paletten zu löschen. Daher sind die Content-Elemente als key und die Gruppen als values erfasst
 */
$GLOBALS['customizee']['removeCe'] = array(
    'headline'  => 'texts',
    'list'      => 'texts',
    'table'     => 'texts',
    'code'      => 'texts',
    'markdown'  => 'texts',
    'hyperlink' => 'links',
    'toplink'   => 'links',
    'download'  => 'files',
    'teaser'    => 'includes',
    'comments'  => 'includes'
);

foreach($GLOBALS['customizee']['removeCe'] as $ce=>$group) {
    unset($GLOBALS['TL_CTE'][$group][$ce]);
}