<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAppointmentRequest;
use App\Models\Appointments;
use App\Models\Doctor;
use App\Models\Dog;
use Illuminate\Http\Request;

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

    public function book(Request $request,Doctor $id)
    {

        $validated  = $request->all();

        Dog::create([
            'name' => $validated['name'],
            'breed' => $validated['breed'],
            'weight' => $validated['weight'],
            'date_of_birth' => $validated['dob'],
            'gender' => $validated['gender'],
            'user_id' => auth()->user()->id,
        ]);
        Appointments::create([
            'details' => $validated['details'],
            'had_surgery' => $validated['had_surgery'],
            'had_medications' => $validated['had_medications'],
            'had_examinations' => $validated['had_examinations'],
            'user_id' => auth()->user()->id,
            'doctor_id' => $id->id,
        ]);


        return redirect()->route('doctors');
    }

    // search

    public function search()
    {
        $search = request()->query('search');

        if ($search) {
            $doctors = Doctor::where('name', 'LIKE', "%{$search}%")->get();
        } else {
            $doctors = Doctor::all();
        }
        return view('components.doctors', [
            'doctors' => $doctors,
        ]);
    }

    // sort

    public function orderDoctors()
    {

        $order = request()->query('order');


        $doctors =  Doctor::all();

        if ($order == "rating") {
            $doctors = Doctor::orderBy('rating', 'desc')->get();
        }
        if ($order == "price") {
            $doctors = Doctor::orderBy('price', 'desc')->get();
        }
        if ($order == "distance") {
            $doctors = Doctor::orderBy('location', 'desc')->get();
        }
        if ($order == "exp") {
            $doctors = Doctor::orderBy('experience', 'desc')->get();
        }


//
        return view('components.doctors', [
            'doctors' => $doctors,
        ]);
    }
}
