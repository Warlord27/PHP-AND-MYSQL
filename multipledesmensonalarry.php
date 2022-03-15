<?php

echo "welcome multi dimensional arrays in php <hr>";
// $multiDIm = array(array(2,5,7,8),
//                     array(1,2,3,1),
//                        array(4,5,0,1));


$multiDIm = array(array(array(1,5,6,9),
                            array(8,2,7,1),
                                  array(4,6,7,8),
                                    array(4,6,7,8)));



                                        
                                        
                                        
                                        
 // creating a 2D array
 //echo var_dump($multiDIm) 
 //echo $multiDIm[0][0]; 
 //  echo $multiDIm[1][2];                   
 
 //printing the contents of a 2D array
                                                                           

// for ($i=0; $i < count($multiDIm); $i++) { 
//     echo var_dump($multiDIm);
//     echo"<hr>";
// }


// for ($i=0; $i < count($multiDIm); $i++) { 
//     for($j=0; $j <count($multiDIm[$i]); $j++ ){
//         echo $multiDIm[$i][$j];
//         echo " ";
//     }
//     echo"<hr>";
// }


for ($i=0; $i < count($multiDIm); $i++) { 
     for ($j=0; $j <count($multiDIm[$i]) ; $j++) {
         for ($k=0; $k < count($multiDIm[$i][$j]) ; $k++) {
             echo $multiDIm[$i][$j][$k];
             echo " "; 
             
         }
         echo "<hr>";
     }
}     

?>