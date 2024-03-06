<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUS;
use App\Models\product_us;

class StaticController extends Controller
{
    Public function index(){
        return view('frontend.index');
    }
        public function contact(){
        return view('frontend.contact-us');
    }
    
  public function about()
    {
        return view('frontend.aboutus');
    }
    
    
    public function business(){
        return view('frontend.keybuss');
    }

    public function hawk()
    {
        return view('frontend.keybusshawk');
    }

    public function sm()
    {
        return view('frontend.keybusssm');
    }
    public function ft()
    {
        return view('frontend.keybussft');
    }

       public function jcbachmann(){
        return view('frontend.jcbachmann');
    }

    public function tatus()
    {
        return view('frontend.tatus');
    }
      public function bdp()
    {
        return view('frontend.product.bdp');
    }
     public function certification()
    {
        return view('frontend.certificate');
    }
    
    
    public function fibre(){
        return view('frontend.category.fiberoptic');
    }
    public function leverlsensors(){
         return view('frontend.category.leverlsensors');
    }
     public function levelswitches()
    {
        return view('frontend.category.levelswitch');
    }
    public function flow()
    {
        return view('frontend.category.flowmeters');
    }
    public function pressure()
    {   
     return view('frontend.category.pressure');
    }
    
     public function cfrom(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        ContactUS::create($request->all());
        return back()->with('success', 'Thanks for contacting us!');
    }
        public function pfrom(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',           
        ]);
        product_us::create($request->all());
        return back()->with('success', 'Thanks for contacting us!');
    }
    public function sitemap(){
        return response()->view('sitemap')->header('Content-Type', 'text/xml');
}
    
}
