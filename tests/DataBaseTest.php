<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class DataBaseTest extends TestCase
{
    protected function setUp(): void
    {
        if(!extension_loaded('pgsql'))
        {
            $this->markTestSkipped(
                'The PostgreSql extension is not available'
            );
        }
    }
    public function testeConection(): void
    {
        //...
    }
}
//https://docs.phpunit.de/en/10.0/writing-tests-for-phpunit.html