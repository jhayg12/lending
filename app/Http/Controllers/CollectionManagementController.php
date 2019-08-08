<?php
namespace Laraspace\Http\Controllers;

class CollectionManagementController extends Controller
{
    public function index() 
    {
        return view('admin.pages.collection-management.case');
    }

}
