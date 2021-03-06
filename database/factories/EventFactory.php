<?php

use Faker\Generator as Faker;
use LaravelEnso\Calendar\Enums\Frequencies;
use LaravelEnso\Calendar\Models\Calendar;
use LaravelEnso\Calendar\Models\Event;

$factory->define(Event::class, fn (Faker $faker) => [
    'parent_id' => null,
    'body' => $faker->text,
    'title' => $faker->title,
    'calendar_id' => fn () => factory(Calendar::class)->create()->id,
    'frequency' => Frequencies::Once,
    'start_date' => $faker->date('Y-m-d'),
    'end_date' => $faker->date('Y-m-d'),
    'start_time' => '12:00',
    'end_time' => '14:00',
    'recurrence_ends_at' => null,
    'is_all_day' => false,
    'location' => $faker->city,
    'lat' => $faker->latitude,
    'lng' => $faker->longitude,
]);
