@extends('cliente.layouts.app_client')
@extends('cliente.navbar.navbar')

@section('content')

<section class="hero-wrap js-fullheight">
    <div class="overlay" style="background-image: url(image/images/fondo_negro.jpg);" data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end">
           {{--  <h3 class="v">
                <a href="https://vimeo.com/45830194" class="popup-vimeo">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </div>
                    <span>Sould Tattoo </span> <br>Working Harder
                </a>
            </h3> --}}
            <div class="col-md-12 text-center ftco-animate">
                <h1 class="mt-5" style="background-image: url(image/images/fondo-color-rojo-oscuro.jpg);" data-stellar-background-ratio="0.5">Sould<br>Tattoo</h1>
                <h2>Sould Tattoo. Working Harder</h2>
            </div>
        </div>
    </div>
</section>


  <div id="acercaDeNosotros">
            <section class="ftco-about d-md-flex" >
                <div id="#about" class="one-half img" style="background-image: url(image/images/tinta5.jpg);">
                   <!--  <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                    <span class="icon-play"></a> -->
                </a>
                </div>
                <div class="one-half ftco-animate">
                    <div class="heading-section ftco-animate ">
                    <h2 class="mb-4">SOULD TATTOO</h2>
                    </div>
                    <div>
                            <p>Sould Tattoo fue pensada y creada para cubrir todas las necesidades del mundo del TATUAJE. En el campo del diseño y creación de tatuajes contamos con la experiencia,la técnica y la creatividad de nuestros tatuadores que cubren el abanico de todos los estilos. Creamos y proporcionamos diseños único e irrepetibles para cada uno de nuestros clientes garantizando así exclusividad absoluta.
                            Por todas estas razones,creemos firmemente que Sould Tattoo es el nuevo concepto del TATUAJE en Corrientes,de ahí nuestro eslogan...</p>

                            <p>...NOS PONEMOS EN TU PIEL!</p>
                    </div>
                </div>
            </section>
    </div>

    <div id="nuestrosTrabajos">
        <section class="ftco-section">
            <div class="container">
              <section class="ftco-work d-md-flex" >
                <div id="#work" class="one-half img">
                  <div class="container">
                    <div class="row justify-content-center mb-5">
                      <div class="col-md-7 heading-section text-center ftco-animate">
    <!--  {{--                   <span class="subheading">
                          <i class="db-left"></i>
                          <i class="db-right"></i>
                      </span> --}} -->
                     <h2 class="mb-3">Nuestros Trabajos</h2>
                        <p>Es una pagina dedicada al tatuaje creado para entretener, inspirar y conectar estudios de tatuajes, artistas tatuadores y todos los fans del arte corporal. También es la galería de fotos de tatuajes más importante de la web.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </section>


            <div class="row no-guttersover">
                @foreach($tatuajes as $tatuaje)
                <div class="overlay">
                  <div id="Trabajo{{$tatuaje->id}}" >
                    <!-- Modal -->
                    <div class="modal fade" id="PopUpInformacion{{$tatuaje->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document" >
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#06060A">
                            <h3 class="modal-title" id="exampleModalLabel" font-family= "Montserrat_Bold"> {{ $tatuaje->nombre }}</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <div class="modal-body" style="background-color:#06060A">
                           <div class="row">
                              <div class="col">
                                  <div class="col-md-3 mb-3">
                                    <div class="card">
                                      <img class="img" src="{{ $tatuaje->imagen }}" width="450px" height="600px"  onclick="vermas({{ $tatuaje->id }})">

                                    </div>
                                  </div>
                              </div>

                              <div class="col">
                                <p><span class="subTitle" style="color:#FFFFFF">Descripción:  {{ $tatuaje->descripcion }} </span></p>

                                 <p><span class="subTitle" style="color:#FFFFFF">Fuente: {{ $tatuaje->fuente }}
                                 </span></p>

                                <p><span class="subTitle" style="color:#FFFFFF">Categoria:
                                <ul>
                                  @foreach($tatuaje->categorias as $itemCategoria)
                                    <li>{{ $itemCategoria->nombre }}</li>
                                  @endforeach
                                </ul>
                                  </span>
                                </p>

                                <p><span class="subTitle" style="color:#FFFFFF">Sexo:
                                  <ul>
                                  @foreach($tatuaje->sexos as $itemSexo)
                                     <li>{{ $itemSexo->nombre }}</li>
                                  @endforeach
                                  </ul>
                                  </span>
                                </p>

                                <p><span class="subTitle" style="color:#FFFFFF">Lugares:
                                  <ul>
                                   @foreach($tatuaje->lugares as $itemLugar)
                                     <li>{{ $itemLugar->nombre }}</li>
                                  @endforeach
                                  </ul>
                                  </span>
                                </p>
                                <br>
                                <br>
                                <h5><a href="login" data-taggle="tab" onclick="functionAddClass('tabs-register')"> Registrate</a><br>- Selecciona un tatuador acorde a tu ubicacion y ...<br>- Saca un turno para un nuevo tatuaje.</h5>
                            </div>
                        </div>

                      </div>
                       <div class="modal-footer" style="background-color:#06060A">
                         <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                       </div>
                     </div>
                    </div>
                   </div>
                   <!-- Cierra el modal -->
                 </div>
                 <!-- Cierra el popup -->
              </div>



                        <div class="col-lg-6 mt-5 mb-5 d-flex">
                            <div class="coach d-sm-flex align-items-stretch">
                                @if(!@empty($tatuaje->imagen))
                                    <div class="img" style="background-image: url({{$tatuaje->imagen}}) "></div>
                                @else
                                    <div class="img order-xl-last" style="background-image: url(image/images/trainer-3.jpg);"></div>
                                @endif
                                <div class="text py-4 px-5 ftco-animate">
                                    <span class="subheading">Tatuaje</span>
                                    <h3><a href="#">{{ $tatuaje->nombre }}</a></h3>
                                    <p><span class="subTitle">Descripción:  {{ $tatuaje->descripcion }} </span></p>

                                   <!--  BOTON DE VER MAS -->
                                    <a href="#" id="enlace{{$tatuaje->id}}" data-toggle="modal" data-target="#PopUpInformacion{{$tatuaje->id}}">
                                      Ver mas
                                    </a>

                                </div>



                                    <!--  iconos de redes sociales -->
                                    <!-- <ul class="ftco-social-media d-flex mt-4">

                                         <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
                                    </ul> -->
                                        <p></p>

                            </div>

                        </div>

                        @endforeach


                    </div>

                   <!--  Centralizo el paginado -->
                    <div class="row">
                        <div class= "mx-auto">
                          <!--  {{ $tatuajes->links() }}-->
                          {!! $tatuajes->render() !!}
                        </div>
                    </div>
            </div>

        </section>
    </div>



    <div id="comoCuidarse">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
              <div class="col-md-10 heading-section text-center ftco-animate">
                  <span class="subheading">

                  </span>
                 <h2 class="mb-3">Como Cuidarse</h2>
                <p>- Mantener el vendaje durante 4 horas (de lo contrario el tatuaje se adherirá a la ropa y al despegarlo extraerá el pigmento).</p>
                <p>- Luego de las 4 horas, sacar el vendaje y lavar con agua y jabón neutro. </p>
                <p>- Colocar crema 4 veces por día. (NO USAR PRODUCTOS A BASE DE PETROLEO NI VASELINA) </p>
                <p>- Evitar el exceso de crema, sol, agua salada o con cloro . No mantener en agua demasiado tiempo mas que un remojo. </p>
                <p>- No extraer las cáscaras y mantener el tatuaje alejado de la suciedad y grasitud. </p>
                <p>- Tomará aproximadamente 4 semanas en cicatrizar. </p>
                <p>- Usar la crema durante todo ese tiempo y un fuerte protector solar ayudará a mantener los colores vivos por  mucho mas tiempo. </p>


                <h3 p style="color:#8B0000";><br><b> COSAS QUE NO DEBES HACER ANTES DE TATUARTE </b></p></h3>
                <p style="color:#8B0000";>Es importante que sigas estas recomendaciones para ayudar a la cicatrización y el proceso de realización del mismo.
                <p style="color:#8B0000";>-Evita la ingesta de alcohol, ya que la misma produce sequedad y deshidratacion en la piel. Esto dificulta la tarea del tatuador, ya que el tatuar en una piel reseca es realmente engorroso, eso sin mencionar que el tatuaje pierde mucha calidad, es por esto que se recomienda evitar el alcohol por completo.
                <p style="color:#8B0000";>-El sueño y la buena alimentación antes del tatuaje ya que algunos tatuajes conllevan cierto grado de dolor, por mínimo que sea, este genera un desgaste físico considerable, es por ello que se recomienda dormir muy bien para estar muy descansado durante el proceso de realización. Tambien es importante, el comer unas pocas horas antes de la realización es importante para evitar descompensarse e incluso evitar desmayos durante el tatuaje, es por esto que debes estar muy bien alimentado y descansado.
                <p style="color:#8B0000";>-Humecta y no rasures tu piel antes del tatuaje ya que esto puede generar algún tipo de irritación y algún corte en la zona del tatuaje, si esto ocurre el trabajo del tatuador se dificultad ya que la piel irritada debe ser tatuada con mucho más cuidado.
                <p style="color:#8B0000";>-Es importante dejar tu agenda libre para ese dia ya que los tatuajes pueden tomar mucho tiempo, mucho más de lo que se cree, el artista del tatuaje te puede comentar que la realización se llevara cierto tiempo pero a veces este tiempo es mucho mayor, esto puede ocurrir por muchos factores. Recuerda que durante el proceso de realización es común que te canses y necesites un tiempo libre, a veces el tatuaje se lleva más tiempo del necesario, es por esto que debes evitar tener más compromisos ese día, para evitar que se crucen las citas.
                </p>

              </p>
              <br>



              <h6>Para cualquier consulta escribir al correo <a href="viccfantasma@gmail.com">viccfantasma@gmail.com</a></h6>
              </div>
            </div>


    <div id="contacto">

        <section class="ftco-section contact-section">
            <div class="container mt-5">
              <div class="row block-9">
                          <div class="col-md-4 text-md-right contact-info ftco-animate">
                              <div class="row">
                                  <div class="col-md-12 mb-4">
                        <h2 class="h5 font-weight-bold">Informacion de Contacto</h2>
                      </div>
                      <div class="col-md-12 mb-3">
                        <p><span>Direccion:</span> Junin 342, Corrientes, Argentina</p>
                      </div>
                      <div class="col-md-12 mb-3">
                        <p><span>Celular:</span> <a href="tel://1234567920">+ 54 379 4228027</a></p>
                      </div>
                      <div class="col-md-12 mb-3">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">viccfantasma@gmail.com</a></p>
                      </div>
                      <div class="col-md-12 mb-3">
                        <p><span>Sitio Web:</span> <a href="#">https://hilikustatoo.business.site/</a></p>
                      </div>
                              </div>
                          </div>

                          <div class="col-md-1"></div>
                            <div class="col-md-6 ftco-animate">
                              <!-- <form action="#" class="contact-form"> -->
                                <form method="POST" action="/contacto">
                                  @csrf
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                            <input type="text" name="nombre" maxlength="30" id="nombre" size="30" autocomplete="off" class="form-control" placeholder="Nombre">
                                             <p class="text-danger">{{ $errors->first('nombre') }}</p>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                            <input type="email" name ="email" class="form-control" autocomplete="off" placeholder=" Tu email">
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <input type="text" name="motivo"  maxlength="80" id="motivo" size="80" autocomplete="off" class="form-control" placeholder="Motivo">
                                    <p class="text-danger">{{ $errors->first('motivo') }}</p>
                                  </div>
                                  <div class="form-group">
                                    <textarea name="mensaje" id="" cols="30" rows="7" class="form-control" autocomplete="off" placeholder="Mensaje"></textarea>
                                    <p class="text-danger">{{ $errors->first('mensaje') }}</p>
                                  </div>
                                  <div class="form-group">
                                    <button type="submit" value="enviarConsulta" name="enviarConsulta" class="btn btn-primary py-3 px-5">Enviar Consulta</button>
                                  </div>
                              </form>
                              <!-- </form> -->
                            </div>
                          </div>
                        </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1770.0343962449588!2d-58.844576942029185!3d-27.467117615862502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456cbbab25fb4d%3A0xecdb17da29b535a8!2sJunin%20550%2C%20W3400AVM%20Corrientes!5e0!3m2!1sen!2sar!4v1596914963956!5m2!1sen!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </section>



    </div>

    <!-- Modal Login-->
{{--    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header nav nav-tabs" id="tabContent">
                     <ul class="nav nav-tabs" id="tabContent">
                         <li><a href="#log" data-toggle="tab">Acceso al sistema</a></li>
                        <li><a href="#reg" data-toggle="tab">Registrarse</a></li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>




                </div>





                <div class="modal-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="log">



                            <form method="POST" action="/login">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>





                        </div>

                        <div class="tab-pane" id="reg">

                            <form method="POST" action="{{ route('register') }}">
                                @csrf


                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contrase�a') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contrase�a') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}



    {{-- <div class="modal" tabindex="-1" id="exampleModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-light">Guardar cambios</button>
            </div>
          </div>
        </div>
      </div> --}}
@endsection



@section('scripts')
<script>

  $(document).ready(function($) {
          $('#nombre').mask('AAAAAAAAAAAAAAA', {'translation': {
                  A: {pattern: /[A-Za-z\s]/},
              }
          });
          $('#motivo').mask('AAAAAAAAAAAAAAA', {'translation': {
                  A: {pattern: /[A-Za-z\s]/},
              }
          });
  });


    </script>


@endsection


      <!-- <script>
          function vermas(id){
            if(id=="mas"){
              document.getElementById("desplegar").style.display="block";
              document.getElementById("mas").style.display="none";
            }else{
              document.getElementById("desplegar").style.display="none";
              document.getElementById("mas").style.display="inline";
            }
          }
      </script> -->



