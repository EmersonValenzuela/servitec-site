<script src='http://code.jquery.com/jquery-1.11.3.min.js'></script>


<!---BTN OPEN FORM--->
<div class="item-open-form">
  <div>Contáctanos</div>
</div>

<!--**************** start FIXED FORM CONTACT *********************-->
<div class="form-contact-container form-contact-container-fixed">
  <div class="item-icon-close-form">X</div>
  <div class="bg-form-filter"></div>
  <div class="header-wrapper">
    <h1 style="color:#fff">Consultas y cotizaciones</h1>
    <h4 style="color:#fff">Comunícate con Nosotros</h4>
  </div>
  <form class="needs-validation-form form-contact" novalidate method="post"    onsubmit="return validateForm()">   
    <div class="grid-50" style="width: 100%">
      <div class="item-form-input">
        <!-- <label for="validationCustom01">Nombres:</label> -->
        <input class="input-standard b-in" type="text" id="input-name-fixed" name="userName" placeholder="Nombres" required />
      </div>
      <div class="item-form-input">
        <!-- <label for="validationCustom04 exampleFormControlTextarea1">Email:</label> -->
            <input type="email" min="0" id="input-email-fixed" name="userEmail" placeholder="Email" required class="b-in" />
      </div>
    </div>
    <div class="grid-50" style="width: 100%">
      <div class="item-form-input">
        <!-- <label for="validationCustom03 exampleFormControlTextarea1">Teléfono:</label> -->
        <input class="b-in" type="text" min="0" id="input-phone-fixed" name="userPhone" placeholder="Celular"
          onkeypress="return soloNumeros(event)" required />
      </div>
      <div class="item-form-input">
        <!-- <label for="validationCustom02 exampleFormControlTextarea1">Empresa:</label> -->
        <input  class="b-in" type="text" min="0" id="input-issue-fixed" name="userIssue" placeholder="Negocio" required />
      </div>
    </div>

    <div class="grid-100">
      <div class="item-form-input">
        <!-- <label for="validationCustom02 exampleFormControlTextarea1">Empresa:</label> -->
        <textarea class="b-in" type="text" min="0" id="input-message-fixed" name="userMessage" placeholder="Mensaje"
          required></textarea>
      </div>
    </div>
    <div class="form-item-row" style="width: 100%">
      <div class="item-send-button">
        <button class="btn btn-medium btn--secondary" name="btn-send-message-fixed" type="submit">
          <span class="text">Enviar</span>
          <span class="semicircle"></span>
        </button>
      </div>
    </div>
  </form>
</div>
<div class="whatsapp-escritorio">
  <a class="btn-whatsapp" target="_blank"
    href="https://api.whatsapp.com/send?phone=51941801827&text=Tengo%20un%20problema%20con:"
    style="background-color: #009345;"><i class="fab fa-whatsapp"></i><label>Atención Inmediata <br>
      <span>941801827</span></label></a>
</div>

<div class="whatsapp-movil">
  <div class="btn-whatsapp btn-atencion">
    <p>Atenci&oacute;n inmediata:</p>
  </div>
  <button class="btn-whatsapp" id="cambiar">
    <a target="_blank" href="https://api.whatsapp.com/send?phone=51941801827&text=Tengo%20un%20problema%20con:" aria-label="boton de whatsapp"><i
        class="fab fa-whatsapp"></i></a>
  </button>
</div




</div></div>
<!-- Footer -->


<footer class="footer" id="site-footer">
  <div class="container">
    <div class="row">

      <div class="info">
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
          <div class="heading">
            <h3 class="heading-title" style="color:white">Servitec Perú</h3>
            <div class="heading-line">
              <span class="short-line"></span>
              <span class="long-line"></span>
            </div>
            <p class="heading-text" style="color:white">Somos una empresa que brinda
              servicios informáticos de forma integral en la
              asesoría y consultoría en hardware y software,
              tanto para usuarios domésticos, negocios y empresas corporativas.
              Prestamos nuestros servicios en forma altamente personalizada,
              comprendiendo que cada empresa es única, creando una solución a la medida de tus necesidades.
              Logrando identificar y entender las necesidades de nuestros clientes para ofrecerle la mejor solución.
            </p>
          </div>

          <div class="socials">
            <a href="https://www.facebook.com/Servitec.chorrillos/?ref=br_rs" class="social__item" rel="nofollow" target="_blank">
              <img loading="lazy" src="svg/circle-facebook.svg" alt="facebook">
            </a>
            <a href="mailto:contactos@servitecperu.com" class="social__item"rel="nofollow" target="_blank">
              <img loading="lazy" src="svg/google.svg" alt="google">
            </a>
            <a href="https://www.youtube.com/channel/UC0fs7G_IrQ9nBPOpKsaDTJg" class="social__item" rel="nofollow" target="_blank">
              <img loading="lazy"  src="svg/youtube.svg"  alt="youtube">
            </a>

          </div>
        </div>

        <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
          <div class="services">
            <div class="heading">
              <h3 class="heading-title">Servicios prestados</h3>
              <div class="heading-line">
                <span class="short-line"></span>
                <span class="long-line"></span>
              </div>
            </div>

            <ul class="list list--primary">
              <li>
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="05_service_details_localseo.php">Servicios SEO</a>
              </li>
              <li>
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="06_service_detail.php">Anuncia en Internet</a>
              </li>
              <li>
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="08_service_ppc_management.php">Desarrollo Web</a>
              </li>
              <li>
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="25_navigation-flat.php">Desarrollo de APPS</a>
              </li>
             
            </ul>

            <ul class="list list--primary">
              <li>
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="#">Facturación Electrónica</a>
              </li>
              <li>
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="#">Campaña Digital</a>
              </li>
              <li>
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="politica_de_privacidad.php">Política de Privacidad</a>
              </li>

            </ul>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="contacts">
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="contacts-item">
            <div class="icon js-animate-icon">
              <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="  M45.1,44.2C42.9,42,39.6,40,37,42.6c-1.8,1.8-2.6,3.9-2.6,3.9s-4.3,2.3-11.7-5.2s-5.2-11.7-5.2-11.7s2.1-0.8,3.9-2.6  c2.6-2.6,0.6-5.9-1.7-8.1c-2.7-2.7-6.2-4.9-8.2-2.9c-3.7,3.7-4.4,8.4-4.4,8.4S9,35.5,18.7,45.3s20.9,11.6,20.9,11.6s4.7-0.7,8.4-4.4  C50,50.4,47.8,46.9,45.1,44.2z"
                  fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2" />
                <path d="  M18.4,12.2C22.2,9.5,26.9,8,32,8c13.3,0,24,10.8,24,24c0,4-1.3,9-4.4,12.2" fill="none"
                  stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2" />
                <path d="  M27.3,55.6c-9.8-1.9-17.5-9.8-19.1-19.7" fill="none" stroke="#fcb03b" stroke-linecap="round"
                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                <path
                  d="  M30,21c0,0,4.4,0,5.2,0c1.2,0,1.8,0.2,1.8,1.1s0,0.7,0,1.3c0,0.6,0,1.4-1.6,2.5c-2.3,1.6-5.6,3.8-5.6,5.1c0,1.6,0.7,2,1.8,2  s5.3,0,5.3,0"
                  fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2" />
                <path d="  M40,21c0,0,0,2.8,0,3.8S39.9,27,41.5,27c1.6,0,4.5,0,4.5,0v-6.1V33" fill="none"
                  stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2" /></svg>
            </div>
            <div class="content">
              <a href="https://api.whatsapp.com/send?phone=51941801827" class="title">941 801 827
                /&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                972 252 744
              </a>
              <p class="sub-title" style="color:white">Lun-Dom 9am-6pm</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="contacts-item">
            <div class="icon js-animate-icon">
              <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve"
                xmlns="http://www.w3.org/2000/svg">
                <polyline fill="none" points="  54,17 32,36 10,17 " stroke="#f15b26" stroke-linecap="round"
                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                <line fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2" x1="10.9" x2="26" y1="48" y2="36" />
                <path d="  M32.7,49H13c-2.2,0-4-1.8-4-4V19c0-2.2,1.8-4,4-4h38c2.2,0,4,1.8,4,4v15.5" fill="none"
                  stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2" />
                <circle cx="44.9" cy="43.1" fill="none" r="10.1" stroke="#f15b26" stroke-linecap="round"
                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                <path d="  M44,41.4c0,0-1.3,3.4-0.9,5.1c0.4,1.7,2.6,2.1,3.7,1.1" fill="none" stroke="#f15b26"
                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                <g>
                  <circle cx="45.4" cy="38.3" fill="#DCE9EE" r="0.9" />
                  <path
                    d="M45.4,37.3c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9C46.4,37.8,46,37.3,45.4,37.3   L45.4,37.3z"
                    fill="#f15b26" />
                </g>
              </svg>
            </div>
            <div class="content">
              <a href="mailto:contactos@servitecperu.com" class="title">contactos@servitecperu.com</a>
              <p class="sub-title" style="color:white">Soporte en Linea</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="contacts-item">
            <div class="icon js-animate-icon">
              <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve"
                xmlns="http://www.w3.org/2000/svg">
                <polygon fill="none"
                  points="  38.7,36.4 56,32 38.7,27.6 42,22 36.4,25.3 32,8 27.6,25.3 22,22 25.3,27.6 8,32 25.3,36.4 22,42 27.6,38.7 32,56 36.4,38.7 42,42   "
                  stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                  stroke-width="2"></polygon>
                <circle cx="32" cy="32" fill="none" r="4" stroke="#3cb878" stroke-linecap="round"
                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle>
                <path d="  M26.1,53.2c-7.9-2.2-13.9-8.6-15.6-16.7" fill="none" stroke="#3cb878" stroke-linecap="round"
                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path>
                <path d="  M53.5,36.9c-1.8,8.1-8.2,14.6-16.3,16.5" fill="none" stroke="#3cb878" stroke-linecap="round"
                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path>
                <path d="  M36.9,10.5c8.2,1.9,14.7,8.3,16.6,16.6" fill="none" stroke="#3cb878" stroke-linecap="round"
                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path>
                <path d="  M10.5,27.1c1.9-8.2,8.3-14.6,16.4-16.5" fill="none" stroke="#3cb878" stroke-linecap="round"
                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path>
              </svg>
            </div>
            <div class="content">
              <a href="#" class="title">Chorrillos, Perú</a>
              <p class="sub-title" style="color:white">Jr Justo Pastor Davila 117</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <span>
            Copyright © 2020 <a href="index.php" class="sub-footer__link">Servitec,</a>
            Diseñado por <a href="mailto:valenzuelaestradam@gmail.com">Emerson Valenzuela</a>
          </span>

          <span>Desarrollado por <a href="mailto:contactos@servitecperu.com">Servitec - Site</a></span>

        </div>
      </div>
    </div>
  </div>

</footer>



<!-- End Footer -->



<!-- JS Script -->



<script src="js/jquery-3.4.1.js"></script>
<script src="https://cdn.plyr.io/3.4.6/plyr.js"></script>
<script src="js/js-plugins/crum-mega-menu.js"></script>
<script src="js/js-plugins/swiper.jquery.min.js"></script>
<script src="js/js-plugins/waypoints.js"></script>
<script src="js/js-plugins/jquery.drawsvg.js"></script>
<script src="js/js-plugins/jquery-countTo.js"></script>
<script src="js/js-plugins/jquery.mousewheel.js"></script>
<script src="js/js-plugins/jquery.mCustomScrollbar.js"></script>
<script src="js/js-plugins/imagesLoaded.js"></script>
<script src="js/js-plugins/jquery.magnific-popup.js"></script>
<script src="js/js-plugins/jquery.matchHeight.js"></script>
<script src="js/js-plugins/segment.js"></script>
<script src="js/js-plugins/bootstrap.js"></script>
<script src="js/js-plugins/jquery-circle-progress.js"></script>
<script src="js/js-plugins/Headroom.js"></script>
<script src="js/js-plugins/smooth-scroll.js"></script>
<script src="js/js-plugins/jquery.nice-select.js"></script>
<script src="js/js-plugins/fastClick.js"></script>
<script src="js/js-plugins/form-actions.js"></script>
<script src="js/js-plugins/velocity.js"></script>
<script src="js/js-plugins/time-line.js"></script>
<script src="js/js-plugins/ScrollMagic.min.js"></script>
<script src="js/js-plugins/animation.velocity.min.js"></script>
<script src="js/js-plugins/ajax-pagination.js"></script>
<script src="js/js-plugins/donut-chart.js"></script>
<script src="js/js-plugins/isotope.pkgd.min.js"></script>
<script src="js/js-plugins/photo-gallery.js"></script>
<script src="js/js-plugins/ion.rangeSlider.js"></script>
<script src="js/js-plugins/leaflet.js"></script>
<script src="js/js-plugins/MarkerClusterGroup.js"></script>




<script src="js/main.js"></script>
<script>
  //MAP ELEMENTS HTML
  let generalContainer = document.querySelector(".general-container-form-contact");
  let formContainerContact = document.querySelector(".form-contact-container");
  let itemVisibleForm = document.querySelector(".item-open-form");
  let itemIconCloseForm = document.querySelector(".item-icon-close-form");
  let openFormMobile = document.querySelector(".item-open-form-mobile");
  let formContact = document.querySelector(".needs-validation-form");
  let iconFormContact = document.querySelector("#icon-form-contact");
  let alertSuccessMessage = document.querySelector("#alert-success-status-form-contact");

  let activeFormOpen;

  let resultContactType_ = "";

  //ADD EVENTS ITEMS
  itemIconCloseForm.addEventListener("click", function () {
    activeFormOpen = false;
    setLocalStorage("activeFormContent", {
      isVisibleFormContact: false
    });
    isVisibleItem(formContainerContact, "none");
    isVisibleItem(itemVisibleForm, "flex");
    iconFormContact.className = "fa fa-sort-up";
  });

  //BTN CONTACT OPEN AND CLOSE
  itemVisibleForm.addEventListener("click", function () {
    if (!activeFormOpen) {
      activeFormOpen = true;
      setLocalStorage("activeFormContent", {
        isVisibleFormContact: true
      });
      isVisibleItem(formContainerContact, "flex");
      isVisibleItem(itemVisibleForm, "none");
    } else {
      activeFormOpen = false;
      setLocalStorage("activeFormContent", {
        isVisibleFormContact: false
      });
      isVisibleItem(formContainerContact, "none");
      isVisibleItem(itemVisibleForm, "flex");
      iconFormContact.className = "fa fa-sort-up";
    }
  });

  //LOAD CONFIG
  function onLoadFunction() {
    let activeFormContent_ = getLocalStorage("activeFormContent");

    activeFormContent_ == null &&
      setLocalStorage("activeFormContent", {
        isVisibleFormContact: true
      });

    if (!getLocalStorage("activeFormContent").isVisibleFormContact) {
      activeFormOpen = false;
      if (!activeFormOpen) {
        isVisibleItem(formContainerContact, "none");
        isVisibleItem(itemVisibleForm, "flex");
      }
    } else {
      activeFormOpen = true;
      if (activeFormOpen) {
        isVisibleItem(formContainerContact, "flex");
        isVisibleItem(itemVisibleForm, "none");
      }
    }
  }

  document.body.addEventListener("load", onLoadFunction());

  //VALIDATE CONTENT FORM
  function validateForm() {
    let nameValue = document.querySelector("#input-name-fixed").value;
    let lastNameValue = document.querySelector("#input-lastName-fixed").value;
    let companyValue = document.querySelector("#input-company-fixed").value;
    let emailValue = document.querySelector("#input-email-fixed").value;
    let phoneValue = document.querySelector("#input-phone-fixed").value;
    let servicesValue = document.querySelector("#select-services-fixed").value;
    let contactType = document.getElementsByName("contact-type-fixed");

    let stateMessage = document.querySelector("#state-message");

    if (!nameValue || !lastNameValue || !emailValue || !phoneValue || !servicesValue) {
      isVisibleItem(stateMessage, "inherit");
      stateMessage.innerHTML = "*Ups te falto llenar el formulario";
      stateMessage.style.color = "red";
      setLocalStorage("activeAlert", {
        isVisibleAlert: false
      });

      return false;
    } else {
      //GET DATA RADIO GROUP
      getDataTypeContact(contactType);

      let userDataSt = {
        userName: nameValue.toLowerCase(),
        userLastName: lastNameValue.toLowerCase(),
        userCompany: companyValue.toLowerCase(),
        userEmail: emailValue.toLowerCase(),
        userPhone: phoneValue.toLowerCase(),
        userService: servicesValue.toLowerCase(),
        userContactType: (resultContactType_ ? resultContactType_ : "undefined").toLowerCase(),
      };

      activeFormOpen = false;
      setLocalStorage("activeFormContent", {
        isVisibleFormContact: false
      });
      isVisibleItem(formContainerContact, "none");
      //SET DATA
      setLocalStorage("userData", userDataSt);
      setLocalStorage("activeAlert", {
        isVisibleAlert: true
      });
      isVisibleItem(stateMessage, "none");

      const refMessage = `https://api.whatsapp.com/send?phone=+51987523496&text=*_MENSAJE DE COTIZACIÓN DESDE WEB MARKOCREATIVO_*%0A%0A*Nombres:*%0A${nameValue}%0A%0A*Apellidos:*%0A${lastNameValue}%0A%0A*Empresa:*%0A${companyValue}%0A%0A*Email:*%0A${emailValue}%0A%0A*Cell:*%0A${phoneValue}%0A%0A*Servicio:*%0A${servicesValue}%0A%0A*Tipo de contácto:*%0A${
    resultContactType_ ? resultContactType_ : "undefined"
  }`;

      window.open(refMessage);

      nameValue = "";
      lastNameValue = "";
      companyValue = "";
      emailValue = "";
      phoneValue = "";
      servicesValue = "";
      contactType = "";
      resultContactType_ = "";

      return true;
    }
  }

  //ACTIVE ALERT MESSAGE
  let activeAlert_ = getLocalStorage("activeAlert");
  let userData_ = getLocalStorage("userData");

  if (activeAlert_ && userData_) {
    if (activeAlert_.isVisibleAlert) {
      alertSuccessMessage.style.display = "inherit";
      alertSuccessMessage.innerHTML =
        `${userData_.userName.toUpperCase()} tu mensaje se ah enviado exitosamente, enseguida nos contáctaremos`;
    } else {
      alertSuccessMessage.style.display = "none";
    }

    setTimeout(function () {
      alertSuccessMessage.style.display = "none";
      setLocalStorage("activeAlert", {
        isVisibleAlert: false
      });
      //DELETE USER DATA
      userData_ && localStorage.removeItem("userData");
    }, 4000);
  }

  //LISTENER STATE LOCAL STORAGE******************************************>>>
  /* if(getLocalStorage("activeFormContent").isVisibleFormContact){
        isVisibleItem(formContainerContact,"flex");
    }else{
        isVisibleItem(formContainerContact,"none"); 
    } */
  //<<<********************************************************************End

  //FUNCTIONS LOCAL STORAGE
  function setLocalStorage(key, value) {
    localStorage.setItem(key, JSON.stringify(value));
  }

  function getLocalStorage(key) {
    return JSON.parse(localStorage.getItem(key));
  }

  //ACTION ISVISIBLE ELEMENT
  function isVisibleItem(item, value) {
    item.style.display = value;
  }

  //GET DATA RADIO BUTTONS
  function getDataTypeContact(contactType) {
    contactType.forEach((contact) => {
      if (contact.checked) {
        resultContactType_ = contact.value;
        return resultContactType_;
      }
    });
  }
</script>
<!-- jQuery-scripts for Modules (Send Message) -->
<script src="modules/forms/src/js/jquery.validate.min.js"></script>
<script src="modules/forms/src/js/sweetalert2.all.js"></script>
<script src="modules/forms/src/js/scripts.js"></script>
<!-- /jQuery-scripts for Modules (Send Message) -->
<?php
if (isset($_POST['btn-send-message-fixed'])) {
    $subject = "Servitec SITE PAGINAS Consultas";
    
    $emailsSend = ["beto1perk@gmail.com"];
    
    $to = "$emailsSend[0]";

    $message = "
    <html>
    <head>
        <title>Email-SERVITECSITE Consultas</title>
    </head>
    <body>
    <p>Este <strong>mensaje de consulta</strong> fue enviado desde  https://servitec.site/</p>
    <table style='margin:0!important'>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:orange;color:#000;padding:8px;'><b>Nombres y Apellidos:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userName']."</td>
        </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:orange;color:#000;padding:8px;'><b>Email:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userEmail']."</td>
        </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:orange;color:#000;padding:8px;'><b>Telefono:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userPhone']."</td>
        </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:orange;color:#000;padding:8px;'><b>Negocio:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userIssue']."</td>
        </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:orange;color:#000;padding:8px;'><b>Mensaje:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userMessage']."</td>
        </tr>

    </table>
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to,$subject,$message,$headers);  
        echo "<script>
    location.href = 'https://servitec.site/confirm_email.php';
      </script>";




}

?>


</body>

<!-- Mirrored from html.crumina.net/html-seosight/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Oct 2020 15:58:48 GMT -->

</html>