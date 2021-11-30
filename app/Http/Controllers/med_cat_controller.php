<?php

namespace App\Http\Controllers;
use App\Models\medicines_category;
use Illuminate\Http\Request;

class med_cat_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $med_cat = medicines_category::all();
        return view('AdminPanel/medicines_category/medicines_category',['med_cat' => $med_cat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel/medicines_category/add_med_cat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        medicines_category::create([
            'med_cat_name' => $request->med_cat_name,
            'med_cat_description' => $request->med_cat_description,
        ]);
        return redirect(route('medicinesCategory.index'));
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
        $med_cat_edit  = medicines_category::where('id' , $id)->first();
        return view('AdminPanel/medicines_category/edit_med_cat',['med_cat_edit' => $med_cat_edit] );
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
        medicines_category::where('id' , $id)->update([

            'med_cat_name' => $request->med_cat_name,
            'med_cat_description' => $request->med_cat_description,
        ]);
        return redirect(route('medicinesCategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        medicines_category::where('id' , $id)->delete();
        return redirect(route('medicinesCategory.index'));
    }
}
