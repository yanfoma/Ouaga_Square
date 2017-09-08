<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Model\Categorie;
use App\Model\Phase;
use App\Model\Responsable;
use App\Model\Executeur;
use App\Model\Projet;
use App\Model\User;
use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;
/**
* 
*/
class AdminController extends BaseController
{
	/*  login  */

	public function log()
	{
	$data=array(
	'name'=>Input::get('nom'),
	'password'=>Input::get('mdp'));

	if(Auth::attempt($data))
		{
			return Redirect::to('admin_index');
		}
	else
		{
			return Redirect::to('/');
		}
	}

	/*  index admin  */

	public function index()
	{
	
			return view('admin_index');
	}

	/*  backup  */

	public function backup()
	{
	
			return view('backup');
			return Redirect::to('sauvegarde');
	}


	public function sauvegarde()
	{
	
			return view('sauvegarde');
	}

	/*  categorie de projet  */

	public function creer_categorie_projet()
	{
	
			return view('creer_categorie_projet');
	}

	public function c_categorie_projet(Request $data)
	{
		$validation=Validator::make($data->all(),array(
		'resume'=>'required',
		'detail'=>'required',
	));

	if($validation->fails())
		{
			return Redirect::to('creer_categorie_projet')->withErrors($validation);
		}
	else
		{
			$table= new Categorie;
			$table->resume_titre=$data->Input('resume');
			$table->full_titre=$data->Input('detail');

			$table->save();
		
			return Redirect::to('creer_categorie_projet');
		}
	}

	/*  phase de projet  */

	public function creer_projet_phase()
	{
	
			return view('creer_projet_phase');
	}

	public function c_projet_phase(Request $data)
	{
		$validation=Validator::make($data->all(),array(
		'phase'=>'required',
	));

	if($validation->fails())
		{
			return Redirect::to('creer_projet_phase')->withErrors($validation);
		}
	else
		{
			$table= new Phase;
			$table->libelle=$data->Input('phase');

			$table->save();
		
			return Redirect::to('creer_projet_phase');
		}
	}

	/*  responsable de projet  */

	public function creer_projet_responsable()
	{
	
			return view('creer_projet_responsable');
	}

	public function c_projet_responsable(Request $data)
	{
		$validation=Validator::make($data->all(),array(
		'responsable'=>'required',
	));

	if($validation->fails())
		{
			return Redirect::to('creer_projet_responsable')->withErrors($validation);
		}
	else
		{
			$table= new Responsable;
			$table->libelle=$data->Input('responsable');

			$table->save();
		
			return Redirect::to('creer_projet_responsable');
		}
	}

	/*  executeur de projet  */

	public function creer_projet_executeur()
	{
	
			return view('creer_projet_executeur');
	}

	public function c_projet_executeur(Request $data)
	{
		$validation=Validator::make($data->all(),array(
		'identite'=>'required',
		'adresse'=>'required',
	));

	if($validation->fails())
		{
			return Redirect::to('creer_projet_executeur')->withErrors($validation);
		}
	else
		{
			$table= new Executeur;
			$table->libelle=$data->Input('identite');
			$table->adresse=$data->Input('adresse');

			$table->save();
		
			return Redirect::to('creer_projet_executeur');
		}
	}

	/*  projet  */

	public function creer_projet()
	{
		$categorie=Categorie::all(['full_titre','id']);	
		$phase=Phase::all(['libelle','id']);	
		$executeur=Executeur::all(['libelle', 'adresse','id']);	
		$responsable=Responsable::all(['libelle','id']);	

		return view('creer_projet', compact('categorie',$categorie,'phase',$phase,'executeur',$executeur,'responsable',$responsable));
	}

	public function c_projet(Request $data)
	{
		$validation=Validator::make($data->all(),array(
		'abrege'=>'required',
		'intitule'=>'required',
		'categorie'=>'required',
		'cout'=>'required',
		'responsable'=>'required',
		'executeur'=>'required',
		'delai'=>'required',
		'contenu'=>'required',
		'phase'=>'required',
	));

	if($validation->fails())
		{
			return Redirect::to('creer_projet')->withErrors($validation);
		}
	else
		{
			$table= new Projet;
			$table->resume_titre=$data->Input('abrege');
			$table->full_titre=$data->Input('intitule');
			$table->categorie_id=$data->Input('categorie');
			$table->cout=$data->Input('cout');
			$table->responsable_id=$data->Input('responsable');
			$table->executeur_id=$data->Input('executeur');
			$table->delai=$data->Input('delai');
			$table->contenu=$data->Input('contenu');
			$table->phase_id=$data->Input('phase');

			$table->save();
		
			return Redirect::to('creer_projet');
		}
	}

	/*  detail projet  */

	public function detail_projet($id)
	{
		$edit=Projet::find($id);
		return View('detail_projet')->with('datas',$edit);
	}

}
?>