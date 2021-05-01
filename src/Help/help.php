<?php

namespace Help;

class Help
{
    public static function textInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }
    
    }