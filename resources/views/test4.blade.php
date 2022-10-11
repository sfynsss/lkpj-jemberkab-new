@foreach ($skpd as $opd)

    <a href="{{ route('testingtotal', $opd->id) }}">{{ $loop->iteration }} {{ $opd->nama_skpd }}</a>
    <br>
@endforeach