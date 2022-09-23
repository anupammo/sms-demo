<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index()
    // {
    //     return view('welcome_message');
    // }

    public function index()
    {
        return view('head_blk')
        . view('home_page')
        . view('footer_blk');
    }

    public function student()
    {
        return view('head_blk')
        . view('student_page')
        . view('footer_blk');
    }

    public function addingdata()
    {
        return view('head_blk')
        . view('add_page')
        . view('footer_blk');
    }

    public function reportingdata()
    {
        return view('head_blk')
        . view('report_data')
        . view('footer_blk');
    }
}
