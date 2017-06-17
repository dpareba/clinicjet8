<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;
use Auth;

class TemplateController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
    $term = $request->term;
    $templates = Template::where('template','LIKE','%'.$term.'%')->where('templatetype','=','cc')->where('user_id','=',Auth::user()->id)->get();
    //return $template;
    
    if (count($templates)==0) {
        $searchResult[] = "No Templates Found";
    }else{
        foreach ($templates as $t) {
            $searchResult[] = $t->template;
        }
    }
    return $searchResult;

    // return $availableTags = [
    // "GENERAL PHYSICAL EXAMINATION: PULSE RATE: 84 / MIN. BLOOD PRESSURE: 130/80 MM HG RIGHT ARM SUPINE POSITION TEMP: NORMAL (AFEBRILE) WEIGHT: 64 KG WELL BUILT, WELL NOURISHED. NO PALLOR, ICTERUS, LYMPHADENOPATHY, RASHES, CYANOSIS OR CLUBBING. PEDAL EDEMA: CVS/RS/PA/CNS: WNL",
    // "MIDDLE AGED MALE KNOWN CASE OF TYPE 2 DIABETES MELLITUS AND HYPERTENSION CAME FOR FOLLOW UP.",
    // $term
    // ];
    
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
