
let carrito = [];

function agregarAlCarrito(curso, cantidad) {
    const precioPorCurso = 1000;
    const precioTotal = precioPorCurso * cantidad;
    carrito.push({ curso, precio: precioTotal, cantidad });
    actualizarCarrito();}

    function quitarDelCarrito(curso) {
        const index = carrito.findIndex(item => item.curso === curso);
        if (index !== -1) {
            carrito.splice(index, 1);
        }
        actualizarCarrito();
    }
    
    function comprarCursos() {
        const cursosComprados = carrito.map(item => `${item.cantidad} ${item.curso}(s) - $${item.precio}`).join(', ');
        alert(`Cursos comprados: ${cursosComprados}`);
        carrito = [];
        actualizarCarrito();
    }
    
    function actualizarCarrito() {
        const listaCarrito = document.getElementById('lista-carrito');
        listaCarrito.innerHTML = '';
        carrito.forEach(item => {
            const li = document.createElement('li');
            li.textContent = `${item.cantidad} ${item.curso}(s) - $${item.precio}`;
            listaCarrito.appendChild(li);
        });
    }