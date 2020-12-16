<?php

namespace App\Http\Controllers\Admin;

use App\Hamlet;
use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class HamletUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.hamlet.index', ['title' => 'Data Pengguna Rukun Warga']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.hamlet.create', ['title' => 'Tambah Data Pengguna Rukun Warga']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->assignRole('hamlet');

        return redirect()->route('admin.hamlet.user.index')
                    ->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $hamletId = $user->profile['hamlet_id'];
        $hamlet = Hamlet::find($hamletId);
        $data = [
            'title' => 'Detail Pengguna Rukun Warga',
            'user' => $user,
            'hamlet' => $hamlet,
        ];
        return view('admin.users.hamlet.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $hamlets = Hamlet::query()->get();
        $data = [
            'title' => 'Edit Data Pengguna Rukun Warga',
            'user' => $user,
            'hamlets' => $hamlets,
        ];
        return view('admin.users.hamlet.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $profile = new Profile();

        if($user->profile == null) {
            $profile->create([
                'user_id' => $request->id,
                'phone' => $request->phone,
                'hamlet_id' => $request->hamlet_id,
            ]);
        } else {
            $profile->update([
                'user_id' => $request->id,
                'phone' => $request->phone,
                'hamlet_id' => $request->hamlet_id,
            ]);
        }

        return redirect()->route('admin.hamlet.user.index')
                    ->with('success', 'Data berhasil diedit!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->profile->delete();
        $user->delete();

        return redirect()->route('admin.hamlet.user.index')
                    ->with('success', 'Data berhasil dihapus!');;
    }
}
