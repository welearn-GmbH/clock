<?php

namespace Welearn\Clock;

use DateTimeImmutable;

class FrozenClock implements ClockInterface
{
    private DateTimeImmutable $dateTimeImmutable;

    public function __construct(DateTimeImmutable $dateTimeImmutable)
    {
        $this->dateTimeImmutable = $dateTimeImmutable;
    }

    public function now(): DateTimeImmutable
    {
        return $this->dateTimeImmutable;
    }
}