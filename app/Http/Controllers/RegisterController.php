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
            $key = Session::get('key');
            $profile = Register::where('transaction_id', $key)->first();
            $title = 'Register';
            if (! empty($profile) && $key == $profile->transaction_id) {
                Session::flash('message', 'You have successfully registered. You can edit your profile by clicking on edit Button');
                return view('user.create', compact('title','profile'));
            }

            return view('user.create', compact('title','profile'));
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
            $transaction_id = Session::get('key');
            $request['transaction_id'] = $transaction_id;
            $register = Register::create($request->all());

            if ($register->email) {
                //sending email to the user
                Mail::send('email.success', ['user' => $register], function ($m) use ($register) {
                    $m->from('oparannabueze@gmail.com', 'Dolce Registration');
                    $m->to($register->email, $register->first_name)->subject('Dolce Registration Successful!');
                });

                Session::flash('message', 'You have successfully Registered');
                return redirect('register/user');
            } else {
                Session::flash('message', 'Oops!! Registration Failed');
                return redirect('register/user');
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
    public function update(Request $request, $id) {
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

    public function contact() {
        $title = 'Contact Page';
        return view('user.contact', compact('title'));
    }

    /*
     * Getting user profile
     */

    public function profile() {
        if (Session::get('key')) {
            $key = Session::get('key');
            $title = 'Edit Profile';
            $profile = Register::where('transaction_id', $key)->first();
            return view('user.profile', compact('title', 'profile'));
        } else {
            return redirect('/');
        }
    }

    public function profileUpdate(RegisterRequest $request) {
        if (Session::get('key')) {
            $id = Session::get('key');
            $profile = Register::where('transaction_id', $id)->first();
            $profile->update($request->all());
            Session::flash('message', 'You have sucefully updated your record');
            return redirect('/register/profile');
        } else {
            return redirect('/');
        }
    }
    /*
     * Dispalys about us page
     * 
     */
    public function about(){
        $title = 'About Page';
        return view('user.about', compact('title'));
    }

}
