<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\ContaoQuotesCollectionBundle\Tests;

use Contao\ContaoQuotesCollectionBundle\ContaoQuotesCollectionBundle;
use PHPUnit\Framework\TestCase;

class ContaoQuotesCollectionBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoQuotesCollectionBundle();

        $this->assertInstanceOf('Contao\ContaoQuotesCollectionBundle\ContaoQuotesCollectionBundle', $bundle);
    }
}
