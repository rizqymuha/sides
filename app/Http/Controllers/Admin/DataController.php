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
            ->addColumn('action', function(User $user) {
                return '
                    <a href="' . route('admin.hamlet.user.edit', $user) .'" class="btn btn-info btn-sm">Edit</a>
                ';
            })
            ->addIndexColumn()
            ->toJson();
    }
}
