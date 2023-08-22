<?php

declare(strict_types=1);

/*
 * This file is part of a BugBuster Contao Bundle
 *
 * @copyright  Glen Langer 2023 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    Contao Client Hits Request Bundle
 * @license    LGPL-3.0-or-later
 * @see        https://github.com/BugBuster1701/contao-clienthints-request-bundle
 */

namespace BugBuster\ClientHintsRequestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Configures the Contao Client Hits Request bundle.
 */
class BugBusterClientHintsRequestBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
