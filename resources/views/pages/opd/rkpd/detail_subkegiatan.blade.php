<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-bordered" width="100%" cellspacing="0">
          <tbody>
              <tr>
                  <th style="width: 50%">Nama Sub-Kegiatan</th>
                  <td id="nama_sub_keg"></td>
              </tr>
              <tr>
                  <th>Indikator Kegiatan</th>
                  <td id="indikator_sub_keg"></td>
              </tr>
              <tr>
                  <th>Pagu Anggaran</th>
                  <td id="pagu_indikatif_sub_keg_1"></td>
                </tr>
                <tr>
                <th>Prakiraan Maju</th>
                  <td id="prakiraan_maju_sub_keg_1"></td>
              </tr>
              <tr>
                  <th>Target</th>
                  <td id="target_sub_keg_1"></td>
                </tr>
                <tr>
                <th>Kinerja</th>
                  <td id="kinerja_sub_keg_1_1"></td>
              </tr>
              <tr>
                  <th>Realisasi</th>
                  <td id="realisasi_sub_keg_1_1"></td>
                </tr>
                <tr>
                  <th>Serapan</th>
                  <td id="serapan_sub_keg_1_1"></td>
              </tr>
              <tr>
                  <th>Masalah</th>
                  <td id="masalah_sub_keg_1_1"></td>
                </tr>
                <tr>
                  <th>Solusi</th>
                  <td id="solusi_sub_keg_1_1"></td>
              </tr>
              <tr>
                <th>P-APBD</th>
                <td id="papbd_sub_keg"></td>
            </tr>
            <tr>
                <th>Prioritas Nasional (*)</th>
                <th id="prioritas_nasional"></th>
            </tr>
          </tbody>
          </table>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<script>
  function insertText ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12) {
      document.getElementById('nama_sub_keg').innerHTML = $1;
      document.getElementById('indikator_sub_keg').innerHTML = $2;
      document.getElementById('target_sub_keg_1').innerHTML = $3;
      document.getElementById('pagu_indikatif_sub_keg_1').innerHTML = $4;
      document.getElementById('prakiraan_maju_sub_keg_1').innerHTML = $5;
      document.getElementById('realisasi_sub_keg_1_1').innerHTML = $6;
      document.getElementById('serapan_sub_keg_1_1').innerHTML = $7;
      document.getElementById('kinerja_sub_keg_1_1').innerHTML = $8;
      document.getElementById('masalah_sub_keg_1_1').innerHTML = $9;
      document.getElementById('solusi_sub_keg_1_1').innerHTML = $10;
      document.getElementById('papbd_sub_keg').innerHTML = $11;
      document.getElementById('prioritas_nasional').innerHTML = $12;
  }
</script>