const categorias = document.querySelectorAll('#categorias .categoria');
const containerPreguntas = document.querySelectorAll('.container-preguntas');
let categoriaActiva = null;


categorias.forEach((categoria) =>{
    categoria.addEventListener('click', (e) =>{

        categorias.forEach((element) =>{
            element.classList.remove('activa');

        })

        e.currentTarget.classList.toggle('activa');
        categoriaActiva = categoria.dataset.categoria;


        // Activador de contenedor de pregunta correspondiente

        containerPreguntas.forEach((contenedor) => {
            if(contenedor.dataset.categoria === categoriaActiva){
                contenedor.classList.add('activo');
            }else{
                contenedor.classList.remove('activo');
            }
        });
        




    })

});

//abrir contenedor de preguntas y respuestas

const preguntas = document.querySelectorAll('.preguntas .container-pregunta');

preguntas.forEach((pregunta)=>{
    pregunta.addEventListener('click', (p)=>{
        p.currentTarget.classList.toggle('activa');


        const respuesta = pregunta.querySelector('.respuesta');
        const alturaRealRespuesta = respuesta.scrollHeight;

        if(!respuesta.style.maxHeight){
            // si esta vacio el maxheight se le agrega un valor
            respuesta.style.maxHeight = alturaRealRespuesta + 'px'
        }else{
            respuesta.style.maxHeight = null;
        }
        
        //reiniciamos las demas preguntas

        preguntas.forEach((elemento) =>{
            if(pregunta !== elemento ){
                elemento.classList.remove('activa');
                elemento.querySelector('.respuesta').style.maxHeight = null;
            }
        })
    })
})