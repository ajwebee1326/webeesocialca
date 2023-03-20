<?php

namespace App\Http\Controllers;

use App\Models\HeaderFooterScript;
use Illuminate\Http\Request;

class HeaderFooterScriptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.header-footer-script.index');
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
     * @param  \App\Models\HeaderFooterScript  $headerFooterScript
     * @return \Illuminate\Http\Response
     */
    public function show(HeaderFooterScript $headerFooterScript)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeaderFooterScript  $headerFooterScript
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $script = HeaderFooterScript::first();
        return view('admin.header-footer-script.edit', compact('script'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeaderFooterScript  $headerFooterScript
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $script = HeaderFooterScript::first();
        if($script == null){
            $script = new HeaderFooterScript();
        }

        $script->header_script = $request->header_script;
        $script->footer_script = $request->footer_script;
        $script->save();
        return redirect()->route('header-footer-script.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeaderFooterScript  $headerFooterScript
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeaderFooterScript $headerFooterScript)
    {
        //
    }
}
