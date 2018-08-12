<?php

namespace Sistac\Http\Controllers;

use Illuminate\Http\Request;

use Sistac\Http\Requests;
use Sistac\Http\Controllers\Controller;
use Sistac\Activity;
use Sistac\Progress;
use Datatables;
use DB;

class dashboardController extends Controller
{

    public function getUnfinishedActivities()
    {
        $unfinishedActivities =  DB::select("SELECT
                        activity.id,
                        users.seudonimo AS personalAsignado,
                        activity.seudoAsignador AS persAsignador,
                        activity.tarea,
                        activity.ticketReferencia,
                        activity.fechaInicioTarea,
                        progress.porcentaje
                    FROM
                        activity
                    JOIN progress ON progress.id =(
                        SELECT
                            id
                        FROM
                            progress
                        WHERE
                            progress.idTarea = activity.id
                        ORDER BY
                            id
                        DESC
                    LIMIT 1
                    )
                    JOIN users ON activity.idPersonalAsignado = users.id
                    WHERE
                        progress.porcentaje < 100");

        return $unfinishedActivities;                  
    }

    public function getFinishedActivities()
    {
        
        // $finishedActivities =  DB::select("");
        // return $finishedActivities;                  
    }


    public function getDateMain()
    {
        setlocale(LC_TIME, 'spanish');
        $fecha = strftime("%A, %d de %B de %Y");        
        return $fecha;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dateMain = $this->getDateMain();
        $unfinishedActivities = $this->getUnfinishedActivities();
        // $finishedActivities = $this->getFinishedActivities();
        return view("dashboard.index",compact('unfinishedActivities','dateMain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    //   $source = Activity::All();
       //  return Datatables::of($source)
      //                    ->make(true);
/*
        $source =  DB::select("SELECT
                        activity.id,
                        users.seudonimo AS personalAsignado,
                        activity.seudoAsignador AS persAsignador,
                        activity.tarea,
                        activity.ticketReferencia,
                        activity.fechaInicioTarea,
                        progress.porcentaje
                    FROM
                        activity
                    JOIN progress ON progress.id =(
                        SELECT
                            id
                        FROM
                            progress
                        WHERE
                            progress.idTarea = activity.id
                        ORDER BY
                            id
                        DESC
                    LIMIT 1
                    )
                    JOIN users ON activity.idPersonalAsignado = users.id
                    WHERE
                        progress.porcentaje < 100");
*/

    //    dd($source);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
