<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Kelas $kelas, User $user)
    {
        $kelass = Kelas::get();
        $totalSiswa = User::where($user->kelas_id, $kelas->id)->count();

        return view('kelas.index',
            compact(['kelass', 'totalSiswa']),
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Kelas $kelas)
    {
       $validateData = $request->validate([
            'kelas' => ['required', 'min:2', 'max:10']
        ]);

        $kelas->create($validateData);

        return redirect()->route('kelas.index')->with('success', 'Account Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kela, User $user )
    {
        $users = User::where('kelas_id' , $kela->id)->get();
        return view('kelas.view', [
            'kelas' => $kela,
            'users' => $users

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kela)
    {
        return view('kelas.edit', [
            'kelas' => $kela
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kela)
    {
        $data = $request->validate([
            'kelas' => $request->kelas
        ]);

        $kela->update($data);
        return redirect()->route('kelas.index')->with('success', 'Account Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kela)
    {
        $kela->delete();

        return redirect()->route('kelas.index')->with('success', 'Account Deleted!');
    }
}
