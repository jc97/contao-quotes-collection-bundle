<?php

/*
 * This file is part of contao-quotes-collection-bundle.
 *
 * Copyright (c) 2019 Julian Knorr
 *
 * @license MIT
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
