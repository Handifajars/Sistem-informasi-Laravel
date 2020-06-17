<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use DB;
use App\data;
 
class DataController extends Controller
{
    //TAMPILAN USER
    //Keuangan
    function userrankkeuangan(){

        $data['data'] = data::orderBy('point','desc')->where('approved','=','1')->get();
        return view('user/devisikeuangan/useracc',$data);
    }
    function useracckeuangan(){

        $data['data'] = data::where('approved','=','1')->get();
        return view('user/devisikeuangan/useracc',$data);
    }
    function usertolakkeuangan(){

        $data['data'] = data::where('approved','=','0')->get();
        return view('user/devisikeuangan/useracc',$data);
    }
    function userallkeuangan(){

        $data['data'] = data::all();
        return view('user/devisikeuangan/useracc',$data);
    }
    //TSI
    function userranktsi(){

        $data['data'] = data::orderBy('point','desc')->where('approved','=','1')->get();
        return view('user/devisitsi/useracc',$data);
    }
    function useracctsi(){

        $data['data'] = data::where('approved','=','1')->get();
        return view('user/devisitsi/useracc',$data);
    }
    function usertolaktsi(){

        $data['data'] = data::where('approved','=','0')->get();
        return view('user/devisitsi/useracc',$data);
    }
    function useralltsi(){

        $data['data'] = data::all();
        return view('user/devisitsi/useracc',$data);
    }
    //===========================================================
   	//TAMPILAN ADMIN
    function adminapprove(){

        $data['data'] = data::where('approved','=','3')->get();
        return view('admin/adminapprove',$data);
    }
    function adminrank(){

        $data['data'] = data::orderBy('point','desc')->where('approved','=','1')->get();
        return view('admin/adminall',$data);
    }
    function adminacc(){

        $data['data'] = data::where('approved','=','1')->get();
        return view('admin/adminall',$data);
    }  
    function adminall(){

        $data['data'] = data::all();
        return view('admin/adminall',$data);
    }
    function admintolak(){

        $data['data'] = data::where('approved','=','0')->get();
        return view('admin/adminall',$data);
    }
    //----------------------------------------------------------------------------------------------
    
    //TAMPILAN SPV
    function spvaccinformasi(){

        $data['data'] = data::where('approved','=','1')->get();
        return view('spv/informasi/spvall',$data);
    }
    function spvtolakinformasi(){

        $data['data'] = data::where('approved','=','0')->get();
        return view('spv/informasi/spvall',$data);
    }
    function spvrankinformasi(){

        $data['data'] = data::orderBy('point','desc')->where('approved','=','1')->get();
        return view('spv/informasi/spvall',$data);
    }
    function spvallinformasi(){

        $data['data'] = data::all();
        return view('spv/informasi/spvall',$data);
    }  
    function spvnilaiinformasi(){

        $data['data'] = data::where('spv','=','informasi')->where('point','=','0')->get();
        return view('spv/informasi/spvnilai',$data);
    }
    function hasilinformasi($id){

        $data['data'] = data::where('id','=',$id)->get();
        return view('spv/informasi/penjumlahan',$data);
    }
    //pengembangan
    function spvaccpengembangan(){

        $data['data'] = data::where('approved','=','1')->get();
        return view('spv/pengembangan/spvall',$data);
    }
    function spvtolakpengembangan(){

        $data['data'] = data::where('approved','=','0')->get();
        return view('spv/pengembangan/spvall',$data);
    }
    function spvrankpengembangan(){

        $data['data'] = data::orderBy('point','desc')->where('approved','=','1')->get();
        return view('spv/pengembangan/spvall',$data);
    }
    function spvallpengembangan(){

        $data['data'] = data::all();
        return view('spv/pengembangan/spvall',$data);
    }  
    function spvnilaipengembangan(){

        $data['data'] = data::where('spv','=','pengembangan')->where('point','=','0')->get();
        return view('spv/pengembangan/spvnilai',$data);
    }
    function hasilpengembangan($id){

        $data['data'] = data::where('id','=',$id)->get();
        return view('spv/pengembangan/penjumlahan',$data);
    }
    //infrastruktur
    function spvaccinfrastruktur(){

        $data['data'] = data::where('approved','=','1')->get();
        return view('spv/infrastruktur/spvall',$data);
    }
    function spvtolakinfrastruktur(){

        $data['data'] = data::where('approved','=','0')->get();
        return view('spv/infrastruktur/spvall',$data);
    }
    function spvrankinfrastruktur(){

        $data['data'] = data::orderBy('point','desc')->where('approved','=','1')->get();
        return view('spv/infrastruktur/spvall',$data);
    }
    function spvallinfrastruktur(){

        $data['data'] = data::all();
        return view('spv/infrastruktur/spvall',$data);
    }  
    function spvnilaiinfrastruktur(){

        $data['data'] = data::where('spv','=','infrastruktur')->where('point','=','0')->get();
        return view('spv/infrastruktur/spvnilai',$data);
    }
    function hasilinfrastruktur($id){

        $data['data'] = data::where('id','=',$id)->get();
        return view('spv/infrastruktur/penjumlahan',$data);
    }
    //-----------------------------------------------------------------------------------------------
    
    
    //RUMSU APPROVE
    function approval(Request $request,$id){

        echo "<script>console.log('Debug Objects: " . $id . "' );</script>";
        
        $input = data::where('id',$id)->first();
        $spv = $_POST['spv'];
        $sumspv = $spv[1];
        $input->spv = $sumspv;
        $input->approved = '1';
        $input->point = '0';

        $input->save();
        return back();
    }
    function reject(Request $request,$id){

        echo "<script>console.log('Debug Objects: " . $id . "' );</script>";
        
        $input = data::where('id',$id)->first();
        $input->approved = '0';

        $input->save();
        return back();
    }
    //=========================================================================

    //PENILAIAN RUMUS SPV
    function penilaianinformasi(Request $request,$id){

        echo "<script>console.log('Debug Objects: " . $id . "' );</script>";

        $input = data::where('id',$id)->first();

        $Gie = $_POST['gie'];
  
        $sumGie = $Gie[1]+$Gie[2]+$Gie[3]+$Gie[4]+$Gie[5];
        echo 'Nilai total asli ='.$sumGie.'<br> Hasil dari function pointnya adalah ' ;
        
        $input->point = $sumGie;

        $input->save();
        return redirect('spvnilaiinformasi');
    }
    function penilaianpengembangan(Request $request,$id){

        echo "<script>console.log('Debug Objects: " . $id . "' );</script>";

        $input = data::where('id',$id)->first();

        $Gie = $_POST['gie'];
  
        $sumGie = $Gie[1]+$Gie[2]+$Gie[3]+$Gie[4]+$Gie[5];
        echo 'Nilai total asli ='.$sumGie.'<br> Hasil dari function pointnya adalah ' ;
        
        $input->point = $sumGie;

        $input->save();
        return redirect('spvnilaipengembangan');
    }
    function penilaianinfrastruktur(Request $request,$id){

        echo "<script>console.log('Debug Objects: " . $id . "' );</script>";

        $input = data::where('id',$id)->first();

        $Gie = $_POST['gie'];
  
        $sumGie = $Gie[1]+$Gie[2]+$Gie[3]+$Gie[4]+$Gie[5];
        echo 'Nilai total asli ='.$sumGie.'<br> Hasil dari function pointnya adalah ' ;
        
        $input->point = $sumGie;

        $input->save();
        return redirect('spvnilaiinfrastruktur');
    }
    //================================================================
}