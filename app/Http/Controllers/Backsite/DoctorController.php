<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;

// request
use App\Http\Requests\Doctor\StoreDoctorRequest;
use App\Http\Requests\Doctor\UpdateDoctorRequest;

// use everything here
use Gate;
use Auth;

//use library
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

// Modal Here;
use App\Models\Operational\Doctor;
use App\Models\MasterData\Specialist;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //for table grid
        $doctor = Specialist::orderBy('created_at', 'desc')->get();

        //for select to = ascending a to z
        $specialist = Specialist::orderBy('name', 'asc')->get();

        return view('pages.backsite.operational.doctor.index', compact('doctor', 'specialist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorRequest $request)
    {
        //for table grid
        $doctor = Specialist::orderBy('created_at', 'desc')->get();

        //for select to = ascending a to z
        $specialist = Specialist::orderBy('name', 'asc')->get();

        alert()->success('Success Message', 'Successfully add new Doctor');
        return view('pages.backsite.operational.doctor.index', compact('doctor', 'specialist'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('pages.backsite.operational.doctor.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //for select to = ascending a to z
        $specialist = Specialist::orderBy('name', 'asc')->get();

        alert()->success('Success Message', 'Successfully edit Doctor');
        return view('pages.backsite.operational.doctor.edit', compact('doctor' ,'specialist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
         $data = $request->all();

        //update to database
        $doctor->update($data);

        alert()->success('Success Message', 'Successfully update Doctor');
        return redirect()->route('backsite.doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        alert()->success('Success Message', 'Successfully Deleted doctor');
        return back();
    }
}
