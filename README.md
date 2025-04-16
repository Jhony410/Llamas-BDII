# SQL Externo <3

Implementación de una aplicación web basada en la arquitectura CRUD (Crear, Leer, Actualizar y Eliminar), la cual interact´ua de manera eficiente con una base de datos MySQL utilizando el lenguaje de programación PHP. El sistema ha sido diseñado para gestionar dos entidades principales: usuarios y productos, permitiendo realizar operaciones básicas y avanzadas sobre dichos registros a través de una interfaz web intuitiva.

## Autores

- Aguilar Anccori Jhon Elias
- Rojas Luque Franco
- Condori Nina Mildward Erik
- Romero Charca Miguel Fernando

## Docente

Ing. Mayenka Fernandez Chambi

## Configuración de tablas

## Tablas de Base de Datos

### Tabla de `product`:

| Columna               | Tipo de Dato       | Restricciones                                   | Descripción                                      |
|-----------------------|--------------------|------------------------------------------------|--------------------------------------------------|
| `id_product`          | int(11)            | NOT NULL, AUTO_INCREMENT, PRIMARY KEY           | Identificador único del producto                |
| `name_product`        | varchar(20)        | NOT NULL                                        | Nombre del producto                              |
| `description_product` | text               | NOT NULL                                        | Descripción detallada del producto               |
| `price_product`       | float              | NOT NULL, DEFAULT 0                             | Precio del producto                              |
| `stock_product`       | int(11)            | NOT NULL                                        | Cantidad disponible del producto                 |
| `category_product`    | varchar(20)        | NOT NULL                                        | Categoría a la que pertenece el producto         |
| `img_product`         | varchar(40)        | DEFAULT NULL                                    | Ruta de la imagen del producto                   |
| `fecha_product`       | timestamp          | NOT NULL, DEFAULT current_timestamp(), ON UPDATE current_timestamp() | Fecha y hora de la última actualización         |

### Tabla de `users`:

| Columna              | Tipo de Dato       | Restricciones                                   | Descripción                                      |
|----------------------|--------------------|------------------------------------------------|--------------------------------------------------|
| `id_user`            | int(11)            | NOT NULL, AUTO_INCREMENT, PRIMARY KEY           | Identificador único del usuario                 |
| `username_user`      | varchar(20)        | NOT NULL                                        | Nombre de usuario                                |
| `telefono_user`      | int(15)            | NOT NULL                                        | Teléfono del usuario                             |
| `email_user`         | varchar(40)        | NOT NULL                                        | Correo electrónico del usuario                   |
| `password_user`      | varchar(20)        | NOT NULL                                        | Contraseña del usuario                           |


## Conclusión
Este proyecto ha creado una aplicación CRUD con interfaz gráfica que interactúa con una base de datos MySQL, implementando medidas de seguridad clave. Los logros incluyen:

1. **Implementación CRUD**: Funcionalidad completa para crear, leer, actualizar y eliminar, incluyendo el manejo de imágenes.
2. **Seguridad Reforzada**: Se aplicaron prácticas para prevenir XSS, validar tipos de archivo, manejar sesiones de manera segura y proteger contra inyecciones SQL.
3. **Manejo de Archivos**: Sistema eficaz para subir, actualizar y eliminar imágenes asociadas a productos, con validación y almacenamiento seguro.
4. **Experiencia de Usuario**: Flujos intuitivos y medidas para evitar duplicación de datos mediante redirecciones y prevención de reenvíos de formularios.

En resumen, la aplicación cumple con los objetivos iniciales, con un enfoque en seguridad y una estructura que facilita el mantenimiento y futuras mejoras.


## Video
La explicación del video  [SQL externo , con PHP y antiinyecciones sql](https://www.youtube.com/watch?v=FrPnD18cEZM&ab_channel=JhonyAguilar). y los códigos usados.

