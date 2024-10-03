<?php 
//вывод 
    
    /*$a = "5";
    $b = "57425235677";
    echo $b[1];*/
     
    //1
    /* $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    $sum = 0;
    foreach ($array as $element) {
        $sum += $element;
    }
    echo "Сумма элементов массива: $sum"; */

    //2
    /* $max = 0;
    foreach ($array as $element) {
        if ($element > $max) {
            $max = $element;
        }
    }
    echo "<br>Максимальное значение в массиве: $max"; */

    //3
    /* echo "<br>Числа, которые делятся на 3: ";
    foreach ($array as $element) {
        if ($element % 3 == 0) {
            echo $element ." ";
        }
    } */
    
    //4
    /* for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = 0; $j < count($array) - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[j +1];
                $array[$j + 1] = $temp;
            }
        }
    } 

    echo "<br>";
    print_r($array); */

    //5
    /* foreach ($array as $element) {
        if ($element = 10) {
            echo "<br>Число 10 найдено!";
            break;
        } else {
            echo "<br>Число 10 не найдено!";
            break;
        }
    } */
    //6
    /* $num1 = [];
    $num2 = [];
    foreach ($array as $element) {
        if ($element % 2 == 0 ) {
            $num1 = $element; 
        } else {
            $num2 = $element;
        }
    }

    echo "<br>Четные числа: $num1";
    echo "<br>Нечетные числа: $num2"; */
    
?>
