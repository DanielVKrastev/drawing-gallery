<?php

/*Portfolio class*/
class Portfolio
{
    use Controller;

    public function index()
    {
        //Sold drawing in table Drawing 
        $drawingArr = [];
        $data['drawingArr'] = [];
        $drawing = new Drawing;
        
        $whereDrawing['sold'] = 'yes';
        $whereDrawing['active'] = 'yes';
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

        $this->view('portfolio', $data);
    }

    public function drawingPortfolio(){

        if (isset($_GET['id'])) {
            $dataDrawing['id'] = $_GET['id'];
            
            $drawing = new Drawing;
            $sql_query = $drawing->where($dataDrawing);
            if($sql_query){

                $data['drawing'] = $sql_query[0];

                $sold = $data['drawing']->sold;
                if($sold == 'yes'){
                    $data['carouselData'] = $drawing->drawingCarousel();
                    $this->view('drawingPortfolio', $data);
                }else{
                    redirect('portfolio');
                }

            }else{
                redirect('portfolio');
            }
            
        }else{
            redirect('portfolio');
        }
    }

}
