<?php

use Illuminate\Database\Seeder;
use App\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->truncate();
        // php artisan db:seed --class=CoursesTableSeeder
        factory(Course::class, 5)->create();
    }
}
