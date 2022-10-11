<?php

namespace App\Http\Controllers\OPD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Program;
use App\SubKegiatan;
use App\DetSubkegiatan;
use App\Kegiatan;
use App\Urusan;
use App\BidangUrusan;
use App\Skpd;
use App\Predikat;
use Auth;
use Redirect;
use Cookie;

class PredikatOPDController extends Controller
{

    public function test()
    {
        $data = SubKegiatan::where('id_skpd', 18)->get();
        $total_prosentase = 0;
        foreach ($data as $dt) {

            $prosentase = ($dt->serapan_sub_keg_1_1/$dt->pagu_indikatif_sub_keg_1)*100;
            
            echo('nama = '.$dt->nama_sub_keg.'<br>');
            echo('realisasi = '.$dt->serapan_sub_keg_1_1.'<br>');
            echo('target = '.$dt->pagu_indikatif_sub_keg_1.'<br>');
            echo('prosentase = '.$prosentase.'<br>');

            $total_prosentase += $prosentase;
        }

        echo('total prosentase = '.$total_prosentase.'<br>');

    }

    public function predikat(){

        if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
            $tahun_aktif = 1;
        } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
            $tahun_aktif = 2;
        } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
            $tahun_aktif = 3;
        } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
            $tahun_aktif = 4;
        } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
            $tahun_aktif = 5;
        } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
            $tahun_aktif = 6;
        }

        $nama = Skpd::where('id', Auth::user()->id_skpd)->value('nama_skpd');

        $ke_predikat_1 = Predikat::where('id_skpd', Auth::user()->id_skpd)->where('triwulan_predikat', 1)->where('tahun_predikat', "202".$tahun_aktif)->value('id');
        $ke_predikat_2 = Predikat::where('id_skpd', Auth::user()->id_skpd)->where('triwulan_predikat', 2)->where('tahun_predikat', "202".$tahun_aktif)->value('id');
        $ke_predikat_3 = Predikat::where('id_skpd', Auth::user()->id_skpd)->where('triwulan_predikat', 3)->where('tahun_predikat', "202".$tahun_aktif)->value('id');
        $ke_predikat_4 = Predikat::where('id_skpd', Auth::user()->id_skpd)->where('triwulan_predikat', 4)->where('tahun_predikat', "202".$tahun_aktif)->value('id');

        $sub_keg = SubKegiatan::where('id_skpd', Auth::user()->id_skpd)->get();
        $jml_data = $sub_keg->count();

        //triwulan1
        $tmp_kinerja1 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if($dt->target_sub_keg_1 == null || $dt->target_sub_keg_1 == 0 || is_numeric($dt->target_sub_keg_1) == false) {
                    $realisasi1 = 0;
                } else {
                    $realisasi1 = ($dt->realisasi_sub_keg_1_1/$dt->target_sub_keg_1)*100;
                }
                $tmp_kinerja1 += $realisasi1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if($dt->target_sub_keg_2 == null || $dt->target_sub_keg_2 == 0 || is_numeric($dt->target_sub_keg_2) == false) {
                    $realisasi1 = 0;
                } else {
                    $realisasi1 = ($dt->realisasi_sub_keg_2_1/$dt->target_sub_keg_2)*100;
                }
                $tmp_kinerja1 += $realisasi1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if($dt->target_sub_keg_3 == null || $dt->target_sub_keg_3 == 0 || is_numeric($dt->target_sub_keg_3) == false) {
                    $realisasi1 = 0;
                } else {
                    $realisasi1 = ($dt->realisasi_sub_keg_3_1/$dt->target_sub_keg_3)*100;
                }
                $tmp_kinerja1 += $realisasi1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if($dt->target_sub_keg_4 == null || $dt->target_sub_keg_4 == 0 || is_numeric($dt->target_sub_keg_4) == false) {
                    $realisasi1 = 0;
                } else {
                    $realisasi1 = ($dt->realisasi_sub_keg_4_1/$dt->target_sub_keg_4)*100;
                }
                $tmp_kinerja1 += $realisasi1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if($dt->target_sub_keg_5 == null || $dt->target_sub_keg_5 == 0 || is_numeric($dt->target_sub_keg_5) == false) {
                    $realisasi1 = 0;
                } else {
                    $realisasi1 = ($dt->realisasi_sub_keg_5_1/$dt->target_sub_keg_5)*100;
                }
                $tmp_kinerja1 += $realisasi1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if($dt->target_sub_keg_6 == null || $dt->target_sub_keg_6 == 0 || is_numeric($dt->target_sub_keg_6) == false) {
                    $realisasi1 = 0;
                } else {
                    $realisasi1 = ($dt->realisasi_sub_keg_6_1/$dt->target_sub_keg_6)*100;
                }
                $tmp_kinerja1 += $realisasi1;
            }
        }
        $ps_kinerja1 = round(floatval($tmp_kinerja1/$jml_data), 2);
        if ($ps_kinerja1 <= 50) {
            $pr_kinerja1 = 'Sangat Rendah';
        } elseif ($ps_kinerja1 <= 65) {
            $pr_kinerja1 = 'Rendah';
        } elseif ($ps_kinerja1 <= 75 ) {
            $pr_kinerja1 = 'Sedang';
        } elseif ($ps_kinerja1 <= 90) {
            $pr_kinerja1 = 'Tinggi';
        } else {
            $pr_kinerja1 = 'Sangat Tinggi';
        }
        $tmp_anggaran1 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if ($dt->pagu_indikatif_sub_keg_1 == null || $dt->pagu_indikatif_sub_keg_1 == 0) {
                    $serapan1 = 0;
                } else {
                    $serapan1 = ($dt->serapan_sub_keg_1_1/$dt->pagu_indikatif_sub_keg_1)*100;
                }
                $tmp_anggaran1 += $serapan1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if ($dt->pagu_indikatif_sub_keg_2 == null || $dt->pagu_indikatif_sub_keg_2 == 0) {
                    $serapan1 = 0;
                } else {
                    $serapan1 = ($dt->serapan_sub_keg_2_1/$dt->pagu_indikatif_sub_keg_2)*100;
                }
                $tmp_anggaran1 += $serapan1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if ($dt->pagu_indikatif_sub_keg_3 == null || $dt->pagu_indikatif_sub_keg_3 == 0) {
                    $serapan1 = 0;
                } else {
                    $serapan1 = ($dt->serapan_sub_keg_2_1/$dt->pagu_indikatif_sub_keg_3)*100;
                }
                $tmp_anggaran1 += $serapan1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if ($dt->pagu_indikatif_sub_keg_4 == null || $dt->pagu_indikatif_sub_keg_4 == 0) {
                    $serapan1 = 0;
                } else {
                    $serapan1 = ($dt->serapan_sub_keg_3_1/$dt->pagu_indikatif_sub_keg_4)*100;
                }
                $tmp_anggaran1 += $serapan1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if ($dt->pagu_indikatif_sub_keg_5 == null || $dt->pagu_indikatif_sub_keg_5 == 0) {
                    $serapan1 = 0;
                } else {
                    $serapan1 = ($dt->serapan_sub_keg_5_1/$dt->pagu_indikatif_sub_keg_5)*100;
                }
                $tmp_anggaran1 += $serapan1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if ($dt->pagu_indikatif_sub_keg_6 == null || $dt->pagu_indikatif_sub_keg_6 == 0) {
                    $serapan1 = 0;
                } else {
                    $serapan1 = ($dt->serapan_sub_keg_6_1/$dt->pagu_indikatif_sub_keg_6)*100;
                }
                $tmp_anggaran1 += $serapan1;
            }
        }
        $ps_anggaran1 = round(floatval($tmp_anggaran1/$jml_data), 2); 
        if ($ps_anggaran1 <= 50) {
            $pr_anggaran1 = 'Sangat Rendah';
        } elseif ($ps_anggaran1 <= 65) {
            $pr_anggaran1 = 'Rendah';
        } elseif ($ps_anggaran1 <= 75 ) {
            $pr_anggaran1 = 'Sedang';
        } elseif ($ps_anggaran1 <= 90) {
            $pr_anggaran1 = 'Tinggi';
        } else {
            $pr_anggaran1 = 'Sangat Tinggi';
        }

        //triwulan2
        $tmp_kinerja2 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if($dt->target_sub_keg_1 == null || $dt->target_sub_keg_1 == 0 || is_numeric($dt->target_sub_keg_1) == false) {
                    $realisasi2 = 0;
                } else {
                    $realisasi2 = ($dt->realisasi_sub_keg_1_2/$dt->target_sub_keg_1)*100;
                }
                $tmp_kinerja2 += $realisasi2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if($dt->target_sub_keg_2 == null || $dt->target_sub_keg_2 == 0 || is_numeric($dt->target_sub_keg_2) == false) {
                    $realisasi2 = 0;
                } else {
                    $realisasi2 = ($dt->realisasi_sub_keg_2_2/$dt->target_sub_keg_2)*100;
                }
                $tmp_kinerja2 += $realisasi2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if($dt->target_sub_keg_3 == null || $dt->target_sub_keg_3 == 0 || is_numeric($dt->target_sub_keg_3) == false) {
                    $realisasi2 = 0;
                } else {
                    $realisasi2 = ($dt->realisasi_sub_keg_3_2/$dt->target_sub_keg_3)*100;
                }
                $tmp_kinerja2 += $realisasi2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if($dt->target_sub_keg_4 == null || $dt->target_sub_keg_4 == 0 || is_numeric($dt->target_sub_keg_4) == false) {
                    $realisasi2 = 0;
                } else {
                    $realisasi2 = ($dt->realisasi_sub_keg_4_2/$dt->target_sub_keg_4)*100;
                }
                $tmp_kinerja2 += $realisasi2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if($dt->target_sub_keg_5 == null || $dt->target_sub_keg_5 == 0 || is_numeric($dt->target_sub_keg_5) == false) {
                    $realisasi2 = 0;
                } else {
                    $realisasi2 = ($dt->realisasi_sub_keg_5_2/$dt->target_sub_keg_5)*100;
                }
                $tmp_kinerja2 += $realisasi2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if($dt->target_sub_keg_6 == null || $dt->target_sub_keg_6 == 0 || is_numeric($dt->target_sub_keg_6) == false) {
                    $realisasi2 = 0;
                } else {
                    $realisasi2 = ($dt->realisasi_sub_keg_6_2/$dt->target_sub_keg_6)*100;
                }
                $tmp_kinerja2 += $realisasi2;
            }
        }
        $ps_kinerja2 = round(floatval(($tmp_kinerja2/$jml_data) + $ps_kinerja1), 2); 
        if ($ps_kinerja2 <= 50) {
            $pr_kinerja2 = 'Sangat Rendah';
        } elseif ($ps_kinerja2 <= 65) {
            $pr_kinerja2 = 'Rendah';
        } elseif ($ps_kinerja2 <= 75 ) {
            $pr_kinerja2 = 'Sedang';
        } elseif ($ps_kinerja2 <= 90) {
            $pr_kinerja2 = 'Tinggi';
        } else {
            $pr_kinerja2 = 'Sangat Tinggi';
        }
        $tmp_anggaran2 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if ($dt->pagu_indikatif_sub_keg_1 == null || $dt->pagu_indikatif_sub_keg_1 == 0) {
                    $serapan2 = 0;
                } else {
                    $serapan2 = ($dt->serapan_sub_keg_1_2/$dt->pagu_indikatif_sub_keg_1)*100;
                }
                $tmp_anggaran2 += $serapan2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if ($dt->pagu_indikatif_sub_keg_2 == null || $dt->pagu_indikatif_sub_keg_2 == 0) {
                    $serapan2 = 0;
                } else {
                    $serapan2 = ($dt->serapan_sub_keg_2_2/$dt->pagu_indikatif_sub_keg_2)*100;
                }
                $tmp_anggaran2 += $serapan2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if ($dt->pagu_indikatif_sub_keg_3 == null || $dt->pagu_indikatif_sub_keg_3 == 0) {
                    $serapan2 = 0;
                } else {
                    $serapan2 = ($dt->serapan_sub_keg_3_2/$dt->pagu_indikatif_sub_keg_3)*100;
                }
                $tmp_anggaran2 += $serapan2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if ($dt->pagu_indikatif_sub_keg_4 == null || $dt->pagu_indikatif_sub_keg_4 == 0) {
                    $serapan2 = 0;
                } else {
                    $serapan2 = ($dt->serapan_sub_keg_4_2/$dt->pagu_indikatif_sub_keg_4)*100;
                }
                $tmp_anggaran2 += $serapan2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if ($dt->pagu_indikatif_sub_keg_5 == null || $dt->pagu_indikatif_sub_keg_5 == 0) {
                    $serapan2 = 0;
                } else {
                    $serapan2 = ($dt->serapan_sub_keg_5_2/$dt->pagu_indikatif_sub_keg_5)*100;
                }
                $tmp_anggaran2 += $serapan2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if ($dt->pagu_indikatif_sub_keg_6 == null || $dt->pagu_indikatif_sub_keg_6 == 0) {
                    $serapan2 = 0;
                } else {
                    $serapan2 = ($dt->serapan_sub_keg_6_2/$dt->pagu_indikatif_sub_keg_6)*100;
                }
                $tmp_anggaran2 += $serapan2;
            }
        }
        $ps_anggaran2 = round(floatval(($tmp_anggaran2/$jml_data) + $ps_anggaran1 ), 2);
        if ($ps_anggaran2 <= 50) {
            $pr_anggaran2 = 'Sangat Rendah';
        } elseif ($ps_anggaran2 <= 65) {
            $pr_anggaran2 = 'Rendah';
        } elseif ($ps_anggaran2 <= 75 ) {
            $pr_anggaran2 = 'Sedang';
        } elseif ($ps_anggaran2 <= 90) {
            $pr_anggaran2 = 'Tinggi';
        } else {
            $pr_anggaran2 = 'Sangat Tinggi';
        }

        //triwulan3
        $tmp_kinerja3 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if($dt->target_sub_keg_1 == null || $dt->target_sub_keg_1 == 0 || is_numeric($dt->target_sub_keg_1) == false) {
                    $realisasi3 = 0;
                } else {
                    $realisasi3 = ($dt->realisasi_sub_keg_1_3/$dt->target_sub_keg_1)*100;
                }
                $tmp_kinerja3 += $realisasi3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if($dt->target_sub_keg_2 == null || $dt->target_sub_keg_2 == 0 || is_numeric($dt->target_sub_keg_2) == false) {
                    $realisasi3 = 0;
                } else {
                    $realisasi3 = ($dt->realisasi_sub_keg_2_3/$dt->target_sub_keg_2)*100;
                }
                $tmp_kinerja3 += $realisasi3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if($dt->target_sub_keg_3 == null || $dt->target_sub_keg_3 == 0 || is_numeric($dt->target_sub_keg_3) == false) {
                    $realisasi3 = 0;
                } else {
                    $realisasi3 = ($dt->realisasi_sub_keg_3_3/$dt->target_sub_keg_3)*100;
                }
                $tmp_kinerja3 += $realisasi3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if($dt->target_sub_keg_4 == null || $dt->target_sub_keg_4 == 0 || is_numeric($dt->target_sub_keg_4) == false) {
                    $realisasi3 = 0;
                } else {
                    $realisasi3 = ($dt->realisasi_sub_keg_4_3/$dt->target_sub_keg_4)*100;
                }
                $tmp_kinerja3 += $realisasi3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if($dt->target_sub_keg_5 == null || $dt->target_sub_keg_5 == 0 || is_numeric($dt->target_sub_keg_5) == false) {
                    $realisasi3 = 0;
                } else {
                    $realisasi3 = ($dt->realisasi_sub_keg_5_3/$dt->target_sub_keg_5)*100;
                }
                $tmp_kinerja3 += $realisasi3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if($dt->target_sub_keg_6 == null || $dt->target_sub_keg_6 == 0 || is_numeric($dt->target_sub_keg_6) == false) {
                    $realisasi3 = 0;
                } else {
                    $realisasi3 = ($dt->realisasi_sub_keg_6_3/$dt->target_sub_keg_6)*100;
                }
                $tmp_kinerja3 += $realisasi3;
            }
        }
        $ps_kinerja3 = round(floatval(($tmp_kinerja3/$jml_data) + $ps_kinerja2), 2);
        if ($ps_kinerja3 <= 50) {
            $pr_kinerja3 = 'Sangat Rendah';
        } elseif ($ps_kinerja3 <= 65) {
            $pr_kinerja3 = 'Rendah';
        } elseif ($ps_kinerja3 <= 75 ) {
            $pr_kinerja3 = 'Sedang';
        } elseif ($ps_kinerja3 <= 90) {
            $pr_kinerja3 = 'Tinggi';
        } else {
            $pr_kinerja3 = 'Sangat Tinggi';
        }
        $tmp_anggaran3 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if ($dt->pagu_indikatif_sub_keg_1 == null || $dt->pagu_indikatif_sub_keg_1 == 0) {
                    $serapan3 = 0;
                } else {
                    $serapan3 = ($dt->serapan_sub_keg_1_3/$dt->pagu_indikatif_sub_keg_1)*100;
                }
                $tmp_anggaran3 += $serapan3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if ($dt->pagu_indikatif_sub_keg_2 == null || $dt->pagu_indikatif_sub_keg_2 == 0) {
                    $serapan3 = 0;
                } else {
                    $serapan3 = ($dt->serapan_sub_keg_2_3/$dt->pagu_indikatif_sub_keg_2)*100;
                }
                $tmp_anggaran3 += $serapan3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if ($dt->pagu_indikatif_sub_keg_3 == null || $dt->pagu_indikatif_sub_keg_3 == 0) {
                    $serapan3 = 0;
                } else {
                    $serapan3 = ($dt->serapan_sub_keg_1_3/$dt->pagu_indikatif_sub_keg_3)*100;
                }
                $tmp_anggaran3 += $serapan3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if ($dt->pagu_indikatif_sub_keg_4 == null || $dt->pagu_indikatif_sub_keg_4 == 0) {
                    $serapan3 = 0;
                } else {
                    $serapan3 = ($dt->serapan_sub_keg_4_3/$dt->pagu_indikatif_sub_keg_4)*100;
                }
                $tmp_anggaran3 += $serapan3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if ($dt->pagu_indikatif_sub_keg_5 == null || $dt->pagu_indikatif_sub_keg_5 == 0) {
                    $serapan3 = 0;
                } else {
                    $serapan3 = ($dt->serapan_sub_keg_5_3/$dt->pagu_indikatif_sub_keg_5)*100;
                }
                $tmp_anggaran3 += $serapan3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if ($dt->pagu_indikatif_sub_keg_6 == null || $dt->pagu_indikatif_sub_keg_6 == 0) {
                    $serapan3 = 0;
                } else {
                    $serapan3 = ($dt->serapan_sub_keg_6_3/$dt->pagu_indikatif_sub_keg_6)*100;
                }
                $tmp_anggaran3 += $serapan3;
            }
        }
        $ps_anggaran3 = round(floatval(($tmp_anggaran3/$jml_data) + $ps_anggaran2), 2);
        if ($ps_anggaran3 <= 50) {
            $pr_anggaran3 = 'Sangat Rendah';
        } elseif ($ps_anggaran3 <= 65) {
            $pr_anggaran3 = 'Rendah';
        } elseif ($ps_anggaran3 <= 75 ) {
            $pr_anggaran3 = 'Sedang';
        } elseif ($ps_anggaran3 <= 90) {
            $pr_anggaran3 = 'Tinggi';
        } else {
            $pr_anggaran3 = 'Sangat Tinggi';
        }

        //triwulan4
        $tmp_kinerja4 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if($dt->target_sub_keg_1 == null || $dt->target_sub_keg_1 == 0 || is_numeric($dt->target_sub_keg_1) == false) {
                    $realisasi4 = 0;
                } else {
                    $realisasi4 = ($dt->realisasi_sub_keg_1_4/$dt->target_sub_keg_1)*100;
                }
                $tmp_kinerja4 += $realisasi4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if($dt->target_su2_keg_1 == null || $dt->target_sub_keg_2 == 0 || is_numeric($dt->target_sub_keg_2) == false) {
                    $realisasi4 = 0;
                } else {
                    $realisasi4 = ($dt->realisasi_sub_keg_2_4/$dt->target_sub_keg_2)*100;
                }
                $tmp_kinerja4 += $realisasi4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if($dt->target_sub_keg_3 == null || $dt->target_sub_keg_3 == 0 || is_numeric($dt->target_sub_keg_3) == false) {
                    $realisasi4 = 0;
                } else {
                    $realisasi4 = ($dt->realisasi_sub_keg_3_4/$dt->target_sub_keg_3)*100;
                }
                $tmp_kinerja4 += $realisasi4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if($dt->target_sub_keg_4 == null || $dt->target_sub_keg_4 == 0 || is_numeric($dt->target_sub_keg_4) == false) {
                    $realisasi4 = 0;
                } else {
                    $realisasi4 = ($dt->realisasi_sub_keg_3_4/$dt->target_sub_keg_4)*100;
                }
                $tmp_kinerja4 += $realisasi4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if($dt->target_sub_keg_5 == null || $dt->target_sub_keg_5 == 0 || is_numeric($dt->target_sub_keg_5) == false) {
                    $realisasi4 = 0;
                } else {
                    $realisasi4 = ($dt->realisasi_sub_keg_5_4/$dt->target_sub_keg_5)*100;
                }
                $tmp_kinerja4 += $realisasi4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if($dt->target_sub_keg_6 == null || $dt->target_sub_keg_6 == 0 || is_numeric($dt->target_sub_keg_6) == false) {
                    $realisasi4 = 0;
                } else {
                    $realisasi4 = ($dt->realisasi_sub_keg_6_4/$dt->target_sub_keg_6)*100;
                }
                $tmp_kinerja4 += $realisasi4;
            }
        }
        $ps_kinerja4 = round(floatval(($tmp_kinerja4/$jml_data) + $ps_kinerja3), 2);
        if ($ps_kinerja4 <= 50) {
            $pr_kinerja4 = 'Sangat Rendah';
        } elseif ($ps_kinerja4 <= 65) {
            $pr_kinerja4 = 'Rendah';
        } elseif ($ps_kinerja4 <= 75 ) {
            $pr_kinerja4 = 'Sedang';
        } elseif ($ps_kinerja4 <= 90) {
            $pr_kinerja4 = 'Tinggi';
        } else {
            $pr_kinerja4 = 'Sangat Tinggi';
        }
        $tmp_anggaran4 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if ($dt->pagu_indikatif_sub_keg_1 == null || $dt->pagu_indikatif_sub_keg_1 == 0) {
                    $serapan4 = 0;
                } else {
                    $serapan4 = ($dt->serapan_sub_keg_1_4/$dt->pagu_indikatif_sub_keg_1)*100;
                }
                $tmp_anggaran4 += $serapan4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if ($dt->pagu_indikatif_sub_keg_2 == null || $dt->pagu_indikatif_sub_keg_2 == 0) {
                    $serapan4 = 0;
                } else {
                    $serapan4 = ($dt->serapan_sub_keg_2_4/$dt->pagu_indikatif_sub_keg_2)*100;
                }
                $tmp_anggaran4 += $serapan4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if ($dt->pagu_indikatif_sub_keg_3 == null || $dt->pagu_indikatif_sub_keg_3 == 0) {
                    $serapan4 = 0;
                } else {
                    $serapan4 = ($dt->serapan_sub_keg_3_4/$dt->pagu_indikatif_sub_keg_3)*100;
                }
                $tmp_anggaran4 += $serapan4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if ($dt->pagu_indikatif_sub_keg_4 == null || $dt->pagu_indikatif_sub_keg_4 == 0) {
                    $serapan4 = 0;
                } else {
                    $serapan4 = ($dt->serapan_sub_keg_4_4/$dt->pagu_indikatif_sub_keg_4)*100;
                }
                $tmp_anggaran4 += $serapan4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if ($dt->pagu_indikatif_sub_keg_5 == null || $dt->pagu_indikatif_sub_keg_5 == 0) {
                    $serapan4 = 0;
                } else {
                    $serapan4 = ($dt->serapan_sub_keg_5_4/$dt->pagu_indikatif_sub_keg_5)*100;
                }
                $tmp_anggaran4 += $serapan4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if ($dt->pagu_indikatif_sub_keg_6 == null || $dt->pagu_indikatif_sub_keg_6 == 0) {
                    $serapan4 = 0;
                } else {
                    $serapan4 = ($dt->serapan_sub_keg_6_4/$dt->pagu_indikatif_sub_keg_6)*100;
                }
                $tmp_anggaran4 += $serapan4;
            }
        }
        $ps_anggaran4 = round(floatval(($tmp_anggaran4/$jml_data) + $ps_anggaran3), 2);
        if ($ps_anggaran4 <= 50) {
            $pr_anggaran4 = 'Sangat Rendah';
        } elseif ($ps_anggaran4 <= 65) {
            $pr_anggaran4 = 'Rendah';
        } elseif ($ps_anggaran4 <= 75 ) {
            $pr_anggaran4 = 'Sedang';
        } elseif ($ps_anggaran4 <= 90) {
            $pr_anggaran4 = 'Tinggi';
        } else {
            $pr_anggaran4 = 'Sangat Tinggi';
        }

        return view('pages.opd.predikat.predikat', compact('nama','tahun_aktif',
        'ke_predikat_1', 'ke_predikat_2', 'ke_predikat_3', 'ke_predikat_4',
        'ps_kinerja1', 'pr_kinerja1','ps_anggaran1', 'pr_anggaran1',
        'ps_kinerja2', 'pr_kinerja2','ps_anggaran2', 'pr_anggaran2',
        'ps_kinerja3', 'pr_kinerja3','ps_anggaran3', 'pr_anggaran3',
        'ps_kinerja4', 'pr_kinerja4','ps_anggaran4', 'pr_anggaran4',
        ));
    }

    public function faktor($id) {

        if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
            $tahun_aktif = 1;
        } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
            $tahun_aktif = 2;
        } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
            $tahun_aktif = 3;
        } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
            $tahun_aktif = 4;
        } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
            $tahun_aktif = 5;
        } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
            $tahun_aktif = 6;
        }

        $predikat = Predikat::findOrFail($id);
        $skpd = $predikat->id_skpd;
        $triwulan = $predikat->triwulan_predikat;
        $program = Program::where('id_skpd', $skpd)->get();

        $data = SubKegiatan::where('id_skpd', Auth::user()->id_skpd);
        $sub_keg = SubKegiatan::where('id_skpd', Auth::user()->id_skpd)->get();
        $jml_data = $sub_keg->count();

        //triwulan1
        $tmp_kinerja1 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if($dt->target_sub_keg_1 == null || $dt->target_sub_keg_1 == 0 || is_numeric($dt->target_sub_keg_1) == false) {
                    $realisasi1 = 0;
                } else {
                    $realisasi1 = ($dt->realisasi_sub_keg_1_1/$dt->target_sub_keg_1)*100;
                }
                $tmp_kinerja1 += $realisasi1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if($dt->target_sub_keg_2 == null || $dt->target_sub_keg_2 == 0 || is_numeric($dt->target_sub_keg_2) == false) {
                    $realisasi1 = 0;
                } else {
                    $realisasi1 = ($dt->realisasi_sub_keg_2_1/$dt->target_sub_keg_2)*100;
                }
                $tmp_kinerja1 += $realisasi1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if($dt->target_sub_keg_3 == null || $dt->target_sub_keg_3 == 0 || is_numeric($dt->target_sub_keg_3) == false) {
                    $realisasi1 = 0;
                } else {
                    $realisasi1 = ($dt->realisasi_sub_keg_3_1/$dt->target_sub_keg_3)*100;
                }
                $tmp_kinerja1 += $realisasi1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if($dt->target_sub_keg_4 == null || $dt->target_sub_keg_4 == 0 || is_numeric($dt->target_sub_keg_4) == false) {
                    $realisasi1 = 0;
                } else {
                    $realisasi1 = ($dt->realisasi_sub_keg_4_1/$dt->target_sub_keg_4)*100;
                }
                $tmp_kinerja1 += $realisasi1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if($dt->target_sub_keg_5 == null || $dt->target_sub_keg_5 == 0 || is_numeric($dt->target_sub_keg_5) == false) {
                    $realisasi1 = 0;
                } else {
                    $realisasi1 = ($dt->realisasi_sub_keg_5_1/$dt->target_sub_keg_5)*100;
                }
                $tmp_kinerja1 += $realisasi1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if($dt->target_sub_keg_6 == null || $dt->target_sub_keg_6 == 0 || is_numeric($dt->target_sub_keg_6) == false) {
                    $realisasi1 = 0;
                } else {
                    $realisasi1 = ($dt->realisasi_sub_keg_6_1/$dt->target_sub_keg_6)*100;
                }
                $tmp_kinerja1 += $realisasi1;
            }
        }
        $ps_kinerja1 = round(floatval($tmp_kinerja1/$jml_data), 2);
        if ($ps_kinerja1 <= 50) {
            $pr_kinerja1 = 'Sangat Rendah';
        } elseif ($ps_kinerja1 <= 65) {
            $pr_kinerja1 = 'Rendah';
        } elseif ($ps_kinerja1 <= 75 ) {
            $pr_kinerja1 = 'Sedang';
        } elseif ($ps_kinerja1 <= 90) {
            $pr_kinerja1 = 'Tinggi';
        } else {
            $pr_kinerja1 = 'Sangat Tinggi';
        }
        $tmp_anggaran1 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if ($dt->pagu_indikatif_sub_keg_1 == null || $dt->pagu_indikatif_sub_keg_1 == 0) {
                    $serapan1 = 0;
                } else {
                    $serapan1 = ($dt->serapan_sub_keg_1_1/$dt->pagu_indikatif_sub_keg_1)*100;
                }
                $tmp_anggaran1 += $serapan1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if ($dt->pagu_indikatif_sub_keg_2 == null || $dt->pagu_indikatif_sub_keg_2 == 0) {
                    $serapan1 = 0;
                } else {
                    $serapan1 = ($dt->serapan_sub_keg_2_1/$dt->pagu_indikatif_sub_keg_2)*100;
                }
                $tmp_anggaran1 += $serapan1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if ($dt->pagu_indikatif_sub_keg_3 == null || $dt->pagu_indikatif_sub_keg_3 == 0) {
                    $serapan1 = 0;
                } else {
                    $serapan1 = ($dt->serapan_sub_keg_2_1/$dt->pagu_indikatif_sub_keg_3)*100;
                }
                $tmp_anggaran1 += $serapan1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if ($dt->pagu_indikatif_sub_keg_4 == null || $dt->pagu_indikatif_sub_keg_4 == 0) {
                    $serapan1 = 0;
                } else {
                    $serapan1 = ($dt->serapan_sub_keg_3_1/$dt->pagu_indikatif_sub_keg_4)*100;
                }
                $tmp_anggaran1 += $serapan1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if ($dt->pagu_indikatif_sub_keg_5 == null || $dt->pagu_indikatif_sub_keg_5 == 0) {
                    $serapan1 = 0;
                } else {
                    $serapan1 = ($dt->serapan_sub_keg_5_1/$dt->pagu_indikatif_sub_keg_5)*100;
                }
                $tmp_anggaran1 += $serapan1;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if ($dt->pagu_indikatif_sub_keg_6 == null || $dt->pagu_indikatif_sub_keg_6 == 0) {
                    $serapan1 = 0;
                } else {
                    $serapan1 = ($dt->serapan_sub_keg_6_1/$dt->pagu_indikatif_sub_keg_6)*100;
                }
                $tmp_anggaran1 += $serapan1;
            }
        }
        $ps_anggaran1 = round(floatval($tmp_anggaran1/$jml_data), 2); 
        if ($ps_anggaran1 <= 50) {
            $pr_anggaran1 = 'Sangat Rendah';
        } elseif ($ps_anggaran1 <= 65) {
            $pr_anggaran1 = 'Rendah';
        } elseif ($ps_anggaran1 <= 75 ) {
            $pr_anggaran1 = 'Sedang';
        } elseif ($ps_anggaran1 <= 90) {
            $pr_anggaran1 = 'Tinggi';
        } else {
            $pr_anggaran1 = 'Sangat Tinggi';
        }

        //triwulan2
        $tmp_kinerja2 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if($dt->target_sub_keg_1 == null || $dt->target_sub_keg_1 == 0 || is_numeric($dt->target_sub_keg_1) == false) {
                    $realisasi2 = 0;
                } else {
                    $realisasi2 = ($dt->realisasi_sub_keg_1_2/$dt->target_sub_keg_1)*100;
                }
                $tmp_kinerja2 += $realisasi2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if($dt->target_sub_keg_2 == null || $dt->target_sub_keg_2 == 0 || is_numeric($dt->target_sub_keg_2) == false) {
                    $realisasi2 = 0;
                } else {
                    $realisasi2 = ($dt->realisasi_sub_keg_2_2/$dt->target_sub_keg_2)*100;
                }
                $tmp_kinerja2 += $realisasi2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if($dt->target_sub_keg_3 == null || $dt->target_sub_keg_3 == 0 || is_numeric($dt->target_sub_keg_3) == false) {
                    $realisasi2 = 0;
                } else {
                    $realisasi2 = ($dt->realisasi_sub_keg_3_2/$dt->target_sub_keg_3)*100;
                }
                $tmp_kinerja2 += $realisasi2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if($dt->target_sub_keg_4 == null || $dt->target_sub_keg_4 == 0 || is_numeric($dt->target_sub_keg_4) == false) {
                    $realisasi2 = 0;
                } else {
                    $realisasi2 = ($dt->realisasi_sub_keg_4_2/$dt->target_sub_keg_4)*100;
                }
                $tmp_kinerja2 += $realisasi2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if($dt->target_sub_keg_5 == null || $dt->target_sub_keg_5 == 0 || is_numeric($dt->target_sub_keg_5) == false) {
                    $realisasi2 = 0;
                } else {
                    $realisasi2 = ($dt->realisasi_sub_keg_5_2/$dt->target_sub_keg_5)*100;
                }
                $tmp_kinerja2 += $realisasi2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if($dt->target_sub_keg_6 == null || $dt->target_sub_keg_6 == 0 || is_numeric($dt->target_sub_keg_6) == false) {
                    $realisasi2 = 0;
                } else {
                    $realisasi2 = ($dt->realisasi_sub_keg_6_2/$dt->target_sub_keg_6)*100;
                }
                $tmp_kinerja2 += $realisasi2;
            }
        }
        $ps_kinerja2 = round(floatval(($tmp_kinerja2/$jml_data) + $ps_kinerja1), 2); 
        if ($ps_kinerja2 <= 50) {
            $pr_kinerja2 = 'Sangat Rendah';
        } elseif ($ps_kinerja2 <= 65) {
            $pr_kinerja2 = 'Rendah';
        } elseif ($ps_kinerja2 <= 75 ) {
            $pr_kinerja2 = 'Sedang';
        } elseif ($ps_kinerja2 <= 90) {
            $pr_kinerja2 = 'Tinggi';
        } else {
            $pr_kinerja2 = 'Sangat Tinggi';
        }
        $tmp_anggaran2 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if ($dt->pagu_indikatif_sub_keg_1 == null || $dt->pagu_indikatif_sub_keg_1 == 0) {
                    $serapan2 = 0;
                } else {
                    $serapan2 = ($dt->serapan_sub_keg_1_2/$dt->pagu_indikatif_sub_keg_1)*100;
                }
                $tmp_anggaran2 += $serapan2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if ($dt->pagu_indikatif_sub_keg_2 == null || $dt->pagu_indikatif_sub_keg_2 == 0) {
                    $serapan2 = 0;
                } else {
                    $serapan2 = ($dt->serapan_sub_keg_2_2/$dt->pagu_indikatif_sub_keg_2)*100;
                }
                $tmp_anggaran2 += $serapan2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if ($dt->pagu_indikatif_sub_keg_3 == null || $dt->pagu_indikatif_sub_keg_3 == 0) {
                    $serapan2 = 0;
                } else {
                    $serapan2 = ($dt->serapan_sub_keg_3_2/$dt->pagu_indikatif_sub_keg_3)*100;
                }
                $tmp_anggaran2 += $serapan2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if ($dt->pagu_indikatif_sub_keg_4 == null || $dt->pagu_indikatif_sub_keg_4 == 0) {
                    $serapan2 = 0;
                } else {
                    $serapan2 = ($dt->serapan_sub_keg_4_2/$dt->pagu_indikatif_sub_keg_4)*100;
                }
                $tmp_anggaran2 += $serapan2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if ($dt->pagu_indikatif_sub_keg_5 == null || $dt->pagu_indikatif_sub_keg_5 == 0) {
                    $serapan2 = 0;
                } else {
                    $serapan2 = ($dt->serapan_sub_keg_5_2/$dt->pagu_indikatif_sub_keg_5)*100;
                }
                $tmp_anggaran2 += $serapan2;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if ($dt->pagu_indikatif_sub_keg_6 == null || $dt->pagu_indikatif_sub_keg_6 == 0) {
                    $serapan2 = 0;
                } else {
                    $serapan2 = ($dt->serapan_sub_keg_6_2/$dt->pagu_indikatif_sub_keg_6)*100;
                }
                $tmp_anggaran2 += $serapan2;
            }
        }
        $ps_anggaran2 = round(floatval(($tmp_anggaran2/$jml_data) + $ps_anggaran1 ), 2);
        if ($ps_anggaran2 <= 50) {
            $pr_anggaran2 = 'Sangat Rendah';
        } elseif ($ps_anggaran2 <= 65) {
            $pr_anggaran2 = 'Rendah';
        } elseif ($ps_anggaran2 <= 75 ) {
            $pr_anggaran2 = 'Sedang';
        } elseif ($ps_anggaran2 <= 90) {
            $pr_anggaran2 = 'Tinggi';
        } else {
            $pr_anggaran2 = 'Sangat Tinggi';
        }

        //triwulan3
        $tmp_kinerja3 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if($dt->target_sub_keg_1 == null || $dt->target_sub_keg_1 == 0 || is_numeric($dt->target_sub_keg_1) == false) {
                    $realisasi3 = 0;
                } else {
                    $realisasi3 = ($dt->realisasi_sub_keg_1_3/$dt->target_sub_keg_1)*100;
                }
                $tmp_kinerja3 += $realisasi3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if($dt->target_sub_keg_2 == null || $dt->target_sub_keg_2 == 0 || is_numeric($dt->target_sub_keg_2) == false) {
                    $realisasi3 = 0;
                } else {
                    $realisasi3 = ($dt->realisasi_sub_keg_2_3/$dt->target_sub_keg_2)*100;
                }
                $tmp_kinerja3 += $realisasi3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if($dt->target_sub_keg_3 == null || $dt->target_sub_keg_3 == 0 || is_numeric($dt->target_sub_keg_3) == false) {
                    $realisasi3 = 0;
                } else {
                    $realisasi3 = ($dt->realisasi_sub_keg_3_3/$dt->target_sub_keg_3)*100;
                }
                $tmp_kinerja3 += $realisasi3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if($dt->target_sub_keg_4 == null || $dt->target_sub_keg_4 == 0 || is_numeric($dt->target_sub_keg_4) == false) {
                    $realisasi3 = 0;
                } else {
                    $realisasi3 = ($dt->realisasi_sub_keg_4_3/$dt->target_sub_keg_4)*100;
                }
                $tmp_kinerja3 += $realisasi3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if($dt->target_sub_keg_5 == null || $dt->target_sub_keg_5 == 0 || is_numeric($dt->target_sub_keg_5) == false) {
                    $realisasi3 = 0;
                } else {
                    $realisasi3 = ($dt->realisasi_sub_keg_5_3/$dt->target_sub_keg_5)*100;
                }
                $tmp_kinerja3 += $realisasi3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if($dt->target_sub_keg_6 == null || $dt->target_sub_keg_6 == 0 || is_numeric($dt->target_sub_keg_6) == false) {
                    $realisasi3 = 0;
                } else {
                    $realisasi3 = ($dt->realisasi_sub_keg_6_3/$dt->target_sub_keg_6)*100;
                }
                $tmp_kinerja3 += $realisasi3;
            }
        }
        $ps_kinerja3 = round(floatval(($tmp_kinerja3/$jml_data) + $ps_kinerja2), 2);
        if ($ps_kinerja3 <= 50) {
            $pr_kinerja3 = 'Sangat Rendah';
        } elseif ($ps_kinerja3 <= 65) {
            $pr_kinerja3 = 'Rendah';
        } elseif ($ps_kinerja3 <= 75 ) {
            $pr_kinerja3 = 'Sedang';
        } elseif ($ps_kinerja3 <= 90) {
            $pr_kinerja3 = 'Tinggi';
        } else {
            $pr_kinerja3 = 'Sangat Tinggi';
        }
        $tmp_anggaran3 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if ($dt->pagu_indikatif_sub_keg_1 == null || $dt->pagu_indikatif_sub_keg_1 == 0) {
                    $serapan3 = 0;
                } else {
                    $serapan3 = ($dt->serapan_sub_keg_1_3/$dt->pagu_indikatif_sub_keg_1)*100;
                }
                $tmp_anggaran3 += $serapan3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if ($dt->pagu_indikatif_sub_keg_2 == null || $dt->pagu_indikatif_sub_keg_2 == 0) {
                    $serapan3 = 0;
                } else {
                    $serapan3 = ($dt->serapan_sub_keg_2_3/$dt->pagu_indikatif_sub_keg_2)*100;
                }
                $tmp_anggaran3 += $serapan3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if ($dt->pagu_indikatif_sub_keg_3 == null || $dt->pagu_indikatif_sub_keg_3 == 0) {
                    $serapan3 = 0;
                } else {
                    $serapan3 = ($dt->serapan_sub_keg_1_3/$dt->pagu_indikatif_sub_keg_3)*100;
                }
                $tmp_anggaran3 += $serapan3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if ($dt->pagu_indikatif_sub_keg_4 == null || $dt->pagu_indikatif_sub_keg_4 == 0) {
                    $serapan3 = 0;
                } else {
                    $serapan3 = ($dt->serapan_sub_keg_4_3/$dt->pagu_indikatif_sub_keg_4)*100;
                }
                $tmp_anggaran3 += $serapan3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if ($dt->pagu_indikatif_sub_keg_5 == null || $dt->pagu_indikatif_sub_keg_5 == 0) {
                    $serapan3 = 0;
                } else {
                    $serapan3 = ($dt->serapan_sub_keg_5_3/$dt->pagu_indikatif_sub_keg_5)*100;
                }
                $tmp_anggaran3 += $serapan3;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if ($dt->pagu_indikatif_sub_keg_6 == null || $dt->pagu_indikatif_sub_keg_6 == 0) {
                    $serapan3 = 0;
                } else {
                    $serapan3 = ($dt->serapan_sub_keg_6_3/$dt->pagu_indikatif_sub_keg_6)*100;
                }
                $tmp_anggaran3 += $serapan3;
            }
        }
        $ps_anggaran3 = round(floatval(($tmp_anggaran3/$jml_data) + $ps_anggaran2), 2);
        if ($ps_anggaran3 <= 50) {
            $pr_anggaran3 = 'Sangat Rendah';
        } elseif ($ps_anggaran3 <= 65) {
            $pr_anggaran3 = 'Rendah';
        } elseif ($ps_anggaran3 <= 75 ) {
            $pr_anggaran3 = 'Sedang';
        } elseif ($ps_anggaran3 <= 90) {
            $pr_anggaran3 = 'Tinggi';
        } else {
            $pr_anggaran3 = 'Sangat Tinggi';
        }

        //triwulan4
        $tmp_kinerja4 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if($dt->target_sub_keg_1 == null || $dt->target_sub_keg_1 == 0 || is_numeric($dt->target_sub_keg_1) == false) {
                    $realisasi4 = 0;
                } else {
                    $realisasi4 = ($dt->realisasi_sub_keg_1_4/$dt->target_sub_keg_1)*100;
                }
                $tmp_kinerja4 += $realisasi4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if($dt->target_su2_keg_1 == null || $dt->target_sub_keg_2 == 0 || is_numeric($dt->target_sub_keg_2) == false) {
                    $realisasi4 = 0;
                } else {
                    $realisasi4 = ($dt->realisasi_sub_keg_2_4/$dt->target_sub_keg_2)*100;
                }
                $tmp_kinerja4 += $realisasi4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if($dt->target_sub_keg_3 == null || $dt->target_sub_keg_3 == 0 || is_numeric($dt->target_sub_keg_3) == false) {
                    $realisasi4 = 0;
                } else {
                    $realisasi4 = ($dt->realisasi_sub_keg_3_4/$dt->target_sub_keg_3)*100;
                }
                $tmp_kinerja4 += $realisasi4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if($dt->target_sub_keg_4 == null || $dt->target_sub_keg_4 == 0 || is_numeric($dt->target_sub_keg_4) == false) {
                    $realisasi4 = 0;
                } else {
                    $realisasi4 = ($dt->realisasi_sub_keg_3_4/$dt->target_sub_keg_4)*100;
                }
                $tmp_kinerja4 += $realisasi4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if($dt->target_sub_keg_5 == null || $dt->target_sub_keg_5 == 0 || is_numeric($dt->target_sub_keg_5) == false) {
                    $realisasi4 = 0;
                } else {
                    $realisasi4 = ($dt->realisasi_sub_keg_5_4/$dt->target_sub_keg_5)*100;
                }
                $tmp_kinerja4 += $realisasi4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if($dt->target_sub_keg_6 == null || $dt->target_sub_keg_6 == 0 || is_numeric($dt->target_sub_keg_6) == false) {
                    $realisasi4 = 0;
                } else {
                    $realisasi4 = ($dt->realisasi_sub_keg_6_4/$dt->target_sub_keg_6)*100;
                }
                $tmp_kinerja4 += $realisasi4;
            }
        }
        $ps_kinerja4 = round(floatval(($tmp_kinerja4/$jml_data) + $ps_kinerja3), 2);
        if ($ps_kinerja4 <= 50) {
            $pr_kinerja4 = 'Sangat Rendah';
        } elseif ($ps_kinerja4 <= 65) {
            $pr_kinerja4 = 'Rendah';
        } elseif ($ps_kinerja4 <= 75 ) {
            $pr_kinerja4 = 'Sedang';
        } elseif ($ps_kinerja4 <= 90) {
            $pr_kinerja4 = 'Tinggi';
        } else {
            $pr_kinerja4 = 'Sangat Tinggi';
        }
        $tmp_anggaran4 = 0;
        foreach ($sub_keg as $dt) {
            if (substr(Cookie::get('tahun_aktif'), 3) == 1) {
                if ($dt->pagu_indikatif_sub_keg_1 == null || $dt->pagu_indikatif_sub_keg_1 == 0) {
                    $serapan4 = 0;
                } else {
                    $serapan4 = ($dt->serapan_sub_keg_1_4/$dt->pagu_indikatif_sub_keg_1)*100;
                }
                $tmp_anggaran4 += $serapan4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {
                if ($dt->pagu_indikatif_sub_keg_2 == null || $dt->pagu_indikatif_sub_keg_2 == 0) {
                    $serapan4 = 0;
                } else {
                    $serapan4 = ($dt->serapan_sub_keg_2_4/$dt->pagu_indikatif_sub_keg_2)*100;
                }
                $tmp_anggaran4 += $serapan4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {
                if ($dt->pagu_indikatif_sub_keg_3 == null || $dt->pagu_indikatif_sub_keg_3 == 0) {
                    $serapan4 = 0;
                } else {
                    $serapan4 = ($dt->serapan_sub_keg_3_4/$dt->pagu_indikatif_sub_keg_3)*100;
                }
                $tmp_anggaran4 += $serapan4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {
                if ($dt->pagu_indikatif_sub_keg_4 == null || $dt->pagu_indikatif_sub_keg_4 == 0) {
                    $serapan4 = 0;
                } else {
                    $serapan4 = ($dt->serapan_sub_keg_4_4/$dt->pagu_indikatif_sub_keg_4)*100;
                }
                $tmp_anggaran4 += $serapan4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {
                if ($dt->pagu_indikatif_sub_keg_5 == null || $dt->pagu_indikatif_sub_keg_5 == 0) {
                    $serapan4 = 0;
                } else {
                    $serapan4 = ($dt->serapan_sub_keg_5_4/$dt->pagu_indikatif_sub_keg_5)*100;
                }
                $tmp_anggaran4 += $serapan4;
            } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {
                if ($dt->pagu_indikatif_sub_keg_6 == null || $dt->pagu_indikatif_sub_keg_6 == 0) {
                    $serapan4 = 0;
                } else {
                    $serapan4 = ($dt->serapan_sub_keg_6_4/$dt->pagu_indikatif_sub_keg_6)*100;
                }
                $tmp_anggaran4 += $serapan4;
            }
        }
        $ps_anggaran4 = round(floatval(($tmp_anggaran4/$jml_data) + $ps_anggaran3), 2);
        if ($ps_anggaran4 <= 50) {
            $pr_anggaran4 = 'Sangat Rendah';
        } elseif ($ps_anggaran4 <= 65) {
            $pr_anggaran4 = 'Rendah';
        } elseif ($ps_anggaran4 <= 75 ) {
            $pr_anggaran4 = 'Sedang';
        } elseif ($ps_anggaran4 <= 90) {
            $pr_anggaran4 = 'Tinggi';
        } else {
            $pr_anggaran4 = 'Sangat Tinggi';
        }

        $data1 = 0;
        $data2 = 0;
        $data3 = 0;
        $data4 = 0;

        return view('pages.opd.predikat.faktor', compact('predikat', 'triwulan', 'tahun_aktif',
        'ps_kinerja1', 'pr_kinerja1','ps_anggaran1', 'pr_anggaran1',
        'ps_kinerja2', 'pr_kinerja2','ps_anggaran2', 'pr_anggaran2',
        'ps_kinerja3', 'pr_kinerja3','ps_anggaran3', 'pr_anggaran3',
        'ps_kinerja4', 'pr_kinerja4','ps_anggaran4', 'pr_anggaran4', 'sub_keg',
        'data1', 'data2', 'data3', 'data4'
        ));
    }

    public function update(Request $request) {
        $data = Predikat::where('id', $request->id)->update([
            'capaian_kinerja'   => $request->capaian_kinerja,
            'predikat_kinerja'  => $request->predikat_kinerja,
            'capaian_anggaran'  => $request->capaian_anggaran,
            'predikat_anggaran' => $request->predikat_anggaran,
            'faktor_pendorong'  => $request->faktor_pendorong,
            'faktor_penghambat' => $request->faktor_penghambat,
        ]);
        return Redirect::back()->with('warning', 'Data Predikat Berhasil Diupdate');
    }
}

// if (substr(Cookie::get('tahun_aktif'), 3) == 1) {

// } elseif(substr(Cookie::get('tahun_aktif'), 3) == 2) {

// } elseif(substr(Cookie::get('tahun_aktif'), 3) == 3) {

// } elseif(substr(Cookie::get('tahun_aktif'), 3) == 4) {

// } elseif(substr(Cookie::get('tahun_aktif'), 3) == 5) {

// } elseif(substr(Cookie::get('tahun_aktif'), 3) == 6) {

// }

// @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
// @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
// @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
// @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
// @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
// @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
// @endif