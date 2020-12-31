<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Smartphone::select('smartphones.*', 'brands.name AS brand_name')
                        ->join('brands', 'brands.id', '=', 'smartphones.brand_id')
                        ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'brand_id' => 'required',
            'name' => 'required',
            'release_date' => 'required|date',
            'size' => 'required',
            'weight' => 'required',
            'screen_size' => 'required',
            'processor' => 'required',
            'image' => 'required',
        ]);

        // If validation fails, return with an error in this point

        // Else, returns created item
        return Smartphone::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function show(Smartphone $smartphone)
    {
        $smartphone->brand_name = $smartphone->brand->name;
        unset($smartphone->brand);
        return $smartphone;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function edit(Smartphone $smartphone)
    {
        $smartphone->brand_name = $smartphone->brand->name;
        unset($smartphone->brand);
        return $smartphone;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Smartphone $smartphone)
    {
        $data = $request->validate([
            'brand_id' => 'required',
            'name' => 'required',
            'release_date' => 'required|date',
            'size' => 'required',
            'weight' => 'required',
            'screen_size' => 'required',
            'processor' => 'required',
            'image' => 'required',
        ]);

        $smartphone->update($data);
        
        return Smartphone::find($smartphone->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Smartphone  $smartphone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Smartphone $smartphone)
    {
        $smartphone->delete();
    }
}
