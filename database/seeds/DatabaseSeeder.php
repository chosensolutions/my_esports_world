<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * @var array
     */
    protected $tables = [
        'users',
        'accounts',
        'profiles',
        'profile_awards',
        'profile_experiences',
        'profile_educations',
        'profile_languages',
        'summoners',
        'videos'
    ];

    /**
     * @var array
     */
    protected $seeders = [
        'MasterTableSeeder'
        //'UsersTableSeeder',
        //'AccountsTableSeeder',
        //'ProfilesTableSeeder',
    ];

    /**
     * Clean out the database for a new seed generation.
     */
    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $table)
        {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->cleanDatabase();

        foreach ($this->seeders as $seedClass)
        {
            $this->call($seedClass);
        }

        Model::reguard();
    }
}
