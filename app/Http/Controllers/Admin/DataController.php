<?php

namespace App\Http\Controllers\Admin;

use App\Hamlet;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function hamletUsers()
    {
        return datatables()->of(User::query()->role('hamlet')->orderBy('name', 'ASC'))
            ->addColumn('action', 'admin.users.hamlet.action')
            ->addColumn('hamlet', function(User $user) {
                $hamletId = $user->profile['hamlet_id'];
                $hamlet = Hamlet::find($hamletId);
                return $hamlet['number'];
            })
            ->addIndexColumn()
            ->toJson();
    }
}
