<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Encore\Admin\Grid\Filter\Where;


class AdminController extends Controller
{
    public function read(Request $request){
        
        $user = AdminUser::where("username",$request->identifiant)->where("password",$request->password)->first();
            if(!is_null($user)){
            Session(["enligne"=>$user]);
            return redirect()->route("accueiladmin");
            
    }
}

    public function create(Request $request){
      
        CurrencyController::create([
            "Nom"=>$request->Nom,
            "Prix"=>$request->Prix,
            "Photo"=>$chemin,
            "Taille"=>$request->Taille,
            "Reference"=>$request->Reference,
            "Description"=>$request->Description,
            "Categorie"=>$request->Categorie,
            "Etat"=>$request->Etat,
            "Public"=>$request->Public,
        ]);

        return redirect()->route("accueiladmin");       
    }          


    public function edit(){
        //edition
        //dd("ok");
        $produits=Produit::orderby('id','desc')->get();
       
        return view('\Shop\Admin\Layout\edit',compact('produits'));

    }

    public function delete($id){

        CurrencyController::find($id)->delete();
        return back();


    }


    public function modif($id){

        $currencies=CurrencyController::where('id',$id)->first();
        session(["produit"=>$produit]);
        return view('\Shop\Admin\Layout\formulaire');
    }
    

    public function modification(Request $request){

        $currencies=CurrencyController::where('id',session('produit')->id)->first();
        $currencies->update([
            "Nom"=>$request->Nom,
            "Prix"=>$request->Prix,
            "Taille"=>$request->Taille,
            "Reference"=>$request->Reference,
            "Description"=>$request->Description,
            "Categorie"=>$request->Categorie,
            "Etat"=>$request->Etat,
            "Public"=>$request->Public,
        ]);
        session(["produit"=>""]);
        return back();
    }

    public function logout(){
        session(["enligne"=>""]);
        return redirect()->route("connexionadminpage");
    }

    public function inscription(Request $request){
        AdminUser::create([
            "username"=>$request->identifiant,
            "password"=>$request->password,
        ]);
        return redirect()->route('connexionadminpage');

}

}