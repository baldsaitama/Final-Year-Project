<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\UserRepository;

class UsersController extends Controller
{
    function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->userRepo->requiredById($id);
        return view('general.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('general.users.edit');
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
        $this->validate($request, [
            'name' =>'required|string|max:125',
            'profile_picture' => 'nullable|image|max:10240',

        ]);
        $user = $this->userRepo->requiredById($id);
        $user = $this->userRepo->renew($user, $request);
        return redirect()->back()->withStatus('User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function editPassword()
    {
        return view('general.users.edit-password');
    }

    public function changePassword(Request $request, $id)
    {
        $user = authUser();
        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required|string|min:8|confirmed'
        ]);
        if (Hash::check($request->old_password,authUser()->password)) {
            $user = $this->userRepo->passwordChange($user, $request);
            return back() ->withStatus('Password Changed');
        }
        else
        {
            return back()->with('error','Password didnot match');
        }
    }
}
