<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CasisRequest;
use App\Casis;

class CasisController extends Controller
{
    //
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	$result = Casis::all();
    	return view('Casis.show', compact('result'));
    }

    public function create()
    {
		$kd = "PSB";
        $today = date("ym");
        $data = Casis::all()->last();
        if ($data == null){
            $next = $kd.$today.'0001';
            return view('Casis.create', compact('next'));
        }
        $no = $data->no_reg;
        $no = substr($no, 8, 4);
        $nextNo = $no + 1;
        $next = $kd.$today.sprintf('%04s', $nextNo);
    	return view('Casis.create', compact('next'));
    }

    public function store(CasisRequest $req)
    {
    	$input = $req->all();
    	$casis = Casis::create($input);
    	$casis->validasi = $req->validasi;
    	$casis->save();
    	return redirect('casis');
    }

    public function edit($id)
    {
    	$casis = Casis::find($id);
    	return view('Casis.edit', compact('casis'));
    }

    public function update($id, CasisRequest $req)
    {
    	$input = $req->all();
		$casis = Casis::find($id);
		$casis->update($input);
		$casis->validasi = $req->validasi;
		$casis->save();
		return redirect('casis');
    }

    public function destroy($id)
    {
    	$casis = Casis::find($id);
    	$casis->delete();
    	return redirect()->back();
    }

    public function export()
    {
    	$casis = Casis::all();
    	return Excel::download(new CasisExcel($casis), 'Casis.xlsx');
    }
}
