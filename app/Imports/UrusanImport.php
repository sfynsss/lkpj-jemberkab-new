<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Urusan;

class UrusanImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
    	foreach ($collection as $i => $value) {
    		if ($i > 0) {
    		// print_r($value[0]);
    		// print_r($value[1]);
    			$insert = Urusan::insert([
    				'kode_urusan'			=> $value[0]."",
    				'nama_urusan'			=> $value[1].""
    			]);
    		}
    	}

    	if ($insert) {
    		return true;
    	} else {
    		return false;
    	}
    }
}
