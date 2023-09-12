<?php
for ($i = 33;$i <= 543;$i++){
    if (is_int($i/5) && is_int($i/9)) // checks if number is divisible by 5 and 9 simultaneously
    {
        even($i, 'web');
        continue;
    }

    if (is_int($i/9)) // checks if number is divisible by 9
    {
        even($i, 'developer');
        continue;
    }

    if (is_int($i/5)) // checks if number is divisible by 5
    {
        even($i, 'software');
        continue;
    }

    even($i, $i);
}

function even($i, $text){ //checks if the number is even and adds the corresponding text to replace

    if(is_int($i/2))
    {
        echo "<li><b>$text</b></li> \n";
    }

    else
    {
        echo "<li>$text</li> \n";
    }
}