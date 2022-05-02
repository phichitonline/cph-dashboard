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
        SELECT syear,
        SUM(IF(hipdata_code = "OFC",sum_paid_money,null)) AS OFC,
        SUM(IF(hipdata_code = "SSS",sum_paid_money,null)) AS SSS,
        SUM(IF(hipdata_code = "UCS",sum_paid_money,null)) AS UCS,
        SUM(IF(hipdata_code = "LGO",sum_paid_money,null)) AS LGO
        FROM sum_opd
        WHERE syear = "2022"
        GROUP BY syear
        ');

        $test = DB::connection('mysql_hos')->select('
        SELECT code,an,hn FROM h_adp
        ');

        return view('index', [
            'sumopd' => $sumopd,
            'test' => $test,
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
