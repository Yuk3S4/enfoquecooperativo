
(function() {

    obtenerTareas()
    let tareas = []
    let filtradas = []

    // Botón para mostrar el modal de agregar tarea
    const nuevaTareaBtn = document.getElementById('agregar-tarea');
    nuevaTareaBtn.addEventListener('click', function() {
        mostrarFormulario();
    });

    // Filtros de busqueda
    const filtros = document.querySelectorAll('#filtros input[type="radio"]');
    filtros.forEach( radio => {
        // console.log(radio);
        radio.addEventListener('input', filtrarTareas)
    })

    function filtrarTareas(e) {
        const filtro = e.target.value;

        if(filtro !== '') {
            filtradas = tareas.filter(tarea => tarea.estado === +filtro)
        } else {
            filtradas = [];
        }

        mostrarTareas()
    }

    async function obtenerTareas() {
        try {
            const url = getProyectoUrl()
            const urlDest = `/api/tareas?url=${ url }`
            const resp = await fetch(urlDest)
            const result = await resp.json()

            tareas = result.data  
            mostrarTareas()          
        } catch (err) {
            console.log(err);
        }
    }

    function mostrarTareas() {
        limpiarTareas()
        controlFiltros(0, 'pendientes')// Habilita o deshabilita los filtros segun su estad0
        controlFiltros(1, 'completadas')

        const arrayTareas = filtradas.length ? filtradas : tareas

        if(arrayTareas.length === 0) {
            const contenedorTareas = document.getElementById('listado-tareas')

            const textoNoTareas = document.createElement('li')
            textoNoTareas.textContent = 'No tienes tareas aún'
            textoNoTareas.classList.add('text-center text-gray-400 font-semibold text-lg')

            contenedorTareas.appendChild(textoNoTareas)
            return
        }

        const estados = {
            0: 'Pendiente',
            1: 'Completa'
        }

        arrayTareas.forEach(tarea => {
            const contenedorTarea = document.createElement('li')
            contenedorTarea.dataset.tareaId = tarea.id
            contenedorTarea.classList.add('tarea')

            const nombreTarea = document.createElement('p')
            nombreTarea.textContent = tarea.nombre
            nombreTarea.classList.add('nombre-tarea')
            nombreTarea.ondblclick = function() {
                mostrarFormulario(tarea, true)
            }

            const opcionesDiv = document.createElement('div');
            opcionesDiv.classList.add('opciones');

            // Botones
            const btnEstadoTarea = document.createElement('button')
            btnEstadoTarea.classList.add('estado-tarea')
            btnEstadoTarea.classList.add(`${estados[tarea.estado].toLowerCase()}`)
            btnEstadoTarea.textContent = estados[tarea.estado]
            btnEstadoTarea.dataset.estadoTarea = tarea.estado
            btnEstadoTarea.ondblclick = function() {
                cambiarEstadoTarea({...tarea});
            }

            const btnEliminarTarea = document.createElement('button')
            btnEliminarTarea.classList.add('eliminar-tarea')
            btnEliminarTarea.dataset.idTarea = tarea.id
            btnEliminarTarea.textContent = 'Eliminar'
            btnEliminarTarea.ondblclick = function() {
                confirmarEliminarTarea({...tarea});
            }       

            opcionesDiv.appendChild(btnEstadoTarea)
            opcionesDiv.appendChild(btnEliminarTarea)

            contenedorTarea.appendChild(nombreTarea)
            contenedorTarea.appendChild(opcionesDiv)
            
            const listadoTareas = document.getElementById('listado-tareas')
            listadoTareas.appendChild(contenedorTarea)
        })
    }

    function mostrarFormulario(tarea = {}, editar = false) {
        Swal.fire({
            title: `${ editar ? 'Editar' : 'Crear' } tarea`,
            input: 'text',
            inputValue: tarea.nombre,
            inputLabel: `Nombre${ editar ? ' nuevo' : '' }:`,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Guardar',
            cancelButtonText: 'Cancelar',
            }).then( ( result ) => {
            if (result.isConfirmed) {

                if (result.value === '') return
                
                if ( editar ) {
                    tarea = { ...tarea, nombre: result.value }
                    actualizarTarea({...tarea})                
                } else {
                    agregarTarea( result.value )
                }
            }
        })      
    }

    async function agregarTarea(nombreTarea) {
        // Construir la petición
        const data = {
            nombre: nombreTarea,
            url: getProyectoUrl()
        }  

        try {

            const resp = await fetch(`http://localhost:8000/api/tareas`, {
                method: 'POST',
                headers: {
                    "Content-Type": "application/json",
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: JSON.stringify(data)
            })
            const { tarea } = await resp.json()

            if ( tarea ) {
                Swal.fire(
                    'Tarea Creada',
                    'Creada correctamente.',
                    'success'
                )

                const tareaObj = {
                    id: String(tarea.id),
                    nombre: tarea.nombre,
                    estado: 0,
                    proyectoId: tarea.proyecto_id
                }

                tareas = [...tareas, tareaObj];
                mostrarTareas();
            }

        } catch (error) {
            console.log(error);
        }
    }

    function cambiarEstadoTarea(tarea) {
        const nuevoEstado = tarea.estado === 1 ? 0 : 1;
        tarea.estado = nuevoEstado;
        actualizarTarea(tarea);
    }

    async function actualizarTarea(tarea) {
        const { id, estado, nombre } = tarea;        

        const data = {
            nombre,
            estado,
        }

        try {
            const respuesta = await fetch(`http://localhost:8000/api/tareas/${ id }`, {
                method: 'PUT',
                headers: {
                    "Content-Type": "application/json",
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: JSON.stringify(data)
            });
            const resultado = await respuesta.json()
            
            if ( resultado.tarea ) {
                Swal.fire(
                    'Se actualizó la tarea',
                    'Actualizada correctamente.',
                    'success'
                )

                tareas = tareas.map(tareaMemoria => {
                    if(tareaMemoria.id === id) {
                        tareaMemoria.estado = estado;
                        tareaMemoria.nombre = nombre;
                    }

                    return tareaMemoria;
                })

                mostrarTareas();
            }
        } catch (error) {
            console.log(error);
        }
    }

    function confirmarEliminarTarea(tarea) {
        Swal.fire({
            title: '¿Estas seguro de eliminar esta Tarea?',
            showCancelButton: true,
            confirmButtonText: 'Si, estoy seguro',
            cancelButtonText: 'No quiero eliminarla'
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              eliminarTarea(tarea);
            }
          })
    }

    async function eliminarTarea(tarea) {
        const { id } = tarea

        try {
            
            await fetch(`http://localhost:8000/api/tareas/${ id }`, {
                method: 'DELETE'
            })

            Swal.fire(
                'Se eliminó la tarea',
                'Eliminada correctamente.',
                'success'
            )

            tareas = tareas.filter( tareaMemoria => tareaMemoria.id !== tarea.id);
            mostrarTareas();

        } catch (err) {
            console.log(err)
        }
    }

    function getProyectoUrl() {
        let url = window.location.pathname
        const cadena = url.split('/')    
        url = cadena[ cadena.length - 1 ]
        return url
    }

    function limpiarTareas() {
        const lisadoTareas = document.getElementById('listado-tareas');
        
        while(lisadoTareas.firstChild) {
            lisadoTareas.removeChild(lisadoTareas.firstChild);
        }
    }

    function controlFiltros(estado, id) {
        const totalPendientesCompletas = tareas.filter(tarea => tarea.estado === estado);
        const completasPendientesRadio = document.getElementById(id);

        if(totalPendientesCompletas.length === 0) {
            completasPendientesRadio.disabled = true;
        } else {
            completasPendientesRadio.disabled = false;
        }
    }

    function controlFiltros(estado, id) {
        const totalPendientesCompletas = tareas.filter(tarea => tarea.estado === estado);
        const completasPendientesRadio = document.getElementById(id);

        if(totalPendientesCompletas.length === 0) {
            completasPendientesRadio.disabled = true;
        } else {
            completasPendientesRadio.disabled = false;
        }
    }
})()