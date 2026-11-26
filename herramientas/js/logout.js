document.addEventListener('DOMContentLoaded', function () {

    // --- Cierre de Sesión ---
    const btnLogout = document.getElementById('btnLogout');

    if (btnLogout) {
        btnLogout.addEventListener('click', function (e) {
            e.preventDefault();

            Swal.fire({
                icon: 'warning',
                title: '¿Estás seguro?',
                text: '¿Deseas cerrar sesión?',
                showCancelButton: true,
                confirmButtonText: 'Sí',
                cancelButtonText: 'No',
                confirmButtonColor: '#3F9A1A',
                cancelButtonColor: '#d33'
            }).then((resultado) => {
                if (resultado.isConfirmed) {
                    window.location.href = this.href;
                }
            });
        });
    }
});
