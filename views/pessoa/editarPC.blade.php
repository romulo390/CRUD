<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
	<title>Editar</title>
</head>
<body>

<form action="{{url('atualizar',array($pessoas->id))}}" method="post">
  {{csrf_field()}}

<fieldset style="width: 40%;"> 
    <legend>Editar</legend>
    
    <p><a href="{{url('listaPC')}}">Voltar</a></p>

    <table width="625" border="0" align="center">
    
    <tr>
      <td width="69">Nome:</td>
      <td width="546">
         <input name="name" type="text" size="30" maxlength="60" value="{{$pessoas->name}}"/>
      </td>
    </tr>
    
    <tr>
      <td>E-mail:</td>
      <td>
          <input name="email" type="text" size="30" maxlength="60" value="{{$pessoas->email}}"/>
      </td>
    </tr>

      <tr>
      <td>Cidade:</td>
      <td>
          <input name="cidade" type="text" size="30" maxlength="60" value="{{$pessoas->cidade}}"/>
      </td>
    </tr>

    <tr>
      <td>Estado:</td>
      <td>
          <input name="estado" type="text" size="30" maxlength="60" value="{{$pessoas->estado}}"/>
      </td>
    </tr>

    <tr>
      <td height="15px;">Hobbies:</td>
           <tr>
              <td colspan="2">   
                 @foreach($pessoasHobbies as $ph)
                     <input type="checkbox" value="{{$ph->hobbie}}" checked="true"/><label>{{$ph->hobbie}}</label>
                  @endforeach
               </td>
           </tr>
    </tr>

    <tr height="15px;">
       <tr>
          <td colspan="2">Hobbies que você venha pratica</td>
       </tr>
       <td colspan="2">
         <input type="checkbox" name="hobbie[]" value="Cantar"/><label>Cantar</label>
         <input type="checkbox" name="hobbie[]" value="Dançar"/><label>Dançar</label> 
         <input type="checkbox" name="hobbie[]" value="Pular"/> <label>Pular</label>
         <input type="checkbox" name="hobbie[]" value="Caminhar"/><label>Caminhar</label>
         <input type="checkbox" name="hobbie[]" value="Natação"/><label>Natação</label> 
       </td>   
    </tr>

    <tr>
      <td colspan="2"><p>
        <input name="editar" type="submit" id="editar" value="Editar"/>
      </td>
    </tr>
  </table>
  </fieldset>
</form> 
</body>
</html>