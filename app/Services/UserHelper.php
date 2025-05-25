<?php

if (!function_exists('filter_User')) {
    function filter_User($data) {
        if($data == 'guests'){
            $role_id = 2;
        }else if($data == 'staff'){
            $role_id = 3;
        }else if($data == 'collap'){
            $role_id = 4;
        }
        return $role_id;
    }
}
