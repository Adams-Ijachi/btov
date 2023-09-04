<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAppointmentRequest;
use App\Models\Appointments;
use App\Models\Doctor;
use App\Models\Dog;

class UserAppointmentController extends Controller
{
    public function index()
    {

        return view('components.doctors', [
            'doctors' => \App\Models\Doctor::all(),
        ]);
    }

    // appointment

    public function appointment(Doctor $id)
    {
        return view('components.appointment', [
            'doctor' => $id,
        ]);
    }

    public function details(Doctor $id)
    {
        return view('components.user-details', [
            'doctor' =>$id ,
        ]);
    }

    // book

    public function book(CreateAppointmentRequest $request,Doctor $id)
    {
        $validated  = $request->validated();
        Dog::create([
            'name' => $validated['name'],
            'breed' => $validated['breed'],
            'user_id' => auth()->user()->id,
        ]);
        Appointments::create([
            'details' => $validated['details'],
            'user_id' => auth()->user()->id,
            'doctor_id' => $id->id,
        ]);


        return redirect()->route('doctors');
    }
}
