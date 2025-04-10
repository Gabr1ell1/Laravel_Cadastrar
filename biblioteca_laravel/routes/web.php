<?php 
use Illuminate\Support\Facades\Route; 

/*Web Routes 
Here is where you can register web routes for your application. These routes are loaded by the RouteServiceProvider within a group which contains the "web" middleware group. Now create something great! 
*/
use App\Models\Produto; 
use Illuminate\Http\Request; 


Route::get('/', function () { 
    return view('welcome'); 
}) ->name('cadastrar-produto'); 

Route::post('/cadastrar-produto', function (Request $request) { 
    //dd($request->all()); 
    Produto::create([ 
    'nome' => $request->nome, 
    'valor' => $request->valor, 
    'quantidade' => $request->quantidade 
]); 
return redirect()->back()->with('success', 'Produto cadastrado com sucesso!');
});

Route::get('/listar-produto', function () { 
    //dd(Produto::find($id));
    $produto = Produto::all();
    return view('listar', ['produto' => $produto]);

}) ->name('listar-produto');

Route::get('/editar-produto/{id}', function ($id) { 
    //dd(Produto::find($id));
    
    $produto = Produto::find($id);
    return view('editar', ['produto' => $produto]);

})->name('editar-produto');

Route::post('/editar-produto/{id}', function (Request $request, $id) 
{ 
    //dd(Produto::find($id));    
    $produto = Produto::find($id);

    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'quantidade' => $request->quantidade
    ]);
    return redirect('/')->with('sucess', 'Produto editado com sucesso!');

});

Route::get('/excluir-produto/{id}', function ($id) {
    $produto = Produto::find($id);

    if (!$produto) {
        return redirect('/')->with('error', 'Produto não encontrado!');
    }

    return view('excluir', compact('produto'));
})->name('excluir-produto');


Route::delete('/excluir-produto/{id}', function ($id) {
    $produto = Produto::find($id);

    if ($produto) {
        $produto->delete();
        return redirect('/')->with('success', 'Produto excluído com sucesso!');
    }

    return redirect('/')->with('error', 'Produto não encontrado!');
})->name('confirmar-exclusao');
