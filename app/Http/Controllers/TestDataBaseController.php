<?php

namespace App\Http\Controllers;
use App\Models\TestDataBase;


use Illuminate\Http\Request;

class TestDataBaseController extends Controller
{
    public function getAllUser()
    {
        $users = TestDataBase::all(); 
        return response()->json($users);
    }
}
