const grande = document.querySelector('.grande');
const punto = document.querySelectorAll('.punto');

//cuando hago click en punto
    //saber la posicion de ese punto
    //aplicar un transfor translateX al grande
    // quitar la clase activo a todos los puntos
    //anañir la clase activo al punto que heemos hecho CLICK

//recorrer todos los puntos
punto.forEach ((cadaPunto , i )=> {
    //asignamos un Click a cada punto
    punto[i].addEventListener('click',()=>{
        //guardar posicion de cada punto
        let posicion = i
        //calcular el espacio que debe desplazase el grande
        let operacion = posicion * -50


        //movemos el grande
        grande.style.transform = `translateX(${ operacion}%)`

        //recorremos todos los punto
        punto.forEach( (cadaPunto , i)=>{
            //quitamos la clase activo a todos los punto
            punto[i].classList.remove('activo')
        })
        //añadir la clase activo en el punto que hemos hecho click
        punto[i].classList.add('activo')



    })
})