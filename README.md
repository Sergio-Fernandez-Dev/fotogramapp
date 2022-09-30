# Fotogramapp

Fotogramapp es una aplicación para la gestión de imágenes con una estética retro que emula a las ya míticas fotografías polaroid.

## Autor

Sergio Fernández Fernández.
 
## Vistas y manejo de la aplicación.

Al entrar a la home se muestran todas las fotos subidas por el usuario

<img width="1782" alt="Captura de pantalla 2022-09-30 a las 18 53 17" src="https://user-images.githubusercontent.com/63967914/193324925-bb295efd-edb3-4590-bed7-67835147814a.png">

 Cuando el usuario haga click en la tarjeta de añadir nueva foto, podrá seleccionar la imágen que quiere subir.
 
<img width="1181" alt="Captura de pantalla 2022-09-30 a las 18 55 50" src="https://user-images.githubusercontent.com/63967914/193325374-070cd58f-23f8-4cb7-a082-aebb94913ac2.png">

Automáticamente, aparecerá el nombre del archivo como título por defecto, el cuál podrá ser cambiado por el usuario si éste lo desea. Cuando el usuario haga click en el icono de envío, la imagen será guardada y se mostrará instantáneamente en la lista de imágenes. (<font color="red"> ¡ATEMCIÓN! Las imágenes deberán tener un tamaño inferior a 2,2mb y una resolución máxima de 2048px.

<img width="293" alt="Captura de pantalla 2022-09-30 a las 18 56 19" src="https://user-images.githubusercontent.com/63967914/193326063-f227d974-b089-4900-984a-65e852a3edec.png">

Si el usuario hace click sobre el botón de editar, la imágen de la tarjeta sobre la que el usuario está actuando, desaparecerá y dará paso a un menú desde donde podrá cambiar el título de la fotografía. Al presionar la tecla “enter”, la imágen volverá a mostrarse y el título habrá sido actualizado.

<img width="293" alt="Captura de pantalla 2022-09-30 a las 18 54 40" src="https://user-images.githubusercontent.com/63967914/193326966-401be105-92fd-4997-b85b-939eda04695c.png">

Cuando el usuario haga click sobre el botón de borrar, entonces la imagen de la tarjeta se convertirá en un menú de confirmación. Si el usuario cancela, volverá a mostrarse la imágen de la tarjeta, pero en el caso de que confirme el borrado, la imágen será eliminada de forma instantánea.

<img width="291" alt="Captura de pantalla 2022-09-30 a las 18 55 03" src="https://user-images.githubusercontent.com/63967914/193327284-57cc5cc3-4d65-483a-83a9-f89822fd549d.png">

Por supuesto, la aplicación es totalmente responsive, pudiendo usarse en cualquier dispositivo. Aquí enseño una muestra de como se vería en un Samsung Galaxy S8+.

<img width="392" alt="Captura de pantalla 2022-09-30 a las 18 58 11" src="https://user-images.githubusercontent.com/63967914/193327653-42f67a76-e2a5-477b-bbc2-12815d038297.png">

Y aquí, cómo se vería en en una tablet Surface Pro 7.

<img width="685" alt="Captura de pantalla 2022-09-30 a las 19 50 08" src="https://user-images.githubusercontent.com/63967914/193327909-a138e863-7aeb-4fbe-963c-f6a0de1c5473.png">

# Análisis del proyecto

## Requisitos funcionales

- El usuario podrá ver una lista de sus imágenes, las cuales contendrán un título.
- El usuario podrá añadir nuevas imágenes a la base de datos.
- El usuario podrá eliminar una imagen.
- El usuario podrá editar una imagen existente

## Requisitos técnicos:

- Buenas prácticas de desarrollo de Software
- Test (TDD)
- SOLID
- Git y commits

## Arquitectura, lenguajes y tecnologías utilizadas

Aunque inicialmente se valoró crear una arquitectura basada en un patrón Repository, dado que nuestra aplicación tan sólo tiene una única entidad, se decidió implementar un patrón MVC. Por la misma razón, el lenguaje elegido fue PHP, ya que es un lenguaje que permite un prototipado rápido de manera sencilla, lo que lo hace mejor candidato para este proyecto que otras soluciones más robustas, pero más pesadas. como Java o C#. 
Aunque inicialmente se valoró crea el proyecto en PHP vanilla, finalmente se optó por usar el framework Laravel para acortar tiempo y hacer la entrega dentro de un periodo razonable.
En cuanto al frontend, se eligió SCSS para personalizar los estilos de la app y se optó por prescindir de bibliotecas de estilos prefabricados como Bootsrap o Tailwind.  También se eligió Vue 3 para dotar a la app de reactividad de una manera sencilla. 

Otra de las decisiones importantes que se tomaron, fue separar el frontend y el backend y comunicarlos a través de una Api REST. Para ello, se crearon las siguientes rutas en nuestro backend: 

 <img width="329" alt="Captura de pantalla 2022-09-30 a las 19 03 04" src="https://user-images.githubusercontent.com/63967914/193328708-93110a8e-3ecb-4b19-9e1d-f0b4ed1c9e37.png">

Siguiendo las buenas prácticas, y siendo TDD un requisito de la prueba, todas las rutas fueron testeadas en base a los distintos casos de uso posible. Una vez hechos los tests de la ruta, se implementaron las funcionalidades necesarias para pasarlos. Cuando surgía algún caso de uso que no se había contemplado en un primer caso, se hacía el correspondiente test y luego se implementaba la solución que permitiera pasarlo. En total se hicieron 16 tests, los cuales fueron lanzados justo antes de publicar el último commit.

<img width="576" alt="Captura de pantalla 2022-09-30 a las 19 00 28" src="https://user-images.githubusercontent.com/63967914/193329647-14bdc519-c173-45e1-a327-c3c502b59ed0.png">


# Requisitos técnicos

- PHP ^8.1.9 
- Composer ^2.4.0


# Instalación


Primero clonaremos el repositorio:    
```
git clone https://github.com/Sergio-Fernandez-Dev/fotogramapp 
``` 

Nos movemos a la carpeta frontend e intalamos las dependencias:
```
npm install
```

Ahora nos moveremos a la carpeta backend e instalaremos las dependencias del backend:
```
composer install
```
## Crear base de datos

Abrimos XAMPP, MAMP o similar y me ante PHPMyAdmin creamos una nueva base de datos llamada ”fotogramapp”

<img width="642" alt="Captura de pantalla 2022-09-30 a las 20 22 10" src="https://user-images.githubusercontent.com/63967914/193333324-5bf2bc63-3837-4cc5-a475-6d9a6fce3e9e.png">


## Iniciar app

Levantamos el servidor local desde la carpeta frontend:
```
npm run dev
```

Y hacemos lo mismo desde la carpeta backend:
```
php artisan serve
```
## Precargar nuestra base de datos:

Para cargar una lista de fotos por defecto, ejecutamos desde el backend:
```
php artisan migrate:fresh --seed
```

## Lanzar Tests

Ahora solo queda comprobar que todo funciona correctamente:
```
php artisan tests
```
