<?php 

namespace App\Http\Controllers;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\Provinsi;

class UserController extends Controller{
	function index(){
		// relationship existence
		// $data['list_user'] = User::has('produk', '>=', '2')->get();
		$data['list_user'] = User::withCount('produk')->get();
		return view('admin.user.index', $data);
	}
	function create(){
		$data['list_provinsi'] = Provinsi::all();
		return view('admin.user.create', $data);
	}
	function store(UserStoreRequest $request){
		$user = new User;
		$user->nama = request('nama');
		$user->level = request('level');
		$user->username = request('username');
		$user->jenis_kelamin = request('jenis_kelamin');
		$user->email = request('email');
		$user->password = request('password');
		$user->save(); 

		$userDetail = new UserDetail;
		$userDetail->id_user = $user->id;
		$userDetail->no_hp = request('no_hp');
		$userDetail->save();

		$user->handleUpload();

		return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
	}
	function show(User $user){

		// tanpa binding findOrFail
		// $user = User::findOrFail($user);
		// eror akses
		// $loggedUser = request()->user();
		// if($loggedUser->id != $user->id) return abort(403);
		
		$data['user'] = $user;
		return view('admin.user.show', $data);
	}
	function edit(User $user){
		$data['user'] = $user;
		return view('admin.user.edit', $data);		
	}
	function update(User $user){
		$user->nama = request('nama');
		$user->level = request('level');
		$user->username = request('username');
		$user->jenis_kelamin = request('jenis_kelamin');
		$user->email = request('email');
		if(request('password')) $user->password = request('password');

		$user->handleDelete();
		$user->handleUpload();
		
		$user->save();

		// $userDetail = new UserDetail;
		// $userDetail->id_user = $user->id;
		// $userDetail->no_hp = request('no_hp');
		// $userDetail->save();

		return redirect('admin/user')->with('warning', 'Data Berhasil Diedit');	
	}
	function destroy(User $user){		
		$user->handleDelete();
		$user->delete();
		return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
	}
	function filter(){
		$nama = request('nama');
		$data['list_user'] = User::where('nama', 'like', "%$nama%")->get();
		$data['nama'] = $nama;
		return view('admin.user.index', $data);
	}
}