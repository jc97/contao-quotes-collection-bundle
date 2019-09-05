<?php

/*
 * This file is part of contao-quotes-collection-bundle.
 *
 * (c) Julian Knorr
 *
 * @license LGPL-3.0-or-later
 */

namespace jc97\ContaoQuotesCollectionBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use jc97\ContaoQuotesCollectionBundle\ContaoQuotesCollectionBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoQuotesCollectionBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
