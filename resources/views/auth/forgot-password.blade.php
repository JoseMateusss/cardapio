<x-guest-layout>
    <div class="login-box">
        <div class="login-logo">
          <a href="{{route('home')}}"><b>Cardápio</b>Online</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Você esqueceu sua senha? Aqui você pode facilmente recuperar uma nova senha.</p>
      
            <form action="recover-password.html" method="post">
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="E-mail">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block">Recuperar Senha</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
      
            <p class="mt-3 mb-1">
              <a href="{{route('login')}}">Voltar para o login</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
</x-guest-layout>
