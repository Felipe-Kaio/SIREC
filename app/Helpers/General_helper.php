<?php 

function show_validation_error($field, $validation_error)
{
    if(empty($validation_error)) {
        return '';
    }
    
    if(key_exists($field, $validation_error)) {
        return '<div class="text-danger">' . $validation_error[$field] . '</div>';
    }
}

?>