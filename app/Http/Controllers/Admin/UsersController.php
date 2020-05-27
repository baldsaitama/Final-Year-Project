<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\Eloquent\ProfileRepository;

class UsersController extends Controller
{
    protected $userRepo;
    protected $profileRepo;

    function __construct(UserRepository $userRepo, ProfileRepository $profileRepo)
    {
        $this->userRepo = $userRepo;
        $this->profileRepo = $profileRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepo->paginate(null,20);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $this->userRepo->store($request);

        return redirect()->route('admin.users.index')->withStatus('User created');
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

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->userRepo->requiredById($id);
        return view('admin.users.edit', compact('user'));
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
            'name' => 'required|string|max:125',
            'profile_picture' => 'image|max:10240',
        ]);
        $user = $this->userRepo->requiredById($id);
        $user = $this->userRepo->renew($user, $request);

        return redirect()->route('admin.users.index')->withStatus('User updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->userRepo->requiredById($id)->delete();
    }

    public function getLists(Request $request)
    {
        return $this->userRepo->getLists($request);
    }

    public function getList(Request $request, $id)
    {

       return $this->userRepo->getList($request, $id);
    }

    public function deleteProfile($profile_id)
    {
        $profile = $this->profileRepo->requiredById($profile_id);
        $profile->delete();
        return redirect()->back()->withStatus('Profile Rejected');
    }
}
