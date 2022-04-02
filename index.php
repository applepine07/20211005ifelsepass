<?php
/* 題目
給定一個成績數字，根據成績所在的區間，給定等級
0 ~ 59 => E
60 ~ 69 => D
70 ~ 79 => C
80 ~ 89 => B
90 ~ 100 => A
*/

$score=99;

// 解一:巢狀迴圈
if($score >=90 && $score<=100){
    echo "A";
}else{
    if($score >=80 && $score <= 89){
        echo "B";
    }else{
        if($score >=70 && $score <=79){
            echo "C";
        }else{
            if($score >=60 && $score <=69){
                echo "D";
            }else{
                echo "E";
            }
        }
    }
}

echo "<hr>";

// 解二 else if
if($score >=90 && $score<=100){
    echo "A";
}else if($score >=80 && $score<=89){
    echo "B";
}else if($score >=70 && $score<=79){
    echo "C";
}else if($score >=60 && $score<=69){
    echo "D";
}else{
    echo "E";
}