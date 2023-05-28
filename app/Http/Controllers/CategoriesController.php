<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function _construct(){

    }

    public function index(){
          return view('clients/categories/list');
    }

    public function getCategory($id){
     return view('clients/categories/edit');
    }

    public function updateCategory($id){
        return 'Hanh dong submit sua chuyen muc: '.$id;
    }
    public function addCategory(){
        return view('clients/categories/add');
    }

    public function handleAddCategory(){
        return 'Submit them chuyen muc';
    }

    public function deleteCategory($id){
        return 'Submit xoa chuyen muc';
    }
}
