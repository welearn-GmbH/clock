<?php

namespace Welearn\Clock;

use DateTimeImmutable;

class Clock implements ClockInterface
{
    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}