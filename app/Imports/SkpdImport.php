<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Skpd;

class SkpdImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
    	foreach ($collection as $i => $value) {
    		if ($i > 0) {
    			$insert = Skpd::insert([
    				'kode_skpd'			=> $value[0],
    				'nama_skpd'			=> $value[1]
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
