<?php

namespace App\Models;

class Post
{
    public static function all()
    {
        return [
            [
                'id'    => 1,
                'slug'  => 'judul-artikel-1',
                'title' => 'Judul artikel 1',
                'author' => 'erfan',
                'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A ipsum adipisci sint eos facilis, itaque ducimus ea aspernatur id at eum vitae velit similique quasi magnam harum corporis saepe praesentium?'
            ],
            [
                'id'    => 2,
                'slug'  => 'judul-artikel-2',
                'title' => 'Judul artikel 2',
                'author' => 'erfan',
                'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic sunt recusandae unde veniam dolore temporibus laudantium aliquam quae? Debitis mollitia ipsa fuga error quidem harum, vel veritatis voluptatum nam modi'
            ]

        ];
    }
}
