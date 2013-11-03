 <script>
 
/**
Nome: functions.js
Função: Toda codificação responsável pela manipulação dos dados no lado Cliente e funcionalidades AJAX é feita aqui.
*/

/** 
Aqui informamos ao navegador que, assim que o site for carregado, ele executará as instruções que estão neste bloco.
Igual o onload() que coloca-se na tag body do html 
*/
$(document).ready(function(){


  $("#loginform").submit(function(event){
    event.preventDefault();
  });
 
  //abaixo usamos o seletor da jQuery para acessar o botão, e em seguida atribuir à ele um evento de click
  $("#btn_login").click(function(){ 
    //Aqui chamamos a função validaLogin(), e passamos à ela o ID dos campos que vamos manipular os valores
    validaLogin($("#username"), $("#password"));
    /** Eu fazia isso aqui um pouco diferente, passando direto o valor do campo... Mas, com uma dica do
    William Moraes, adaptei dessa forma, que no final das contas, fica melhor, por estar trabalhando com 
    ponteiros no método, e não com o ID único dos input's  */


 
  });
 
});
 
/** Função responsável por validar os dados do formulário no lado Cliente, 
e enviar para a camada Controller (que está no Servidor) os dados informados pelo usuário para serem autenticados */
function validaLogin(login, senha){

  if(login.val() == ""){
    alert("Informe o login!"); //Exibe um alerta 
    login.focus(); //Adiciona foco ao campo login usando um ponteiro
    return; //retorna nulo
  }
  else if(senha.val() == ""){
    alert("Informe a senha!");
    senha.focus();
    return;
  }
  //Se o usuário informou login e senha, então é hora do Ajax entrar em ação
  else{
 
    //Adicionamos um texto na DIV #resultado para alertar o usuário que o sistema está autenticando os dados
    $("#avisoHeader").hide("slow");
    

    $("#logando").show("slow");

    $("#loginform").submit(function(event){
      event.preventDefault(); // impede que o form envie os dados normalmente como submit

      var $form = $(this),
      usuario = $("input[name='txt_usuario']").val(),
      pass = $("input[name='txt_senha']").val();

      var url = $form.attr("action");

      var posting = $.post(url, {user: usuario, password: pass},
        function(data)
        {
          if(data == "autenticou")
          {
            $("#autentica").show("slow");
          }
          else
          {

            login.focus();
            $("#erroLogin").show("slow");
          }
        });      
    }); 
  }
} //validaLogin()
</script>

<div id="resultado">
  </div>