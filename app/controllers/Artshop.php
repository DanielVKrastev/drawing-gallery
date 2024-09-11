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

        $data['drawingArr'] = [];

        if(isset($_GET['category'])){
            $id_category = $_GET['category'];
            $whereDrawing['id_category'] = $id_category;
        }

        $whereDrawing['active'] = 'yes';
        $whereDrawing['sold'] = 'no';
        $row = $drawing->where($whereDrawing);
        if($row){
            foreach($row as $drawing){
                // Добави полетата от таблицата Drawing
                foreach($drawing as $value => $key){
                    $dataDraw[$value] = $key;
                }
            
                // Добави и полетата от таблицата SizeDrawing
                $sizeDrawing = new SizeDrawing;
                $whereSize['id'] = $drawing->id_size;
                $rowSize = $sizeDrawing->where($whereSize);
                
                // Ако имаш един единствен резултат за размера
                if ($rowSize) {
                    $dataDraw['size'] = $rowSize[0]; // Добавяш размера в основния масив
                }
                
                // Добави комбинирания масив към $drawingArr
                array_push($drawingArr, $dataDraw);
            //   show($drawingArr);
            }

            $data['drawingArr'] = $drawingArr;
            
            $count_row = count($drawingArr);
            $data['countRows'] = $count_row;
        }

        //FILTERS:
        //SQL Query for display all categories
        $drawingCategory = new Category;
        $rowCategory = $drawingCategory->findAll();
        if($rowCategory){
            $data['categories'] = $rowCategory;
        }

        //SQL Query for display all sizes
        $drawingSize = new SizeDrawing;
        $rowSize = $drawingSize->findAll();
        if($rowSize){
            $data['sizes'] = $rowSize;
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
                // Добави и полетата от таблицата SizeDrawing
                $sizeDrawing = new SizeDrawing;
                $whereSize['id'] = $data['drawing']->id_size;
                $rowSize = $sizeDrawing->where($whereSize);

                // Добави и полетата от таблицата Category
                $drawingCategory = new Category;
                $whereCategory['id'] = $data['drawing']->id_category;
                $rowCategory = $drawingCategory->where($whereCategory);

                // Ако имаш един единствен резултат за размера
                if ($rowSize) {
                    $data['size'] = $rowSize[0]; // Добавяш размера в основния масив
                }

                // Ако имаш един единствен резултат за категория
                if ($rowCategory) {
                    $data['category'] = $rowCategory[0]; // Добавяш категория в основния масив
                }

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
