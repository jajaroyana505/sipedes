<!-- <h3 class="text-gray-800">Formulir Surat Keterangan Domisili</h3> -->
<div class="row d-flex justify-content-around ">

    <div class="card bg-white text-gray-800 col-sm-5 mt-4 ">
        <h5 class="card-header bg-white">Persyaratan </h5>
        <div class="card-body">
            <p class="card-text">Berikit ini adalah persyarata-persyaratan yang harus disiapkan dalam pengajuan surat keterangan domisili :</p>
            <ol>
                <li>Pasfoto 3x4 (background merah)</li>
                <li>Scan Surat pengantar dari RT dan RW <a href="">Download</a></li>
                <li>Scan Kartu Tanda Penduduk (KTP)</li>
                <li>Scan Kartu Keluarga (KK)</li>
                <li>Scan Surat permohonan yang menunjukkan keabsahan dokumen (ditandatangani di atas materai Rp6.000) <a href="">Download</a></li>
            </ol>
            <small>
                catatan : <br>
                * semua persyaratan diatas harus berbentuk file "jpg/jpeg/png"
            </small>
        </div>
    </div>

    <div class="card bg-white text-gray-800 col-sm-6 mt-4">
        <h5 class="card-header bg-white">Formulir Pengajuan </h5>
        <div class="card-body">
            <form action="<?= base_url('surat'); ?>">
                <h5 class="mb-3">Data Pribadi</h5>
                <div class="row mb-3">
                    <div class="col-sm-5">
                        <label class="form-label">Nama Lengkap :</label>
                        <input class="form-control type=" text" value="Muhammad Jaja Royana" disabled readonly>
                    </div>
                    <div class="col-sm-5">
                        <label class="form-label">NIK :</label>
                        <input class="form-control" type="text" value="32130504******99" disabled readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-5">
                        <label class="form-label">Tempat / Tanggal Lahir :</label>
                        <input class="form-control" type="text" value="Subang, 4 Maret 2008" disabled readonly>
                    </div>
                    <div class="col-sm-5">
                        <label class="form-label">Jenis Kelamin :</label>
                        <input class="form-control" type="text" value="Subang, 4 Maret 2001" disabled readonly>
                    </div>
                </div>
                <h5 class="mb-3 mt-5">Upload Persyaratan</h5>
                <div class="row mb-3">
                    <div class="col-sm-5">
                        <label for="formFileSm" class="form-label">Pasfoto 3x4</label>
                        <input class="form-control form-control" id="formFileSm" type="file">
                    </div>
                    <div class="col-sm-5">
                        <label for="formFileSm" class="form-label">Surat Pengantar RT dan RW</label>
                        <input class="form-control form-control" id="formFileSm" type="file">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-5">
                        <label for="formFileSm" class="form-label">Scan KTP</label>
                        <input class="form-control form-control" id="formFileSm" type="file">
                    </div>
                    <div class="col-sm-5">
                        <label for="formFileSm" class="form-label">Scan KK</label>
                        <input class="form-control form-control" id="formFileSm" type="file">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-5">
                        <label for="formFileSm" class="form-label">Scan Keabsahan Dokumen</label>
                        <input class="form-control form-control" id="formFileSm" type="file">
                    </div>
                </div>
                <div class="d-grid gap-2 mt-5">
                    <button class="btn-block btn btn-primary" type="submit">Krim</button>
                </div>

            </form>
        </div>
    </div>
</div>