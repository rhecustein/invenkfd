<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userInfo=User::where('id','=',Auth::user()->id)->first();
        $roles = Role::paginate(15);
        return view('roles.role',['userInfo'=>$userInfo], compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userInfo=User::where('id','=',Auth::user()->id)->first();
        return view('roles.create',['userInfo'=>$userInfo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'role' => 'required|min:3'
        ]);

        $roles = Role::create([
            'role' => $request->role
        ]);

        return redirect('role')->with('success', 'Berhasil membuat Role baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userInfo=User::where('id','=',Auth::user()->id)->first();
        $roles = Role::findorfail($id);
        return view('roles.edit',['userInfo'=>$userInfo], compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'role' => 'required'
        ]);

        $role_data = [
            'role' => $request->role,
        ];

        Role::whereId($id)->update($role_data);

        return redirect()->route('role.index')->with('success', 'Role berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roles = Role::findorfail($id);
        $roles->delete();

        return redirect('role')->with('success', 'Role Berhasil Dihapus Permanent');
    }
}
