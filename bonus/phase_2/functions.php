<?php
    // -- Exo 1
    /**
     * @param $class
     * @return bool
     */
    function checkClass($class) {
        if(preg_match("`Foo|User|Country`i",get_class($class)))//si contien l'une des class retourne true
        {
                return true;
        }else{
                return false;
        }
    }

    // -- Exo 2
    /**
     * @param $word
     * @return bool
     */
    function checkAnagramme($word) {
        $word1 = strtolower($word);// on met en minuscule 
        $word2 = "ravie";
        if(count_chars($word1,1) == count_chars($word2,1)) //si ya occurence on retourne true
        {
            return true;
        }else{
            return false;
        }

    }

    // -- Exo 4
    /**
     * @param $word
     * @return bool
     */
    function checkPalindrome($word) {
        $word1 = strtolower($word);
        $inverse = strrev($word1); //inverse le mot
        if($word1 == $inverse){//si egal on retourne true
            return true;
        }else{
            return false;
        }
        
    }

    // -- Exo 5
    /**
     * @param $word
     * @return string
     */
    function checkBlackBox($word) {
        $word1 = strtolower($word);//je met toujours tout en minuscule au cas où
            $arr = array("a" => "b",
                         "b" => "c",
                         "c" => "d",
                         "d" => "e",
                         "e" => "f",
                         "f" => "g",
                         "g" => "h",
                         "h" => "i",
                         "i" => "j",
                         "j" => "k",
                         "k" => "l",
                         "l" => "m",
                         "m" => "n",
                         "n" => "o",
                         "o" => "p",
                         "p" => "q",
                         "q" => "r",
                         "r" => "s",
                         "s" => "t",
                         "t" => "u",
                         "u" => "v",
                         "v" => "w",
                         "w" => "x",
                         "x" => "y",
                         "y" => "z",
                         "z" => "a",
                         "3" => "21",
                         "6" => "42",
                         "9"=> "63",
                         "41" => "287"
                        );// on change les valeurs par un array

                        $retour = strtr($word,$arr);// on fait le remplacement sur word
        $retour = preg_replace( "/[^A-Za-z0-9]+/", "a", $retour );// maintenant tout ce qui n'est pas alphanumérique on le remplace
        return $retour;

    }