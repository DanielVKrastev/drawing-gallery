<?php

/* Category class */
class Category{
    use Model;

    protected $table = 'categories';

    protected $allowedColumns = [
        'name_category',
    ];
}