<?php

namespace App\Controllers;
// use App\Models\BlogModel;
class Pages extends BaseController
{
    public function index()
    {
        echo view('include/header'); 
        echo view('include/sidebar');
       
        echo view('pages/home');
        echo view('include/footer');

    }
     


    // function showme($page = 'home'){
    //     // echo 'This  page is :  ' .$page;
    //     // if (! is_file(APPPATH.'/Views/pages/',$page.'.php'))
    //     // {
    //     //     // Whoops,we dont have a page for that!
    //     //     throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    //     //}
    //     echo view('include/header'); 
    //     echo view('include/sidebar');
       
    //     echo view('pages/'.$page);
    //     echo view('include/footer');
    // }

}