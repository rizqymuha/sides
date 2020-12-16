<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function hamletUsers()
    {
        return datatables()->of(User::query()->role('hamlet')->orderBy('name', 'ASC'))
            ->addIndexColumn()
            ->toJson();
    }
}
