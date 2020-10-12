<?php

namespace App\Http\Controllers\All;

use App\Models\Comentary;
use Illuminate\Http\Request;
use App\Http\Requests\ComentaryRequest;
use App\Http\Controllers\Controller;

class ComentaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id , ComentaryRequest $request)
    {
        if(!is_null($request->input('comentary'))){
            $comentary = Comentary::create(['user_id' => $request->user()->id, 'post_id' => $id ,'comentary' => $request->input('comentary')]);
            session()->flash('success','Коментарий был успешно добавлен');
        }
        else{
            session()->flash('error','Не удалось добавить коментарий');
        }
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentary  $comentary
     * @return \Illuminate\Http\Response
     */
    public function show(Comentary $comentary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentary  $comentary
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentary $comentary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comentary  $comentary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentary $comentary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentary  $comentary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentary $comentary)
    {
        //
    }
}
