<?php
$response = array('status' => '', 'message' => '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recibir datos del formulario
  $fullname = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $empresa = $_POST['Empresa'];
  $message = $_POST['mensaje'];

  // Dirección de correo a la que se enviará el mensaje
  $to = "sanchezulises952@gmail.com";
  $subject = "Mensaje de la pagina web Marba.";
  $body = "Nombre Completo: $fullname\nEmail: $email\nTeléfono: $phone\nEmpresa: $empresa\nMensaje: $message";
  $headers = "From: $email";

  // Enviar correo electrónico
  if (mail($to, $subject, $body, $headers)) {
    $response['status'] = 'success';
    $response['message'] = 'Correo enviado exitosamente';
  } else {
    $response['status'] = 'error';
    $response['message'] = 'Error al enviar el correo';
  }

  // Devolver respuesta JSON
  header('Content-Type: application/json');
  echo json_encode($response);
  exit;
}

$message = '';
if (isset($_POST['enviar'])) {
    // Procesar el formulario
    // Simular un retraso para ver el spinner (quitar en producción)
    sleep(2);
    $message = json_encode(['status' => 'success', 'message' => 'Correo enviado exitosamente']);
}
?>


<!DOCTYPE html>
<html>

<head>
  <title>Marbasi</title>
  <link rel="icon" href="imagenes/iconoMarba.ico"/>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/231b14a177.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="keywords" content="servicios criticos datacenter infraestructura industria mercaderias capital humano termomecanica ">
  <meta name="description"
    content="Marba es una empresa de gran capital humano capacitado durante mas de 14 años en el rubro infraestructura eléctrica y termomecánica , con gran solidez en instalaciones de gran criticidad donde la falta de suministro no es una opción . Una de nuestras premisas fundamentales es la capacitación de nuestro personal...">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <!-- estilos -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- header  -->
  <header class="header">
    <nav class="nav">
      <a href="#" class="logo nav-link"><img src="imagenes/marba-logo-blanco (1).svg" alt=""></a>
      <button class="nav-toggle" aria-label="Abrir menú">
        <i class="fas fa-bars"></i>
      </button>
      <ul class="nav-menu">

        <li class="nav-menu-item">
          <a href="#servicios" class="nav-menu-link nav-link">Servicios</a>
        </li>
        <li class="nav-menu-item">
          <a href="#quienesSomos" class="nav-menu-link nav-link">Quienes Somos</a>
        </li>
        <li class="nav-menu-item">
          <a href="#clientes" class="nav-menu-link nav-link">Clientes </a>
        </li>
        <li class="nav-menu-item">
          <a href="#contacto" class="nav-menu-link nav-link nav-menu-link_active">Contacto</a>
        </li>
      </ul>
    </nav>
  </header>




  <!-- imagen fondo -->

  <div class="caja">
    <div class="imagen">
      <img src="imagenes/marba-logo-blanco (1).svg" width="300px" height="200px" class="img-fluid" alt="">
      <h1  class="tituloMarba">MARBA</h1>
      <h3  class="subtitulo">Servicios integrales</h3>
      <button  type="button" id="btnMarba" class="btn btn-outline-primary d-block mx-auto "><a href="#contacto"
          class="text-decoration-none">Contactar</a> </button>
    </div>

  </div>



  <!-- servicios  -->
  <section id="servicios" class="datacenter">
    <h1  class="tituloServicios">Datacenter</h1>
    <img  src="./imagenes/datacenter.jpg" class="img-fluid" alt="">
    <p   class="parrafo">Los profesionales que forman el equipo de TESLA, están capacitados para brindar soluciones integrales a proyectos sin límites de escala, con conocimiento sólidos en infraestructura de misión crítica.

      Nos comprometemos dar las más innovadoras soluciones en energía, climatización, construcción civil, detección y extinción de incendio, FO, cableado estructurado y monitoreo de variables ambientales para su datacenter, mantenibles. Podemos brindarle ayuda en todas las etapas de su proyecto IT. Desde el diseño conceptual hasta la ejecución de la obra de infraestructura que su empresa o cliente necesita. Ofrecemos servicios de mantenimiento preventivo y correctivo (7x24hs) sobre sus equipos de misión crítica.
    </p>
    <div  class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button id="botonData" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Mas informacion
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div id="botonMasInfo" class="accordion-body text-dark">
            Los profesionales que forman el equipo de TESLA, están capacitados para brindar soluciones integrales a proyectos sin límites de escala, con conocimiento sólidos en infraestructura de misión crítica.

Nuestro equipo profesional esta certificado por Bicsi como “Data centre Professional” y acreditado por EXIN.

EXIN es un proveedor global de exámenes, es un organismo independiente y sin fines de lucro. La misión de EXIN es mejorar tanto la calidad de la Informática y del sector de Data Centers, como la eficiencia profesional de de los profesionales y usuarios de TI, a través de pruebas independientes y certificación. Cada día, los exámenes EXIN se toman en más de 125 países en seis continentes y en más de 15 idiomas.

<ul>
 <li>Proyectos, dirección y ejecución de obras de infraestructura</li>
 <li>  Distribución en media y baja tensión.</li>
 <li>  Generación y ATS’s.</li>
 <li> Sistemas UPS y STS´s.</li>
 <li> Aire acondicionado de presión (Chillers, drycooler, torres de enfriamiento, freecooling).</li>
 <li>CCTV y Control de acceso.</li>
 <li> Deteccion y extinción de incendios.</li>
 <li> Red de datos y fibra óptica.</li>
 <li> Puesta a tierra (PAT) y sistemas de protección contra rayos (SPCR)</li>
 <li> Estudios de cortocircuito, selectividad y arco eléctrico.</li>
 <li> Estudios de eficiencia energética</li>
 <li> Estudios de calidad de energía</li>

</ul>



          </div>
        </div>
      </div>
  </section>

  <section class="infraestructuraIndustria">
    <h1   class="tituloServicios">Infraestructura Industria</h1>
    <img  src="./imagenes/infraestructura-industrial-49115648.jpg" class="img-fluid" alt="">
    <p  class="parrafo">Nos especializamos en el diseño y ejecución de instalaciones eléctricas de baja y media tensión. Llevamos a delante su proyecto de energías renovables de microredes on-off grid, híbridos y grandes despliegues en ámbito Nacional. Analizamos todas las variables técnicas y económicas puestas en juego para lograr el mejor aprovechamiento de los recursos sin descuidar la calidad. Realizamos mantenimiento predictivos, preventivos y correctivos se subestaciones y otros sistemas eléctricos. Para ello nos apoyamos en herramientas e instrumentos de primer nivel que garantizan la calidad del servicio. Nuestras capacidades de ingeniería cubren las necesidades que la industria solicita, incluyendo estudios eficiencia energética, luminotecnia, estudios de selectividad y ARC FLASCH, seguridad eléctrica, subestaciones y líneas de MT.
    </p>
    <div  class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button id="botonData" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">

            Mas informacion
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div id="botonMasInfo" class="accordion-body text-dark">

            <ul>
              <li>Proyecto, ejecución y dirección de obras eléctricas industriales en baja y media tensión.</li>
              <li>  Tableros eléctricos</li>
              <li>  Sistemas de puesta a tierra y descargas atmosféricas.</li>
              <li> Automatismos.</li>
              <li> BMS.</li>
              <li>Cálculos luminotécnicos.</li>
              <li>Estudios de cortocircuito, selectividad y arco eléctrico.</li>
              <li> Estudios de eficiencia energética.</li>
              <li> Estudios de calidad de energía</li>
              <li> Servicios de mantenimiento preventivo eléctrico (MT / BT) y termomecancico.</li>
          
             
             </ul>
          </div>
        </div>
      </div>
  </section>

  <section class="ingenieriaConsultoria">
    <h1  class="tituloServicios">Termomecanica</h1>
    <img  src="./imagenes/pda-nt-ingenieria-termomecanica-IMG_20141004_183432650.jpg" class="img-fluid" alt="">
    <p  class="parrafo">Diseñamos y llevamos adelante su proyecto de refrigeración comercial e industrial. Nuestro portfolio de soluciones incluyen sistemas VRV, enfriadoras de liquido, Rooftop y sistemas separados. Brindamos servicio de mantenimiento multimarca con especialización en grandes equipos. Contamos con soluciones de control y monitoreo de variables ambientales Mantenimiento preventivo y correctivo. Confección de pliegos licitatorios.
    </p>
    <div data-aos="fade-left" class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button id="botonData" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Mas informacion
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div id="botonMasInfo" class="accordion-body text-dark">

            <ul>
              <li>Asesoramiento consultivo</li>
              <li> Ingeniería de detalle</li> 
              <li> Relevamientos</li>
                <li>  Ejecución de manuales de operación y procedimientos de trabajo seguro.</li>
            </ul>
          </div>
        </div>
      </div>
  </section>

  <!-- quienes somos  -->

  <div  id="quienesSomos" class="caja-quienesSomos">
    <h1> Quienes somos</h1>
    <p >	Marba es una empresa de gran capital humano capacitado durante mas de 14 años en el rubro infraestructura eléctrica y termomecánica , con gran solidez en instalaciones de gran criticidad donde la falta de suministro no es una opción .
      Una de nuestras premisas fundamentales es la capacitación de nuestro personal ya que entendemos que el avance constante de la tecnología nos obliga a estar en una búsqueda continua de conocimiento para estar a la altura de las necesidades de nuestros clientes. Contamos con la experiencia de haber dado respuesta a todas las dificultades y necesidades de nuestros clientes sin importar la complejidad ni la magnitud del problema. 
      Marba es una empresa pyme  con un origen de capital descentralizado , es una sociedad cooperativa , se maneja con el tipo de sistema de autoridad formal y según sus características su tamaño es de empresa mediana. 
      </p>
      <p>Marba en sus sectores tiene propuestas formales de la escuela neoclásica ya que uno de sus principios básicos es la división del trabajo , especialización , jerarquía , distribución de la autoridad y la responsabilidad . En consecuencia de la división del trabajo , cada cargo tiene funciones y tareas especificas y especializadas. La especialización del trabajo disminuye los costos de producción y aumenta la eficiencia , en Marba se puede ver con los sectores económicos de la empresa , la mano de obra para venta de servicios , fletes para la movilización de mercadería , etc. 
         Además de las propuestas formales también hay informales con la escuela de relaciones humanas . Ya que queremos que haya relaciones sociales dentro de los rubros de la empresa con su respectivo status , queremos que en Marba se facilite la cooperación interdepartamental , fomentar la amistad y el compañerismo , facilitar la circulación de información excluida en la organización formal y una comunicación entre directivos y empleados mas fluida . Además de incentivos y descansos por buen trabajo y conducta. 
        </p>


        <p >Nuestros <b>Valores</b> son la honestidad y el compromiso de brindar un producto de calidad , que deje satisfecho a nuestro cliente.  </p>
        <p >Nuestra <b>Mision</b> es suministrar servicios y mercaderías sobre el rubro de infraestructura eléctrica, termomecanica y telecomunicaciones. También es poder hacer viable su proyecto, priorizar sus necesidades, trabajar con celeridad y compromiso atendiendo de manera constante la calidad del servicio. </p>
        <p >Nuestra <b>Vision</b> es ser una empresa referente en Argentina de Ingeniería Eléctrica , Telecomunicaciones y Termomecanica. </p>

      
        <h1>Estructura y Control </h1>
        <p>
          	En Marba tenemos muchos controles para garantizar el seguimiento de la empresa y corregir errores. 
Nuestro control preventivo es sobre la capacitación de nuestros trabajadores para la instalación de nuestros servicios. La perspectiva es capacidad de aprendizaje , el objetivo facilitar el trabajo del capital humano, que dure 25 horas y que se mida anual . 
Nuestro control concurrente es sobre el control del stock y instalación , con el control de stock es que una vez se haya utilizado cierta cantidad de materiales se anoten y se reponga lo antes posible y en la instalación siempre cuando habrá un supervisor superior encargado que revise que este todo en orden y en completo funcionamiento . 
Nuestro control de realimentación es de rentabilidad de la empresa y con esto poder tener respuesta de nuestras metas y objetivos. Con una perspectiva financiera el objetivo es garantizar la sostenibilidad del negocio , con un indicador de incremento de capital el objetivo es del 10% anual , lo tolerable 8% y deficiente 5% .  

        </p>
        <p>
          	Nuestra estructura organizacional se asemeja a una estructura mecánica y no orgánica , ya que se necesita que sea todo como se ve en el punto 1 , con el ejemplo claro de la capacitación en la empresa y la supervisión de los jefes en cada área y servicios que ofrecemos para que estos estén bien al 100% , todo tiene que ser supervisado y la comunicación es algo indispensable en nuestra empresa.  
En nuestra área de RR.HH contamos con 2 jefes en la selección de personal y 3 capacitadores en capacitación personal . Cada empleado nuevo que termine la capacitación es recompensado al instante , también ofrecemos medica prepaga , cursos gratuitos de ingles (beneficia a la empresa y al empleado) , ajuste de sueldo según la inflación , vacaciones y muchos mas si esta comprometido a Marba S.C .

        </p>

        <p>
          	Los canales de comunicación en nuestra empresa son indispensable para el buen manejo de nuestra organización, si bien tenemos canales de comunicación formal en todas nuestras áreas para tener un mayor control de la situación , como los instructivos de RR.HH para la capacitación de nuevos empleados. También no descartamos una comunicación no formal en las distintas áreas de la empresa, si bien es normal (chistes , rumores , comentarios , etc.) , siempre y cuando no afecte a la organización no se aplicaran medidas ni sanciones a los empleados (peleas , discusiones a mayores , faltas de respeto).
	En Marba hay 3 lideres (dueños) que manejan distintas áreas depende de lo que este capacitado cada uno , en el área de RR.HH(selección personal) se considera un líder autocrático que asume la responsabilidad de todo para la contratación de nuevos empleados aunque también tiene características de participativo por su otro socio en el área(2 jefes) , en el área de facturación(liquidación de sueldos) es un líder participativo ya que siempre necesita de sus contadores(colaboradores) para el manejo del área y por ultimo el ultimo líder es liderazgo situacional manejándose en las distintas áreas de la empresa por su exitosa adopción a la exigencias cambiantes aunque a este líder se lo llama cuando se lo necesita no siempre esta. 

        </p>

  </div>


 
<!-- slider -->

<div id="clientes" class="container">
   <h2 class="text-center font-weight-bold"> Clientes</h2>

   <section class="customer-logos slider">
    <div class="slide"><img src="carpeta-logos/Logo_Movistar.svg.png" alt=""></div>
    <div class="slide"><img src="carpeta-logos/1200px-Sancor_coop_logo.svg.png" alt=""></div>
    <div class="slide"><img src="carpeta-logos/ANAC_logo.png" alt=""></div>
    <div class="slide"><img src="carpeta-logos/Edesur_company_logo.png" alt=""></div>
    <div class="slide"><img src="carpeta-logos/Logo_Molinos_-_Versiones_LogoMolinos_-_Wikipedia_-_301x188.png" alt=""></div>
    <div class="slide"><img src="carpeta-logos/Logo_NIKE.svg.png" alt=""></div>
    <div class="slide"><img src="carpeta-logos/logoArba.png" alt=""></div>
    <div class="slide"><img src="carpeta-logos/logomatarazzo.png" alt=""></div>
    <div class="slide"><img src="carpeta-logos/Telecom_arg_logo.png" alt=""></div>
    <div class="slide"><img src="carpeta-logos/Telefe.png" alt=""></div>
    <div class="slide"><img src="carpeta-logos/Telefónica.png" alt=""></div>
    <div class="slide"><img src="carpeta-logos/Toyota-Logo-Transparent-Background.png" alt=""></div>

   </section>
    
</div>

  


  <!-- Footer ******************** -->

  <footer>
    <div id="contacto" class="content">
       <div class="contact-wrapper animated bounceInUp">
        <div class="contact-form">
          <h3>Contacto</h3>
<<<<<<< HEAD:index.php
          <form id="contactForm" class="formContact" action="index.php" method="post">
=======
          <form method="post" action="formulario.php">
>>>>>>> 2e340051870c5ecc0a63c7d610153f3c7e8bd935:index.html
            <p>
              <label>Nombre Completo
              </label>
              <input type="text" name="name">
            </p>
            <p>
              <label>Email
              </label>
              <input type="email" name="email">
            </p>
            <p>
              <label>Numero Telefonico</label>
              <input type="tel" name="phone">
            </p>
            <p>
              <label>Empresa</label>
              <input type="text" name="Empresa">
            </p>
            <p class="block">
              <label>Mensaje</label>
              <textarea name="mensaje" rows="3"></textarea>
            </p>
            <p class="block">
            <button id="submitBtn" name="enviar" value="enviar" type="submit">
             <span id="buttonText">Enviar</span>
             <span id="spinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;"></span>
            </button>
            </p>
          </form>
          
        </div>
        <div class="contact-info">
          <h4>Mas Informacion</h4>
          <ul>
            <li>
              <i class="fas fa-map-marker-alt"></i>
              Laprida 4520 Villa Martelli 
            </li>
            <li>
              <i class="fas fa-phone"></i>
              (+54) 11 5139 9129
            </li>
            <li>
              <i class="fas fa-envelope-open-text"></i>
              marbasi@gmail.com
            </li>
          </ul>
          <p>Hacemos realidad su proyecto a travez de las mercaderias de gran calidad y habilidades de nuestro gran capital humano
            profesional.
          </p>
          <p>Marbasi.com</p>
          <small>&copy; 2022 <b>Uli</b> -Todos los Derechos Reservados</small>
        </div>
      </div>

    </div>


  </footer>





  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  

   <script>
    $(document).ready(function(){
      $('.customer-logos').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1500,
          arrows: false,
          dots: false,
          pauseOnHover:false,
          responsive: [{
              breakpoint: 768,
              setting: {
                  slidesToShow:4
              }
          }, {
              breakpoint: 520,
              setting: {
                  slidesToShow: 3
              }
          }]
      });
  });

  document.getElementById("contactForm").addEventListener("submit", function(event) {
  event.preventDefault();

  var formData = new FormData(this);

  fetch('index.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())  // Cambiar a response.text() para ver el contenido
  .then(data => {
    console.log('Raw response:', data);  // Mostrar la respuesta cruda
    try {
      let jsonData = JSON.parse(data);  // Intentar parsear la respuesta como JSON
      console.log(jsonData);  // Mostrar los datos JSON parseados

      if (jsonData.status === 'success') {
        Swal.fire({
          icon: 'success',
          title: 'Éxito',
          text: jsonData.message
        });
        // Resetear formulario
        document.getElementById("contactForm").reset();
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: jsonData.message
        });
      }
    } catch (error) {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'La respuesta no es un JSON válido: ' + error.message
      });
    }
  })
  .catch(error => {
    console.error('Error:', error);
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Ocurrió un error al enviar el formulario: ' + error.message
    });
  })
  .finally(() => {
    // Re-inicializar el carrusel después de enviar el formulario
    $('.customer-logos').slick('unslick');
    $('.customer-logos').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      arrows: false,
      dots: false,
      pauseOnHover:false,
      responsive: [{
          breakpoint: 768,
          setting: {
              slidesToShow:4
          }
      }, {
          breakpoint: 520,
          setting: {
              slidesToShow: 3
          }
      }]
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('contactForm');
      const submitBtn = document.getElementById('submitBtn');
      const spinner = document.getElementById('spinner');
      const buttonText = document.getElementById('buttonText');

      form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío del formulario de inmediato
        spinner.style.display = 'inline-block';
        buttonText.style.display = 'none';
        submitBtn.disabled = true;

        const formData = new FormData(form);

        fetch('index.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          spinner.style.display = 'none';
          buttonText.style.display = 'inline';
          submitBtn.disabled = false;

          if (data.status === 'success') {
            Swal.fire({
              title: 'Éxito',
              text: data.message,
              icon: 'success',
              confirmButtonText: 'OK'
            });
          } else {
            Swal.fire({
              title: 'Error',
              text: data.message,
              icon: 'error',
              confirmButtonText: 'OK'
            });
          }
        })
        .catch(error => {
          spinner.style.display = 'none';
          buttonText.style.display = 'inline';
          submitBtn.disabled = false;

          Swal.fire({
            title: 'Error',
            text: 'Hubo un problema al enviar el formulario',
            icon: 'error',
            confirmButtonText: 'OK'
          });
        });
      });

      <?php if ($message) { ?>
        const messageData = <?php echo $message; ?>;
        spinner.style.display = 'none';
        buttonText.style.display = 'inline';
        submitBtn.disabled = false;
        if (messageData.status === 'success') {
          Swal.fire({
            title: 'Éxito',
            text: messageData.message,
            icon: 'success',
            confirmButtonText: 'OK'
          });
        } else {
          Swal.fire({
            title: 'Error',
            text: messageData.message,
            icon: 'error',
            confirmButtonText: 'OK'
          });
        }
      <?php } ?>
    });

  </script> 


<script src="js/index.js"></script>


</body>

</html>