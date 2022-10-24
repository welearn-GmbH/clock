<?php

namespace Welearn\Clock;

use DateTimeImmutable;

/**
 * @see https://github.com/php-fig/fig-standards/blob/master/proposed/clock.md
 */
interface ClockInterface extends \Psr\Clock\ClockInterface
{
    public function now(): DateTimeImmutable;
}