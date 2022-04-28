# MyFavImages

## Set up 
- Usaremos la consola Git Bash para los comandos.
- Es un proyecto en laravel 9. Vamos a construir, usando su documentación oficial.
- Laravel es un framework que usa el patrón model-view-controller.
- Para comenzar este proyecto, deberás tener instalado php 8 de versión mínima.
- También vamos a usar composer para manejar las librerías php y npm para gestionar las  librerías css y js.
- En este caso, además, hemos instalado previamente con composer el instalador de  laravel (laravel installer).
- No es necesario, pero en este caso, vamos a usar webpack, así que debemos tener instalado node.js.

1. Iniciar proyecto en laravel con el comando `laravel new`
2. Crear DBMS en mysql, configurar .env y migrar las migrations por defecto con el comando `php artisan migrate`
3. Instalar y configurar librería de autentificación con el comando `composer require laravel/fortify` y el resto de pasos que se pueden encontrar en la documentación oficial de laravel. https://laravel.com/docs/9.x/fortify#main-content
4. Vamos a usar PostCss con webpack.mix.js para transformar y compilar nuestro css, y vamos a compilar gracias a webpack también nuestros js. Usamos el comando `npm install`
5. Para hacer un front-end sencillo y rápido, descargamos el framework bootstrap 5 con npm.
6. Iniciamos git en el proyecto y lo conectamos a un repositorio en github.

## Home(primer paso), registro de usuarios y login.
1. Para ello, usamos el motor de plantillas Blade. En lugar de por componentes para heredar código a múltiples vistas, usamos "Layouts Using Template Inheritance".

