<?php

namespace App\Controllers;

class Pages extends BaseController
{

    function post($slug){
       
        echo view('include/header'); 
        echo view('include/sidebar');
       
        echo view('blog/post');
        echo view('include/footer');
    }

}