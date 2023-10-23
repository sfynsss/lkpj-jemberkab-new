<?php

namespace App\Http\Controllers\LKPJ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\StsUpdate;

class SettingLKPJController extends Controller
{
    public function verifBab3()
    {
        $data = StsUpdate::where('id', 3)->pluck('kode_sts')->first();
        return view('pages.setting.verif_bab_3', compact('data'));
    }

    public function updateVerifBab3(Request $request)
    {
        $update = StsUpdate::where('id', 3)->update([
            'kode_sts'  => $request->kode_sts
        ]);
        return redirect()->route('setting-bab3')->with('success', 'Pengaturan berhasil diubah');
    }
}
