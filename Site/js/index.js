function logar(){

    var usuario = document.getElementById('usuario').value;
    //pega o valor do id.
    var senha = document.getElementById('senha').value;

    //validar se o usuário e a senha são igual 'admin'
    //se for, imprimir OK
    //senão, imprimir ERRO

    if(usuario == 'admin' && senha == 'admin'){
        alert("LOGIN OK");
        location.href= './html/home.html';
        //O location faz a conexão para a homepage.
    }else{
        alert("ERRO usuário ou senha incorretos");
      
    }
}