<?php 
header('Content-Type: text/html; charset=utf-8');


function GetSoundexResult($name){

    $str = "";

    //$name = utf8_encode ($name);
    //Convert string to upper-case.                
    //Remove blank spaces.
    mb_internal_encoding("UTF-8");
    $str = mb_strtoupper($name);
    //echo $str;
    $str = str_replace(' ','',$str);
    //$str = utf8_encode($str);
    //echo "<br>".$str;

    //Check if the surname contains any of the following prefixes.
    //Remove prefixes MAC, MACAN, MACGIOLLA, Ó, DE, MAG, NÍ, UÍ, etc.
    $list = array("MACGIOLLA", "MACAN", "MAC", "ÓH", "DE", "MAG", "NÍCAN", "UÍ", "O'", "O", "Ó", "M'", "MC", "NÍC", "NÍ");

    $str = str_replace($list, "", $str);
    //echo $str."<br>";

    //Remember the First character of the name
    $firstLetter = $str[0];
    if($firstLetter == "C"){
        $firstLetter = "K";
    }
    //echo $firstLetter."<br>";
    
    $firstLetter = accents($firstLetter);
    

    //Remove double letters
    $str = preg_replace('{(.)\1+}','$1',$str);
    //echo $str;

//If 'AIGH' or 'IGH' is in the surname... then remove.
    $sylableRemover = array("AIGH", "IGH");
    $str = str_replace($sylableRemover, "", $str);

    

    $pronToBeRemoved = array("GH", "BH", "CH", "DH", "TH", "MH");
    $str = str_replace($pronToBeRemoved, "", $str);

    $vowlesToBeRemoved = array("A", "Á", "E", "É", "I", "Í", "O", "Ó", "U", "Ú", "H", "J", "Q", "V", "W", "X", "Y", "Z");
    $str = str_replace($vowlesToBeRemoved, "", $str);

    $text = "";
    for($i = 1; $i < strlen($str); $i++){
        $letter = $str[$i];
        if(in_array($letter, $vowlesToBeRemoved) && $i==1 ){
            $text .= $letter;
        }

        elseif(!in_array($letter, $vowlesToBeRemoved)){
            $text .= $letter;
        }
    }
    //echo "<br>".$text;

    $soundexCode = "";
    $arr = str_split($text);

    for($i = 0; $i< count($arr); $i++){
        //$char = charat($str, $i);
        $char = $arr[$i];
        if($i >=0){
            //echo "Check result";
            //echo $char;
            if($char == "B" || $char == "F" || $char == "P"){
                $soundexCode .= "1";
            }
            elseif($char == "C" || $char == "S" || $char == "G"){
                $soundexCode .= "2";
            }
            elseif($char == "D" || $char == "T"){
                $soundexCode .= "3";
            }
            elseif($char == "L"){
                $soundexCode .= "4";
            }
            elseif($char == "M" || $char == "N"){
                $soundexCode .= "5";
            }
            elseif($char == "R"){
                $soundexCode .= "6";
            }
        }
    }

    $soundexCode = $firstLetter.$soundexCode;
    if(strlen($soundexCode) < 4 ){
        $soundexCode .= "0000";
    }

    //If the surname produces a value greater than 4, the value stops at the fourth value.
    if(strlen($soundexCode) > 4){
        $soundexCode = substr($soundexCode, 0, 4);
    }
    //echo $soundexCode;
    return $soundexCode;

}

function accents($text) {

    return str_replace(
        array ('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú'),
        array ('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'),
        $text)
        ;
    }
/*
//GetSoundexResult("Dallan");
GetSoundexResult("ÓHiggins");
echo "<br>";
GetSoundexResult("Ócoilóg");
//GetSoundexResult("Coilóg");
//GetSoundexResult("ha");
getSX("ÓBroin");

function getSX($name){
    echo soundex($name);
}*/
//GetSoundexResult("cunningham");
echo "<br><br>";
?>