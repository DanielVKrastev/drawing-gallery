<?php

/* SizeDrawing class */
class SizeDrawing{
    use Model;

    protected $table = 'size_drawing';

    protected $allowedColumns = [
        'size',
    ];
}