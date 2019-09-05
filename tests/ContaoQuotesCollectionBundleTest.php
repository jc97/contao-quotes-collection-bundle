<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace jc97\ContaoQuotesCollectionBundle\Tests;

use jc97\ContaoQuotesCollectionBundle\ContaoQuotesCollectionBundle;
use PHPUnit\Framework\TestCase;

class ContaoQuotesCollectionBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoQuotesCollectionBundle();

        $this->assertInstanceOf('jc97\ContaoQuotesCollectionBundle\ContaoQuotesCollectionBundle', $bundle);
    }
}
