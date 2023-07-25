function confirmarCierreSesion() {
    if (confirm("¿Estás seguro de que deseas cerrar sesión?")) {
        window.location.href = "http://localhost/SistemaCocteleria/?Controller=UserController&Method=cerrarsesion";
    }
}