@forelse ($meusUsuarios as $usuario)

 <p>{{$usuario->nome}}</p>
 @empty
 <p>Nenhum usuário cadastrado</p>
@endforelse

