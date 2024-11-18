<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Project;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Profile::create([
            'name' => 'Viola',
            'subtitle' => 'Tech Geek + Mod. Programmer',
            'description' => 'I am committed to delivering innovative and efficient solutions across a broad spectrum of technology domains.',
            'photo' => 'assets/img/hero/me.png',
            'years_experience' => 10,
            'projects_completed' => 50,
            'tech_skills' => 15,
            'licenses_certifications' => 17,
            'cv_link' => 'https://github.com/violaClara/CV_page/blob/main/CV_2023.png',
            'social_links' => json_encode([
                'twitter' => '#',
                'linkedin' => 'https://www.linkedin.com/in/viola-pramesti-26bba5219/',
                'github' => 'https://github.com/violaClara',
            ]),
        ]);
    
        Project::insert([
            [
                'title' => 'IPv4 Subnet Calculator',
                'description' => 'Project to make calculator for network subnetting',
                'category' => 'app',
                'image_path' => 'assets/img/portfolio/subnetApp.jpg',
                'link'=>'https://play.google.com/store/apps/developer?id=TBash&hl=en',
            ],
            [
                'title' => 'Finance Website',
                'description' => 'Project was to make a website with custom form with HTML, CSS, PHP, JavaScript, PHPWord',
                'category' => 'website',
                'image_path' => 'assets/img/portfolio/1.jpg',
                'link'=>'https://play.google.com/store/apps/developer?id=TBash&hl=en',
            ],
            [
                'title' => 'Port. HarleyDavidson (static)',
                'description' => 'Project was to make a static website with custom form with HTML, CSS',
                'category' => 'website',
                'image_path' => 'assets/img/portfolio/harley.jpg',
                'link'=>'https://play.google.com/store/apps/developer?id=TBash&hl=en',
            ],
            [
                'title' => 'Kue Cubit Legend the game',
                'description' => 'Project was simulation game to become a kue cubit seller.',
                'category' => 'game',
                'image_path' => 'assets/img/portfolio/3.jpg',
                'link'=>'https://play.google.com/store/apps/developer?id=TBash&hl=en',
            ],
            [
                'title' => '3 AM the game',
                'description' => 'Project was a game made with Unity.',
                'category' => 'game',
                'image_path' => 'assets/img/portfolio/3amGames.jpg',
                'link'=>'https://play.google.com/store/apps/developer?id=TBash&hl=en',
            ],
            [
                'title' => 'Smart garden: IOT with ESP32',
                'description' => 'Project to make an automatic monitoring system.',
                'category' => 'iot',
                'image_path' => 'assets/img/portfolio/ior_wsn.jpg',
                'link'=>'https://play.google.com/store/apps/developer?id=TBash&hl=en',
            ],
            [
                'title' => 'Smart Queue: IOT with ESP32',
                'description' => 'Project to make an automatic queue system.',
                'category' => 'iot',
                'image_path' => 'assets/img/portfolio/iot_que.jpg',
                'link'=>'https://play.google.com/store/apps/developer?id=TBash&hl=en',
            ],
            [
                'title' => 'Money Manager APP',
                'description' => 'Project to make money manager for daily activities with Java native.',
                'category' => 'app',
                'image_path' => 'assets/img/portfolio/moneyApp.jpg',
                'link'=>'https://play.google.com/store/apps/developer?id=TBash&hl=en',
            ],
            [
                'title' => 'Go Lab APP',
                'description' => 'Project to organize lab results for hospitals with Flutter and Google Cloud.',
                'category' => 'app',
                'image_path' => 'assets/img/portfolio/golabAPP.jpg',
                'link'=>'https://play.google.com/store/apps/developer?id=TBash&hl=en',
            ],
            [
                'title' => 'Reservation APP',
                'description' => 'Project to create an app for online reservation functionality.',
                'category' => 'app',
                'image_path' => 'assets/img/portfolio/4.jpg',
                'link'=>'https://play.google.com/store/apps/developer?id=TBash&hl=en',
            ],
        ]);
        
    }
}
