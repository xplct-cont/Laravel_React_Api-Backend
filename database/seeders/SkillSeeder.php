<?php

namespace Database\Seeders;
use App\Models\Skill;

use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'name' => 'Kenn Secusana',
            'address' => 'Looc, Calape, Bohol',
            'contact_no' => '09009898788 ',
            'age' => '22',
            'department' => 'Supervisor',
            'slug' => 'Full Stack Developer',
            ],

            [
            'name' => 'Edwin Buscabus',
            'address' => 'Danao, Bohol',
            'contact_no' => '09896565666 ',
            'age' => '22',
            'department' => 'HR',
            'slug' => 'Web Developer',
            ],

            [
            'name' => 'Ron Weasley',
            'address' => 'Cabulijan, Tubigon, Bohol',
            'contact_no' => '09043432333 ',
            'age' => '23',
            'department' => 'Engineering',
            'slug' => 'Computer Engineer',
            ],
            [
            'name' => 'Draco Malfoy',
            'address' => 'Tinangnan, Tubigon, Bohol',
            'contact_no' => '09005654567',
            'age' => '21',
            'department' => 'AUDIT',
            'slug' => 'Accountant',
            ],


        ];
        foreach($data as $skill){
            \App\Models\Skill::create($skill);
        }
    }
}