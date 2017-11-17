<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/CadastroUsuarioCrud/model/CadastrarEnderecoModel.php";

$CadastrarEnderecoModel = new CadastrarEnderecoModel();

$categorias = $CadastrarEnderecoModel->todas();

?>
<br><br>
<h4 class="text-center">Endereços cadastrados</h4>
<table class="table table-bordered table-condensed tabelaEndereco text-uppercase">
  <thead class="thead-inverse">
    <tr>
      <th>Código</th>
      <th>Logadouro</th>
      <th>Bairro</th>
      <th>Numero</th>
      <th>Cidade</th>
      <th>CEP</th>
      <th>Complemento</th>
      <th>Unidade Federativa</th>
      <th>Editar</th>
      <th>Excluir</th>
    </tr>
  </thead>

  <tbody>

    <?php foreach($categorias as $c): ?>

    <tr>
      <td><?= $c["IdEndereco"]?></td>
      <td><?= $c["Logradouro"]?></td>
      <td><?= $c["Bairro"]?></td>
      <td><?= $c["Numero"]?></td>
      <td><?= $c["Cidade"]?></td>
      <td><?= $c["CEP"]?></td>
      <td><?= $c["Complemento"]?></td>
      <td><?= $c["NomeEstado"]?></td>
      <td>         
       <a href="javascript:update(<?= $c["IdEndereco"] ?>)">Editar</a> 
     </td>
     <td>         
       <a href="javascript:excluir(<?= $c["IdEndereco"] ?>)">Excluir</a> 
     </td>
   </tr>

 <?php endforeach; ?>

</tbody>
</table>
<br><br><br>
<script>
function excluir(IdEndereco){
 $.ajax({
  method: "GET",
  url: "/Faculdade/ProjetoCRUD/controller/CadastrarEnderecoController.php",
  data: { acao:"delete", id:IdEndereco },
  success: function(data){
    $("#mensagem").html(data);
    $("#tabela").load("visualizar.php");
  }
})
}

function update(IdEndereco){
 $("#cadastrarEndereco").load("formulario.php?id=" + IdEndereco, function(){

});
}
</script>