<?php
namespace Laraspace\Http\Controllers;

class ApplicationManagementController extends Controller
{
    public function index() 
    {
        return view('admin.pages.application-management.apply');
    }

    public function component() 
    {
        return view('admin.pages.application-management.component');
    }

}
