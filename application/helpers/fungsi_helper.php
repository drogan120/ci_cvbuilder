<?php

function aleready_login()
{

    $CI = &get_instance();
    $user_session = $CI->session->userdata('id_user');

    if ($user_session) {

        redirect('dashboard', 'refresh');
    }
}

function not_login()
{
    $CI = &get_instance();
    $user_session = $CI->session->userdata('id_user');

    if (empty($user_session)) {

        // redirect('auth', 'refresh');
    }
}
