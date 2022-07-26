<?php

namespace App\Http\Controllers\SuperAdmin\MasterData;

use App\Http\Controllers\Controller;
use App\Http\Requests\Superadmin\Module\StoreRequest;
use App\Models\SuperAdmin\MasterData\Module;
use App\Models\SuperAdmin\MasterData\Pegawai;
use App\Models\SuperAdmin\MasterData\Role;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_module'] = Module::withCount('role')->get();
        return view('superadmin.master-data.module.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.master-data.module.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $module = new Module;
        $module->name = request('name');
        $module->tag = request('tag');
        $module->app = request('app');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->color = request('color');
        $module->menu = request('menu');
        $module->url = request('url');
        $module->save();

        return redirect('superadmin/master-data/module')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        $data['module'] = $module;
        $data['list_pegawai'] = Pegawai::all();

        return view('superadmin.master-data.module.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        $data['module'] = $module;

        return view('superadmin.master-data.module.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Module $module)
    {
        $module->name = request('name');
        $module->tag = request('tag');
        $module->app = request('app');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->color = request('color');
        $module->menu = request('menu');
        $module->url = request('url');
        $module->save();

        return redirect('superadmin/master-data/module')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $list_role = Role::where('id_module', $module->id)->get();
        if($list_role->count() > 0){
            $list_role->each(function($role){
                $role->delete();
            });
        }

        $module->delete();

        return redirect('superadmin/master-data/module')->with('danger', 'Data berhasil dihapus');
    }

    public function addRole()
    {
        $role = new Role;
        $role->id_pegawai = request('id_pegawai');
        $role->id_module = request('id_module');
        $role->save();

        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function deleteRole(Role $role)
    {
        $role->delete();

        return back()->with('danger', 'Data berhasil dihapus');
    }
}
