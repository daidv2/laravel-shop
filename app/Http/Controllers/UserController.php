<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserRequest;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::select('id', 'username', 'level')->orderBy('username', 'ASC')->get();
        return view('admin.user.user_list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.user_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->username = $request->txtUsername;
        $user->password = bcrypt($request->txtPass);
        $user->email = $request->txtEmail;
        $user->level = $request->rdoLevel;
        $user->save();
        return redirect()->route('users.index')->with([
          'flash_level' => 'success',
          'flash_message' => \Message::INSERT_SUCCESS
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curren_user = Auth::user();
        $data = User::findOrFail($id);
        if(!\Common::check_permission_user($curren_user, $data)){
            return redirect()->route('users.index')->with([
                'flash_level' => 'danger',
                'flash_message' => \Message::PERMISSION_WARNING
            ]);
        }
        return view('admin.user.user_edit', compact('data', 'curren_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $curren_user = Auth::user();
        $user = User::findOrFail($id);
        if(!\Common::check_permission_user($curren_user, $user)){
            return redirect()->route('users.index')->with([
                'flash_level' => 'danger',
                'flash_message' => \Message::PERMISSION_WARNING
            ]);
        }
        $this->validate(
            $request,
            [
                'txtPass' => 'required|min:6',
                'txtRePass' => 'required|min:6|same:txtPass',
                'txtEmail' => 'required|email',
                'rdoLevel' => 'required|numeric'
            ]
        );
        $user->password = bcrypt($request->txtPass);
        $user->email = $request->txtEmail;
        if($request->rdoLevel && $curren_user->level == SUPERADMIN){
            $user->level = $request->rdoLevel;
        }
        $user->save();
        return redirect()->route('users.index')->with([
            'flash_level' => 'success',
            'flash_message' => \Message::UPDATE_SUCCESS
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with([
            'flash_level' => 'success',
            'flash_message' => \Message::DELETE_SUCCESS
        ]);
    }
}
