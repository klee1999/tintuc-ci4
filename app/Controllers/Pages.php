<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        echo 'Hello World';
    }

    function showme($page = 'home'){
        //echo 'This  page is :  ' .$page;
        // if (! is_file(APPPATH.'/Views/pages/',$page.'.php'))
        // {
        //     // Whoops,we dont have a page for that!
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        // }
        echo view('include/header'); 
        echo view('include/sidebar');
       
        echo view('pages/'.$page);
        echo view('include/footer');
    }

}
