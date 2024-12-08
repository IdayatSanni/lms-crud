<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Course::factory()->create([
            'coursename' => 'PHP',
            'courseteacher' => 'Gaurav',
            'coursecode' => 'HTTP5225'
        ]);

        Course::factory()->create([
            'coursename' => 'JavaScript',
            'courseteacher' => 'Joanna',
            'coursecode' => 'HTTP5226'
        ]);

        Course::factory()->create([
            'coursename' => 'REACT',
            'courseteacher' => 'Joana',
            'coursecode' => 'HTTP5221'
        ]);

        Course::factory()->create([
            'coursename' => 'AspNet',
            'courseteacher' => 'Christine',
            'coursecode' => 'HTTP4221'
        ]);

        Course::factory()->create([
            'coursename' => 'Special topics',
            'courseteacher' => 'Adam',
            'coursecode' => 'HTTP5214'
        ]);


        Student::factory(20)->create();
    }
}