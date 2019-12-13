<?php

namespace MudEnterprise\Tests;

use PHPUnit\Framework\TestCase;
use function MudEnterprise\leftPad;

final class LeftPadTest extends TestCase
{
    public function testLeftPad(): void
    {
        self::assertEquals('aaaEnterprise', leftPad('Enterprise', 13, 'a'));
        self::assertEquals('aaaa', leftPad('', 4, 'a'));
    }
}
