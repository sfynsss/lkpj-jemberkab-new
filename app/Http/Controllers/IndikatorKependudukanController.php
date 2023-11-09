<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IndikatorKependudukan;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class IndikatorKependudukanController extends Controller
{
    public function index()
    {
        $data = IndikatorKependudukan::all();
        return view('pages.indikator_kependudukan.index', compact('data'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'th_2017' => 'numeric|min:0',
            'th_2018' => 'numeric|min:0',
            'th_2019' => 'numeric|min:0',
            'th_2020' => 'numeric|min:0',
            'th_2021' => 'numeric|min:0',
            'th_2022' => 'numeric|min:0',
            'th_2023' => 'numeric|min:0',
            'th_2024' => 'numeric|min:0',
            'th_2025' => 'numeric|min:0',
            'th_2026' => 'numeric|min:0',
        ]);
 
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorMessages = implode('<br>', $errors);
            toast($errorMessages, 'error');
            return redirect()->route('indikator-kependudukan');
        }

        $data = IndikatorKependudukan::findOrFail($request->id_indikator);
        $data->update([
            'th_2017'       => $request->th_2017,
            'th_2018'       => $request->th_2018,
            'th_2019'       => $request->th_2019,
            'th_2020'       => $request->th_2020,
            'th_2021'       => $request->th_2021,
            'th_2022'       => $request->th_2022,
            'th_2023'       => $request->th_2023,
            'updated_at'    => Carbon::now(),
        ]);
        toast('Data berhasil diperbaharui', 'success');
        return redirect()->route('indikator-kependudukan');
    }
}
