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
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <iframe class="MainVideo" width="100%" src="https://www.youtube.com/embed/lrzno3Pg3RI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>                                                              
            </div>
        </div>   
        
        <div class="container d-lg-none">
            <div class="row">
                <div class="col-8 offset-2 col-lg-6 offset-lg-3 my-4 d-none d-lg-block">
                    <img src="images/logo-inicia.png" class="img-fluid" alt="">
                </div>
                               
                <div class="col-12 col-lg-6 offset-lg-3 text-center my-4">
                    <p class="white text-center">
                        Descubre tu comienzo como Consultora de Belleza Independiente Mary Kay® y ¡cambia tu vida por completo! 
                    </p>
                </div>
                
                <div class="col-12 col-lg-6 offset-lg-3 text-center">
                    <img src="images/kit1.png" class="img-fluid" alt="">                    
                </div>  
            </div>
        </div>
        
        <div class="container d-none d-lg-block p-0">
            <div class="row my-5">
                <div class="col-lg-6 p-5">
                    <img src="images/logo-inicia.png" class="img-fluid" alt="">
                    <p class="white text-center">
                        Descubre tu comienzo como Consultora de Belleza Independiente Mary Kay® y ¡cambia tu vida por completo! 
                    </p>
                </div>
                <div class="col-lg-6 text-end">
                    <img src="images/kit3.png" class="img-fluid" alt="">
                </div>
            </div>
            
            <div class="row">
                <div class="col-6 offset-lg-3 p-5 text-center">
                    <img src="images/logo-inicia.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-12 p-5 text-center d-lg-none">
                    <img src="images/logo-inicia.png" class="img-fluid" alt="">
                </div>
                
                <div class="col-lg-6 offset-lg-3 col-12">
                    <p class="white text-center">
                        <strong>Este Enero Rosa,</strong> queremos ayudarte a <strong>iniciar de la mejor manera,</strong> porque es momento de comenzar a <strong>crear tu propio camino,</strong> de amar lo que haces y lograr el éxito profesional para <strong>ser la persona que siempre soñaste ser.</strong> 
                    </p>
                </div>
                
                <div class="col-12 col-lg-6 text-center my-4">                                        
                    <form action="" id="MainForm">
                        <div class="mb-3 mt-5 text-start">
                            <label for="nombre" class="form-label">
                                Nombre Completo
                            </label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="*Ingresa tu nombre completo como aparece en tu documento oficial. ">    
                        </div>
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">
                                Correo Electrónico
                            </label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="*Ingresa tu correo electrónico">    
                        </div>                        
                        <div class="mb-3 text-start">
                            <label for="cp" class="form-label">
                                Código Postal
                            </label>
                            <input type="number" class="form-control" id="cp" name="cp" placeholder="*Ingresa tu Código Postal." minlength="5" maxlength="5" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">    
                        </div>
                        <div class="mb-3">
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
                        <div class="mb-3 text-center">
                            <button id="FormSubmit" class="shadow-none">
                                <img src="images/btn-enviar.png" class="img-fluid" alt="" style="width: 100px;">
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="col-12 col-lg-6 text-center mt-4 d-none d-lg-block">
                    <img src="images/kit4.png" class="img-fluid" alt="">
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