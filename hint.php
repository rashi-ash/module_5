<?php
// Array with names
$a[] = "Shoaib";
$a[] = "Mubassir";
$a[] = "Salman";
$a[] = "Safwana";
$a[] = "Adeeba";
$a[] = "Diyana";
$a[] = "Rashif";
$a[] = "Darwish";
$a[] = "Vyshakh";
$a[] = "Akhil";
$a[] = "Sulthan";
$a[] = "Hanna Sherin";
$a[] = "Ansith";
$a[] = "Shabeerali";
$a[] = "Yaser";
$a[] = "Ahalya";
$a[] = "Navas";
$a[] = "Aswin";
$a[] = "Hunaif";
$a[] = "Nishad";
$a[] = "Azeeb";
$a[] = "Jufaila";
$a[] = "Athul";
$a[] = "Shana Nasrin";
$a[] = "Rimshad";
$a[] = "saniyya";
$a[] = "Adil";
$a[] = "Naval";
$a[] = "Rahiya";
$a[] = "Fahmeeda";
$a[] = "Anisa";
$a[] = "Alfas";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
