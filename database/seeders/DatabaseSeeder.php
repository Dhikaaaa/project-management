<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Task;
use App\Models\User;
use App\Models\Client;
use App\Models\Member;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'root',
            'email' => 'root@gmail.com',
            'password' => Hash::make('root'),
        ]);

        User::create([
            'name' => 'dhikaa',
            'email' => 'dhikabahri4@gmail.com',
            'password' => bcrypt('akudhika123'),
        ]);

        User::create([
            'name' => 'aat',
            'email' => 'aat@gmail.com',
            'password' => bcrypt('akuaat123'),
        ]);

        Category::create([
            'category' => 'Web Development'
        ]);

        Category::create([
            'category' => 'Design Graphic'
        ]);

        Category::create([
            'category' => 'Bussines Marketing'
        ]);

        Client::create([
            'name' => 'Yofan Niki Andara',
            'address' => 'Cluring, Banyuwangi',
            'contact' => '087857875680',
            'profil' => 'Chief Technology Officer',
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet illum dicta velit rerum, autem ea laborum aliquam similique corporis enim.'
        ]);

        Project::create([
            'name' => 'CV Jayla Tech',
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet illum dicta velit rerum, autem ea laborum aliquam similique corporis enim. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet illum dicta velit rerum, autem ea laborum aliquam similique corporis enim.',
            'progress' => 20,
            'due_date' => date('2022-05-25'),
            'status' => 'On Progress',
            'category_id' => 1,
            'client_id' => 1
        ]);

        Task::create([
            'task' => 'Make Diagram Activity',
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'due_date' => date('2022-05-25'),
            'status' => 'Done',
            'project_id' => 1
        ]);

        Task::create([
            'task' => 'Make Entity Relational Diagram',
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'due_date' => date('2022-05-25'),
            'status' => 'On Progress',
            'project_id' => 1
        ]);

        Member::create([
            'project_id' => 1,
            'user_id' => 1,
            'status' => 'leader'
        ]);

        Member::create([
            'project_id' => 1,
            'user_id' => 2,
            'status' => ''
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
