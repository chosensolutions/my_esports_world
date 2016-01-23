<?php

$factory->define(App\Acme\Models\Summoner::class, function (Faker\Generator $faker)
{
    $rankings = [
        'Unranked',
        'Bronze',
        'Silver',
        'Gold',
        'Platinum',
        'Diamond',
        'Master',
        'Challenger'
    ];

    $divisions = ['I', 'II', 'III', 'IV', 'V'];

    return [
        'name' => $faker->name,
        'summoner_id' => $faker->numberBetween(10000000, 99999999),

        'current_season_rank_solo' => $rankings[$faker->numberBetween(0, count($rankings) - 1)],
        'current_season_rank_solo_division' => $divisions[$faker->numberBetween(0, 4)],

        'current_season_rank_team_5' => $rankings[$faker->numberBetween(0, count($rankings) - 1)],
        'current_season_rank_team_5_division' => $divisions[$faker->numberBetween(0, 4)],

        'current_season_rank_team_3' => $rankings[$faker->numberBetween(0, count($rankings) - 1)],
        'current_season_rank_team_3_division' => $divisions[$faker->numberBetween(0, 4)],

        'previous_season_rank_solo' => $rankings[$faker->numberBetween(0, count($rankings) - 1)],
        'previous_season_rank_solo_division' => $divisions[$faker->numberBetween(0, 4)],

        'previous_season_rank_team_5' => $rankings[$faker->numberBetween(0, count($rankings) - 1)],
        'previous_season_rank_team_5_division' => $divisions[$faker->numberBetween(0, 4)],

        'previous_season_rank_team_3' => $rankings[$faker->numberBetween(0, count($rankings) - 1)],
        'previous_season_rank_team_3_division' => $divisions[$faker->numberBetween(0, 4)],

        'summoner_stats_url' => $faker->url,
    ];
});