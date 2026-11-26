        document.addEventListener('DOMContentLoaded', () => {
            const buscarInput = document.getElementById('buscarRol');
            const estadoSelect = document.getElementById('filtroEstadoRol');
            const filas = Array.from(document.querySelectorAll('#cuerpoTablaRoles tr'));
            const contadorFilas = document.getElementById('contadorFilas');
            const totalRolesCount = document.getElementById('totalRolesCount');
            const rolesActivosCount = document.getElementById('rolesActivosCount');

            const modalEl = document.getElementById('modalRol');
            const modalTitulo = document.getElementById('modalRolLabel');
            const formRol = document.getElementById('formRol');
            const rolIdInput = document.getElementById('rolId');
            const nombreRolInput = document.getElementById('nombreRol');
            const estadoRolInput = document.getElementById('estadoRol');
            const descripcionRolInput = document.getElementById('descripcionRol');
            const checksModulo = Array.from(document.querySelectorAll('.modulo-check'));

            function actualizarResumen() {
                const todasLasFilas = Array.from(document.querySelectorAll('#cuerpoTablaRoles tr'));
                const activos = todasLasFilas.filter(f => f.dataset.estado === 'Activo').length;
                if (totalRolesCount) totalRolesCount.textContent = todasLasFilas.length;
                if (rolesActivosCount) rolesActivosCount.textContent = activos;
            }

            function filtrarTabla() {
                const texto = (buscarInput.value || '').trim().toLowerCase();
                const estado = estadoSelect.value;
                let visibles = 0;

                filas.forEach(fila => {
                    const nombre = (fila.dataset.nombre || '').toLowerCase();
                    const filaEstado = fila.dataset.estado || '';
                    const coincideNombre = !texto || nombre.includes(texto);
                    const coincideEstado = estado === 'todos' || filaEstado === estado;
                    const mostrar = coincideNombre && coincideEstado;

                    fila.classList.toggle('d-none', !mostrar);
                    if (mostrar) visibles++;
                });

                if (contadorFilas) {
                    contadorFilas.textContent = `${visibles} ${visibles === 1 ? 'rol' : 'roles'}`;
                }
            }

            buscarInput.addEventListener('input', filtrarTabla);
            estadoSelect.addEventListener('change', filtrarTabla);

            document.getElementById('btnAbrirNuevoRol').addEventListener('click', () => {
                modalTitulo.textContent = 'Registrar Rol';
                formRol.reset();
                rolIdInput.value = '';
                checksModulo.forEach(chk => {
                    chk.checked = false;
                });
            });

            document.querySelectorAll('.btn-editar-rol').forEach(btn => {
                btn.addEventListener('click', () => {
                    modalTitulo.textContent = `Editar Rol: ${btn.dataset.nombre}`;
                    rolIdInput.value = btn.dataset.id || '';
                    nombreRolInput.value = btn.dataset.nombre || '';
                    estadoRolInput.value = btn.dataset.estado || 'Activo';
                    descripcionRolInput.value = btn.dataset.descripcion || '';

                    const modulosActivos = (btn.dataset.modulos || '')
                        .split(',')
                        .map(m => m.trim().toLowerCase())
                        .filter(Boolean);

                    checksModulo.forEach(chk => {
                        chk.checked = modulosActivos.includes(chk.value.toLowerCase());
                    });

                    const modalInstance = bootstrap.Modal.getOrCreateInstance(modalEl);
                    modalInstance.show();
                });
            });

            // Vista previa de envío (conecta aquí tu fetch/POST a rolControl.php cuando tengas backend)
            formRol.addEventListener('submit', (e) => {
                e.preventDefault();
                const seleccionados = checksModulo.filter(c => c.checked).map(c => c.value);

                if (seleccionados.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Selecciona al menos un módulo',
                        text: 'Todo rol debe tener al menos un módulo habilitado.',
                        confirmButtonColor: '#198754'
                    });
                    return;
                }

                Swal.fire({
                    icon: 'success',
                    title: 'Rol listo para guardar',
                    text: `Rol "${nombreRolInput.value}" con ${seleccionados.length} módulo(s) seleccionado(s).`,
                    confirmButtonColor: '#198754'
                });

                bootstrap.Modal.getOrCreateInstance(modalEl).hide();
                actualizarResumen();
            });

            actualizarResumen();
            filtrarTabla();
        });