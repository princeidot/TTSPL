<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*============================Other Page==========================*/
Route::get('/', [App\Http\Controllers\Frontend\StaticController::class, 'index'])->name('home1');
Route::get('contact', [App\Http\Controllers\Frontend\StaticController::class, 'contact'])->name('contact');
Route::get('about-us', [App\Http\Controllers\Frontend\StaticController::class, 'about'])->name('about');
Route::get('certifications', [App\Http\Controllers\Frontend\StaticController::class, 'certification'])->name('certification');
Route::get('key-business', [App\Http\Controllers\Frontend\StaticController::class, 'business'])->name('kbusiness');
Route::get('key-business/hawk', [App\Http\Controllers\Frontend\StaticController::class, 'hawk'])->name('hawk');
Route::get('key-business/smart-measurements', [App\Http\Controllers\Frontend\StaticController::class, 'sm'])->name('sm');
Route::get('key-business/fine-tek', [App\Http\Controllers\Frontend\StaticController::class, 'ft'])->name('ft');
Route::get('key-business/jcbachmann', [App\Http\Controllers\Frontend\StaticController::class, 'jcbachmann'])->name('jcbachmann');
Route::get('temperature-monitoring-system', [App\Http\Controllers\Frontend\StaticController::class, 'tatus'])->name('tatus');
Route::get('bio-degradable', [App\Http\Controllers\Frontend\StaticController::class, 'bdp'])->name('bdp');

/*==========================End Other Page==========================*/


/*==========================Product Page==========================*/
Route::get('fiber-optic-sensing-systems', [App\Http\Controllers\Frontend\StaticController::class, 'fibre'])->name('fibre');
Route::get('level-transmitters-sensors', [App\Http\Controllers\Frontend\StaticController::class, 'leverlsensors'])->name('leverl.sensors');
Route::get('flow-meters', [App\Http\Controllers\Frontend\StaticController::class, 'flow'])->name('flow.meter');
Route::get('pressure-transmitters', [App\Http\Controllers\Frontend\StaticController::class, 'pressure'])->name('pressure');
/*============================End Page===========================*/



/*==========================Product Page==========================*/ 
Route::get('fiber-optic-sensing-systems/conveyor', [App\Http\Controllers\Frontend\ProductController::class, 'conveyor'])->name('conveyor');
Route::get('fiber-optic-sensing-systems/perimeter', [App\Http\Controllers\Frontend\ProductController::class, 'perimeter'])->name('perimeter');
Route::get('fiber-optic-sensing-systems/pipeline', [App\Http\Controllers\Frontend\ProductController::class, 'pipeline'])->name('pipeline');
Route::get('fiber-optic-sensing-systems/slope', [App\Http\Controllers\Frontend\ProductController::class, 'slope'])->name('slope');
Route::get('fiber-optic-sensing-systems/power-and-data-cabele', [App\Http\Controllers\Frontend\ProductController::class, 'padc'])->name('padc');


Route::get('level-transmitters-sensors/acoustic-wave-transmitter', [App\Http\Controllers\Frontend\ProductController::class, 'awt'])->name('awt');
Route::get('level-transmitters-sensors/laser-transmitter', [App\Http\Controllers\Frontend\ProductController::class, 'lasert'])->name('lasert');
Route::get('level-transmitters-sensors/guided-wave-radar-level-transmitter', [App\Http\Controllers\Frontend\ProductController::class, 'gwrlt'])->name('gwrlt');
Route::get('level-transmitters-sensors/free-space-radar-level-transmitter', [App\Http\Controllers\Frontend\ProductController::class, 'fsrlt'])->name('fsrlt');
Route::get('level-transmitters-sensors/ultrasonic-level-transmitter', [App\Http\Controllers\Frontend\ProductController::class, 'mult'])->name('mult');
Route::get('level-transmitters-sensors/sonar-level-interface', [App\Http\Controllers\Frontend\ProductController::class, 'sli'])->name('sli');
Route::get('magnetic-level-gauge', [App\Http\Controllers\Frontend\ProductController::class, 'mlg'])->name('mlg');

Route::get('level-switches', [App\Http\Controllers\Frontend\StaticController::class, 'levelswitches'])->name('ls');
Route::get('level-switches/high-temperature-switchfor-fly-ash', [App\Http\Controllers\Frontend\ProductController::class, 'lhts'])->name('lhts');
Route::get('level-switches/doppler-microwave-switches', [App\Http\Controllers\Frontend\ProductController::class, 'dms'])->name('dms');
Route::get('level-switches/acoustic-switch-for-blockages', [App\Http\Controllers\Frontend\ProductController::class, 'asfb'])->name('asfb');
Route::get('level-switches/vibrating-level-switch', [App\Http\Controllers\Frontend\ProductController::class, 'vibrating'])->name('vibrating');


Route::get('flow-meters/coriolis-mass-flow-meter', [App\Http\Controllers\Frontend\ProductController::class, 'cmfm'])->name('cmfm');
Route::get('flow-meters/variable-area', [App\Http\Controllers\Frontend\ProductController::class, 'varea'])->name('varea');
Route::get('flow-meters/ultrasonic-clamp-on', [App\Http\Controllers\Frontend\ProductController::class, 'uco'])->name('uco');
Route::get('flow-meters/magnetic-flow-meters', [App\Http\Controllers\Frontend\ProductController::class, 'megaflow'])->name('megaflow');


Route::get('pressure-transmitters/differential-pressure', [App\Http\Controllers\Frontend\ProductController::class, 'differential'])->name('differential');
Route::get('pressure-transmitters/absolute-pressure', [App\Http\Controllers\Frontend\ProductController::class, 'absolute'])->name('absolute');
Route::get('pressure-transmitters/multivariable-pressure', [App\Http\Controllers\Frontend\ProductController::class, 'multivariable'])->name('multivariable');

Route::post('contactform/', [App\Http\Controllers\Frontend\StaticController::class, 'cfrom'])->name('cform');

Route::post('productform', [App\Http\Controllers\Frontend\StaticController::class, 'pfrom'])->name('pform');

Route::get('sitemap_index.xml', [App\Http\Controllers\Frontend\StaticController::class, 'sitemap'])->name('sitemap');
