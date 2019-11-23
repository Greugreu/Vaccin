<?php
function clean($string)
{
    return trim(strip_tags($string));
}
function debug($error)
{
    echo "<pre>";
    print_r($error);
    echo "</pre>";
}
function textValid($value, $err, $minl, $maxl, $key, $empty = true)
{
    if (!empty($value)) {
        if (mb_strlen($value) < $minl) {
            $err[$key] = 'Minimum ' . $minl . ' caracteres';
        } elseif (mb_strlen($value) > $maxl) {
            $err[$key] = 'Minimum ' . $maxl . ' caracteres';
        }
    } else {
        if ($empty) {
            $err[$key] = 'Veuillez renseigner le champ';
        }
    }
    return $err;
}
function CleanMail($err, $mail, $key)
{
    if (!empty($mail)) {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $err[$key] = 'Email non valide';
        }
    } else {
        $err[$key] = 'Veuillez renseigner ce champ';
    }
    return $err;
}
function validateINT($err, $int, $key)
{
    if (!empty($int)) {
        if (!filter_var($int, FILTER_VALIDATE_INT)) {
            $err[$key] = 'Veuillez entrer une population valide';
        } elseif ($int <= 0) {
            $err['population'] = 'Ce champ doit être un entier positif';
        }
    } else {
        $err[$key] = 'Veuillez renseigner ce champ';
    }
    return $err;
}
function validateCountry($err, $string, $key)
{
    if (!empty($string)) {
        if (mb_strlen($string) != 3) {
            $err[$key] = 'Code pays incorrecte';
        }
    } else {
        $err[$key] = 'Veuillez renseigner ce champ';
    }
    return $err;
}
function spanErr($err, $key)
{
    if (!empty($err[$key])) {
        echo "<span class=\"error\">";
        echo $err[$key];
        echo "</span>";
    };
}
function random($arr)
{
    $rand = array_rand($arr, 1);
    echo $arr[$rand];
}
function pagination($nbPage)
{
    for ($i=1; $i<=$nbPage; $i++){
        echo " <a href=\"index.php?p=$i\">$i</a> /";
    }
}
