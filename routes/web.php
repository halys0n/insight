<?php
use App\Http\Controllers\SalaController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\DadoController;
use League\Csv\Reader;
use League\Csv\Statement;
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

Route::get('/importar', function () {
	return view('csv.index');
});


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'guest'], function() {
	Route::get('pricing', 'PageController@pricing')->name('page.pricing');
	Route::get('lock', 'PageController@lock')->name('page.lock');
});
Route::resource('salas', SalasController::class);
Route::resource('dados', DadoController::class);
Route::get('import-form', [StudentsController::class, 'importForm']);
Route::post('import-form', [StudentsController::class, 'SaveImportFile']);
Route::get('import-show', [StudentsController::class, 'show']);
/* Route::post('file', function(){
	    $csvData = ($_FILES(['csv_file']));
        

        $csvData = array_unique($csvData);
        $c = ",,,,,,,,,,,," . PHP_EOL;
        $deletKeys = array_search($c, $csvData);
        unset($csvData[$deletKeys]); 
        
        $csvData = Reader::createFromPath(request()->file('csv_file')->getRealPath());
        $csvData->setHeaderOffset(0);
        $files=[];
        foreach ($csvData as $record){
        $files[]=[
            'NUMERO'=>$record['NUMERO'],
            'Alunos / Disciplinas'=>$record['Alunos / Disciplinas'],
            'GEOGRAFIA'=>$record['GEOGRAFIA'],
            'HISTÓRIA'=>$record['HISTÓRIA'],
            'LABORATORIO DE SOFTWARE'=>$record['LABORATORIO DE SOFTWARE'],
            'LABORATORIO HARDWARE'=>$record['LABORATORIO HARDWARE'],
            'MATEMÁTICA'=>$record['MATEMÁTICA'],
            'PROFISSAO E FORMAÇÃO'=>$record['PROFISSAO E FORMAÇÃO'],
            'QUÍMICA'=>$record['QUÍMICA'],
            'SOCIOLOGIA'=>$record['SOCIOLOGIA'],
        ];
        Filecsv::insert($files);
        }
}); */
Route::group(['middleware' => 'auth'], function () {
	Route::resource('category', 'CategoryController', ['except' => ['show']]);
	Route::resource('tag', 'TagController', ['except' => ['show']]);
	Route::resource('item', 'ItemController', ['except' => ['show']]);
	Route::resource('role', 'RoleController', ['except' => ['show', 'destroy']]);
	Route::resource('user', 'UserController', ['except' => ['show']]);

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	
	
	Route::get('maps/{page}', ['as' => 'page.maps', 'uses' => 'PageController@maps']);
	Route::get('components/{page}', ['as' => 'page.components', 'uses' => 'PageController@components']);
	Route::get('forms/{page}', ['as' => 'page.forms', 'uses' => 'PageController@forms']);
	Route::get('pages/{page}', ['as' => 'page.pages', 'uses' => 'PageController@pages']);
	Route::get('tables/{page}', ['as' => 'page.tables', 'uses' => 'PageController@tables']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});
