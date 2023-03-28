function isAnagram($string1, $string2)
{
    if (strlen($string1) != strlen($string2)) {
        return false;
    }

    $array1 = count_chars(strtolower($string1));
    $array2 = count_chars(strtolower($string2));

    // Check if 
    if (!empty(array_diff_assoc($array2, $array1))) {
        return false;
    } 
    if (!empty(array_diff_assoc($array1, $array2))) {
        return false;
    } 

    return true;
}

$p = isAnagram('listen','silent');