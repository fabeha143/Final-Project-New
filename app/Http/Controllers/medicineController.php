<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medicines_category;
use App\Models\medicines;

class medicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = medicines::all();
        return view('AdminPanel/medicine/medicine',['medicines' => $medicines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = medicines_category::select('id','med_cat_name')->get();
        
        $medicines_category = array();
        foreach( $items as $item )
        {
            $medicines_category[$item->id] = $item->med_cat_name;
        }
        return view('AdminPanel/medicine/add_medicine',compact('medicines_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        medicines::create([
            'med_name' => $request->med_name,
            'med_company' => $request->med_company,
            'med_expiry' => $request->med_expiry,
            'med_cat' => $request->med_cat,
        ]);
        return redirect(route('medicine.index'));
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
        $medicinesedit  = medicines::where('id' , $id)->first();
        $medicines_category = medicines_category::all();

        $medicinesData = array();
        foreach( $medicines_category as $category )
        {            
            $medicinesData[$category->id] = $category->med_cat_name; 
        }

        return view('AdminPanel/medicine/edit_medicines',compact('medicinesedit','medicinesData') );
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
        medicines::where('id' , $id)->update([
            'med_name' => $request->med_name,
            'med_company' => $request->med_company,
            'med_expiry' => $request->med_expiry,
            'med_cat' => $request->med_cat,
        ]);
        return redirect(route('medicine.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        medicines::where('id' , $id)->delete();
        return redirect(route('medicine.index'));
    }
}
