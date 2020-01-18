"use strict"

document.addEventListener('DOMContentLoaded', function(){
    console.log(document.querySelector("#form-comentarios"));
      
    document.querySelector("#form-comentarios").addEventListener('submit', agregarComentario);
    document.querySelector("#borrar").addEventListener('click', borrarComentario);

    // define la app Vue
    let app = new Vue({
        el: "#template-vue-comentarios",
        data: {
            subtitle: " Comentarios",
            comentarios: [],
        }
    });

    // obtiene los comentarios al inicio
    obtenerComentarios();

    /*
    Obtiene la lista de comentarios de la API y las renderiza con Vue.
    */
    function obtenerComentarios() {
        console.log(obtenerComentarios);
        fetch("api/comentarios")
        .then(response => response.json())
        .then(comentarios => {
            console.log(comentarios);
            app.comentarios = comentarios; // similar a $this->smarty->assign("tasks", $tasks)
        })
        .catch(error => console.log(error));
    }

    function borrarComentario(id) {

        let url = "http//localhost:8080/TrabajoEspecial-master/api/comentarios"
        fetch(url + "/" + id, {
            'method': 'DELETE',
        })
            .then(function (r) {
                if (!r.ok) {
                    console.log("error")
                }
                return r.json()
            })
            .then(function (json) {
                //data.innerHTML = JSON.stringify(json);
                obtenerComentarios();
            })
            .catch(function (e) {
                console.log(e)
            })

    }

    function agregarComentario(e) {
        e.preventDefault();
        
        let data = {
            usuario:  document.querySelector("input[name=usuario]").value,
            contenido:  document.querySelector("input[name=contenido]").value,
            puntuacion:  document.querySelector("input[name=puntuacion]").value,
        }
        console.log(data);
        let url = "http//localhost:8080/TrabajoEspecial-master/api/comentarios"
        fetch(url, {
            'method': 'POST',
            'headers': { 'Content-Type': 'application/json' },
            'body': JSON.stringify(data)
        })
        .then(function (r) {
            if (!r.ok) {
                console.log("error")
            }
            return r.json()
        })
        .then(function (json) {
            //data.innerHTML = JSON.stringify(json);
            obtenerComentarios();
        })
        .catch(function (e) {
        //  console.log(e)
        })
    }

});