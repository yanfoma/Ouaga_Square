<?php

namespace App\Http\Controllers;
use App\Model\Projet;
use App\Model\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class IndexController extends Controller
{
   	public function index()
	{
		return view('index');
	}

	public function login()
	{
		return view('login');
	}

	public function pdf($id)
	{
		$edit=Projet::find($id);
		return View('pdf')->with('datas',$edit);
	}

	public function commentaire(Request $data)
	{
		$validation=Validator::make($data->all(),array(
		'nom'=>'required',
		'commentaire'=>'required',
		'avatar'=>'required|image|mimes:jpeg,jpg,png,gif,svg',
	));

	if($validation->fails())
		{
			return back();
		}
	else
		{
			$table= new Commentaire;
			$table->nom=$data->Input('nom');
			$table->contenu=$data->Input('commentaire');
			$table->projet_id=$data->Input('projet_id');

			if($data->hasFile('avatar')){
				$image = $data->file('avatar');
				$filename = time() . '.' .$image->getClientOriginalExtension();
				$location = public_path('../images/users/' .$filename);
				Image::make($image)->resize(110,110)->save($location);

				$table->avatar = $data->$filename;
			}

			$table->save();
		
			return back();
		}
	}

}
