<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::whereNotIn("name",['admin'])->get() ;
        return view("admin.roles.index",compact("roles"));
    }
    public function create(){
        return view("admin.roles.create");
    }
    public function store(Request $request){
        $request->validate([
            'name'=>["required","min:3"]
        ]);
        Role::create([
            'name'=>$request->name,
        ]);
        return redirect()->back();
    }
    public function edit(Role $role){
        return view('admin.roles.edit',compact('role'));
    }
    public function update(Request $request,Role $role){
        $request->validate([
            'name'=>["required","min:3"]
        ]);
        $role->update([
            'name'=>$request->name,
        ]);
        return redirect()->route("admin.roles.index");
    }
}
