<!DOCTYPE html>
<html>
<head>
	<title>Pessoas Cadastradas</title>
</head>
<body>
{{ Session::get('message') }}
	<p style="font-family: sans-serif;font-size: 24px">Pessoas Cadastradas</p>
	<HR/>
    <a href="{{url('index')}}">Add Pessoa</a>
	<div>
	   <table width="800" style="font-size: 15px";  border="1" cellspacing="0">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Cidade</th>
				<th>Estado</th>
				<th>Hobbies</th>
				<th>Ação</th>
			</tr>
			
		@foreach ($pessoas as $p)
				<tr>
					<td>{{$p->id}}</td>
					<td>{{$p->name}}</td>
					<td>{{$p->email}}</td>
					<td>{{$p->cidade}}</td>
					<td>{{$p->estado}}</td>
					<td>@foreach($p->hobbies as $hob)	
							 @if($p->id == $hob->pessoa_id)
					 			{{ $hob->hobbie }},
					 		 @endif 
						@endforeach</td>
					<td>
					<a href="{{ url('editar', array($p->id)) }}">Editar</a>
					|
					<a href="{{ url('remover', [$p->id]) }}"> Deletar</a>
					</td>	
				</tr>
	
		
		@endforeach
		</table>
	</div>
</body>
</html>