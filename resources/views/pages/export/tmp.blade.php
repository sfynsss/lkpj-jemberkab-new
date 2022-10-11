<?php

                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        {{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_1_1 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        {{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_2_1 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        {{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_3_1 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        {{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_4_1 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        {{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_5_1 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        {{ $realisasi1 = $sub_kegiatan->realisasi_sub_keg_6_1 }}
                        @endif

                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        {{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_1_2 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        {{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_2_2 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        {{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_3_2 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        {{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_4_2 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        {{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_5_2 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        {{ $realisasi2 = $sub_kegiatan->realisasi_sub_keg_6_2 }}
                        @endif

                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        {{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_1_3 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        {{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_2_3 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        {{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_3_3 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        {{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_4_3 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        {{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_5_3 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        {{ $realisasi3 = $sub_kegiatan->realisasi_sub_keg_6_3 }}
                        @endif

                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        {{ $realisasi4 = $sub_kegiatan->realisasi_sub_keg_1_4 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        {{ $realisasi4 = $sub_kegiatan->realisasi_sub_keg_2_4 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        {{ $realisasi4 = $sub_kegiatan->realisasi_sub_keg_3_4 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        {{ $realisasi4 = $sub_kegiatan->realisasi_sub_keg_4_4 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        {{ $realisasi4 = $sub_kegiatan->realisasi_sub_keg_5_4 }}
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        {{ $realisasi4 = $sub_kegiatan->realisasi_sub_keg_6_4 }}
                        @endif

                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_1_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_2_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_3_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_4_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_5_1;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan1 = $sub_kegiatan->serapan_sub_keg_6_1;
                        @endphp
                        @endif

                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_1_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_2_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_3_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_4_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_5_2;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan2 = $sub_kegiatan->serapan_sub_keg_6_2;
                        @endphp

                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_1_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_2_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_3_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_4_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_5_3;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan3 = $sub_kegiatan->serapan_sub_keg_6_3;
                        @endphp

                        @if (substr(Cookie::get('tahun_aktif'), 3) == 1)
                        @php
                            $serapan4 = $sub_kegiatan->serapan_sub_keg_1_4;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 2)
                        @php
                            $serapan4 = $sub_kegiatan->serapan_sub_keg_2_4;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 3)
                        @php
                            $serapan4 = $sub_kegiatan->serapan_sub_keg_3_4;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 4)
                        @php
                            $serapan4 = $sub_kegiatan->serapan_sub_keg_4_4;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 5)
                        @php
                            $serapan4 = $sub_kegiatan->serapan_sub_keg_5_4;
                        @endphp
                        @elseif (substr(Cookie::get('tahun_aktif'), 3) == 6)
                        @php
                            $serapan4 = $sub_kegiatan->serapan_sub_keg_6_4;
                        @endphp