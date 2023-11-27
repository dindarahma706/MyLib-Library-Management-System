<?php

namespace App\Http\Controllers;

use App\Http\Requests\changePasswordRequest;
use App\Models\auther;
use App\Models\book;
use App\Models\book_issue;
use App\Models\category;
use App\Models\publisher;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'authors' => auther::count(), //penulis
            'publishers' => publisher::count(), //penerbit
            'categories' => category::count(), //kategori
            'books' => book::count(), //buku
            'students' => student::count(), //akun siswa
            'issued_books' => book_issue::count(), //data peminjaman
        ]);
    }

    public function change_password_view()
    {
        return view('reset_password');
    }

    public function change_password(changePasswordRequest $request)
    {
        if (Auth::check(["username" => auth()->user()->username, "password" => $request->c_password])) {
            auth()->user()->password = bcrypt($request->password);
            return redirect()->back()->with(['message' => "Password sudah diganti!."]);
        } else {
            return "Tidak Bisa";
        }
    }
}
