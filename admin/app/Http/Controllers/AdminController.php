<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Currency;
use Database\Seeders\CurrencySeeder;
use Encore\Admin\Grid\Filter\Where;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;



class AdminController extends Controller
{
    //Pour l'inscription
    public function inscription(Request $request){
        Admin::create([
            "username"=>$request->identifiant,
            "password"=>$request->password,
        ]);
        return redirect()->route('connexionadminpage');
        
    }

    //Pour la connexion
    public function read(Request $request){
        
        $user = Admin::where("username",$request->identifiant)->where("password",$request->password)->first();
        if(!is_null($user)){
            Session(["enligne"=>$user]);
            return redirect()->route("accueiladmin");
        }
    }

    //Pour la déconnexion
    public function logout(){
        session(["enligne"=>""]);
        return redirect()->route("connexionadminpage");
    }
       
    
    //Partie CRUD    
    public function create(Request $request){
        
        Currency::create([
            "id"=>$request->id,
            "Name"=>$request->Name,
            "Rate"=>$request->Taux,
            "CountUsed"=>$request->Utilisation,
        ]);
        
        return redirect()->route("accueiladmin");       
    }          
    
    public function edit(){
        $currences=Currency::orderby('id','desc')->get();        
        return view('Edition',compact('currences'));
        
    }
    
    public function delete($id){
        
        Currency::find($id)->delete();
        return back();
    }
    
    public function modification(Request $request){
        
        $currency=Currency::where('id',session('paire')->id)->first();
        $currency->update([
            "id"=>$request->id,
            "Name"=>$request->Name,
            "Rate"=>$request->Rate,
            "CountUsed"=>$request->CountUsed,
        ]);
        session(["paire"=>""]);
        return back();
    }

    public function modif($id){
        
        $currences=Currency::where('id',$id)->first();
        session(["currency"=>$currences]);
        return view('Edition');
    } 

    //pour l'api envoi paires de la table
    public function apirecuperation(){

        $data=Currency::all();
        return response()->json($data);
    }

    //pour verifier les paires utilisées
    //recuperation du click
    public function clicrecuperation($paire){
        $paire = currency::where('Name',$paire)->first();
        $paire->update([
            'CountUsed'=>(int)$paire->CountUsed+1
        ]);
    
        return 'ok';
        //affichage des paires

    }

    public function api(){
        return view 
    }
}    