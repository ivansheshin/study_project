<?php
function priceFormat($value) {
    return number_format($value, 0, ' ', ' ') . ' &#8381';
};
function renderTemplate($template, $data) {

    require ($template);
    foreach ($data as $value) {
        echo $value;
    };


};
