<?php
$date = date("__Y_m_d__H_i_s");
$filename = "contact";
$filename = $filename . $date . ".txt";

$isValid = array(
    "email" => FILTER_VALIDATE_EMAIL
);

if ($isValid) {
    $filters = array(
        "gender" => FILTER_DEFAULT,
        "firstName" => FILTER_SANITIZE_SPECIAL_CHARS,
        "lastName" => FILTER_SANITIZE_SPECIAL_CHARS,
        "email" => FILTER_SANITIZE_EMAIL,
        "radio" => FILTER_DEFAULT,
        "message" => FILTER_SANITIZE_SPECIAL_CHARS
    );
}

$result = filter_input_array(INPUT_POST, $filters);
$length = count($result);

$data = print_r($result, true);

$isEmpty = isEmpty($result, $length);

if (!$isEmpty) {
    file_put_contents("./data/" . $filename, $data);
}

function isEmpty($array, $length)
{
    for ($i = 0; $i < $length; $i++) {
        if (empty(array_values($array)[$i])) {
            return true;
        }
    }

    return false;
}
