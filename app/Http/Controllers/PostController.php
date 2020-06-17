<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class PostController extends Controller {
public function inserttsi(){
return view('user/devisitsi/formpengajuan');
} 
public function insertkeuangan(){
return view('user/devisikeuangan/formpengajuan');
} 


public function insert(Request $request){
$data = $_POST['pengajuan'];
$pengajuan = $data[1];
$keterangan= $request->input('keterangan');
$fungsikebutuhan= $request->input('fungsikebutuhan');
$divisi= $request->input('divisi');
$time= date('d-m-Y-H:i:s');




$data= array('kebutuhan'=>$pengajuan,'keterangan'=>$keterangan,'fungsikebutuhan'=>$fungsikebutuhan,'divisi'=>$divisi,'id'=>$time,'waktu'=>$time,'approved'=>'3','point'=>'0');
DB::table('data_pengajuan')->insert($data);

return view('user/devisitsi/pengaju');

}

       // public function test(){
      // $user=DB::select('select * from input');
      // var_dump($user);
      // // return view('welcome',compact('user'));
    // }

}
