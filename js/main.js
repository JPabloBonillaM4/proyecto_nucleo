// CONVETIR A MAYUSCULAS
function mayusculas(event){
    event.value = event.value.toUpperCase();
}

$(document).ready(function(){
    // VARIABLES Y ACCIONES DE INICIO
    let data = {};
    $('#name').focus();
    $('#phone').on('keypress',validarNumerico);
    $('#actions').on('keypress',validarNumerico);

    // RETORNAR SECCIONES
    $('#regresar_seccion1').click(function(event){
        event.preventDefault();
        seccionAnterior('#seccion2')
    });

    $('#regresar_seccion2-1').click(function(event){
        event.preventDefault();
        seccionAnterior('#seccion2-1')
    });

    // VALIDACION DE SECCION 1
    $('#continuar_seccion2').click(function(event){
        event.preventDefault();
        let validarCorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#email').val()),
            validacion_pass;

        $('#seccion1 input').each(function(){
            data[this.name] = this.value;
        });

        validacion_pass = validacionContraseñas(data.password1,data.password2);

        if(data.name != '' && data.first_surname != '' && data.second_surname && data.email != '' && data.phone != '' && data.password1 != '' && data.password2 != '' && data.rfc != '' && data.actions != ''){

            if(!validarCorreo)
                alert('Escriba una dirección de correo válida');

            if(validacion_pass.error)
                alert(validacion_pass.mensaje);

            if(validarCorreo && !validacion_pass.error)
                mostrarSeccion('#seccion1');
    
        } else {
            alert('Favor de llenar todos los campos');
            return false;
        }
    });

    // VALIDACION SECCION 2
    $('#continuar_seccion2-1').click(function(event){
        event.preventDefault();
        mostrarSeccion('#seccion2');
    });

    // VALIDACION SECCION 2-1
    $('#continuar_seccion3').click(function(event){
        event.preventDefault();
        mostrarSeccion('#continuar_seccion2-1');
    })

    // VALIDAR CONTRASEÑAS
    function validacionContraseñas(pass1, pass2){
        let respuesta = {};

        if((pass1.length >= 8 && pass1.length <= 16) && (pass1.length >= 8 && pass1.length <= 16))
        {
            if(pass1 === pass2)
            {
                respuesta['error']   = false;
            } else {
                respuesta['mensaje'] = 'Las contraseñas escritas deben coincidir';
                respuesta['error']   = true;
            }
    
        } else {
            respuesta['mensaje'] = 'La contraseña escrita debe ser mayor o igual a 8 y menor o igual a 16 caracteres';
            respuesta['error']   = true;
        }

        return respuesta;

    }

    // VALIDAR SOLO VALOR NUMERICO
    function validarNumerico(event){
        if(event.which < 48 || event.which > 57)
        {
           event.preventDefault();
        } 
    }

    // MOSTRAR SECCION SIGUIENTE
    function mostrarSeccion(seccion){
        $(seccion).slideToggle('slow');
        setTimeout(() => {
            $(seccion).next().slideToggle('slow');
        }, 1000);
    }

    //MOSTRAR SECCION ANTERIOR
    function seccionAnterior(seccion){
        $(seccion).slideToggle('slow');
        setTimeout(() => {
            $(seccion).prev().slideToggle('slow');
        }, 1000);
    }

});
