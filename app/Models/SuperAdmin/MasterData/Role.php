<?php

namespace App\Models\SuperAdmin\MasterData;
use App\Models\SuperAdmin\MasterData\Module;
use App\Models\SuperAdmin\MasterData\Pegawai;

use App\Models\Model;

class Role extends Model
{
    protected $table = 'superadmin__role';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'id_module');
    }
}
