<?php 

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller{
	function index(){
		$data['user'] = Auth::user();
		// multi
		// if(Auth::guard('pembeli')->check()){
		// 	$data['user'] = Auth::guard('pembeli')->user();
		// }else{
		// 	$data['user'] = Auth::guard('penjual')->user();
		// }
		
		return view('setting.index', $data);
	}
	function store(){
		if(request('current')){
			// multi
			// if(Auth::guard('pembeli')->check()){
			// 	$user = Auth::guard('pembeli')->user();
			// }else{
			// 	$user = Auth::guard('penjual')->user();
			// }
			$user = Auth::user();
			$check = Hash::check(request('current'), $user->password);
			if($check){
				if(request('new') == request('confirm')){
					$user->password = request('new');
					$user->save();

					Auth::logout();
					return redirect('login')->with('success', 'Password Berhasil Diganti :)');
					// return back()->with('success', 'Password Berhasil Diganti :)');
				}else{
					return back()->with('danger', 'Password Anda Tidak Cocok !!');					
				}				
			}else{
				return back()->with('danger', 'Password Yang Anda Masukan Salah !!');
			}
		}else{
			return back()->with('danger', 'Password Anda Kosong !!');
		}
	}
}