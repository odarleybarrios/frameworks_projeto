<table border ="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

 <tbody>
@forelse ($meusUsuarios as $usuario)

<tr>
    <td>{{$usuario->id}}</td>
    <td>{{$usuario->nome}}</td>
    <td>{{$usuario->email}}</td>

    <td> <a href="{{route('usuario.editar',$usuario->id)}}"> Editar Usuário </a> </td>

    <td>
        <form action="{{route('usuario.deletar', $usuario->id)}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" onclick="return confirm('Tem certeza que quer deletar?');">Deletar</button>

    </td>
</tr>

 @empty
 <p>Nenhum usuário cadastrado</p>
@endforelse

</tbody>
</table>
