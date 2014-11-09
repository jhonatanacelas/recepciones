<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        {{ HTML::style('css/bootstrap.css'); }}
        {{ HTML::style('css/bootstrap-theme.css'); }}
        {{ HTML::style('css/style.css'); }}
        {{ HTML::style('js/bootstrap.js'); }}
    </head>
    <body>
        <div class="container" style="text-align: center;" >
                    <h1 id='titulo' style="color:#6f3a2a;">Sistema de informacion y control de reservas Hoteles Santa Elena</h1>

            <div class="panel panel-default" style="padding: 0,5em 2em; margin: 5em 30%;">

                <div class="panel-body" >
                    {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                    @if(Session::has('mensaje_error'))
                        <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
                    @endif
                    
                    <legend>Iniciar sesión</legend>

                    <br>

                    {{ Form::open(array('url' => '/login','class' => 'form-horizontal')) }}
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            {{ Form::text('username', Input::old('username'), array('class' => 'form-control')); }}

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            {{ Form::password('password', array('class' => 'form-control')); }}
                          <!-- <input type="password" class="form-control" id="inputPassword3" placeholder="Password"> -->
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <!-- <input type="checkbox">  -->
                                {{ Form::checkbox('rememberme') }}Recordar mis datos.

                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        {{ Form::submit('Iniciar Session', array('class' => 'btn btn-primary')) }}

                        </div>
                      </div>
                    {{ Form::close() }}




                </div>
            </div>
        </div>
        <!-- Pie de Pagina -->
        <div class="footer">
            Hoteles Santa Elena Todos los derechos reservados.
        </div>
        <!-- Fin pie de pagina  -->
        <script src="https://code.jquery.com/jquery.js"></script>
        {{ HTML::script('js/bootstrap.js'); }}
    </body>
</html>