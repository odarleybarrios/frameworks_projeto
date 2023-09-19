<html>
 <head>
  <title>Novo Usuário</title>
 </head>

 <body>
   <h1>Novo Usuário</h1>
   <form action=""method="post">

    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" required>
     <br>
    <label for="email">Email</label>
    <input type="email" name="email" id= "email" required>
     <br>
    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha" required>
    <br>
    <input type="submit" value="Cadastrar">
   </form>
 </body>

</html>
