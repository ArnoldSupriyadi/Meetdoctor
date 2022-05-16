<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;

// use everything here
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

//use library
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

// Modal Here;
use App\Models\MasterData\TypeUser;

class TypeUserController extends Controller
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
        abort_if(Gate::denies('type_user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //cara panggil data dengan eloquent
        //1. buat variable dahulu
        $type_user = TypeUser::all();

        return view('pages.backsite.management-access.type_user.index', compact('type_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort (404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\  $
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return abort (404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort (404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort (404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\  $
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return abort (404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort (404);
    }
}
