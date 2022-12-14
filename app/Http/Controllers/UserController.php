<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CasisRequest;
use App\Http\Requests\UserRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CasisExcel;
use App\User;
use App\Casis;
use App\Prestasi;

class UserController extends Controller
{
    //
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('admin');
	}

    public function index()
    {
    	$result = User::all();
    	return view('User.show', compact('result'));
    }

    public function create()
    {
    	return view('User.create');
    }

    public function store(UserRequest $req)
    {
    	$input = $req->all();
    	$user = User::create($input);
    	$user->password = bcrypt($req->password);
    	$user->save();
    	return redirect('user');
    }

    public function edit($id)
    {
    	$user = User::find($id);
    	return view('User.edit', compact('user'));
    }

    public function update($id, UserRequest $req)
    {
    	$input = $req->all();
    	$user = User::find($id);
    	$user->update($input);
    	$user->password = bcrypt($req->password);
    	$user->save();
    	return redirect('user');
    }

    public function destroy($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	return redirect()->back();
    }
}
