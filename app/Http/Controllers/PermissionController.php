<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

    public function index()
    {
        $permissions = Permission::all();
        return view('admin/permission')->with('permissions', $permissions);
    }


    public function create()
    {
        return view('admin/permission_form');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();
        $permission = new Permission;
        $permission->name = $input["name"];
        $permission->description = $input["description"];
        $permission->save();

        return redirect('admin/permission');
    }


    public function show(Permission $permission)
    {
        //
    }


    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('admin/permission_edit', compact('permission'));
    }


    public function update(Request $request, $id )
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();
        $permission = Permission::find($id);
        $permission->name = $input["name"];
        $permission->description = $input["description"];
        $permission->save();

        return redirect('admin/permission');
    }


    public function destroy($id)
    {
        Permission::find($id)->delete();
        return redirect('admin/permission');
    }
}
