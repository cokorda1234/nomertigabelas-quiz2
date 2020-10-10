<?php
 function hitung($string_data){
     $a = "";
     $bang = "";
     $c = 0;
     $y = "";

     for ($x = 0 ; $x < strlen($string_data);$x++){
         $b = $string_data[$x];


         if($c == 0){

         if (is_numeric($b) == true){
             $a .= $b;
             echo is_int($a);

         } else{
             $bang .= $b;
             $c = 1;
         }
         }else {
             if (is_numeric($b) == true){
                 $y .= $b;
             }

         }


     }

//     $angka1 = int($a);
//     echo $angka1;

     if ($bang == "*"){
        echo (int)$a * (int)$y;
     }
     if ($bang == "+"){
         echo (int)$a + (int)$y;
     }
     if ($bang == "%"){
         echo (int)$a % (int)$y;
     }
     if ($bang == "-"){
         echo (int)$a - (int)$y;
     }
     if ($bang == ":"){
         echo (int)$a / (int)$y;
     }


 }

 echo hitung("102*2");
 echo "<br>";
echo hitung("2+3");
echo "<br>";
echo hitung("100:25");
echo "<br>";
echo hitung("10%2");
echo "<br>";
echo hitung("99-2");