<?php

namespace App\Http\Controllers;

use App\Models\Voice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$voice = Voice::all();
        // return pages of the voices
        $voice = DB::table('voices')->select('id', 'voice')->paginate(10);
        //$voice = DB::table('voices')->get();
        return $voice;
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
     * @param  \App\Models\Voice  $voice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //$currentVoice = DB::table('voices')->where('id', $id)->value($id);
        //$currentVoice = DB::table('voices')->where('id', '==', $id);
        $voice = DB::table('voices')->select('id', 'voice')->where('id', '=', $id)->get();
        //$voice = DB::table('voices')->where('id', '=', $id)->get(['id', 'voice']);
        return $voice;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voice  $voice
     * @return \Illuminate\Http\Response
     */
    public function edit(Voice $voice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voice  $voice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voice $voice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voice  $voice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voice $voice)
    {
        //
    }
}
