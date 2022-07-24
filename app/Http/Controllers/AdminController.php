<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::where('is_admin', 1)->with('kelas')->get();
        return view('admin.index', compact(['admins']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Kelas $kelas)
    {
        $kelas = Kelas::with('user')->get();
        return view('admin.create', compact(['kelas']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->validated();

        User::create($data);

        return redirect()->route('admin.index')->with('success', 'admin created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.show', [
            'admin' => User::findOrfail($id)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        return view('admin.edit', [
            'admin' => $admin

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $admin)
    {
        // $data = $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8',],
        //     'nik' => ['nullable', 'integer', 'min:8'],
        //     'kelas_id' => ['nullable', 'integer']
        // ]);
        $update = $request->validated();

        if ($request->filled('password')) {
            $update['password'] = $request->password;
        }

        $admin->update($update);

        // $admin->update($data);


        return redirect()->route('admin.index')->with('success', 'Updated Success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'delete success');
    }
}
