<?php

class About
{
    use Controller;
    
    public function index()
    {
        $drawing = new Drawing;

        $data['carouselData'] = $drawing->drawingCarousel();
        
        $this->view('about', $data);
    }
}