<?php

namespace App\Tests;

use DateTimeImmutable;
use DateTimeInterface;
use PHPUnit\Framework\TestCase;
use Welearn\Clock\FrozenClock;

class FrozenClockTest extends TestCase
{
    public function testNow(): void
    {
        $frozenDate = (new DateTimeImmutable())->setTimestamp(-16808400);

        $frozenClock = new FrozenClock($frozenDate);
        self::assertEquals($frozenDate, $frozenClock->now());
        self::assertEquals('1969-06-20T11:00:00+00:00', $frozenClock->now()->format(DateTimeInterface::ATOM));
    }
}
