<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Session;
use App\Role;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RoleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
        if (Auth::Check() && Auth::user()->role == 'admin') {
            $title = 'Admin';
            return view('admin.role', compact('title'));
        } elseif (Auth::Check()) {
            return redirect('admin/dashboard');
        } else {
            return redirect('admin');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        //
        if (Auth::Check() && Auth::user()->role == 'admin') {
            Role::create($request->all());
            Session::flash('message', 'You have successfully created a role');
            return redirect('role/create');
        } elseif (Auth::Check()) {
            return redirect('admin/dashboard');
        } else {
            return redirect('admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
