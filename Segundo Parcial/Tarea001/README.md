# Sistema de Login con PHP y Sesiones

Este repositorio contiene la solución al trabajo de implementación de un sistema de login utilizando PHP y sesiones para autenticar a los usuarios en una aplicación web. El sistema fue diseñado por Emilio Ñacato y Sebastian Falconi como parte de la materia de Desarrollo Web.

## Objetivo

El objetivo de este trabajo es desarrollar un sistema de login que permita proteger y controlar el acceso a una aplicación web. Se debe implementar un formulario de inicio de sesión que solicite al usuario su nombre de usuario y contraseña. Al recibir los datos, se verificará si corresponden a un usuario válido almacenado en la base de datos. Si la autenticación es exitosa, se iniciará una sesión y se redirigirá al usuario a una página de inicio. En caso de que la autenticación falle, se mostrará un mensaje de error adecuado al usuario.

## Entregables

El repositorio contiene los siguientes archivos:

1. `login.php`: Archivo PHP que contiene el formulario de inicio de sesión y la lógica de autenticación. En este archivo se realiza la validación de los datos ingresados por el usuario y se verifica si corresponden a un usuario válido en la base de datos.

2. `session.php`: Archivo PHP que maneja la creación y gestión de sesiones. Este archivo se encarga de iniciar la sesión cuando la autenticación es exitosa y redirigir al usuario a la página de inicio.

3. `inicio.php`: Archivo PHP que muestra la página de inicio después de la autenticación exitosa. En este archivo se muestra un mensaje de bienvenida al usuario.

## Funcionamiento del sistema de login

El sistema de login implementado utiliza PHP y sesiones para autenticar a los usuarios en una aplicación web. El proceso de autenticación consta de los siguientes pasos:

1. El usuario accede al formulario de inicio de sesión, donde debe ingresar su nombre de usuario y contraseña.

2. Al enviar el formulario, se realiza la validación de los datos ingresados. Se verifica si el usuario y la contraseña corresponden a un usuario válido almacenado en la base de datos.

3. Si la autenticación es exitosa, se inicia una sesión para el usuario y se redirige a la página de inicio. En la página de inicio se muestra un mensaje de bienvenida con el nombre de usuario.

4. En caso de que la autenticación falle, se muestra un mensaje de error indicando que los datos ingresados son incorrectos.

Es importante destacar que se han seguido buenas prácticas de seguridad, como validar y filtrar los datos ingresados por el usuario, así como utilizar consultas preparadas para prevenir ataques de inyección SQL.


Emilio Ñacato y Sebastian Falconi