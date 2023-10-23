@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Capaian</h4>
                <p class="card-description">
                    Isikan data berikut dengan lengkap dan sesuai
                </p>
                <form class="forms-sample" method="POST" action="{{ route('tambah-indikator-utama-detail') }}">
                    @csrf
                    <input type="text" id="id_skpd" name="id_skpd" value="{{ $id_skpd }}" hidden>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Urusan</label>
                        <select class="form-control" id="urusan" name="urusan" onchange="setBidangUrusan();" required>
                            <option  selected="true" disabled="disabled">Pilih Urusan</option>
                            @foreach ($urusan as $urusan)
                            <option value="{{ $urusan->id }}">{{ $urusan->nama_urusan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Urusan</label>
                        <select class="form-control" id="bidang_urusan" name="bidang_urusan" onchange="setIndikator();" required>
                            <option  selected="true" disabled="disabled">Pilih Bidang Urusan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Indikator</label>
                        <select class="form-control" id="indikator" name="indikator" required>
                            <option  selected="true" disabled="disabled">Pilih Indikator Utama</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Uraian</label>
                        <input type="text" class="form-control" name="uraian" id="uraian" placeholder="Isikan uraian capaian">
                    </div>
                    <div class="form-group">
                        <label>Satuan</label>
                        <input type="text" class="form-control" name="satuan" id="satuan" placeholder="Tulis satuan capaian">
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>2016</label>
                                <div class="row">
                                    <div class="col-8"><input type="text" class="form-control" name="capaian_1" id="capaian_1" placeholder="Isikan capaian 2016"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>2017</label>
                                <div class="row">
                                    <div class="col-8"><input type="text" class="form-control" name="capaian_2" id="capaian_2" placeholder="Isikan capaian 2017"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>2018</label>
                                <div class="row">
                                    <div class="col-8"><input type="text" class="form-control" name="capaian_3" id="capaian_3" placeholder="Isikan capaian 2018"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>2019</label>
                                <div class="row">
                                    <div class="col-8"><input type="text" class="form-control" name="capaian_4" id="capaian_4" placeholder="Isikan capaian 2019"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>2020</label>
                                <div class="row">
                                    <div class="col-8"><input type="text" class="form-control" name="capaian_5" id="capaian_5" placeholder="Isikan capaian 2020"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>2021</label>
                                <div class="row">
                                    <div class="col-8"><input type="text" class="form-control" name="capaian_6" id="capaian_6" placeholder="Isikan capaian 2021"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" name="keterangan" placeholder="Tulis keterangan capaian"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success me-2">Simpan Data</button>
                    <button class="btn btn-light">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    function setBidangUrusan() {
        let urusan = $('select[name=urusan]').val();
        let id_skpd = $('#id_skpd').val();
        $('#bidang_urusan').empty();
        $('#bidang_urusan').append('<option  selected="true" disabled="disabled">Pilih Bidang Urusan</option>');
        
        $.ajax({
            method: 'GET',
            url: '/getBidangUrusan/'+urusan,
            success: function (result) {
                $.each( result['data'], function( key, val ) {
                    // console.log(val.nama_kegiatan);
                    $('#bidang_urusan').append('<option value='+val.id+'>'+val.nama_bidang_urusan+'</option>');
                });
                
            } 
        });
    }
    
    function setIndikator() {
        let bidang_urusan = $('select[name=bidang_urusan]').val();
        let id_skpd = $('#id_skpd').val();
        $('#indikator').empty();
        $('#indikator').append('<option  selected="true" disabled="disabled">Pilih Indikator</option>');
        
        $.ajax({
            method: 'GET',
            url: '/getDataIndikatorUtama/'+urusan+'/'+id_skpd,
            success: function (result) {
                $.each( result['data'], function( key, val ) {
                    // console.log(val.nama_kegiatan);
                    $('#indikator').append('<option value='+val.id+'>'+val.indikator_utama+'</option>');
                });
                
            } 
        });
    }
</script>
@endsection