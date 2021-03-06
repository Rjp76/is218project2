<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        return view('pages.index');
    }
    function about() {
        return view('pages.about');
    }
    function contact() {
        return view('pages.contact');
    }
    function viewmsg() {
        return view('pages.viewmsg');
    }
    function register() {
        return view('pages.register');
    }
    function login() {
        return view('pages.login');
    }
    function home() {
        return view('home');
    }

    function store(Request $request) {

        $email = $request->email;
        $sub = $request->subject;
        $msg = $request->msg;

        return redirect()->route('thanks',['email' => $email, 'sub'=>$sub, 'msg'=>$msg]);
    }
    function thanks($email, $sub, $msg) {

        return view('pages.thanks')->with(compact('email','sub','msg'));
    }
}
