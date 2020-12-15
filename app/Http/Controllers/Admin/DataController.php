<?php

namespace App\Http\Controllers\Admin;

use App\Hamlet;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function userHamlets()
    {
        return datatables()->of(User::query()->role('hamlet')->orderBy('name', 'ASC'))
            ->addColumn('action', function() {
                return '<a href="" class="btn btn-info btn-sm">Edit</a>';
            })
            ->addIndexColumn()
            ->toJson();
    }
}
