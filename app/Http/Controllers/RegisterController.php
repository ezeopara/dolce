<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Session;
use App\Register;
use App\Image;
use Redirect;
use App\Http\Requests;
use App\Http\Requests\EditRegisterRequest;
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
            if (!empty($profile) && $key == $profile->transaction_id) {
                Session::flash('message', 'You have successfully registered. You can edit your profile by clicking on edit Button.');
                return view('user.create', compact('title', 'profile'));
            }

            return view('user.create', compact('title', 'profile'));
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
        //check if user is login 
        if (Session::get('key')) {
            if (!$request->hasFile('image')) {
                Session::flash('message', 'You have to upload Passport Photograph');
                return redirect('register/user');
            }
            $request['transaction_id'] = Session::get('key');
            $register = Register::create($request->all());

            //Upload image
            $this->imageUpload($request, $register);

            if (!$register->email) {
                Session::flash('message', 'Oops!! Registration Failed');
                return redirect('register/user');
            }
            //sending email to the user
            $this->sendMail($register);


            Session::flash('message', 'You have successfully Registered! Please printout this page for record purposes');
            return redirect('register/success');
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

    public function profileUpdate(EditRegisterRequest $request) {
        if (Session::get('key')) {
            $id = Session::get('key');
            $register = Register::where('transaction_id', $id)->first();
            //updating the image table about the image update
            $register->update($request->all());
            
            Session::flash('message', 'You have succefully updated your record');
            return redirect('/register/success');
        } else {
            return redirect('/');
        }
    }

    /*
     * Dispalys about us page
     * 
     */

    public function about() {
        $title = 'About Page';
        return view('user.about', compact('title'));
    }

    /*
     * Upload image
     */

    private function imageUpload($request, $register) {
        //upload image
        $file = $request->file('image');
        $filename = $file->getFilename() . '.' . $file->getClientOriginalExtension();
        $mime = $file->getClientMimeType();
        $originalFilename = $file->getClientOriginalName();
        $file = $file->move(public_path() . '/uploads/', $filename);

        //save image name to the database
        $image = new Image(['filename' => $filename, 'mime' => $mime, 'original_filename' => $originalFilename]);
        $image->register()->associate($register->id);
        $image->save();
    }

   

    /*
     * Send email
     */

    private function sendMail($register) {
        Mail::send('email.success', ['user' => $register], function ($m) use ($register) {
            $m->from('oparannabueze@gmail.com', 'Dolce Registration');
            $m->to($register->email, $register->first_name)->subject('Dolce Registration Successful!');
        });
    }

    /*
     * Displays success page
     */

    public function success() {
        if (Session::get('key')) {
            $title = 'Success Page';
            $key = Session::get('key');
            $user = Register::where('transaction_id', $key)->first();
            if ($user) {
                return view('user.success', compact('title', 'user'));
            } else {
                Session::flash('warning', 'Please fill the form to register.');
                return view('user.success', compact('title', 'user'));
            }
        } else {
            return redirect('/');
        }
    }
    
    /*
     * gallery page
     */
    public function gallery(){
        $title = 'Gallery page';
        return view('user.gallery',  compact('title'));
    }

}
