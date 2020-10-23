<!-- Banner imagem fixa servicos-->

<div class="container-fluid text-center marginsBanner">
  <img src="public/img/servicos.jpg" alt="" class="img-fluid w-100">
</div>



<!-- formulario de Pedidos -->

<div class="container my-3 card bg-warning">

  <form>
    <div class="form-row my-3">
      <div class="form-group col-7 md-6">
        <label for="inputEmail4">Endereço</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Seu Endereço Aqui">
      </div>
    </div>

    <div class="form-group col-3 md-6">
      <label for="inputPassword4">CEP</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Cep">
    </div>

    <div class="form-group col-3 md-6">
      <label for="inputPassword4">Telefone</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEstado">Forma de Pagamento</label>
      <select id="inputEstado" class="form-control">
        <option selected>Dinheiro</option>
        <option>Cartão</option>
      </select>
    </div>

    <div class="form-group">
      <label for="inputAddress">Observações</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="">
    </div>

    <button type="submit" class="btn btn-success my-3">Enviar Pedido</button>
    <a href="index.php?pg=cardapio" class="btn btn-danger my-3">Volta ao Cardapio</a>
  </form>
</div>
</div>