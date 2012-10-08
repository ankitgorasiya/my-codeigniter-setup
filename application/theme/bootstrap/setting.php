<?php
/**
 * main template
 */
$layout['template'] = array(
    'region' => array(
        'top_nav' => '',
        'sidebar_nav' => '',
        'notices' => '',
        'action_buttons' => '',
        'search' => '',
    ),
    'metadata' => array(
        'css' => array(
            'plugin/bootstrap/css/bootstrap.css',
            'css/style.css',
            'css/jquery/jquery-ui.css'
            ),
        'js'=>array(
            'js/jquery.min.1.7.js',
            'js/jquery-ui.min.js',
            'plugin/bootstrap/js/bootstrap.js',
            'js/functions.js',
        )
    ),
);

/**
 * login template
 */
$layout['login'] = array(
    'region' => array(
        'header' => '',
        'notices' => '',
    ),
    'metadata' => array(
        'css' => array(
             'plugin/bootstrap/css/bootstrap.css',
             'css/style.css',
             'css/jquery/jquery-ui.css'
            ),
        'js'=>array(
            'js/jquery.min.1.7.js',
            'js/jquery-ui.min.js',
            'plugin/bootstrap/js/bootstrap.js',
            'js/functions.js',
        )
    ),
);