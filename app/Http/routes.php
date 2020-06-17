<?php
use App\data;
use App\devisi;
//TAMPILAN AWAL
Route::post('/dasboard', 'AuthController@CheckLogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/', function () {
    return view('depan/depan');
});
//============================================================
//kembali ke dashboard admin,spv,dan user
Route::get('/admin', function () {
    $acc = data::where('approved','=','1')->get()->count();
    $count = data::count();
    $reject = data::where('approved','=','0')->get()->count();
    $informasi = data::where('spv','=','informasi')->get()->count();
    $pengembangan = data::where('spv','=','pengembangan')->get()->count();
    $infrastruktur = data::where('spv','=','infrastruktur')->get()->count();
    return View('admin/Dasboard')->with('count', $count)->with('acc',$acc)->with('reject',$reject)->with('informasi',$informasi)->with('pengembangan',$pengembangan)->with('infrastruktur',$infrastruktur);
});
//spv
Route::get('/spvinformasi', function () {
    $acc = data::where('approved','=','1')->get()->count();
    $count = data::count();
    $reject = data::where('approved','=','0')->get()->count();
    $informasi = data::where('spv','=','informasi')->get()->count();
    $pengembangan = data::where('spv','=','pengembangan')->get()->count();
    $infrastruktur = data::where('spv','=','infrastruktur')->get()->count();
    return View('spv/informasi/spvdasboard')->with('count', $count)->with('acc',$acc)->with('reject',$reject)->with('informasi',$informasi)->with('pengembangan',$pengembangan)->with('infrastruktur',$infrastruktur);
});
Route::get('/spvpengembangan', function () {
    $acc = data::where('approved','=','1')->get()->count();
    $count = data::count();
    $reject = data::where('approved','=','0')->get()->count();
    $informasi = data::where('spv','=','informasi')->get()->count();
    $pengembangan = data::where('spv','=','pengembangan')->get()->count();
    $infrastruktur = data::where('spv','=','infrastruktur')->get()->count();
    return View('spv/pengembangan/spvdasboard')->with('count', $count)->with('acc',$acc)->with('reject',$reject)->with('informasi',$informasi)->with('pengembangan',$pengembangan)->with('infrastruktur',$infrastruktur);
});
Route::get('/spvinfrastruktur', function () {
    $acc = data::where('approved','=','1')->get()->count();
    $count = data::count();
    $reject = data::where('approved','=','0')->get()->count();
    $informasi = data::where('spv','=','informasi')->get()->count();
    $pengembangan = data::where('spv','=','pengembangan')->get()->count();
    $infrastruktur = data::where('spv','=','infrastruktur')->get()->count();
    return View('spv/infrastruktur/spvdasboard')->with('count', $count)->with('acc',$acc)->with('reject',$reject)->with('informasi',$informasi)->with('pengembangan',$pengembangan)->with('infrastruktur',$infrastruktur);
});
//user
Route::get('/usertsi', function () {
	$acc = data::where('approved','=','1')->get()->count();
    $count = data::count();
    $reject = data::where('approved','=','0')->get()->count();
    $informasi = data::where('spv','=','informasi')->get()->count();
    $pengembangan = data::where('spv','=','pengembangan')->get()->count();
    $infrastruktur = data::where('spv','=','infrastruktur')->get()->count();
    return view('user/devisitsi/pengaju')->with('count', $count)->with('acc',$acc)->with('reject',$reject)->with('informasi',$informasi)->with('pengembangan',$pengembangan)->with('infrastruktur',$infrastruktur);
});
Route::get('/userkeuangan', function () {
	$acc = data::where('approved','=','1')->get()->count();
    $count = data::count();
    $reject = data::where('approved','=','0')->get()->count();
    $informasi = data::where('spv','=','informasi')->get()->count();
    $pengembangan = data::where('spv','=','pengembangan')->get()->count();
    $infrastruktur = data::where('spv','=','infrastruktur')->get()->count();
    return View('user/devisikeuangan/pengaju')->with('count', $count)->with('acc',$acc)->with('reject',$reject)->with('informasi',$informasi)->with('pengembangan',$pengembangan)->with('infrastruktur',$infrastruktur);
});
//---------------------------------------------------------
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/nilai', function () {
    return view('spv/informasi/nilai');
});
//FUNGSI USER
Route::post('/input','PostController@insert');
//devisikeuangan
Route::resource('insertkeuangan','PostController@insertkeuangan');
Route::resource('userrankkeuangan','DataController@userrankkeuangan');
Route::resource('useracckeuangan','DataController@useracckeuangan');
Route::resource('usertolakkeuangan','DataController@usertolakkeuangan');
Route::resource('userallkeuangan','DataController@userallkeuangan');
//devisitsi
Route::resource('inserttsi','PostController@inserttsi');
Route::resource('userranktsi','DataController@userranktsi');
Route::resource('useracctsi','DataController@useracctsi');
Route::resource('usertolaktsi','DataController@usertolaktsi');
Route::resource('useralltsi','DataController@useralltsi');
//===================================================================

//FUNGSI LOGIN
Route::get('/login', function () {
    return view('login');
});

//=================================================================

//FUNGSI ADMIN

Route::get('cari','DataController@cari');

Route::post('/acc/{id}','DataController@approval');
Route::post('/reject/{id}','DataController@reject');
Route::resource('adminacc','DataController@adminacc');
Route::resource('adminrank','DataController@adminrank');
Route::resource('adminapprove','DataController@adminapprove');
Route::resource('admintolak','DataController@admintolak');
Route::resource('adminall','DataController@adminall');
//===============================================================

//FUNGSI SPV


//informasi
Route::post('/yoiinformasi/{id}','DataController@penilaianinformasi');
Route::resource('spvrankinformasi','DataController@spvrankinformasi');
Route::resource('spvaccinformasi','DataController@spvaccinformasi');
Route::resource('spvtolakinformasi','DataController@spvtolakinformasi');
Route::resource('spvallinformasi','DataController@spvallinformasi');
Route::resource('spvnilaiinformasi','DataController@spvnilaiinformasi');
Route::post('hasilinformasi/{id}','DataController@hasilinformasi');
//pengembangan
Route::post('/yoipengembangan/{id}','DataController@penilaianpengembangan');
Route::resource('spvrankpengembangan','DataController@spvrankpengembangan');
Route::resource('spvaccpengembangan','DataController@spvaccpengembangan');
Route::resource('spvtolakpengembangan','DataController@spvtolakpengembangan');
Route::resource('spvallpengembangan','DataController@spvallpengembangan');
Route::resource('spvnilaipengembangan','DataController@spvnilaipengembangan');
Route::post('hasilpengembangan/{id}','DataController@hasilpengembangan');
//infrastruktur
Route::post('/yoiinfrastruktur/{id}','DataController@penilaianinfrastruktur');
Route::resource('spvrankinfrastruktur','DataController@spvrankinfrastruktur');
Route::resource('spvaccinfrastruktur','DataController@spvaccinfrastruktur');
Route::resource('spvtolakinfrastruktur','DataController@spvtolakinfrastruktur');
Route::resource('spvallinfrastruktur','DataController@spvallinfrastruktur');
Route::resource('spvnilaiinfrastruktur','DataController@spvnilaiinfrastruktur');
Route::post('hasilinfrastruktur/{id}','DataController@hasilinfrastruktur');
//==============================================================
// Route::resource('dataakhir','DataController@index');






