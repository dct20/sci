# Sistema de Control de Inventario (SCI)

## Descripción
El Sistema de Control de Inventario (SCI) es una aplicación para gestionar productos, proveedores y órdenes de compra. Permite realizar operaciones CRUD para estas entidades.

## Requisitos
- PHP
- XAMPP o similar para el servidor web y base de datos
- PhpMyAdmin para gestionar la base de datos

## Configuración

1. **Base de Datos**:
   - Crear las tablas `products`, `providers`, `purchase_orders` en PhpMyAdmin con los siguientes scripts:

   **scripts SQL**:
   - [script de productos]
   - [script de proveedores]
   - [script de órdenes de compra]

2. **Estructura del Proyecto**:
   - Asegúrate de tener las carpetas y archivos adecuados según el diseño del proyecto.

## Instrucciones
1. Clona este repositorio en tu máquina local.
2. Ejecuta los scripts de base de datos en PhpMyAdmin.
3. Asegúrate de que el servidor web esté corriendo (usando XAMPP o el que prefieras).
4. Configura los detalles en el archivo `.env` (si es necesario).
5. ¡Disfruta del sistema!

## Notas
- Este proyecto no utiliza Laravel ni Composer, todo está hecho manualmente.
