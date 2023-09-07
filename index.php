<?php
for ($i = 33;$i <= 543;$i++){
    if (is_int($i/5) && is_int($i/9)) // checkt of een deling van 9 en 5 mogelijk is
    {
        if (is_int($i/2)) //checkt of deze even is en dus bold moet worden
        {
            echo "<li><b>web</b></li> \n";
        }
        else{
            echo "<li>web</li>\n";
        }
        continue;
    }

    if (is_int($i/9)) // checkt of een deling van 9 mogelijk is
    {
        if (is_int($i/2)) //checkt of deze even is en dus bold moet worden
        {
            echo "<li><b>developer</b></li> \n";
        }
        else{
            echo "<li>developer</li>\n";
        }
        continue;
    }


    if (is_int($i/5)) // checkt of een deling van 5 mogelijk is
    {
        echo "<li><b>software</b></li>\n";
        continue;
    }

    if (is_int($i/2)) //checkt of deze even is en dus bold moet worden
    {
        echo "<li><b>$i</b></li> \n";
    }
    else{
        echo "<li>$i</li> \n";
    }

}
