<h1>Daftar Pengajuan Surat</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jenis Surat</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>12-12-2022</td>
            <td>Surat Keteranagn Domisili</td>
            <td>
                <span class="badge badge-danger">Menunggu</span>
            </td>
            <td>
                <i class="fa-solid fa-xmark"></i>
            </td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <th scope="row">2</th>
            <td>12-01-2022</td>
            <td>Surat Keteranagn Penghasilan Orangtua</td>
            <td>
                <span class="badge badge-success">Terverivikasi</span>

            </td>
            <td>
                <a href="<?= base_url('pengajuan/detail_pengajuan'); ?>">
                    <span class="btn btn-success">Lihat</span>
                </a>
                <a href="<?= base_url('pengajuan/print_pdf'); ?>">
                    <span class="btn btn-primary">Download
                        <i class="fa-solid fa-download"></i>
                    </span>
                </a>
            </td>
        </tr>

    </tbody>
</table>