<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\RolePermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin/role')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_per = Permission::all();
        return view('admin/role_form')->with('all_per', $all_per);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();
        $role = new Role;
        $role->title = $input["title"];
        $role->description = $input["description"];
        $role->save();

        $all_per = Permission::all();
        foreach ($all_per as $key => $value){
            $input = $request->input($value->id);
            if ($input != null){
                RolePermission::create([
                    'permissions_id' => $value->id,
                    'roles_id' => $role->id,
                ]);
            }
        }
        $role->save();

        return redirect('admin/role');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        //$pers =  DB::table('roles_permissions')->where('roles_id', $role->id);
        $pers = RolePermission::where('roles_id', '=' ,$role->id)->get();
        $p = array();
        foreach($pers as $key => $value){
            $per =Permission::find($value->permissions_id);
            array_push($p,$per);
        }
        $all_per = Permission::all();
        return view('admin/role_edit', compact('role', 'p','all_per'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();
        $role = Role::find($id);
        $role->title = $input["title"];
        $role->description = $input["description"];
        $role->save();

        $all_per = Permission::all();
        foreach ($all_per as $key => $value){
            $input = $request->input($value->id);
            if ($input != null){
                RolePermission::create([
                    'permissions_id' => $value->id,
                    'roles_id' => $role->id,
                ]);
            }else{
                $per = RolePermission::where('roles_id', '=' ,$role->id)->where('permissions_id', '=' ,$value->id)->get();
                if ($per !== null){
                    RolePermission::where('roles_id', '=' ,$role->id)->where('permissions_id', '=' ,$value->id)->delete();
                }
            }
        }
        return redirect('admin/role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::find($id)->delete();
        return redirect('admin/role');
    }
}
