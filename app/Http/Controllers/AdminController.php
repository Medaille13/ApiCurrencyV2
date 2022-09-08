<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Currency;
use Illuminate\Http\Request;
use Database\Seeders\CurrencySeeder;
use Symfony\Component\HttpFoundation\Session\Session;
use Encore\Admin\Grid\Filter\Where;


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
            "id"=>$request->Nom,
            "Name"=>$request->Pays,
            "Rate"=>$request->Pays,
            "CountUsed"=>$request->Etat,
        ]);
        
        return redirect()->route("accueiladmin");       
    }          
    
    public function edit(){
        //edition
        //dd("ok");
        $currencies=CurrencyController::orderby('id','desc')->get();
        
        return view('\hop\Admin\Layout\edit',compact('currency'));
        
    }
    
    public function delete($id){
        
        Currency::find($id)->delete();
        return back();
    }
    
    public function modification(Request $request){
        
        $currency = Currency::where('id',session('paire')->id)->first();
        $currency->update([
            "id"=>$request->Nom,
            "Name"=>$request->Pays,
            "Rate"=>$request->Pays,
            "CountUsed"=>$request->Etat,
        ]);
        session(["paire"=>""]);
        return back();
    }

    public function modif($id){
        
        $currencies=Currency::where('id',$id)->first();
        session(["currency=>$currency]);
        return view('\Shop\Admin\Layout\formulaire');
    }   
    
    
    
}