<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'PHP 8 Programming',
                'author' => 'John Smith',
                'published_year' => 2023,
                'genre' => 'Programming',
                'description' => 'A comprehensive guide to PHP 8 features and best practices.'
            ],
            [
                'title' => 'Laravel: Up & Running',
                'author' => 'Matt Stauffer',
                'published_year' => 2022,
                'genre' => 'Web Development',
                'description' => 'Learn Laravel framework from ground up.'
            ],
            [
                'title' => 'Clean Code in PHP',
                'author' => 'Ryan Thompson',
                'published_year' => 2021,
                'genre' => 'Programming',
                'description' => 'Writing maintainable and scalable PHP code.'
            ],
            [
                'title' => 'Full Stack Laravel',
                'author' => 'Chris Evans',
                'published_year' => 2023,
                'genre' => 'Web Development',
                'description' => 'Building modern applications with Laravel and Vue.js'
            ],
            [
                'title' => 'Database Design with MySQL',
                'author' => 'Sarah Johnson',
                'published_year' => 2022,
                'genre' => 'Database',
                'description' => 'Master database design principles with MySQL'
            ],
            [
                'title' => 'API Development in Laravel',
                'author' => 'Michael Brown',
                'published_year' => 2023,
                'genre' => 'Web Development',
                'description' => 'Create robust APIs using Laravel framework'
            ],
            [
                'title' => 'Testing PHP Applications',
                'author' => 'Emma Davis',
                'published_year' => 2022,
                'genre' => 'Programming',
                'description' => 'Learn PHPUnit and testing best practices'
            ],
            [
                'title' => 'Modern JavaScript for PHP Developers',
                'author' => 'David Wilson',
                'published_year' => 2023,
                'genre' => 'Programming',
                'description' => 'Bridge the gap between PHP and JavaScript'
            ],
            [
                'title' => 'Symfony 6: The Fast Track',
                'author' => 'Fabien Potencier',
                'published_year' => 2022,
                'genre' => 'Web Development',
                'description' => 'Master the Symfony 6 framework'
            ],
            [
                'title' => 'PHP Design Patterns',
                'author' => 'Robert Martin',
                'published_year' => 2023,
                'genre' => 'Programming',
                'description' => 'Implementation of design patterns in PHP'
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}