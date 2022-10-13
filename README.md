[![PHP Composer](https://github.com/welearn-GmbH/clock/actions/workflows/php.yml/badge.svg?branch=master)](https://github.com/welearn-GmbH/clock/actions/workflows/php.yml)

# welearn/clock

A simple implementation of the upcoming PSR-20 clock.

## Installation

```
composer require welearn/clock
```

Or see https://packagist.org/packages/welearn/clock

### For symfony

Add to `services.yaml` to allow the service being wired.

```
Welearn\Clock\ClockInterface:
    class: Welearn\Clock\Clock
```

For your unittests you can use mocks against `Welearn\Clock\ClockInterface` (the interface will be replaced with the PSR
interface at one point!). Alternatively you can also create the `FrozenClock` with a specific date and time or `Clock`
manually.

# Clock implementations

## Clock

Returns the current date as an `DateTimeImmutable` when calling `now`.

## FrozenClock

Allows to set a date through contructor which is always returned when calling `now`.
