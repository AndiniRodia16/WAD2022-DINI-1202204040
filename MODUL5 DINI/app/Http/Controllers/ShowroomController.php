<?php

namespace App\Http\Controllers;

use App\Models\Showrooms;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function index()
    {
        $cars = Showrooms::where('user_id', auth()->user()->id)->get();
        return view('showroom.myCar', [
            'cars' => $cars
        ]);
    }

    public function create()
    {
        return view('showroom.addCar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'owner' => 'required|string',
            'brand' => 'required|string',
            'purchase_date' => 'required|date',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'status' => 'required',
        ]);

        $car = new Showrooms();

        $car->user_id = auth()->user()->id;
        $car->name = $request->name;
        $car->owner = $request->owner;
        $car->brand = $request->brand;
        $car->purchase_date = $request->purchase_date;
        $car->description = $request->description;
        if (!empty($request->image)) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/'), $filename);
            $car->image = 'uploads/' . $filename;;
        }
        $car->status = $request->status;
        $car->save();


        return redirect(route('new-car'))->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        $car = Showrooms::find($id);
        return view('showroom.showCar', [
            'car' => $car
        ]);
    }

    public function edit($id)
    {
        $car = Showrooms::find($id);
        return view('showroom.edit', [
            'car' => $car
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'owner' => 'required|string',
            'brand' => 'required|string',
            'purchase_date' => 'required|date',
            'description' => 'required',
            'status' => 'required',
        ]);

        $car = Showrooms::find($id);

        $car->user_id = auth()->user()->id;
        $car->name = $request->name;
        $car->owner = $request->owner;
        $car->brand = $request->brand;
        $car->purchase_date = $request->purchase_date;
        $car->description = $request->description;
        if (!empty($request->image)) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/'), $filename);
            $car->image = 'uploads/' . $filename;;
        } else {
            $car->image = $car->image;
        }
        $car->status = $request->status;
        $car->save();

        return redirect(route('my-car.show', $id))->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $car = Showrooms::find($id);
        $car->delete();
        return redirect(route('my-car'))->with('success', 'Data berhasil dihapus');
    }
}
