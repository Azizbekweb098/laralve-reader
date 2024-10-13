<?php

namespace App\Http\Controllers;

use App\Models\ReaderTwo;
use Illuminate\Http\Request;

class ReaderTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $readerTwo = ReaderTwo::all();
     return view('rdrtwo.index', ['rdrtwo' => $readerTwo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('rdrtwo.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       ReaderTwo::create($request->all());
      return  redirect()->route('rdrtwo.index');
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
        $readerTwo = ReaderTwo::find($id);
        return view('rdrtwo.update', ['rdrtwo' => $readerTwo]);
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
        $readerTwo = ReaderTwo::find($id);
        $readerTwo->update($request->all());
        return redirect()->route('rdrtwo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $readerTwo = ReaderTwo::find($id);
        if($readerTwo){
            $readerTwo->delete();
        }
        return redirect()->route('rdrtwo.index');
    }
}
