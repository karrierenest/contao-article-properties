<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace lumturo\ArticleBundle\Tests;

use lumturo\ArticleBundle\ArticleBundle;
use PHPUnit\Framework\TestCase;

class ContaoSkeletonBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ArticleBundle();

        $this->assertInstanceOf('lumturo\ArticleBundle\ArticleBundle', $bundle);
    }
}
