<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSummonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summoners', function (Blueprint $table)
        {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('name');
            $table->bigInteger('summoner_id');

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

            $table->enum('current_season_rank_solo', $rankings);
            $table->enum('current_season_rank_solo_division', $divisions);
            $table->enum('current_season_rank_team_5', $rankings);
            $table->enum('current_season_rank_team_5_division', $divisions);
            $table->enum('current_season_rank_team_3', $rankings);
            $table->enum('current_season_rank_team_3_division', $divisions);

            $table->enum('previous_season_rank_solo', $rankings);
            $table->enum('previous_season_rank_solo_division', $divisions);
            $table->enum('previous_season_rank_team_5', $rankings);
            $table->enum('previous_season_rank_team_5_division', $divisions);
            $table->enum('previous_season_rank_team_3', $rankings);
            $table->enum('previous_season_rank_team_3_division', $divisions);

            $table->string('summoner_stats_url');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('summoners');
    }
}
