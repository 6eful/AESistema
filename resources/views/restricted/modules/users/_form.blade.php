<div class="form-row">
  <div class="form-group field col-md-6">
    <small id="nomeHelp" class="form-text text-muted"><span class="font-weight-bold">Dica:</span> Procure variações do formato nome e sobrenome.</small>
    <span class="fa fa-id-card-alt fa-2x"></span>
    <input type="text" name="name" id="name" placeholder="Jason">
    <label for="name">Nome:</label>
  </div>
  <div class="form-group field col-md-6">
    <small id="emailHelp" class="form-text text-muted"><span class="font-weight-bold">Dica:</span> Não use símbolos ou caracteres especiais.</small>
    <span class="fa fa-envelope fa-2x"></span>
    <input type="email" name="email" id="email" placeholder="Jason@gmail.com">
    <label for="email">Email:</label>
  </div>
</div>
<div class="form-row">
  <div class="form-group field col-md-6">
    <small id="senhaHelp" class="form-text text-muted"><span class="font-weight-bold">Dica:</span> Evite palavras disponíveis em dicionários ou sequências simples como “123456”.</small>
    <span class="fa fa-key fa-2x"></span>
    <input type="password" name="password" id="password" placeholder="Password">
    <label for="password">Senha:</label>
  </div>
  <div class="form-group field col-md-6">
    <small id="senhacHelp" class="form-text text-muted"><span class="font-weight-bold">Dica:</span> Evite palavras disponíveis em dicionários ou sequências simples como “123456”.</small>
    <span class="fa fa-key fa-2x"></span>
    <input type="password" name="password_confirm" id="password_confirm" placeholder="Password">
    <label for="password_confirm">Confirmar senha:</label>
  </div>
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
</div>
