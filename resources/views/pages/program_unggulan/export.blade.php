<table>
    <tbody>
        <tr>
            <td colspan="11"><b>Capaian Pelaksanaan</b></td>
        </tr>
        <tr>
            <td>Tanggal Cetak : {{ Carbon\Carbon::now() }}</td>
        </tr>
        <tr></tr>
        <tr>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;" rowspan="2"><b>No</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;" rowspan="2"><b>Kode</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;" rowspan="2"><b>Urusan Pemerintahan</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;" rowspan="2"><b>OPD Pelaksana</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;" rowspan="2"><b>Kebijakan</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;" rowspan="2"><b>Prog/Keg/Subkeg</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;" colspan="2"><b>Target</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;" colspan="2"><b>Realisasi</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;" rowspan="2"><b>Permasalahan</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;" rowspan="2"><b>Upaya Mengatasi Permasalahan</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;" rowspan="2"><b>Tindak Lanjut Rekomendasi DPRD</b></td>
        </tr>
        <tr>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"><b>Kinerja</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"><b>Rp</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"><b>Kinerja</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"><b>Rp</b></td>
        </tr>
        @foreach ($data as $dt)
            <tr>
                <td style="border: 1px solid #000000; text-align: center; vertical-align: center;">{{ $loop->iteration }}</td>
                <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;">{{ $dt->kode_subkegiatan }}</td>
                <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"></td>
                <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;">{{ $dt->SKPD->singkatan_skpd }}</td>
                <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"></td>
                <td style="border: 1px solid #000000; text-align: left; vertical-align: center; word-wrap:break-word;">{{ $dt->nama_subkegiatan }}</td>
                <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;">
                    @foreach ($dt->Tahun as $th)
                        @if ($th->tahun == $tahun)
                            {{ $th->target }}
                        @endif
                    @endforeach
                </td>
                <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;">
                    @foreach ($dt->Tahun as $th)
                        @if ($th->tahun == $tahun)
                            Rp. {{ number_format($th->pagu_indikatif, 0,',','.') }}
                        @endif
                    @endforeach
                </td>
                <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;">
                    @foreach ($dt->Tahun as $th)
                        @if ($th->tahun == $tahun)
                            {{ $th->realisasi_kinerja }}
                        @endif
                    @endforeach
                </td>
                <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;">
                    @foreach ($dt->Tahun as $th)
                        @if ($th->tahun == $tahun)
                            Rp. {{ number_format($th->realisasi_anggaran, 0,',','.') }}
                        @endif
                    @endforeach
                </td>
                <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;">
                    @foreach ($dt->Bulan as $bl)
                        @if ($bl->bulan == '12')
                            {{ $bl->masalah }}
                        @endif
                    @endforeach
                </td>
                <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;">
                    @foreach ($dt->Bulan as $bl)
                        @if ($bl->bulan == '12')
                            {{ $bl->solusi }}
                        @endif
                    @endforeach
                </td>
                <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"></td>
            </tr>
        @endforeach
    </tbody>
</table>