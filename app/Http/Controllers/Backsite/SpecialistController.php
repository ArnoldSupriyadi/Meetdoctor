<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;

// request
use App\Http\Requests\Specialist\StoreSpecialistRequest;
use App\Http\Requests\Specialist\UpdateSpecialistRequest;

// use Gate;
use Auth;

//use library
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

// Modal Here;
use App\Models\MasterData\Specialist;

class SpecialistController extends Controller
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
        $specialist = Specialist::orderBy('created_at', 'desc')->get();

        dd($specialist);

        return view('pages.backsite.master-data.specialist.index', compact('specialist'));
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

     //kalau request doang ga validasinya makanya di ganti request dengan yang kita buat
    public function store(StoreSpecialistRequest $request)
    {
        //get all request from fromsite
        $data = $request->all();


        //kalau all() ambil semua data 
        // kalau mau spesific pake array  $request->price() atau ['price']

        //store to database
        $specialist = Specialist::create($data);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
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
    }
}
