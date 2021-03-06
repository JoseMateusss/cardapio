<x-guest-layout>
    <div class="login-box">
        <div class="login-logo">
            <a href="{{route('home')}}"><b>Cardápio</b> Online</a>
          </div>
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Faça login para iniciar sua sessão</p>
      
            <form action="{{route('login')}}" method="post">
              @csrf
              <div class="input-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              @error('email')
                  <div class="alert alert-danger">{{$message}}</div>
              @enderror
              <div class="input-group mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              @error('password')
                  <div class="alert alert-danger">{{$message}}</div>
              @enderror
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" name="rememberme" id="remember">
                    <label for="remember">
                      Lembrar-me
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <p class="mb-1">
              <a href="{{route('password.request')}}">Esqueci a minha senha</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div> 
</x-guest-layout>
