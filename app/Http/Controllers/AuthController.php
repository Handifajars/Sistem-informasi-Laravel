<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\devisi;
use App\data;

class AuthController extends Controller
{
    public function login()
    {
    	return view('/');
    }

	public function checkLogin(Request $Request)
	{
		$username = $Request->input('username');
        $password = $Request->input('password');
        $aktif = $Request->input('aktif');

        $check1 = DB::table('user')->where(['username'=>$username, 'password'=>$password])->get();
        $check2 = DB::table('admin')->where(['username'=>$username, 'password'=>$password])->get();
        $check3 = DB::table('spv')->where(['username'=>$username, 'password'=>$password])->get();

        if (count($check1) > 0){
            if ($username == "user") {
                $acc = data::where('approved','=','1')->get()->count();
                $count = data::count();
                $reject = data::where('approved','=','0')->get()->count();
                $informasi = data::where('spv','=','informasi')->get()->count();
                $pengembangan = data::where('spv','=','pengembangan')->get()->count();
                $infrastruktur = data::where('spv','=','infrastruktur')->get()->count();
                return view('user/devisitsi/pengaju')->with('count', $count)->with('acc',$acc)->with('reject',$reject)->with('informasi',$informasi)->with('pengembangan',$pengembangan)->with('infrastruktur',$infrastruktur);
            }
			elseif ($username == "handi") {
                $acc = data::where('approved','=','1')->get()->count();
                $count = data::count();
                $reject = data::where('approved','=','0')->get()->count();
                $informasi = data::where('spv','=','informasi')->get()->count();
                $pengembangan = data::where('spv','=','pengembangan')->get()->count();
                $infrastruktur = data::where('spv','=','infrastruktur')->get()->count();
                return View('user/devisikeuangan/pengaju')->with('count', $count)->with('acc',$acc)->with('reject',$reject)->with('informasi',$informasi)->with('pengembangan',$pengembangan)->with('infrastruktur',$infrastruktur);
            }
            else{
                return redirect('/login')->with('alert','Periksa Kembali ');
            } 
		  }
            else if (count($check2) > 0){
                $acc = data::where('approved','=','1')->get()->count();
                $count = data::count();
                $reject = data::where('approved','=','0')->get()->count();
                $informasi = data::where('spv','=','informasi')->get()->count();
                $pengembangan = data::where('spv','=','pengembangan')->get()->count();
                $infrastruktur = data::where('spv','=','infrastruktur')->get()->count();
                return View('admin/Dasboard')->with('count', $count)->with('acc',$acc)->with('reject',$reject)->with('informasi',$informasi)->with('pengembangan',$pengembangan)->with('infrastruktur',$infrastruktur);
            }
            else if (count($check3) > 0){
                if ($username == "spv informasi") {
                $acc = data::where('approved','=','1')->get()->count();
                $count = data::count();
                $reject = data::where('approved','=','0')->get()->count();
                $informasi = data::where('spv','=','informasi')->get()->count();
                $pengembangan = data::where('spv','=','pengembangan')->get()->count();
                $infrastruktur = data::where('spv','=','infrastruktur')->get()->count();
                    return View('spv/informasi/spvdasboard')->with('count', $count)->with('acc',$acc)->with('reject',$reject)->with('informasi',$informasi)->with('pengembangan',$pengembangan)->with('infrastruktur',$infrastruktur);
                    }
                elseif ($username == "spv pengembangan") {
                $acc = data::where('approved','=','1')->get()->count();
                $count = data::count();
                $reject = data::where('approved','=','0')->get()->count();
                $informasi = data::where('spv','=','informasi')->get()->count();
                $pengembangan = data::where('spv','=','pengembangan')->get()->count();
                $infrastruktur = data::where('spv','=','infrastruktur')->get()->count();
                    return View('spv/pengembangan/spvdasboard')->with('count', $count)->with('acc',$acc)->with('reject',$reject)->with('informasi',$informasi)->with('pengembangan',$pengembangan)->with('infrastruktur',$infrastruktur);
                    }
                elseif ($username == "spv infrastruktur") {
                $acc = data::where('approved','=','1')->get()->count();
                $count = data::count();
                $reject = data::where('approved','=','0')->get()->count();
                $informasi = data::where('spv','=','informasi')->get()->count();
                $pengembangan = data::where('spv','=','pengembangan')->get()->count();
                $infrastruktur = data::where('spv','=','infrastruktur')->get()->count();
                    return View('spv/infrastruktur/spvdasboard')->with('count', $count)->with('acc',$acc)->with('reject',$reject)->with('informasi',$informasi)->with('pengembangan',$pengembangan)->with('infrastruktur',$infrastruktur);
                    }
                else{
                    return redirect('/login')->with('alert','Periksa Kembali ');
                    }
            }
            else{
                return redirect('/login')->with('alert','Periksa Kembali ');
            }
    }

    public function logout()
    {
        Auth::logout();
        return view('depan/depan');
    }

}