<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentication successful
            return redirect()->intended('/home'); // You can change the redirect path after login
        }
        return redirect('login')->withError('Login details are not valid');
    }

    public function register_view(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request -> validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>\Hash::make($request->password)
        ]);
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentication successful
            return redirect()->intended('/home');
        }
    }

    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data here if needed

        // Send email (Example using Laravel Mail)
        Mail::to('kg.sparkle070@email.com')->send(new \App\Mail\ContactForm($request->all()));

        // You can add a success message and redirect the user
        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }

    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }
}
