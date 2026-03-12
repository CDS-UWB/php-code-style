<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use const Cds\PhpCodeStyle\Rules;
use function Cds\PhpCodeStyle\rules;

final class RulesTest extends TestCase
{
    public function testConstant(): void
    {
        self::assertNotEmpty(Rules);
    }

    public function testRules(): void
    {
        $rules = rules();

        self::assertNotEmpty($rules);
    }

    public function testRulesCustom(): void
    {
        $rules = rules([
            'my_rule' => true,
        ]);

        self::assertNotEmpty($rules);
        self::assertArrayHasKey('my_rule', $rules);
        self::assertTrue($rules['my_rule']);
    }
}
