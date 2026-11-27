<?php 

    function swap(mixed &$n1, mixed &$n2){
                $temporal = $n1;
                $n1 = $n2;
                $n2 = $temporal;
            }

            function invertirArray(array &$arr){

                for($i = 0; $i < count($arr) / 2; $i++){
                    swap($arr[$i], $arr[count($arr) - $i - 1]);
                }
            }

?>