<?php

/*
 * This file is part of a BugBuster Contao Bundle
 *
 * @copyright  Glen Langer 2023 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    Contao Client Hits Request Bundle
 * @license    LGPL-3.0-or-later
 * @see        https://github.com/BugBuster1701/contao-clienthints-request-bundle
 */

 namespace BugBuster\ClientHintsRequestBundle\Tests;

use BugBuster\ClientHintsRequestBundle\BugBusterClientHintsRequestBundle;
use PHPUnit\Framework\TestCase;

class BugBusterClientHintsRequestBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new BugBusterClientHintsRequestBundle();

        $this->assertInstanceOf('BugBuster\ClientHintsRequestBundle\BugBusterClientHintsRequestBundle', $bundle);
    }
}
