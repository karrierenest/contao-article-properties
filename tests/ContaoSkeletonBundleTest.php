<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace LumturoNet\ArticlePropertiesBundle\Tests;

use LumturoNet\ArticlePropertiesBundle\ArticlePropertiesBundle;
use PHPUnit\Framework\TestCase;

class ContaoSkeletonBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ArticlePropertiesBundle();

        $this->assertInstanceOf('LumturoNet\ArticlePropertiesBundle\ArticlePropertiesBundle', $bundle);
    }
}
