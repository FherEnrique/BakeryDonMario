<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Bakery Don Mario :bread:

_Creación de un aplicación una panadería desarrollada en Laravel 8 con buenas prácticas de programación y con un patrón de diseño Template Method y Factory Method además de implementar una arquitectura de software MVC por parte del Framework._

### Prerequisitos de instalación 📋

_Para poder hacer uso de la aplicación y de la modificicación del código es necesario tener instalado las siguientes herramientas:_

- [PHPStorm - IDE](https://www.jetbrains.com/es-es/phpstorm/).
- [PHP v7.4](https://www.php.net/downloads)
- [Composer v2.1](https://getcomposer.org/download/)
- [NodeJS v15.11, NPM 7.x.x - Windows](https://nodejs.org/es/download/)
- [NVM v15.11, NPM 7.x.x - Linux](https://github.com/nvm-sh/nvm)
- [Laravel 8.x](https://laravel.com/docs/8.x/installation)

## Guía de Instalación 💻

Asegurarse que tenga instalado los prerequisitos solicitados.

Ejecutar el comando para clonar el proyecto.

```bash
git clone https://github.com/FherEnrique/BakeryDonMario.git
```

### IMPORTANTE :bulb:

Cambiar el nombre del archivo ".env.e" a ".env".

Ejecutar el siguiente comando para generar la carpeta llamada "vendor".

```bash
composer install
```

Luego ejecutar el siguiente comando para instalar y configurar TailwindCSS.

```bash
npm install
```
### Generación de la base de datos :card_file_box:

Agregar las credenciales de la base de datos en el archivo llamado ".env" y crear la base de datos llamada "vendetodo".

Luego ejecutar el comando para las migraciones y la generación de los datos con los factories de laravel.

```bash
php artisan migrate --seed
```

Y por último ejecutar el comando para todo el funcionamiento del proyecto

```bash
php artisan serve
```

## Autores ✒️

EQUIPO DE SCRUM :busts_in_silhouette:
=======================================
1. Stakeholder
----------------------------------------------
- Alexander Alberto Siguenza

2. Product owner
----------------------------------------------
- Fher Enrique Climaco Escamilla

3. Scrum master
----------------------------------------------
- Mario Josué Beltrán García

4. Team
-----------------------------------------------
- José Samuel Mena
- German Alexander Meléndez Serrano

## Licencia 📄

MIT License
===================

Copyright (c) 2021 Bakery Don Mario
-------------------------------------------------

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


