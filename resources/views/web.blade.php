<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hackathon2020 CITTSB</title>

  <!-- Bootstrap core CSS -->
  <link href="/presentacion/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/presentacion/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/presentacion/vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" href="/presentacion/device-mockups/device-mockups.min.css">
  <link href="/presentacion/css/new-age.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" integrity="sha256-6hqHMqXTVEds1R8HgKisLm3l/doneQs+rS1a5NLmwwo=" crossorigin="anonymous" />

</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{ route('home')}}">Hackathon CITT 2020</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Test">Autoevaluación</a>
            <a class="nav-link " href="/mapa">Mapa</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
{{-- 
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <h1 class="mb-5">Buscamos la forma de hacer posible la trazabilidad.</h1>
            
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white">
              <div class="device">
                <div class="screen">
                  <img src="/presentacion/img/demo-screen-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="button">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header> --}}

  <section class="download bg-info text-center" >
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          {{-- <h1 class="animate__animated animate__bounce">Está Pandamia</h1> --}}
          <h2 class="section-heading animate__animated animate__bounce">Esta Pandemia la enfrentemos <strong>Juntos</strong></h2>
          <p><strong>Con compromiso y autocuidado.</strong></p>
          <div class="badges animate__animated animate__rubberBand">
            {{-- <div> --}}
              <span class="btn btn-dark btn-lg">Casos <div id="casostotal"></div> </span>
              <span class="btn btn-danger btn-lg">Muertes <div id="muertes"></div> </span>
              <span class="btn btn-success btn-lg">Recuperados <div id="recuperador"></div> </span> 
        

            {{-- </div> --}}

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="features" id="Test">
    <div class="container">
      <div class="section-heading text-center">     
        <h2>Autoevaluación</h2>
        {{-- <p class="text-muted">Rellena el siguiente formulario</p> --}}
       
      </div>
      <div class="row">
        <div class="col-md-6">
          <iframe src="https://scratch.mit.edu/projects/408021269/embed" allowtransparency="true" width="100%"
            height="450" frameborder="0" scrolling="no" allowfullscreen>
          </iframe>
        </div>
        <div class="col-md-6">
          <form action="#"  id="formulario">
            <div class="form-group">
              <h1></h1>              
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Te encuentras acá <div class="btn btn-info" id="buttonGeo">Ver localización</div></label>
              
              {{-- HERE.COM --}}
              <div style="width: 100%;height: 200px;" id="mapContainer"></div>
              {{-- HERE.COM --}}

            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Fecha Nacimiento</label>
              <select class="form-control" id="idEdad">
                @for ($i = date('Y'); $i >= 1900 ; $i--)
                  <option value="{{ $i }}">{{ $i }}</option>
                @endfor
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Tu temperatura</label>
              {{-- <input type="number" class="form-control" id="" placeholder=""> --}}
              <select class="form-control" id="idTemperatura">
                @for ($i = 36; $i <= 39 ; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                <option value="{{ $i + 0.5 }}">{{ $i + 0.5 }}</option>
                @endfor
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Seleccione sus sintomas</label>
              <div class="form-group">
                <input type="checkbox" name="sintomas[]" value="1" id="">
                <label for="exampleFormControlSelect1">Dolor o presión en el pecho</label>
              </div>
              <div class="form-group">
                <input type="checkbox"  name="sintomas[]" value="2">
                <label for="exampleFormControlSelect1">Tos Seca</label>
              </div>
              <div class="form-group">
                <input type="checkbox"  name="sintomas[]" value="3">
                <label for="exampleFormControlSelect1">Cansancio</label>
              </div>
              <div class="form-group">
                <input type="checkbox"  name="sintomas[]" value="4">
                <label for="exampleFormControlSelect1">Dolor de cabeza</label>
              </div>
              <div class="form-group">
                <input type="checkbox"  name="sintomas[]" value="5">
                <label for="exampleFormControlSelect1">Dificultad al respirar</label>
              </div>
            </div>
            <br>
            <div class="form-group">
              <input type="checkbox" name="isValid" id="idValid">
              <label for="exampleFormControlSelect1">Acepta los <u>Terminos y condiciones</u>.</label>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-block">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <hr style="color: #0056b2;" />


  <section class="features" id="Test">
    <div class="container">
      <div class="section-heading text-center">     
        <h2>Video de prevención</h2>
        {{-- <p class="text-muted">Rellena el siguiente formulario</p> --}}
       
      </div>
      <div class="row">
        <div class="col-md-12">
          <iframe src="https://scratch.mit.edu/projects/408099448/embed" allowtransparency="true" width="100%" 
          height="450" frameborder="0" scrolling="no" allowfullscreen></iframe>

        </div>
      </div>
    </div>
  </section>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Resultados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="texto"></div>
        <img src="/images/mask-woman.svg" width="100px" alt="">
        <br> 
        <strong>¿Desea contactar con el consultorio mas cercano?</strong>
      </div>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> --}}
        {{-- <button type="button" class="btn btn-primary" >Llamar</button> --}}
        <a href="https://wa.me/56998299855" target="_blink" class="btn btn-success">Whatsapp</a>

        <a href="tel:+56998299855" class="btn btn-primary">Llamar ahora</a>
      </div>
    </div>
  </div>
</div>


  <section class="contact bg-primary" id="contact">
    <div class="container">
      <h2>Hackathon 2020 <i class="fas fa-heart"></i> CITT</h2>
      <ul class="list-inline list-social">
        <li class="list-inline-item">
          <img src="/images/citt.jpg" alt="">
        </li>
        <li class="list-inline-item">
          <img src="/images/duocingenieria.png" alt="">
        </li>
        <li class="list-inline-item">
          <img src="/images/duocsalud.png" alt="">
        </li>
        <li class="list-inline-item ">
          <img src="/images/here.png" alt="">
        </li>
        <li class="list-inline-item">
          <img src="/images/13.png" alt="">
        </li>
        <li class="list-inline-item">
          <img src="/images/robotics.jpg" alt="">
        </li>
      </ul>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; Hackathon.</p>
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="#">CITT San Bernardo 2020</a>
        </li>
        {{-- <li class="list-inline-item">
          <a href="#">Terms</a>
        </li>
        <li class="list-inline-item">
          <a href="#">FAQ</a>
        </li> --}}
      </ul>
    </div>
  </footer>

  {{-- here.com --}}
  <script src="/presentacion/vendor/jquery/jquery.min.js"></script>
  <script src="/presentacion/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/presentacion/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="/presentacion/js/new-age.min.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script>

  <script> 

      var formatNumber = {
        separador: ".", // separador para los miles
        sepDecimal: ',', // separador para los decimales
        formatear:function (num){
        num +='';
        var splitStr = num.split('.');
        var splitLeft = splitStr[0];
        var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
        var regx = /(\d+)(\d{3})/;
        while (regx.test(splitLeft)) {
        splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
        }
        return this.simbol + splitLeft +splitRight;
        },
        new:function(num, simbol){
        this.simbol = simbol ||'';
        return this.formatear(num);
        }
      }
    
    const url = "https://corona.lmao.ninja/v2/countries/chile";

    fetch(url)
      .then(resp => { return resp.json(); })
      .then(result => {
        document.getElementById('muertes').innerHTML = formatNumber.new(result.deaths);
        document.getElementById('recuperador').innerHTML = formatNumber.new(result.recovered);
        // document.getElementById('activos').innerHTML = result.active;
        document.getElementById('casostotal').innerHTML = formatNumber.new(result.cases);
      });

      eventListeners();
      function eventListeners() {
        document.querySelector('#formulario').addEventListener('submit', resolverTest);
      }
       
      function resolverTest(e){
        e.preventDefault();
        
        let annio = document.getElementById('idEdad').value;
        let temperatura = document.getElementById('idTemperatura').value;
        let localizacion = LocationOfMap;
        let edad = 2000 - annio;
        
        if(edad >= 45 && temperatura> 37){
          console.log('Covid');
          document.getElementById('texto').innerHTML = "Usted es una persona con posible COVID.";
        }else{
          console.log('no covid');
          document.getElementById('texto').innerHTML = "No estas en los grupos de riesgo, cuidate y no salgas de tu casa.";
        }

        $('#exampleModal').modal('show');
      }
  </script>

  <script src="/js/minimapa.js"></script>
</body>

</html>