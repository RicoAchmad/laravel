<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// Route Basic
Route::get('tentang', function () {
    return "<h1>hello</h1>" . "Selamat datang di web app saya<br>" . "Laravel emang keren";
});

//

Route::get('saya', function () {
    $mamat = "Rico ";
    return view('profile', compact('mamat'));
});

Route::get('ruslan', function () {
    $nama = "Ruslan";
    $tinggi = 170;
    $jeniskelamin = "Laki-Laki";
    $agama = "Islam";
    $berat = "50 KG";
    return view('hehey', compact('nama', 'tinggi', 'jeniskelamin', 'agama', 'berat'));
});

Route::get('sultan', function () {
    $nama = "Sultan";
    $tinggi = 171;
    $jeniskelamin = "Laki-Laki";
    $agama = "Islam";
    $berat = "45 KG";
    return view('hehe', compact('nama', 'tinggi', 'jeniskelamin', 'agama', 'berat'));
});

Route::get('sayApip', function () {
    $nama = "Rizky Say";
    $tinggi = 173;
    $jeniskelamin = "Laki-Laki";
    $agama = "Islam";
    $berat = "47 KG";
    return view('hooh', compact('nama', 'tinggi', 'jeniskelamin', 'agama', 'berat'));
});

Route::get('nurahman', function () {
    $nama = "Rizky Nurahman";
    $tinggi = 167;
    $jeniskelamin = "Laki-Laki";
    $agama = "Islam";
    $berat = "43 KG";
    return view('hihi', compact('nama', 'tinggi', 'jeniskelamin', 'agama', 'berat'));
});

Route::get('wildan', function () {
    $nama = "Wildan";
    $tinggi = 173;
    $jeniskelamin = "Laki-Laki";
    $agama = "Islam";
    $berat = "48 KG";
    return view('haha', compact('nama', 'tinggi', 'jeniskelamin', 'agama', 'berat'));
});

Route::get('posting/{id}', function ($a) {
    return "halaman posting ke - <b>$a</b>";
});

Route::get('biodata/{nama?}/{alamat?}/{jk?}/{tb?}/{bb?}', function ($nama = null, $alamat = null, $jk = null, $tb = null, $bb = null) {
    return view('bio', compact('nama', 'alamat', 'jk', 'tb', 'bb'));
});

Route::get('testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});

Route::get('testmodel/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    return $query;
});

Route::get('testmodel-cari/{search}', function ($s) {
    $query = App\Models\Post::where('title', 'like', "%$s%")->get();
    return $query;
});

Route::get('testmodel-update', function () {
    $query = App\Models\Post::find(2);
    $query->title = "Bane Si Bajak Laut";
    $query->save();
    return $query;
});

Route::get('testmodel-add', function () {
    $query = new App\Models\Post();
    $query->title = "Sholawat Penghapus Maksiat";
    $query->content = "Lorem Ipsum";
    $query->save();
    return $query;
});

Route::get('testmodel-delete/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    $query->delete;
    return redirect('/testmodel');
});

Route::get('model-barang', function () {
    $query = App\Models\barang::all();
    return $query;
});

Route::get('model-pembeli', function () {
    $query = App\Models\pembeli::all();
    return $query;
});

Route::get('model-pembelian', function () {
    $query = App\Models\pembelian::all();
    return $query;
});

Route::get('model-suplier', function () {
    $query = App\Models\suplier::all();
    return $query;
});

Route::get('model-pesanan', function () {
    $query = App\Models\pesanan::all();
    return $query;
});

Route::get('data-siswa', [MyController::class, 'index']
);

Route::get('posts', [MyController::class, 'posting']
);

Route::get('pembelian/{}', [MyController::class, 'pembelian']
);

Route::get('singlepembelian/{id}', [MyController::class, 'pembelian']);
