<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Hobbie;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pessoas=Pessoa::all();
        $estados = ["AM","BA","CE","PE","PB"];

        return view('pessoa.index',compact('estados'));

   }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request)
    {
        
        $campos = $request->except('_token');

        $campoHobbie = $request->input('hobbie');

        $insertPessoa = Pessoa::create($campos);
       
        foreach ($campoHobbie as $key => $value) {
                  
            $hobbie = new Hobbie;
            $hobbie->pessoa_id = $insertPessoa->id;        
            $hobbie->hobbie = $value;
            $salvarHobbie =$hobbie->save();
        }

        //return back();
        return redirect('listaPC');
     
    }


    public function pessoasCadastradas(){
        
        $pessoas = Pessoa::with('hobbies')->get();

    return view('pessoa.listaPC', compact('pessoas'));  
    
    } 


    public function editarPessoa($id)
    {


        $pessoas = Pessoa::find($id);
        $pessoasHobbies = Pessoa::find($id)->hobbies;
             
    
      return view('pessoa.editarPC', compact('pessoas','pessoasHobbies'));
    }


    public function pessoaAtualizar(Request $request, $id)
    {
          $pessoas = Pessoa::find($id);

          $pessoas->name   = $request->name; 
          $pessoas->email  = $request->email;
          $pessoas->cidade = $request->cidade;
          $pessoas->estado = $request->estado;

          $pessoasHobbies = Pessoa::find($id)->hobbies->pluck('hobbie');

          $pH = $pessoasHobbies->toArray();

          $inputHobbies = $request->input('hobbie');

          $result = array_diff($inputHobbies, $pH);

          if(!empty($inputHobbies)){
             foreach ($result as $key => $value) {
                  
                $hobbie = new Hobbie;
                $hobbie->pessoa_id = $pessoas->id;        
                $hobbie->hobbie = $value;
                $salvarHobbie = $hobbie->save();
        }
    }

      $pessoas->update();
    
      return redirect('listaPC');

   } 

    public function pessoaRemover($id)
    {
         $pessoas = Pessoa::find($id);
         $pessoas->delete();

        return redirect('listaPC')->with('message','Pessoa excluida com secesso');   
    }
}
