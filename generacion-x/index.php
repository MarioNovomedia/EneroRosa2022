<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mary Kay - Enero Rosa</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    
    <body>
        <div class="container-fluid backsquare1">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 my-4 text-center">
                    <img src="images/logoMK.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6 offset-lg-3">
                    <iframe class="MainVideo" width="100%" src="https://www.youtube.com/embed/rhlKpvoGBgU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div> 
                <div class="col-8 offset-2 col-lg-4 offset-lg-4 my-4">
                    <img src="images/logo-inicia.png" class="img-fluid" alt="">
                </div> 
                <div class="col-12 col-lg-6 offset-lg-3 mt-4">
                    <p class="white txt-responsive strong text-center" style='font-family: "MaryKaySans-Medium";'>
                        <span class="pink">Enero es el mejor mes para cambiar tu vida.</span> En Mary Kay queremos
                        ayudarte a iniciar tu propio Negocio Independiente y construir tu camino
                        al éxito. <span class="pink">Conoce las opciones de Kits de Inicio que éste mes tenemos para ti.</span>
                    </p>
                    
                    <img src="images/main-kit.png" class="img-fluid" alt="">
                </div>                                                            
            </div>
        </div>   
        
        <div class="container-fluid purple-line text-center py-3">
            A mayor inversión <strong>MAYOR</strong> descuento y <strong>MÁS</strong> productos
        </div>
        
        <div class="container-fluid backsquare2">
            <div class="row">
                <div class="col-12 col-lg-12 text-center my-5">
                    <h2 class="main-tit2 white">
                        <span class="pink">¡AHORA ES TU MOMENTO</span><br> 
                        PARA INICIAR!
                    </h2>
                </div>
                <div class="col-12 col-lg-6 offset-lg-3 mb-5">
                    <p class="white txt-responsive strong text-center">
                        Estás a solo un clic de iniciar tu nueva vida.<br>
                        Regístrate y una Consultora de Ventas Independiente Mary Kay<br>
                        te guiará paso a paso en tu camino al éxito.
                    </p>
                </div>
                
                <div class="col-lg-4 offset-lg-4 col-12 col-sm-10 offset-sm-1 form-container p-4">
                    <form action="" id="MainForm">
                        <div class="mb-3 text-start">
                            <label for="nombre" class="form-label mb-0">
                                <img src="images/label_nombre.png" class="img-fluid" alt="">
                            </label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="*Ingresa tu nombre completo como aparece en tu documento oficial. ">    
                        </div>
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label mb-0">
                                <img src="images/label_email.png" class="img-fluid" alt="">
                            </label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="*Ingresa tu correo electrónico">    
                        </div>                        
                        <div class="mb-3 text-start">
                            <label for="telefono" class="form-label mb-0">
                                <img src="images/label_celular.png" class="img-fluid" alt="">
                            </label>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="*Teléfono Celular">    
                        </div>
                        <div class="mb-3 text-start">
                            <label for="cp" class="form-label mb-0">
                                <img src="images/label_cp.png" class="img-fluid" alt="">
                            </label>
                            <input type="number" class="form-control" id="cp" name="cp" placeholder="*Ingresa tu Código Postal." minlength="5" maxlength="5" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">    
                        </div>
                        <div class="mb-3 text-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" id="hombre" value="option1">
                                <label class="form-check-label" for="hombre">Hombre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" id="mujer" value="option2">
                                <label class="form-check-label" for="mujer">Mujer</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genero" id="otro" value="option3">
                                <label class="form-check-label" for="otro">Otro</label>
                            </div>  
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label white" for="flexCheckChecked">
                                    Confirmo que he leído y acepto el aviso de privacidad y los términos y condiciones.  
                                </label>
                            </div>
                        </div>                        
                    </form>
                </div>
                
                <div class="col-lg-4 offset-lg-4 col-12 text-center my-5">
                    <button id="FormSubmit" class="shadow-none">
                        <!-- <img src="images/btn-enviar.png" class="img-fluid" alt="" style="width: 100px;"> -->
                        ENVIAR
                    </button>
                </div>
            </div>
        </div>
                
        <footer class="container-fluid py-2" style="background-color: #e60f76;">
            <div class="row">
                <div class="col-12 text-center white" style="font-size: 10px;">
                    Vigencia del 1 al 31 de enero de 2022 . *El monto de la inversión varía según el Kit de Inicio.<br>
                    Consulta términos y condiciones en <a href="https://www.marykay.com.mx/" target="_blank">www.marykay.com.mx</a><br>
                    SALUD ES BELLEZA 123300EL95062M                   
                </div>
            </div>
        </footer>
        
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $("#FormSubmit").click(function(){
                event.preventDefault();
               
                nombre          = $("#nombre").val();
                email           = $("#email").val();
                check_email     = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
                cp              = $("#cp").val();
                genero          = $("#genero").val();
                
                if(nombre == ""){
                    alert("Ingrese un nombre");
                    $("#nombre").focus();
                }else if(email == "" || !check_email.test(email)){
                    alert("Ingrese un email válido");
                    $("#email").focus();
                }else if(cp == ""){
                    alert("Ingrese un ncódigo postal");
                    $("#cp").focus();
                }else if(genero == "" || genero == 0 || genero == "0"){
                    alert("Ingrese un género");
                }
            });
        </script>
    </body>
</html>