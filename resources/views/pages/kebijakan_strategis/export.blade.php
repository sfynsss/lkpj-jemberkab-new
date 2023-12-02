<table>
    <tbody>
        <tr>
            <td colspan="8"><b>Capaian Pelaksanaan</b></td>
        </tr>
        <tr>
            <td colspan="8"><b>{{ $opd->nama_skpd }}</b></td>
        </tr>
        <tr>
            <td colspan="8"><b>Tahun Anggaran {{ $tahun }}</b></td>
        </tr>
        <tr></tr>
        <tr>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"><b>No</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"><b>Kebijakan Strategis</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"><b>Dasar Hukum</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"><b>Tujuan / Masalah yang Diselesaikan</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"><b>Program</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"><b>Kegiatan</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"><b>Kode Subkegiatan</b></td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;"><b>Subkegiatan</b></td>
        </tr>
        @foreach ($data as $dt)
        <tr>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;">{{ $loop->iteration }}</td>
            <td style="border: 1px solid #000000; text-align: left; vertical-align: center; word-wrap:break-word;">{{ $dt->nama_kebijakan }}</td>
            <td style="border: 1px solid #000000; text-align: left; vertical-align: center; word-wrap:break-word;">{{ $dt->dasar_hukum }}</td>
            <td style="border: 1px solid #000000; text-align: left; vertical-align: center; word-wrap:break-word;">{{ $dt->penyelesaian }}</td>
            <td style="border: 1px solid #000000; text-align: left; vertical-align: center; word-wrap:break-word;">{{ $dt->Subkegiatan->Kegiatan->Program->nama_program }}</td>
            <td style="border: 1px solid #000000; text-align: left; vertical-align: center; word-wrap:break-word;">{{ $dt->Subkegiatan->Kegiatan->nama_kegiatan }}</td>
            <td style="border: 1px solid #000000; text-align: center; vertical-align: center; word-wrap:break-word;">{{ $dt->Subkegiatan->kode_subkegiatan }}</td>
            <td style="border: 1px solid #000000; text-align: left; vertical-align: center; word-wrap:break-word;">{{ $dt->Subkegiatan->nama_subkegiatan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>