<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Session;
use App\Register;
use Redirect;
use App\Http\Requests;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Controller;

class RegisterController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        $title = 'Homepage';
        return view('user.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
        if (Session::get('key')) {
            $title = 'Register';
            return view('user.create', compact('title'));
        } else {
            return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(RegisterRequest $request) {  //make request RegisterRequest
        if (Session::get('key')) {
            $register = Register::create($request->all());

            if ($register->email) {
                //send email to use
                Mail::send('emails.success', ['user' => $register], function ($m) use ($register) {
                    $m->from('hello@app.com', 'Dolce Registration');

                    $m->to($register->email, $register->first_name)->subject('Registration Successful!');
                });

                Session::flash('message', 'You have sucefully Registered');
                return redirect('register/create');
            } else {
                Session::flash('message', 'Oops!! Registration Failed');
                return redirect('register/create');
            }
        } else {
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show() {
        //
        $title = 'Identification page';
        return view('user.show', compact('title'));
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

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function login(Request $request) {

        $reg = Register::where('email', $request['email'])->first();

        if ($reg['email'] == $request['email']) {
            Session::put('key', '$reg->email');
            return redirect('register/user');
        } else {
            Session::flash('message', 'Invalid identifiction');
            return redirect('/register');
        }
    }

    public function logout() {
        Session::forget('key');
        return redirect('/');
    }

}
