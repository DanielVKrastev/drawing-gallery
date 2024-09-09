<?php

/*Artshop class*/
class Artshop
{
    use Controller;

    public function index()
    {
        //All data in table Drawing
        $drawingArr = [];
        $data = [];
        $drawing = new Drawing;

        $whereDrawing['active'] = 'yes';
        $whereDrawing['sold'] = 'no';
        $row = $drawing->where($whereDrawing);
        if($row){
            foreach($row as $drawing){
                foreach($drawing as $value => $key){
                    $dataDraw[$value] = $key;
                }
                array_push($drawingArr, $dataDraw);
            }

            $data['drawingArr'] = $drawingArr;
            
            $count_row = count($drawingArr);
            $data['countRows'] = $count_row;
        }

        $this->view('artshop', $data);
    }

    public function drawing(){

        if (isset($_GET['id'])) {
            $dataDrawing['id'] = $_GET['id'];
            
            $drawing = new Drawing;
            $sql_query = $drawing->where($dataDrawing);
            if($sql_query){

                $data['drawing'] = $sql_query[0];

                $sold = $data['drawing']->sold;
                if($sold == 'no'){
                    $data['carouselData'] = $drawing->drawingCarousel();
                    $this->view('drawing', $data);
                }else{
                    redirect('artshop');
                }

            }else{
                redirect('artshop');
            }
            
        }else{
            redirect('artshop');
        }
    }

}
