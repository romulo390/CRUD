<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
<body>
<form action="{{route('pessoa.inserir')}}" method="post">
  {{ csrf_field() }}
  <fieldset style="width: 40%;">  

      <legend>Cadastro de Pessoas </legend>

      <p><a href="{{url('listaPC')}}">Listar Todos</a></p>
         
    
     <table width="625" border="0">
        <tr>
            <td width="69">Nome:</td>
            <td width="546"><input name="name" type="text" id="nome" size="30" maxlength="60" placeholder="Nome" /></td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><input name="email" type="text" size="30" maxlength="60" placeholder="E-mail" /></td>
        </tr>
        <tr>
            <td>Cidade:</td>
            <td><input name="cidade" type="text" size="30" maxlength="60" placeholder="Cidade" /></td>
        </tr>
        <tr>
            <td>Estado:</td>
            <td>
            <select name="estado">
             <option>Selecione..</option>
                  @foreach ($estados as $es)
                    <option value="{{$es}}">{{$es}}</option>
                   @endforeach
            </select>
            </td>
        </tr>
        <tr>
           <td>Hobbies:</td>
        </tr>
        <tr>
           <td <td colspan="2">
              <input type="checkbox" name="hobbie[]" value="Cantar"><label>Cantar</label>
              <input type="checkbox" name="hobbie[]" value="Dançar"><label>Dançar</label> 
              <input type="checkbox" name="hobbie[]" value="Pular"> <label>Pula</label>
              <input type="checkbox" name="hobbie[]" value="Caminhar"><label>Caminhar</label>
              <input type="checkbox" name="hobbie[]" value="Caminhar"><label>Natação</label>
          </td>  
        </tr>
      <tr>
          <td colspan="2"><p>
            <input name="cadastrar" type="submit" value="Cadastrar" />
          </td>  
      </tr>
  </table>
  </fieldset>
</form>
</body>
</html>
 