<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/vinkla/extended-acf
 */

declare(strict_types=1);

namespace Extended\ACF\Tests\Fields;

use Extended\ACF\Fields\Layout;
use PHPUnit\Framework\TestCase;

class LayoutTest extends TestCase
{
    public function testDisplay()
    {
        $layout = Layout::make('Layout')->layout('block')->get();
        $this->assertSame('block', $layout['display']);
    }
}
