<?php 

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\Penjual;
use App\Models\Pembeli;

class AuthController extends Controller{
	function showLogin(){
		return view('login');
	}
	function loginProcess(){
		// Level
		if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){
			$user = Auth::user();
			if($user->level == 1) return redirect('beranda/admin')->with('success', 'Selamat Datang ...');
			if($user->level == 0) return redirect('beranda/pengguna')->with('success', 'Selamat Datang ...');
		} else{
			return back()->with('danger', 'Login Gagal, Silahkan Coba Lagi');
		}
		
		// Multi Auttentikasi 1
		// $username = request('username');
		// $user = Pembeli::where('username', $username)->first();
		// if($user){
		// 	$guard = 'pembeli';
		// }else{
		// 	$user = Penjual::where('username', $username)->first();
		// 	if($user){
		// 		$guard = 'penjual';
		// 	}else{
		// 		$guard = false;
		// 	}
		// }

		// if(!$guard){
		// 	return back()->with('danger', 'Data Tidak Ditemukan Di Database !!');
		// }else{
		// 	if(Auth::guard($guard)->attempt(['username' => request('username'), 'password' => request('password')])){
		// 		return redirect("beranda/$guard")->with('success', 'Login Berhasil...');
		// 	}else{
		// 		return back()->with('danger', 'Login Gagal, Silahkan Coba Lagi');
		// 	}
		// }

		// Multi Auttentikasi
		// if(request('login_as') == 1){
		// 	if(Auth::guard('pembeli')->attempt(['username' => request('username'), 'password' => request('password')])){
		// 		return redirect('beranda/pembeli')->with('success', 'Login Berhasil...');
		// 	} else{
		// 		return back()->with('danger', 'Login Gagal, Silahkan Coba Lagi');
		// 	}
		// }else{
		// 	if(Auth::guard('penjual')->attempt(['username' => request('username'), 'password' => request('password')])){
		// 		return redirect('beranda/penjual')->with('success', 'Login Berhasil...');
		// 	} else{
		// 		return back()->with('danger', 'Login Gagal, Silahkan Coba Lagi');
		// 	}
		// }
	}
	function logout(){
		Auth::logout();
		Auth::guard('pembeli')->logout();
		Auth::guard('penjual')->logout();
		return redirect('login');
	}
	function showRegister(){
		return view('register');
	}
	function forgotPassword(){
		// return view('login');
	}
}