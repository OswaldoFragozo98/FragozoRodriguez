$(document).ready(function(){
    $('#Piedra, #Papel, #Tijeras').click(function(){

        var eleccion = $(this).attr("id");

        $('#eleccion').html(eleccion);

        var maq = Math.floor(Math.random()*3);

        if(maq == 0){
            maq = "Piedra";
        }else if(maq == 1){
            maq = "Papel";
        }else if(maq == 2){
            maq = "Tijeras";
        }

        $('#maq_eleccion').html(maq);
        if(eleccion == 'Piedra'){
            if(maq == 'Papel'){
                res = "Perdiste";
            }else if (maq == 'tijeras'){
                res = "Ganaste";
            }else if (maq == 'Piedra'){
                res = "Empate";
            }
        }

        if(eleccion == 'Papel'){
            if(maq == 'Tijeras'){
                res = "Perdiste";
            }else if (maq == 'Piedra'){
                res = "Ganaste";
            }else if (maq == 'Papel'){
                res = "Empate";
            }
        }

        if(eleccion == 'Tijeras'){
            if(maq == 'Piedra'){
                res = "Perdiste";
            }else if (maq == 'Papel'){
                res = "Ganaste";
            }else if (maq == 'Tijeras'){
                res = "Empate";
            }
        }

        var img = document.createElement("img");
        var src = document.getElementById("imagen");


        if(res == "Ganaste"){
            $('#res').css("color","green");
            //localizacion de la imagen
            img.src= 'images/Ganaste.png';
            src.appendChild(img);

        }else if (res == "Perdiste"){
            $('#res').css("color","red");
            $('<td></td>');
            img.src = 'images/Perdiste.jpg';
            src.appendChild(img);
            
        }else if (res == "Empate"){
            $('#res').css("color","#FF9300");
            img.src = 'images/Empate.jpg';
            src.appendChild(img);
        }
        $('#res').html(res);
        $('#imagen').html(img);


    })
})