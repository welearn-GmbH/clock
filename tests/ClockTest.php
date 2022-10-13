<?php

namespace App\Tests;

use DateTimeImmutable;
use DateTimeInterface;
use PHPUnit\Framework\TestCase;
use Welearn\Clock\Clock;

class ClockTest extends TestCase
{
    public function testNow(): void
    {
        $clock = new Clock();

        self::assertInstanceOf(DateTimeImmutable::class, $clock->now());
        self::assertEquals(
            (new DateTimeImmutable())->format(DateTimeInterface::ATOM),
            $clock->now()->format(DateTimeInterface::ATOM)
        );
    }
}
