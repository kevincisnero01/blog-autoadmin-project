# BlogAutoAdmin
## Tabla de Contenido 📋
- [BlogAutoAdmin](#blogautoadmin)
  - [Tabla de Contenido 📋](#tabla-de-contenido-)
  - [Introducción 🎯](#introducción-)
  - [Caracteristicas ⚙️](#caracteristicas-️)
    - [📍 Módulo de Posts](#-módulo-de-posts)
    - [📍 Módulo de Categoría](#-módulo-de-categoría)
    - [📍 Módulo de Etiqueta](#-módulo-de-etiqueta)
    - [📍 Módulo de Usuarios](#-módulo-de-usuarios)
    - [📍 Módulo de Roles y Permisos](#-módulo-de-roles-y-permisos)
    - [📍 Módulo de Autenticación](#-módulo-de-autenticación)
  - [Metodologías 🧾](#metodologías-)
  - [Tecnologías 💽](#tecnologías-)
  - [Diagrama de BD  🗄️](#diagrama-de-bd--️)
  - [Instalación  🛠️](#instalación--️)
  - [License](#license)


## Introducción 🎯 
Este proyecto web presenta un sistema de gestión completo de *Blog* que abarca diversas funcionalidades esenciales. Con un sólido módulo de Posts, los usuarios pueden crear, editar y eliminar publicaciones, así como buscar y explorar las existentes. El módulo de Categoría y Etiqueta permite la organización efectiva del contenido, mientras que el de Usuarios brinda opciones de gestión de usuarios, roles y permisos. Además, la autenticación asegura un acceso seguro al área administrativa. Por ultimo utiliza la plantilla de AdminLTE que permite una administracion sencilla y elemente de los modulos.

<p align="center">
<a href="https://kevincisnero.com" target="_blank">
<img src="https://raw.githubusercontent.com/kevincisnero01/blog-autoadmin-project/main/public/documentation/\BlogAutoAdmin-1.png " width="100%" alt="Imagen Principal">
</a>
</p>

## Caracteristicas ⚙️

### 📍 Módulo de Posts 
- **Indice de post**: Puedes visualizar el listado de posts existentes.
- **Buscar post**: Puedes buscar un post en especifico entre el listado de todos los existente.
- **Detalle del post**: Puedes visualizar la información relacionado de un post en especifico.
- **Crear post**: Puedes crear nuevos post agregando su titulo, resumen, descripcion , imagen, categoria, etiqueta y estado.
- **Editar post**: Puedes editar toda la información de los posts existentes.
- **Eliminar post**: Puedes eliminar permanentemente un post.

### 📍 Módulo de Categoría

- **Indice de categorías**: Puedes visualizar el listado de categorías existentes.
- **Detalle del categoría**: Puedes visualizar la información relacionado de un categoría en especifico.
- **Crear categoría**: Puedes crear nuevos categoría agregando su nombre, slug y color.
- **Editar categoría**: Puedes editar la información de los categorías.
- **Eliminar categoría**: Puedes eliminar permanentemente una categoría.

### 📍 Módulo de Etiqueta

- **Indice de etiquetas**: Puedes visualizar el listado de etiquetas existentes.
- **Detalle del etiqueta**: Puedes visualizar la información relacionado de un etiqueta en especifico.
- **Crear etiqueta**: Puedes crear nuevos etiqueta agregando su nombre, slug y color.
- **Editar etiqueta**: Puedes editar la información de los etiquetas.
- **Eliminar etiqueta**: Puedes eliminar permanentemente una etiqueta.

### 📍 Módulo de Usuarios

- **Indice de usuarios**: Puedes visualizar el listado de usuarios existentes.
- **Buscar usuario**: Puedes buscar un usuario en especifico ingresando su nombre o email.
- **Detalle del usuario**: Puedes visualizar la información relacionado de un usuario en especifico.
- **Crear usuario**: Puedes crear nuevos usuario agregando su nombre, correo, contraseña y rol.
- **Editar usuario**: Puedes editar la información de los usuarios.
- **Eliminar usuario**: Puedes eliminar permanentemente una usuario.

### 📍 Módulo de Roles y Permisos

- **Indice de roles**: Puedes visualizar el listado de roles existentes.
- **Crear rol**: Puedes crear nuevos roles agregando su nombre y permisos.
- **Editar usuario**: Puedes editar los permisos asociados al rol seleccionado.
- **Eliminar usuario**: Puedes eliminar permanentemente una rol registrado.


### 📍 Módulo de Autenticación

- **Iniciar sesión**: Puedes loguearte en el sistema para poder tener acceso al area administrativa.
- **Cerrar sesión**: Puedes salir del sistema con el botón de logout.


## Metodologías 🧾 

- **Diseño Responsive Design**:  Se utilizó tailwind para aplicar diseños adaptables tanto a pantallas móviles como de desktop.


## Tecnologías 💽

El stack TALL incluye las siguientes tecnologías:
- **Tailwind CSS:** Un framework de CSS que simplifica la creación de interfaces de usuario atractivas y altamente personalizables.
- **Alpine.js:** Un framework de JavaScript liviano que facilita la interactividad ágil en el frontend.
- **Laravel:** Un framework de desarrollo backend en PHP que proporciona una base sólida y escalable para construir aplicaciones web.

Paquetes/Bibliotecas:

- **spatie/laravel-permission:** Gestión de permisos y roles en Laravel de forma sencilla.
- **jeroennoten/laravel-adminlte:** Integración de AdminLTE en Laravel para crear paneles de control atractivos.
- **laravel/jetstream:** Acelera el desarrollo de aplicaciones Laravel con características predefinidas de autenticación y control de usuario.**
- **ckeditor.js:** Editor de texto enriquecido JavaScript para contenido web interactivo.
- **jquery:** Biblioteca JavaScript para manipular el DOM y gestionar eventos en aplicaciones web.
- **Font Awesome:+* Biblioteca de iconos de alta calidad para mejorar la apariencia visual de tu sitio web o aplicación.
- **Bootstrap:** Framework de diseño web que agiliza la creación de sitios web responsivos y atractivos.
- **Popper:** Biblioteca JavaScript que facilita la creación de elementos emergentes y ventanas modales en aplicaciones web.


## Diagrama de BD  🗄️
<p align="center">
<a href="https://kevincisnero.com" target="_blank">
<img src="https://raw.githubusercontent.com/kevincisnero01/blog-autoadmin-project/main/public/documentation/BlogAutoadminDER-min.png " width="100%" alt="Imagen Principal">
</a>
</p>


## Instalación  🛠️
Para poder instalar **LarafolioDigital** solo es necesario contar con un servidor MySQL y un servidor Web. Si necesita instalarlo de manera local debe tener isntalado:
- Servidor que incluya PHP 8.0.2 y MySQL (Recomiendo [Laragon](https://laragon.org/download/index.html))
- Editor de código (Recomiendo [VSCode](https://code.visualstudio.com/download))
- Github Desktop ([Enlace](https://desktop.github.com/)) 
  

Pasos para configuracion:
1. Clonar repositorio de github

        git clone <url de repositorio>

2. Instalar dependencias

        composer install

3. Compilar assets

        npm run dev
3. Crear enlace simbolico

        php artisan storage:link

4. Configurar .env utilizando el .env.example

5. Crear base de datos 


6. Ejecutar migraciones 

        php atisan migrate

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
