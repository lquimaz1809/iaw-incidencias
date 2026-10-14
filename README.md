# Act.01.03 - CI PHP + MariaDB
Proyecto de trabajo para la práctica de 2.º ASIR.

## Componentes
- `.github/workflows/ci-php-mariadb.yml`: crea Debian 13 y MariaDB 11 en GitHub Actions.
- `sql/01_esquema.sql`: prepara la tabla.
- `sql/02_datos_prueba.sql`: introduce 3 incidencias.
- `tests/test_integracion.php`: verifica PDO, cantidad inicial, INSERT y SELECT.
- `index.php`, `conexion.php`, `estilos.css`: página sencilla de ejemplo. **Si tienes los archivos originales de P2, conserva los tuyos en lugar de sustituirlos por estos ejemplos.**

## Puesta en marcha
Sube el contenido de la carpeta a la raíz de un repositorio GitHub y revisa Actions.
Las contraseñas del YAML pertenecen únicamente al entorno temporal de CI; no las utilices en producción.

## Evidencias a obtener
1. Workflow completo en verde.
2. Mostrar entorno (Debian/PHP/PDO).
3. Esperar MariaDB, crear esquema, cargar datos y comprobar tres registros.
4. Prueba de integración con resultado superado.
5. Error de sintaxis PHP (temporal y corregido).
6. Error de contraseña (temporal y corregido).
7. Dos registros iniciales (temporal y corregido).

Nota: todavía no se ha ejecutado el workflow en GitHub. Las evidencias deben obtenerse ejecutándolo en tu repositorio.
