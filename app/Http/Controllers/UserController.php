<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Models\User;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
            
        // $user=User::all();
        $user=User::where('role', 'User')->get();
        return view('admin.user.index',[
            'user'=> $user,
            'active' => 'user',]);
    }
    public function view($id_user)
    { $user = User::find($id_user);
        $user=User::with('instansi')->find($id_user);
        return view('admin.user.view-detail',[
                'active' => 'user',
                'user'=> $user
            ]);
    }

    // public function view($id_user)
    // {
    //     $user = User::find($id_user);
    
    //     return view('admin.user.view-detail', [
    //                     'active' => 'user',
    //                     'notifikasi'=> $user
    //     ]);
    // }
    
    
    
    public function delete(Request $request, $id_user) {
        if(User::destroy($id_user)) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Pelukis Berhasil Dihapus');
        } else {
            $request->session()->flash('status', 'error');
            $request->session()->flash('message', 'Pelukis Gagal Dihapus');
        }
        return redirect('/admin/user');
    }

}
