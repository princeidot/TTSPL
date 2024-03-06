<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Conveyor()
    {
        return view('frontend.product.conveyor');
    }
     public function perimeter()
    {
        return view('frontend.product.perimeter');
    }
     public function pipeline(){
        return view('frontend.product.pipeline');
    }

    public function slope()
    {
        return view('frontend.product.slope');
    }
    public function padc()
    {
        return view('frontend.product.padc');
    }
       public function awt()
    {
        return view('frontend.product.awt');
    }
    public function lasert()
    {
        return view('frontend.product.laser-transmitter');
    }
 public function gwrlt()
    {
        return view('frontend.product.guidedwave');
    }

    public function fsrlt()
    {
       
        return view('frontend.product.fsrlt');
    }
    public function mult()
    {
        return view('frontend.product.mult');
    }
     public function sli() 
    {
        return view('frontend.product.sli');
    }
     public function mlg()
    {
        return view('frontend.product.mlg');
    }
    public function lhts()
    {
        return view('frontend.product.lhts');
    }
     public function dms()
    {
        return view('frontend.product.dms');
    }
    
    public function asfb()
    {
        return view('frontend.product.acousticswitch');
    }

    public function vibrating()
    {
        return view('frontend.product.vibratinglevel');
    }
    
        public function cmfm()
    {
        return view('frontend.product.cmfm');
    }
    
    public function varea()
    {
        return view('frontend.product.varea');
    }
    
     public function megaflow()
    {
        
        return view('frontend.product.megaflow');
    }
    
     public function uco()
    {
        return view('frontend.product.uco');
    }
    public function differential(){
       return view('frontend.product.differentialpressure');
    }
    
     public function absolute(){
       return view('frontend.product.absolutepressure');
    }
    public function multivariable(){
       return view('frontend.product.multivariablepressure');
    }
}
