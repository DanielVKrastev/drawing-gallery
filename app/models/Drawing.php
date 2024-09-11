<?php

/* Drawing class */
class Drawing{
    use Model;

    protected $table = 'drawing';

    protected $allowedColumns = [
        'name',
        'size',
        'paints',
        'price',
        'description',
        'image_name',
        'sold',
        'active',
    ];

    //drawingCarousel( number row in carousel )
    //Call function: $data['carouselData'] = $drawing->drawingCarousel();
    function drawingCarousel($carousel_rows = 6){

        $drawingArr = [];
        $data = [];
        $data['countRows'] = 0;
        $drawing = new Drawing;
        

        $whereDrawing['active'] = 'yes';
        $whereDrawing['sold'] = 'no';
        $row = $drawing->where($whereDrawing);
        if($row){
            /*
            foreach($row as $drawing){
                foreach($drawing as $value => $key){
                    $dataDraw[$value] = $key;
                }
                array_push($drawingArr, $dataDraw);
            }*/
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

            if($count_row <= $carousel_rows){
                $data['countRows'] = $count_row;
            }else{
                $data['countRows'] = $carousel_rows;
            }
        }

        return $data;
    }

}