<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Alert;
use Auth;

class UserController extends Controller
{
	public function userBidang()
	{
		$data = User::where('hak_akses', '=', 'BIDANG')->get();
    	// dd($data);
		return view('pages.admin.user.user', compact('data'));
	}

	public function editUser($id)
	{
		if (Auth::user()->hak_akses == 'ADMIN') {
			$user = User::where('id', $id)->first();
		} else {
			$user = User::where('id', Auth::user()->id)->first();
		}
    	// dd($data);
		return view('pages.admin.user.edit', compact('user'));
	}

	public function simpanUser(Request $request, $id)
	{
		if($request->password == ''){
			$update = User::where('id', $id)->update([
				'nama'			=> $request->nama,
				'nip'			=> $request->nip,
				'jabatan'		=> $request->jabatan,
				'alamat'		=> $request->alamat,
			]);
		} else {
			$update = User::where('id', $id)->update([
				'nama'			=> $request->nama,
				'nip'			=> $request->nip,
				'jabatan'		=> $request->jabatan,
				'alamat'		=> $request->alamat,
				'password'		=> bcrypt($request->password)
			]);
		}

		if ($update) {
			Alert::success('Berhasil', 'Data Berhasil Diubah !!!');
			return back();
		} else {
			Alert::error('Gagal', 'Data Gagal Diubah !!!');
			return back();
		}
	}

	public function listUserBidang()
	{
		$data = User::where('hak_akses', 'BIDANG')->get();
		return view('pages.admin.user.list_bidang', compact('data'));
	}

}
