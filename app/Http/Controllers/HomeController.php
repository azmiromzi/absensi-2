<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $totalSiswa = User::where('is_admin', null)->count();
       $totalAdmin = User::where('is_admin', 1)->count();
       $totalKelas = Kelas::count();
    //    $totalSiswaMasuk = User::where('status_kehadiran', 'hadir')->count();
        $students = User::get();
        return view('home', compact(['totalSiswa', 'totalAdmin', 'totalKelas', 'students']));
    }
}
