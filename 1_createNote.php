<?php

echo "Enter Article :\n";
$articleTxt = trim(fgets(STDIN));
echo "Enter Message to write :\n";
$writeStr = trim(fgets(STDIN));

if (!preg_match('/[^A-Za-z0-9]/', $articleTxt) or !preg_match('/[^A-Za-z0-9]/', $writeStr))
{
    echo "Not valid string. Only Alphabets are allowed.\n";
}

$result = canCreateNote($articleTxt, $writeStr);

if($result){
    echo "It's possible to create string from article\n";
}
else{
    echo "Can't create string from article\n";
}

exit;

function canCreateNote($articleTxt, $writeStr) {
    $articleLetters = countLetters($articleTxt);
    $writeStrLetters = countLetters($writeStr);

    foreach( $writeStrLetters as $letter => $letterCnt ) {
        if( in_array($letter,array_keys($articleLetters)) ) {
            if( $articleLetters[$letter]<$letterCnt ) {
                return false;
            }
        }
        else{
            return false;
        }
    }
    return true;
}

function countLetters($strText) {
    $stringlen = strlen($strText);
    $result = array();

    for( $i = 0; $i < $stringlen; $i++ ) {
        $chr = $strText[ $i ];
        if( $chr === ' ' ) {
            continue;
        }
        $result[ $chr ] = isset( $result[ $chr ] ) ? $result[ $chr ] + 1 : 1;
    }
    return $result;
}