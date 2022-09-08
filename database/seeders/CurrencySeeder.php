<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $currency= new Currency();
        $currency -> id = 1;
        $currency -> Name  = "EUR-USD";
        $currency -> Rate = "1"; 
        $currency -> CountUsed = 0;
        $currency -> save();        

        $currency= new Currency();
        $currency -> id = 2;
        $currency -> Name  = "USD-EUR";
        $currency -> Rate = "1";
        $currency -> CountUsed = 0; 
        $currency -> save();

        $currency= new Currency();
        $currency -> id = 3;
        $currency -> Name  = "EUR-YEN";
        $currency -> Rate = 143.95; 
        $currency -> CountUsed = 0;
        $currency -> save();

        $currency= new Currency();
        $currency -> id = 4;
        $currency -> Name  = "YEN-EUR";
        $currency -> Rate = 0.0069; 
        $currency -> CountUsed = 0;
        $currency -> save();

        $currency= new Currency();
        $currency -> id = 5;
        $currency -> Name  = "EUR-CAD";
        $currency -> Rate = 1.31;
        $currency -> CountUsed = 0; 
        $currency -> save();

        $currency= new Currency();
        $currency -> id = 6;
        $currency -> Name  = "CAD-EUR";
        $currency -> Rate = 0.76; 
        $currency -> CountUsed = 0 ;
        $currency -> save();

        $currency= new Currency();
        $currency -> id = 7;
        $currency -> Name  = "EUR-BRL";
        $currency -> Rate = 5.25; 
        $currency -> CountUsed = 0;
        $currency -> save();

        $currency= new Currency();
        $currency -> id = 8;
        $currency -> Name  = "BRL-EUR";
        $currency -> Rate = 0.19; 
        $currency -> CountUsed = 0;
        $currency -> save();

        $currency= new Currency();
        $currency -> id = 9;
        $currency -> Name  = "EUR-DZD";
        $currency -> Rate = 0.61; 
        $currency -> CountUsed = 0;
        $currency -> save();

        $currency= new Currency();
        $currency -> id = 10;
        $currency -> Name  = "DZD-EUR";
        $currency -> Rate = 0.071; 
        $currency -> CountUsed = 0;
        $currency -> save();

        //faire un tableau de mes tables

    }
}
