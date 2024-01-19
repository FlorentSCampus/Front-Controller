<?php
$date = date('__Y_m_d__H_i_s');
$filename = 'contact';
$filename = $filename . $date . '.txt';

$validers = array(
    'email' => FILTER_VALIDATE_EMAIL
);

$isValid = filter_input_array(INPUT_POST, $validers);

$cleaners = [];

if ($isValid) {
    $cleaners = array(
        'gender' => FILTER_DEFAULT,
        'firstName' => FILTER_SANITIZE_SPECIAL_CHARS,
        'lastName' => FILTER_SANITIZE_SPECIAL_CHARS,
        'email' => FILTER_SANITIZE_EMAIL,
        'radio' => FILTER_DEFAULT,
        'message' => FILTER_SANITIZE_SPECIAL_CHARS
    );
}

$result = filter_input_array(INPUT_POST, $cleaners);

$length = 0;

if (!empty($result)) {
    $length = count($result);
}

$isEmpty = isEmpty($result, $length);

if (!$isEmpty) {
    $data = print_r($result, true);
    file_put_contents('./data/' . $filename, $data);
}

function isEmpty($array, $length)
{
    for ($i = 0; $i < $length; $i++) {
        if (empty(array_values($array)[$i]) || strlen(array_values($array)[5]) < 5) {
            return true;
        }
    }

    return false;
}