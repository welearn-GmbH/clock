# welearn/clock

A simple implementation of the upcoming PSR-20 clock.

## Installation

```
composer require welearn/clock
```
Or see https://packagist.org/packages/welearn/clock

# Clock implementations

## Clock

Returns the current date as an `DateTimeImmutable` when calling `now`.

## FrozenClock

Allows to set a date through contructor which is always returned when calling `now`.