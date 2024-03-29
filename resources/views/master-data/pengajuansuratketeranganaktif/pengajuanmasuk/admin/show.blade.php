<x-module.pengajuansuratketeranganaktif.admin>
    <x-template.button.back-button url="pengajuansuratketeranganaktif/admin/pengajuanmasuk" />
    <div class="card">
        <div class="card-header">
            {{-- Revisi Bulan 29 Desember 2022 --}}
            <form action="{{ url('pengajuansuratketeranganaktif/admin/pengajuanmasuk', $pengajuansuratketeranganaktif->id) }}" method="post"
                onsubmit="return confirm('Yakin ingin menghapus pengajuan ini?')">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i></button>
            </form>
            {{-- End Revisi --}}
            <a href="{{ url('pengajuansuratketeranganaktif/admin/pengajuanmasuk', $pengajuansuratketeranganaktif->id) }}/tolak"
                class="btn btn-warning btn-sm float-right"><i class="fas fa-times"></i> Tolak</a>
            <form
                action="{{ url('pengajuansuratketeranganaktif/admin/pengajuanmasuk/setuju', $pengajuansuratketeranganaktif->id) }}"
                method="post" onsubmit="return confirm('Yakin ingin menyetujui pengajuan ini?')">
                @csrf
                @method('put')
                <button class="btn btn-primary btn-sm float-right"><i class="fas fa-check"></i>
                    Setuju</button>
            </form>
            <div class="card-title">Detail Pengajuan Surat Keterangan Aktif</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama Lengkap</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->nama }}</dd>
                        <dt>NIM</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->nim }}</dd>
                        <dt>Program Studi</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->program_studi }}</dd>
                        <dt>Tahun Masuk</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->angkatan }}</dd>
                        <dt>Jenis Kelamin</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->jenis_kelamin }}</dd>
                        <dt>Semester</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->semester }}</dd>
                        <dt>No. Handphone</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->no_telepon }}</dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    <dl>
                        <dt>Tempat Lahir</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->tempat_lahir }}</dd>
                        <dt>Tanggal Lahir</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->mahasiswa->tanggal_lahir_string }}</dd>
                        <dt>Alamat Rumah Sekarang</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->alamat_rumahsekarang }}</dd>
                        <dt>Nama Orang Tua</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->nama_orangtua }}</dd>
                        <dt>Tempat Kerja Orang Tua</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->tempat_kerja_orangtua }}</dd>
                        <dt>Alamat Tinggal Orang Tua</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->alamat_tinggal_orangtua }}</dd>
                        <dt>Tanggal Pengajuan</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->tanggal_pengajuan_string }}</dd>
                    </dl>
                </div>
                <div class="col-md-12">
                    <dl>
                        <dt>Keperluan</dt>
                        <dd>{{ $pengajuansuratketeranganaktif->keperluan }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-module.pengajuansuratketeranganaktif.admin>
