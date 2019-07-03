<?php

function hello($name)
{

    if ($name == "Саша")
    {
        echo "Привет, ".$name ;
    }
    else
    {
        echo "Вы кто такие? Я ВАС НЕ ЗВАЛ!!!!";
    }
}


function pifagor($str,$stlb)
{

    echo "\n\n<table>";
    for ($i=1;$i<=$str;$i++)
    {

        echo "\n\t<tr>";
            for ($k=1;$k<=$stlb;$k++)
            {
                $td = ($i==1)?$k:$i*$k;
                echo "\n\t\t<td>$td</td>";
            }
        echo "\n\t</tr>";
    }

    echo "\n</table>";
}

























