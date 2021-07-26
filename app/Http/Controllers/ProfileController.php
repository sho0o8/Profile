<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSendmail;

class ProfileController extends Controller
{
    public function page(){
        return view('profile');
    }
    public function send(Request $request)
    {
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'body' => 'required',
        ]);
        $action = $request->input('action');
        $inputs = $request->except('action');
        if($action !== 'submit'){
            return redirect()
                ->route('profile.page');
        } else {
            \Mail::to($inputs['email'])
            ->send(new ContactSendmail($inputs));
            $request->session()
            ->regenerateToken();
            return view('thanks');
        }
    }
}