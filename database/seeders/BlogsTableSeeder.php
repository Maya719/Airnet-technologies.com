<?php

namespace Database\Seeders;

use App\Models\Blogs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $more_blogs = [
            [
                "id" => 101,
                "image" => 'assets/img/blog/blog-1.jpg',
                "title" => "blog title 1",
                "description"=>"description related to blog 1"
            ],
            [
                "id" => 102,
                "image" => 'assets/img/blog/blog-2.jpg',
                "title" => "blog title 2",
                "description"=>"description related to blog 2"
            ],
            [
                "id" => 103,
                "image" => 'assets/img/blog/blog-3.jpg',
                "title" => "blog title 3",
                "description"=>"description related to blog 3"
            ],
            [
                "id" => 104,
                "image" => 'assets/img/blog/blog-4.jpg',
                "title" => "blog title 4",
                "description"=>"description related to blog 4"
            ],
            [
                "id" => 105,
                "image" => 'assets/img/blog/blog-1.jpg',
                "title" => "blog title 5",
                "description"=>"description related to blog 5"
            ],
            [
                "id" => 106,
                "image" => 'assets/img/blog/blog-2.jpg',
                "title" => "blog title 6",
                "description"=>"description related to blog 6"
            ],
            [
                "id" => 107,
                "image" => 'assets/img/blog/blog-3.jpg',
                "title" => "blog title 7",
                "description"=>"description related to blog 5"
            ],
        ];


        foreach ($more_blogs as $blogData) {
            Blogs::create($blogData);
        }


    }
}
