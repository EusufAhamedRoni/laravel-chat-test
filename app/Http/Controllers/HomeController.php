<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        return view('admin.home');
    }

    public function userHistory(){
      $getHistory = Message::get();
      return view('admin.historyList')->with('allHistory', $getHistory);
    }

    public function manageUserHistory(){
      $getUser = User::get();
      return view('admin.manageUser')->with('allUser', $getUser);
    }

    public function userStatus($id, $is_admin){
      $isAdminUser = User::find($id);
      $isAdminUser->is_admin = $is_admin;
      $isAdminUser->save();
    }

    public function editUser($requestId){
      $data['edituser'] = User::where('id', $requestId)->first();
      return view('admin.editUser')->with($data);
    }


  public function updateUser(Request $request, $requestId){

    $updatedUser = User::where('id', $requestId)->first();

    $updatedUser->name = $request->userName;
    $updatedUser->email = $request->userEmail;

    $updatedUser->save();

    return redirect()->route('manageUserHistory');
  }

  public function deleteUser($requestId){
    $deleteUser = User::where('id', $requestId)->first();

    if(!is_null($deleteUser)){
      $deleteUser->delete();
    }

    return back();
  }
}
