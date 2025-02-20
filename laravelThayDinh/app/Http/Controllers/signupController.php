<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// su dung class signupRequest de kiem tra du lieu nhap vao form
use App\Http\Requests\signupRequest;

// tao class signupController ke thua tu Controller de xu ly logic cua form signup va hien thi thong tin da nhap tu form ra 
class signupController extends Controller {
    public function index() {
        // hien thi form
        return view('signup');
    }

    // khi submit form thi goi ham nay de hien thi thong tin da nhap tu form ra
    public function displayInfor(signupRequest $request) {
        $user = [
            // lay du lieu tu form
            'name' => $name = $request->input('name'),
            'age' => $age = $request->input('age'),
            'date' => $date = $request->input('date'),
            'phone' => $phone = $request->input('phone'),
            'web' => $web = $request->input('web'),
            'address' => $address = $request->input('address')
        ];
        // hien thi thong tin
        // with('user', $user) : truyen bien user sang view signup
        return view('signup') -> with('user', $user);
    }
}   