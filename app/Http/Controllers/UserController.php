<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Register form 
    // public function create(){
    //     // return view('user.manage');

    //     return view('user.manage',
    //     ['users' => User::latest()->paginate(5)]);
    // }

    public function create(){
        // return view('user.manage');

        return view('Auth.register');
        // ['users' => User::latest()->paginate(5)]);
    }
    public function profile(){
        // return view('user.manage');

        return view('Admin.profile',
        ['users' => User::latest()->paginate(5)]);
    }

    public function changePassword(){
        // return view('user.manage');

        return view('Admin.profile');
    }

    //Change password
    public function updatePassword(Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
}

    //Create New User
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:8'
        ]);

        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);


        //Login
        auth()->Login($user);

        return redirect('/')->with('message', 'user created and logged in');
        
    }

    //Logout user
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','You have been logged out');

    }

    //Login
    public function login(){
        return view('Auth.login');
    }
    //Authenticate

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message','You are logged in!');
        }
        return back()->withErrors(['email' => 'Innvalid Credentials'])->onlyInput('email');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/manageUser')->with('message','User Deleted succssfully');
    }
}
