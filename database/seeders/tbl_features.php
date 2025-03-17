<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Features;
// use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class tbl_features extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::statement('ALTER TABLE tbl_features AUTO_INCREMENT = 1');
        Features::insert([
            [
                'feature_name' => 'Model',
                'description' => 'Represents the data structure and business logic in Laravel.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'feature_name' => 'View',
                'description' => 'The presentation layer that displays data to the user using Blade templates.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'feature_name' => 'Controller',
                'description' => 'Handles the logic and user requests, bridging the model and view.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'feature_name' => 'Routes',
                'description' => 'Defines URL patterns that map to controllers or closure functions.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'feature_name' => 'Middleware',
                'description' => 'Filters HTTP requests, performing tasks like authentication or logging.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'feature_name' => 'Blade Templates',
                'description' => 'A templating engine that allows dynamic HTML views with a PHP-like syntax.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'feature_name' => 'Migrations',
                'description' => 'Version control for the database schema, helping to define and modify tables.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'feature_name' => 'Seeders',
                'description' => 'Populate the database with initial data, useful for testing and development.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'feature_name' => 'Database',
                'description' => 'Manages database connections and operations like querying and manipulating data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'feature_name' => 'Eloquent ORM',
                'description' => 'Simplifies database interactions using an ActiveRecord implementation.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}


