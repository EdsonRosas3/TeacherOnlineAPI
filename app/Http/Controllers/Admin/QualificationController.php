<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Qualification;
use DB;

class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qualifications = Qualification::with('teacher')->get();
        return response()->json(['users'=>$qualifications],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qualification = Qualification::create($request->all());
        return response()->json($qualification,200);
    }

    /**
     * Devuelve el puntage total promediado del teacher.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function generalRating($id)
    {
        $rating=0;
        $qualifications = DB::table('qualifications')
        ->select(DB::raw('*'))
        ->where('teacher_id', '=', $id)
        ->get();
            foreach($qualifications as $qualification){
               $start = $qualification->number_starts;
               $rating+=$start;
            }
        $rating = $rating/sizeof($qualifications);
        return  response()->json(['total_student'=>$rating],200);
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
        $qualification = Qualification::find($id);
        $qualification->update($request->all());
        return response()->json($qualification,200);
    }

}
