<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $posts = [
            [
                'title' => 'The Benefits of Mindfulness Meditation',
                'description' => 'Explore how mindfulness meditation can improve mental well-being and increase focus in your daily life.',
                'tags' => 'mindfulness, meditation, wellness',
                'publication_date' => '2024-10-01',
                'status' => 1, // Active
                'meta_title' => 'Benefits of Mindfulness Meditation',
                'meta_description' => 'Discover the various benefits of mindfulness meditation and how it can enhance your mental health.',
                'meta_keywords' => 'mindfulness, meditation, mental health',
            ],
            [
                'title' => 'Top 10 Tips for Effective Time Management',
                'description' => 'Learn essential time management strategies that can help you increase productivity and reduce stress.',
                'tags' => 'productivity, time management, self-improvement',
                'publication_date' => '2024-10-05',
                'status' => 1, // Active
                'meta_title' => 'Effective Time Management Tips',
                'meta_description' => 'Master your schedule with these top 10 tips for effective time management.',
                'meta_keywords' => 'time management, productivity, self-help',
            ],
            [
                'title' => 'The Importance of Physical Fitness',
                'description' => 'Understand why physical fitness is crucial for a healthy lifestyle and how to incorporate exercise into your routine.',
                'tags' => 'fitness, health, exercise',
                'publication_date' => '2024-10-10',
                'status' => 1, // Active
                'meta_title' => 'Importance of Physical Fitness',
                'meta_description' => 'Discover the significance of physical fitness and tips on how to stay active.',
                'meta_keywords' => 'fitness, health, exercise',
            ],
            [
                'title' => 'How to Build a Successful Morning Routine',
                'description' => 'Create a morning routine that sets you up for success with these practical tips and strategies.',
                'tags' => 'morning routine, productivity, habits',
                'publication_date' => '2024-10-15',
                'status' => 1, // Active
                'meta_title' => 'Building a Successful Morning Routine',
                'meta_description' => 'Learn how to create a morning routine that boosts your productivity.',
                'meta_keywords' => 'morning routine, productivity, self-improvement',
            ],
            [
                'title' => 'Healthy Eating: Tips for a Balanced Diet',
                'description' => 'Discover essential tips for maintaining a balanced diet and the benefits of healthy eating.',
                'tags' => 'healthy eating, diet, nutrition',
                'publication_date' => '2024-10-20',
                'status' => 1, // Active
                'meta_title' => 'Tips for Healthy Eating',
                'meta_description' => 'Find out how to eat healthily and maintain a balanced diet.',
                'meta_keywords' => 'healthy eating, nutrition, diet',
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
