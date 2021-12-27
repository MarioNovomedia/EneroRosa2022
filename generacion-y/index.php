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
    
    <body class="back1">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 col-lg-4 offset-lg-4 text-center">
                    <img src="images/logoMK.png" class="img-fluid" alt="">
                </div>
                
                <div class="col-12 col-lg-8 offset-lg-2">
                    <iframe class="MainVideo" width="100%" src="https://www.youtube.com/embed/lrzno3Pg3RI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
                <div class="col-8 offset-2 col-lg-6 offset-lg-3 my-4">
                    <img src="images/logo-inicia.png" class="img-fluid" alt="">
                </div>
                
                <div class="col-12 my-2 col-lg-6 offset-lg-3 text-center">
                    <img src="images/kit1.png" class="img-fluid" alt="">
                </div>
                
                <div class="col-12 col-lg-6 offset-lg-3 text-center my-4">
                    <p class="white text-center">
                        <strong>¿Te gustaría comenzar un Negocio Independiente</strong> que te brinde la oportunidad de <strong>ser tu propio jefe,</strong> de obtener ingresos extras, de <strong>disfrutar</strong> de <strong>tu familia</strong> y <strong>amigos;</strong> de <strong>poder viajar, ahorrar</strong> y darle vida a tus <strong>más grandes sueños?</strong> 
                    </p>
                </div>
                
                <div class="col-12 col-lg-6 offset-lg-3 text-center">
                    <img src="images/kit2.png" class="img-fluid my-4" alt="">
                    <p class="white text-center">
                    <strong> Atrévete a descubrir todos los beneficios</strong> de ser una Consultora de Belleza Independiente Mary Kay®
                    </p>
                    <img src="images/deseos.png" class="img-fluid my-4" alt="">
                </div>
                
                <div class="col-12 col-lg-6 offset-lg-3 text-center my-4">
                    <h1 class="main-tit1 text-center pink">
                        ¡ESTE ES EL MOMENTO<br>
                        <span class="white">PARA INICIAR!</span>
                    </h1>
                    
                    <form action="" id="MainForm">
                        <div class="mb-3 mt-5">
                            <label for="nombre" class="form-label text-center">
                                <img src="images/label_nombre.png" alt="" class="img-fluid">
                            </label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="*Ingresa tu nombre completo como aparece en tu documento oficial. ">    
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-center">
                                <img src="images/label_email.png" alt="" class="img-fluid">
                            </label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="*Ingresa tu correo electrónico">    
                        </div>
                        <div class="mb-3">
                            <label for="celular" class="form-label text-center">
                                <img src="images/label_celular.png" alt="" class="img-fluid">
                            </label>
                            <input type="text" class="form-control" id="celular" name="celular" placeholder="*Ingresa tu celular a diez dígitos." minlength="10" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">    
                        </div>
                        <div class="mb-3">
                            <label for="cp" class="form-label text-center">
                                <img src="images/label_cp.png" alt="" class="img-fluid">
                            </label>
                            <input type="text" class="form-control" id="cp" name="cp" placeholder="*Ingresa tu Código Postal." minlength="5" maxlength="5" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">    
                        </div>
                        <div class="mb-3">
                            <label for="genero" class="form-label text-center">
                                <img src="images/label_genero.png" alt="" class="img-fluid">
                            </label>
                            <select name="genero" id="genero" class="form-control">
                                <option value="0" selected>Me Identifico...</option>
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                                <option value="Otro">Otro</option>
                            </select>    
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label white" for="flexCheckChecked">
                                    Confirmo que he leído y acepto el aviso de privacidad y los términos y condiciones.  
                                </label>
                            </div>
                        </div>
                        <div class="mb-3 text-center">
                            <button id="FormSubmit" class="shadow-none">
                                <img src="images/btn-enviar.png" class="img-fluid" alt="" style="width: 100px;">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
        
        <footer class="container my-5">
            <div class="row">
                <div class="col-12 text-center pink" style="font-size: 10px;">
                    Vigencia del 1 al 31 de enero de 2022.<br>
                    *El monto de la inversión varía según el Kit de Inicio.<br>
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
                celular         = $("#celular").val();
                check_email     = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
                cp              = $("#cp").val();
                genero          = $("#genero").val();
                
                if(nombre == ""){
                    alert("Ingrese un nombre");
                    $("#nombre").focus();
                }else if(email == "" || !check_email.test(email)){
                    alert("Ingrese un email válido");
                    $("#email").focus();
                }else if(celular == ""){
                    alert("Ingrese un celular válido");
                    $("#celular").focus();
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