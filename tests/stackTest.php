<?php

declare(strict_type=1);

use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\TestCase;

final class stackTest extends TestCase
{
    public function testEmpty(): array
    {
        $stack = [];
        $this->assertEmpty($stack);
        return $stack;
    }
    #[Depends('testEmpty')]
    public function testPush(array $stack): array
    {
        $stack[] = 'foo';
        $this->assertSame('foo', $stack[count($stack) - 1]);
        $this->assertNotEmpty($stack);
        return $stack;
    }
    #[Depends('testPush')]
    public function testPop(array $stack): void
    {
        $this->assertSame('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
