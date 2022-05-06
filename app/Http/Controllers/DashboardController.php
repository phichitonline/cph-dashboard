<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sumopd = DB::connection('mysql')->select('
        SELECT s_year
        ,SUM(IF(hipdata_code IN ("OFC","BKK"),s_uc_money,NULL)) AS OFC
        ,SUM(IF(hipdata_code IN ("SSS","SI"),s_uc_money,NULL)) AS SSS
        ,SUM(IF(hipdata_code = "UCS",s_uc_money,NULL)) AS UCS
        ,SUM(IF(hipdata_code = "LGO",s_uc_money,NULL)) AS LGO
        ,SUM(IF(hipdata_code IN ("NRD","ST"),s_uc_money,NULL)) AS NRD
        ,SUM(IF(hipdata_code NOT IN ("OFC","BKK","SSS","SI","NRD","ST","UCS","LGO"),s_uc_money,NULL)) AS OTHER

        FROM sumary_opd

        WHERE s_year = "2022"

        GROUP BY s_year
        ');

        // $test = DB::connection('mysql_hos')->select('
        // SELECT code,an,hn FROM h_adp
        // ');

        return view('index', [
            'sumopd' => $sumopd,
            // 'test' => $test,
        ]);
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
    public function show($id)
    {
        //
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
