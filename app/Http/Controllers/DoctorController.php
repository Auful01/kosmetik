<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctor::all();
        // return $doctor;
        // $schedule = Schedule::with('doctor')->where('doctor_id', $doctor->id)->get();
        return view('admin.doctor', ['doctor' => $doctor]);
    }

    public function indexUser()
    {
        $doctor = Doctor::all();
        return view('user.doctor', ['doctor' => $doctor]);
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
        if ($request->file('photo') != null) {
            $img_name = $request->file('photo')->store('photo', 'public');
        } else {
            $img_name = file_get_contents(asset('images/no-profile.png'));
        }
        $doctor = Doctor::create([
            'name' => $request->name,
            'specialist' => $request->specialist,
            'description' => $request->description,
            'price' => $request->price,
            'photo' => $img_name,
        ]);

        Schedule::create([
            'doctor_id' => $doctor->id,
        ]);

        // return $doctor;
        return redirect()->route('doctor-list.index');
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
        // return $request;
        $doctor = Doctor::find($id);
        // return $request->file('photo');
        // if ($doctor->photo != null) {
        // }

        if ($request->file('photo') != null) {
            Storage::delete('storage/' . $doctor->photo);
            $img_name = $request->file('photo')->store('photo', 'public');
        } else {
            $img_name = $doctor->photo;
        }

        $doctor->name = $request->name;
        $doctor->specialist = $request->specialist;
        $doctor->description = $request->description;
        $doctor->price = $request->price;
        $doctor->photo = $img_name;
        $doctor->save();
        // return $doctor;

        return redirect()->route('doctor-list.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::find($id)->delete();

        return redirect()->route('doctor-list.index');
    }
}
