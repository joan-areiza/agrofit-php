<?php
if (realpath(__FILE__) === realpath($_SERVER["SCRIPT_FILENAME"])) {
    // Cabeceras de seguridad ----------
    header('Content-Type: text/html; charset=utf-8');
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: DENY');
    header('Referrer-Policy: same-origin');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    // ---------- Sesión ----------
    // 'secure' solo se activa si hay HTTPS, para que siga funcionando en localhost por HTTP.
    $esHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
    ini_set('session.use_strict_mode', '1');
    ini_set('session.use_only_cookies', '1');
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'secure' => $esHttps,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    function cerrarSesion(): void
    {
        $_SESSION = [];
        if (ini_get('session.use_cookies')) {
            $p = session_get_cookie_params();
            setcookie(session_name(), '', [
                'expires' => time() - 42000,
                'path' => $p['path'],
                'domain' => $p['domain'],
                'secure' => $p['secure'],
                'httponly' => $p['httponly'],
                'samesite' => $p['samesite'] ?: 'Lax',
            ]);
        }
        session_destroy();
    }
    /** Devuelve el parámetro solo si es texto (evita arreglos como correoUsu[]=x). */
    function entrada(array $origen, string $clave): string
    {
        $valor = $origen[$clave] ?? '';
        return is_string($valor) ? $valor : '';
    }
    function redirigirInicio(): void
    {
        header('Location: ../../index.php');
        exit;
    }
    include('../include/conex.php');
    ini_set('session.cookie_httponly', 1);
    ini_set('session.use_strict_mode', 1);
    ini_set('session.cookie_secure', 1);
    session_start();
    $opcion = entrada($_POST, 'opcion');
    if ($opcion === '') {
        $opcion = entrada($_GET, 'opcion');
    }
    $tipoDocUsu = trim(entrada($_POST, 'tipoDocUsu'));
    $documentoUsu = trim(entrada($_POST, 'documentoUsu'));
    //usted decide cual dejar			
    //$claveUsu  = entrada($_POST, 'claveUsu'); // no quita espacios. la clave puede tener espacios.
    $claveUsu = trim(entrada($_POST, 'claveUsu'));// si quita espacios. pueda que presente problemas, al ingresar la clave y el sistema quita espacios.
    if (isset($opcion) && isset($tipoDocUsu) && isset($documentoUsu) && isset($claveUsu)) {
        try {
            switch ($opcion) {
                case 'iniciarLogueo':
                    // Las credenciales solo se aceptan por POST (nunca en la URL)
                    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                        http_response_code(405);
                        echo '0';
                        break;
                    }
                    $estado = '0';
                    $query = "SELECT
                                usu.id_usuario_pk,
                                usu.correo_usuario,
                                CONCAT(
                                    SUBSTRING_INDEX(TRIM(usu.nombres_usuario), ' ', 1),
                                    ' ',
                                    SUBSTRING_INDEX(TRIM(usu.apellidos_usuario), ' ', 1)
                                ) AS usuLogueado,
                                usu.clave_usuario,
                                rl.nombre_rol,
                                rl.id_rol_pk
                            FROM usuarios usu
                            INNER JOIN roles rl ON rl.id_rol_pk = usu.id_rol_usuario_fk
                            WHERE usu.numero_documento_usuario = ?
                            AND usu.cod_tipo_documento_usuario_fk = ?
                            AND usu.clave_usuario = ?;";
                    $resultQuery = $conexion->prepare($query);
                    $resultQuery->bind_param("sss", $documentoUsu, $tipoDocUsu, $claveUsu);
                    $resultQuery->execute();
                    $vector = $resultQuery->get_result();
                    while ($datos_fila = $vector->fetch_assoc()) {
                        session_regenerate_id(true);
                        $_SESSION = array();
                        $_SESSION['idUsuarioSesion'] = $datos_fila['id_usuario_pk'];
                        $_SESSION['correoUsuSesion'] = $datos_fila['correo_usuario'];
                        $_SESSION['idrolSesion'] = $datos_fila['id_rol_pk'];
                        $_SESSION['nombreRolSesion'] = $datos_fila['nombre_rol'];
                        $_SESSION['loginUsuSesion'] = $datos_fila['usuLogueado'];
                        $estado = '1';
                    }
                    echo $estado;
                    $resultQuery->close();
                    break;
                case 'activarUsuario':
                    echo "<br>Dentro de nueva clave.";
                    break;
                case 'nueva_clave':
                    echo "<br>Dentro de nueva clave.";
                    break;
                case 'salir':
                    cerrarSesion();
                    redirigirInicio();
                    exit;
                default:
                    echo "<br>Error de selección";
                    break;
            }
        } catch (Throwable $e) {
            // El detalle va al log del servidor, nunca al navegador
            error_log('loginControl.php: ' . $e->getMessage());
            http_response_code(500);
            echo '0';
        }
    } else {
        redirigirInicio();
    }
} else {
    redirigirInicio();
}
?>