<?php

/*Home class*/
class Home
{
    use Controller;

    public function index()
    {
        $drawing = new Drawing;

        $data['carouselData'] = $drawing->drawingCarousel();

        $this->view('home',$data);
    }

}
