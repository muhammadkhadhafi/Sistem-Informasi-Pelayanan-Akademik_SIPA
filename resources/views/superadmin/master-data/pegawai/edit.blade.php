<x-module.superadmin>
    <x-template.button.back-button url="superadmin/master-data/pegawai" />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url("public/$pegawai->foto") }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Edit Data Pegawai
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('superadmin/master-data/pegawai', $pegawai->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">NIP</label>
                                    <input type="text" name="nip" value="{{ $pegawai->nip }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nama Lengkap</label>
                                    <input type="text" name="nama" value="{{ $pegawai->nama }}"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Status</label>
                                    @if ($errors->has('status_pegawai'))
                                        <label for=""
                                            class="label text-danger">{{ $errors->get('status_pegawai')[0] }}</label>
                                    @endif
                                    <select name="status_pegawai" class="form-control" required>
                                        <option selected>{{ $pegawai->status_pegawai }}</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Kepala BAAK">Kepala BAAK</option>
                                        <option value="Perpustakaan">Perpustaan</option>
                                        <option value="Jurusan">Jurusan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Agama</label>
                                    <select name="agama" class="form-control" required>
                                        <option selected>{{ $pegawai->agama }}</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" required>
                                        <option selected>{{ $pegawai->jenis_kelamin }}</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control"
                                        value="{{ $pegawai->tempat_lahir }}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control"
                                        value="{{ $pegawai->tanggal_lahir }}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">No. Handphone</label>
                                    <input type="number" name="no_hp" class="form-control"
                                        value="{{ $pegawai->no_hp }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Foto</label>
                                    <input type="file" name="foto" accept=".jpg, .png, .jpeg"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Username</label>
                                    <input type="text" name="username" class="form-control"
                                        value="{{ $pegawai->username }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Email</label>
                                    <input type="text" name="email" class="form-control"
                                        value="{{ $pegawai->email }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-dark float-right"><i class="far fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-module.superadmin>
