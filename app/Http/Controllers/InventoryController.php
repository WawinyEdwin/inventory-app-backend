<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inventories = Inventory::latest()->paginate(5);

        return view('inventories.index',compact('inventories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([

            'car_type' => 'required',
            'driver_id' => 'required',
            'driver_name' => 'required',
            'dispatch_time' => 'required',
            'dispatch_date' => 'required',
            'additional_info' => 'required',
            'manufacturer' => 'required',
            'type_of_goods' => 'required',
            'car_plate' => 'required',

        ]);

        $inventory = new Inventory;

        $inventory->car_type = $request->car_type;
        $inventory->driver_id = $request->driver_id;
        $inventory->driver_name = $request->driver_name;
        $inventory->dispatch_time = $request->dispatch_time;
        $inventory->dispatch_date = $request->dispatch_date;
        $inventory->additional_info = $request->additional_info;
        $inventory->manufacturer = $request->manufacturer;
        $inventory->type_of_goods = $request->type_of_goods;
        $inventory->car_plate = $request->car_plate;

        $inventory->save();

        return redirect()->route('inventory')->with('success', 'Inventory added successfully');
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
        $inventory = Inventory::find($id);
        return view('inventories.show', compact('inventory'));
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
        $inventory = Inventory::find($id);
        return view('inventories.edit', compact('inventory'));
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
        $request->validate([

            'car_type' => 'required',
            'driver_id' => 'required',
            'driver_name' => 'required',
            'dispatch_time' => 'required',
            'dispatch_date' => 'required',
            'additional_info' => 'required',
            'manufacturer' => 'required',
            'type_of _goods' => 'required',
            'car_plate' => 'required',

        ]);

        $inventory = new Inventory;

        $inventory->car_type = $request->car_type;
        $inventory->driver_id = $request->driver_id;
        $inventory->driver_name = $request->driver_name;
        $inventory->dispatch_time = $request->dispatch_time;
        $inventory->dispatch_date = $request->dispatch_date;
        $inventory->additional_info = $request->additional_info;
        $inventory->manufacturer = $request->manufacturer;
        $inventory->type_of_goods = $request->type_of_goods;
        $inventory->car_plate = $request->car_plate;

        $inventory->update();

        return redirect()->route('inventory')->with('success', 'Inventory Updated successfully');
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
        $inventory = Inventory::find($id);
        $inventory->delete();

        return redirect()->route('inventory')->with('success', 'Deleted Successfully');
    }
}
