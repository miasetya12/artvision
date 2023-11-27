<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Instansi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    public function showRegister() {
        $data_instansi = Instansi::all();
        return view('auth/register', [
            'data_instansi' => $data_instansi
        ]);
    }

    // fungsi yang mengatur registrasi
    public function register(Request $request) {
        $email = User::where('email_user', '=', $request->email)->first();
        
        if(isset($email) && $email !== '') {
            $request->session()->flash('status', 'error');
            $request->session()->flash('message', 'Email sudah digunakan');
            return back()->withInput(
                $request->except('password')
            );
        }

        if(User::create([
            'id_instansi' => $request->instansi,
            'nama_lengkap_user' => $request->nama_lengkap,
            'nama_panggilan_user' => $request->nama_panggilan,
            'telp_user' => $request->nomor_telepon,
            'alamat_user' => $request->alamat,
            'deskripsi_diri' => $request->deskripsi_diri,
            'email_user' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user'
        ])) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Registrasi Sukses');
        } else {
            $request->session()->flash('status', 'error');
            $request->session()->flash('message', 'Registrasi Gagal');
            return back()->withInput(
                $request->except('password')
            );
        }
        return back();
    }

    // fungsi yang mengatur login
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $email = $request->email;
        $password = $request->password;
        
        if (Auth::guard('user')->attempt(['email_user' => $email, 'password' => $password])) {
            $request->session()->regenerate();
            $details = Auth::guard('user')->user();

            if($details->role == "Admin") {
                session()->put('id', $details->id_user);
                session()->put('uName', $details->nama_panggilan_user);
                $request->session()->flash('status', 'success');
                $request->session()->flash('message', 'Login Berhasil');
                return redirect()->intended('admin/');
            } else if($details->role == "User") {
                session()->put('id', $details->id_user);
                session()->put('uName', $details->nama_panggilan_user);
                $request->session()->flash('status', 'success');
                $request->session()->flash('message', 'Login Berhasil');
                return redirect()->intended('/');
            }
            return $details;
        }

        $request->session()->flash('status', 'error');
        $request->session()->flash('message', 'Login Gagal');
        return back()->withInput(
            $request->except('password')
        );
    }
}
