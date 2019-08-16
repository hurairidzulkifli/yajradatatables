<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Datatables;
use App\DataTables\UsersDataTables; 

class UsersController extends Controller
{
    public function index()
    {
        return view('users.users');
    }

    public function userList()
    {
        $users = DB::table('users')->select('*');
        return datatables()->of($users)
            ->make(true);

            return $dataTable->render('users.users');
    }

    
}
