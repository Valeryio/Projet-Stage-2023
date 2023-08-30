<?php

function check($value)
{
    if (isset($value))
    {
        return strip_tags(htmlspecialchars($value));
    }
    else
    {
        echo "La variable est vide!";
    }
}