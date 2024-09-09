<?php

/*Contact class*/
class Contact
{
    use Controller;

    public function index()
    {
        $URL = splitURL();
        $data['pathURL'] = $URL;
        $this->view('contact', $data);
    }

}
