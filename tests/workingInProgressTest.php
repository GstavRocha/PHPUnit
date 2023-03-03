<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class workingInProgressTest extends TestCase
{
    public function testSomeThing(): void
    {
        //Optional: Test anything here, if you want.
        $this->assertTrue(true, 'this should alreayd work.');
        //Stop here and mark this test as incomplete
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}
