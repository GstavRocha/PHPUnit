<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class OutPutTest extends TestCase
{
 public function testExpectFooActualFoo(): void
 {
     $this->expectOutputString('foo');
     print 'foo';
 }
 public function testExpectBarActualBaz(): void
 {
     $this->expectOutputString('bar');
     print 'bar';
 }
 public function testExpectRegularExpression(): void
 {
     $exemple = "(\W|^)stock\stips(\W|$)";
     this->
 }
}
