<?php

namespace App\Http\Controllers\SuperAdmin\MasterData;

use App\Http\Controllers\Controller;
use App\Http\Requests\Superadmin\Pegawai\StoreRequest;
use App\Http\Requests\Superadmin\Pegawai\UpdateRequest;
use App\Models\SuperAdmin\MasterData\Pegawai;
use App\Models\SuperAdmin\MasterData\Role;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('superadmin.master-data.pegawai.index', $data);
    }

    public function create()
    {
        return view('superadmin.master-data.pegawai.create');
    }

    public function store(StoreRequest $request)
    {
        $pegawai = new Pegawai;
        $pegawai->status_pegawai = request('status_pegawai');
        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->agama = request('agama');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->no_hp = request('no_hp');
        $pegawai->username = request('username');
        $pegawai->email = request('email');
        $pegawai->password = request('password');
        $pegawai->save();

        $pegawai->handleUploadFoto();

        return redirect('superadmin/master-data/pegawai')->with('success', 'Data berhasil ditambahkan');
    }

    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('superadmin.master-data.pegawai.show', $data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('superadmin.master-data.pegawai.edit', $data);
    }

    public function update(Pegawai $pegawai)
    {
        $pegawai->status_pegawai = request('status_pegawai');
        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->agama = request('agama');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->no_hp = request('no_hp');
        $pegawai->username = request('username');
        $pegawai->email = request('email');
        if(request('password')) $pegawai->password = request('password');
        $pegawai->save();

        if(request('foto')) $pegawai->handleUploadFoto();

        return redirect('superadmin/master-data/pegawai')->with('success', 'Data berhasil diedit');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->handleDelete();

        $list_role = Role::where('id_pegawai', $pegawai->id)->get();
        if($list_role->count() > 0){
            $list_role->each(function($role){
                $role->delete();
            });
        }

        $pegawai->delete();

        return redirect('superadmin/master-data/pegawai')->with('danger', 'Data berhasil dihapus');
    }
}
