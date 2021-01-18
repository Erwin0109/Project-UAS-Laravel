<?php 

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Provinsi;

class HomeController extends Controller{
	function showBeranda(){
		$data['list_provinsi'] = Provinsi::all();
		return view('admin.beranda', $data);
	}
	function showHome(){
		$list_kategori = Kategori::all();
		$data['list_kategori'] = Kategori::simplePaginate(10);
		return view('client.home', $data);
	}
	function showProdukDetail(Produk $produk){
		$data['produk'] = $produk;
		// $list_produk = Produk::all();
		// $list_kategori = Kategori::all();
		// $data['list_kategori'] = Kategori::simplePaginate(1);
		// $data['list_produk'] = Produk::simplePaginate(1);
		return view('client.produk_detail', $data);
	}
	function showProduk(){
		$list_produk = Produk::all();
		$list_kategori = Kategori::all();
		$data['list_kategori'] = Kategori::all();
		$data['list_produk'] = Produk::simplePaginate(7);
		return view('client.produk', $data);
	}
	public function testCollection(){
		$list_bike = ['Honda', 'Yamaha', 'Kawasaki'];
		$list_bike = collect($list_bike);
		$list_produk = Produk::all();
		
		$data['list'] = Produk::paginate(3);
		return view('test-collection', $data);

		dd($list_bike, $list_produk);
	}

	public function testAjax(){
		$data['list_provinsi'] = Provinsi::all();
		return view('test-ajax', $data);
	}
}


		// Sorting Harga Terendah
		// dd($list_produk->sortBy('harga'));
		// Sorting Harga Tertinggi
		// dd($list_produk->sortByDesc('harga'));
		// $data['list'] = $list_produk;
		// return view('test-collection', $data);

		// map
		// $map = $list_produk->map(function($item){
		// 	// return $item->nama;
		// 	$result['nama'] = $item->nama;
		// 	$result['harga'] = $item->harga;
		// 	return $result;
		// });

		// each
		// $list_produk->each(function($item){
		// 	echo "$item->nama<br>";
		// });

		// filter
		// $filtered = $list_produk->filter(function($item){
		// 	return $item->harga < 100000;
		// });
		// dd($filtered);

		// $sum = $list_produk->max('stock');
		// dd($sum);