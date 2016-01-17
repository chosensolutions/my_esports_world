<?php

$factory->define(App\Acme\Models\Summoner::class, function (Faker\Generator $faker)
{
    $rankings = [
        'bronze',
        'silver',
        'gold',
        'platinum',
        'diamond',
        'master',
        'challenger'
    ];

    return [
        'current_season_rank_solo' => $rankings[$faker->numberBetween(0, 6)],
        'current_season_rank_team_5' => $rankings[$faker->numberBetween(0, 6)],
        'current_season_rank_team_3' => $rankings[$faker->numberBetween(0, 6)],
        'previous_season_rank_solo' => $rankings[$faker->numberBetween(0, 6)],
        'previous_season_rank_team_5' => $rankings[$faker->numberBetween(0, 6)],
        'previous_season_rank_team_3' => $rankings[$faker->numberBetween(0, 6)],

        'summoner_stats_url' => $faker->url,
    ];
});