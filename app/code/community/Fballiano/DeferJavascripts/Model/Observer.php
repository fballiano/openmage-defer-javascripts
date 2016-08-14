<?php
/**
 * FBalliano
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this Module to
 * newer versions in the future.
 *
 * @category   FBalliano
 * @package    Fballiano_DeferJavascripts
 * @copyright  Copyright (c) Fabrizio Balliano (http://fabrizioballiano.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Fballiano_DeferJavascripts_Model_Observer
{
    public function httpResponseSendBefore(Varien_Event_Observer $observer)
    {
        $response = $observer->getResponse();
        $html = $response->getBody();
        if (stripos($html, "</body>") === false) return;

        preg_match_all('~<\s*\bscript\b[^>]*>(.*?)<\s*\/\s*script\s*>~is', $html, $scripts);
        if ($scripts and isset($scripts[0]) and $scripts[0]) {
            $html = preg_replace('~<\s*\bscript\b[^>]*>(.*?)<\s*\/\s*script\s*>~is', '', $response->getBody());
            $scripts = implode("", $scripts[0]);
            $html = str_ireplace("</body>", "$scripts</body>", $html);
            $response->setBody($html);
        }
    }
}