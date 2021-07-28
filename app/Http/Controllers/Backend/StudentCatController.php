<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentCatStoreRequest;
use App\Models\StudentCategory;
use Illuminate\Http\Request;

class StudentCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $studentcats=StudentCategory::all();
        return view('studentcats.index',compact('studentcats'));
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
    public function store(StudentCatStoreRequest $request)
    {
        //
        StudentCategory::create($request->validated());
        return redirect()->route('studentcats.index')->with('message','Student category created successfully');
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
    public function edit(StudentCategory $studentcat)
    {
        //
        return view('studentcats.edit',compact('studentcat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentCatStoreRequest $request, StudentCategory $studentcat)
    {
        //
        $studentcat->update([
            "name"=>$request->name
        ]);
        return redirect()->route('studentcats.index')->with('message','Student category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentCategory $studentcat)
    {
        //
        $studentcat->delete();
        return redirect()->route('studentcats.index')->with('message','Student category deleted successfully');
    }
}
