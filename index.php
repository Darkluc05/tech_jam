<?php
for ($i = 33;$i <= 543;$i++){
    if (is_int($i/5) && is_int($i/9)) // checkt of een deling van 9 en 5 mogelijk is
    {
        even($i, "web");
        continue;
    }

    if (is_int($i/9)) // checkt of een deling van 9 mogelijk is
    {
        even($i, "developer");
        continue;
    }


    if (is_int($i/5)) // checkt of een deling van 5 mogelijk is
    {
        echo "<li><b>software</b></li>\n";
        continue;
    }
    even($i, $i);
}
function even($i, $text){
    if(is_int($i/2)){
        echo "<li><b>$text</b></li> \n";
    }
    else{
        echo "<li>$text</li> \n";
    }
}