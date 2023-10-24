<html>
    <body>
        <form action="{{route('usuario.atualizar', $usuario->id) }}"method="POST">
            @csrf
            @method('PUT')
            
            <label>Nome</label><br>
            <input type="text" name="nome" value= "{{$usuario->nome}}"><br>

            <label>Email</label><br>
            <input type="email" name="email" value="{{$usuario->email}}"><br>

            <label>Senha</label><br>
            <input type="password" name="senha" value="{{$usuario->senha}}"><br>

            <input type="submit" value="Atualizar">

        </form>
    </body>
</html>
