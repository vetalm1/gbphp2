<?php

class Counter
{
    public function count($a, $b)
    {
        return $a + $b;
    }
}

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testCount(): void
    {
        $counter = new Counter();

        $this->assertSame(8, $counter->count(2, 6));
    }
}