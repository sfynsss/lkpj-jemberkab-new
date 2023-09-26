<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Program;

class ProgramImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
    	foreach ($collection as $i => $value) {
    		$insert = Program::insert([
    			'id_bidang_urusan'			=> $value[1],
    			'skpd_id'					=> $value[2],
    			'kode_program'				=> $value[3],
    			'nama_program'				=> $value[4],
    			'tolok_ukur_program'		=> $value[5],
    			'target_program'			=> $value[6],
    			'satuan_target_program'		=> $value[7],
    			'pagu_indikatif_program'	=> $value[8],
    			'prakiraan_maju_program'	=> $value[9]
    		]);
    	}

    	if ($insert) {
    		return true;
    	} else {
    		return false;
    	}
    }
}