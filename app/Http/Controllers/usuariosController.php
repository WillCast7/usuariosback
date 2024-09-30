<?php

namespace App\Http\Controllers;

use App\Models\UsuariosModel;
use Exception;
use Illuminate\Http\Request;

class UsuariosController extends BasadoController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        $itemsPerPage = $request->itemsPerPage;
        $activePage = $request->activePage;
        $searched = $request->searched;
        $valueSearch = $request->valueSearch;
        try {
            if($itemsPerPage && $activePage){
                $offset = ($activePage - 1) * $itemsPerPage;
                if($searched != 'false' && $valueSearch != 'null'){
                    $dataResult = UsuariosModel::getPaginatedUsuarios(
                        $itemsPerPage,
                        $offset,
                        $searched,
                        $valueSearch
                    );
                    $totalFields= UsuariosModel::getTotalUsuarios(
                        $searched,
                        $valueSearch
                        )[0];
                    } else{
                        $dataResult = UsuariosModel::getPaginatedUsuarios(
                            $itemsPerPage,
                            $offset
                        );
                        $totalFields= UsuariosModel::getTotalUsuarios()[0];
                }
                
                $totalPages = $totalFields->total/$itemsPerPage;
                
                if ($totalPages != floor($totalPages)) {
                    $totalPages = intval($totalPages)+1;
                } else {
                    $totalPages = intval($totalPages);
                }

                $data = $dataResult;
                $params[0] = $totalPages;
                $params[1] =  $totalFields->total;
                return $this->returnData($data, $params);
            }else{
                return $this->returnError('Faltan parametros en la consulta', 400, "Faltan parametros en la consulta");
            }
        } catch (Exception $error){
            return $this->returnError('Error consultando los datos', 400, $error);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
       //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id){
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
