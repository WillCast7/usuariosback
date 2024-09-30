<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsuariosModel extends Model{
    use HasFactory;

    public static function getPaginatedUsuarios($itemsPerPage, $offset, $searched = null, $valueSearch = null){
        $sql = "SELECT id, nombre, usuario, correo, telefono FROM usuarios";

        if ($searched && $valueSearch) {
            $sql .= " WHERE nombre LIKE '%{$valueSearch}%' OR
                usuario LIKE '%{$valueSearch}%' OR
                correo LIKE '%{$valueSearch}%'";

                if(is_numeric($valueSearch)){
                    $sql .= " OR id = '{$valueSearch}'
                     OR telefono = '{$valueSearch}'";
                }
        }

        $sql .= " ORDER BY id ASC
            LIMIT {$itemsPerPage}
            OFFSET {$offset}";

        return DB::select($sql);
    }

    public static function getTotalUsuarios($searched = null, $valueSearch = null ){
        $sql=  "SELECT COUNT(*) as total FROM usuarios ";

        if ($searched && $valueSearch) {
            $sql .= " WHERE nombre LIKE '%{$valueSearch}%' OR
                usuario LIKE '%{$valueSearch}%' OR
                correo LIKE '%{$valueSearch}%'";

                if(is_numeric($valueSearch)){
                    $sql .= " OR id = '{$valueSearch}'
                     OR telefono = '{$valueSearch}'";
                }
        }


        return DB::select($sql);
    }
    
}
