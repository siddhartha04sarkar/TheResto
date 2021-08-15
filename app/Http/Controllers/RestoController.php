<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Restaurant;
use Session;
use Crypt;

class RestoController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function list(){
        $data = Restaurant::all();
        return view('list', ["data" => $data]);
    }

    public function add(Request $request){
        $resto = new Restaurant;
        $resto->name = $request->input('name');
        $resto->email = $request->input('email');
        $resto->address = $request->input('address');
        $resto->save();

        $request->session()->flash('status', 'Restaurant Details Added Successfully.');
        return redirect('list');

    }

    public function delete($id){
        Restaurant::find($id)->delete();

        Session::flash('status', 'Restaurant Details Deleted Successfully.');
        return redirect('list');
    }

    public function edit($id){
        $data = Restaurant::find($id);
        return view('edit', ['data' => $data]);
    }

    public function update(Request $request){
        $resto = Restaurant::find($request->input('id'));

        $resto->name = $request->input('name');
        $resto->email = $request->input('email');
        $resto->address = $request->input('address');
        $resto->save();

        $request->session()->flash('status', 'Restaurant Details Updated Successfully.');
        return redirect('list');

    }

    public function register(Request $request){
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->contact = $request->input('contact');
        $user->password = Crypt::encrypt($request->input('password'));
        $user->save();

        //This is not a flash session this is normal session.
        //$request->session()->put('user', $request->input('name'));
        $request->session()->flash('userMsg', $request->input('name').' Successfully Registered.' );
        return redirect('/');
    }

    public function login(Request $request){
        $user = User::where("email", $request->input('email'))->get();

        if(Crypt::decrypt($user[0]->password) == $request->input('password')){
            $request->session()->put('user', $user[0]->name);
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }


}
