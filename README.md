# Examen
## Instalación del servidor windows
1. Se crea una nueva maquina virtual
2. Se selecciona la imagen del sistema opertivo a instalar
3. Se define el tamaño del disco duro virtual
4. Se inicia la maquina virtual

![](images/0.png)
5. Se selecciona el idioma y la distribuición del teclado

![](images/1.png)
6. Se procede con la instalación

![](images/2.png)
7. Se selecciona la versión de a instalar `GUI`

![](images/3.png)
8. Aceptamos la licencia

![](images/4.png)
9. Seleccionamos la instalación personalizada

![](images/5.png)
10. Seleccionamos el disco duro virtual

![](images/6.png)
11. Se cargara la siguiente pantalla

![](images/7.png)

![](images/8.png)
12. Comenzara la copia de archivos

![](images/9.png)
13. Se reiniciara

![](images/10.png)
14. Definiremos contrase del administrador y contraseña

![](images/11.png)
15. procedemos a iniciar sesión

![](images/12.png)
16. Se iniciara windows

![](images/13.png)
## Instalación de XAMPP
1. Lo descargamos desde su página oficial
2. Lo ejecutamos como administrador
3. Nos pedira confirmación

![](images/14.png)
4. Procedera el asistente para la instalación

![](images/15.png)
3. Seleccionamos `next` repetidas veces hasta que termine la instalación
4. Ejecutamos XAMPP

![](images/16.png)
## Creación de un nuevo usuario
1. Abrimos el panel de control

![](images/17.png)
2. Seleccionamos cuentas de usuario

![](images/18.png)
3. Seleccionamos cuentas de usuario
4. Seleccionamos administrar otra cuenta

![](images/19.png)
5. Seleccionamos agregar una centa de usuario

![](images/20.png)
6. Llenamos los datos

![](images/21.png)
7. Cerramos sesión e inicamos con el que acabamos de crear

![](images/22.png)


![](images/23.png)
## Configuración de XAMPP
1. Abrimos XAMPP

![](images/24.png)
2. Seleccionamos el botón `config`

![](images/25.png)
3. Ahora seleccionamos `Service and Port Settings`

![](images/26.png)
4. Cambiamos los puertos de apache

![](images/27.png)
5. Seleccionamos MySQL y cambiamos el puerto

![](images/28.png)
6. Guardamos e inicimos los servicios

![](images/24-1.png)

![](images/29.png)

## Configuración de MySQL
1. Abrimos una ventada de cmd

![](images/30.png)
2. Nos dirgimos a la raiz con `cd ..`

![](images/31.png)
3. Ahora vamos a la siguiente direccion `cd xampp\mysql\bin`

![](images/32.png)
4. Cambiamos la clave del usuario root
con `mysqladmin.exe -u root`
5. Ahora inciamos sesión con la contraseña que acabamos de definir

![](images/33.png)
## Creación de la base de datos
1. En el prompt de MySQL ejecutamos el siguiente codigo:
  1. `create database folios;`
  2. `use folios;`
  3. `CREATE TABLE factura2(
“id” int(11) NOT NULL primary key auto_increment ,
“vendedor” varchar(50) DEFAULT NULL,
“folio” varchar(50) DEFAULT NULL,
“nombre” varchar(50) DEFAULT NULL,
“fichero” varchar(50) DEFAULT NULL,
“fecha” date DEFAULT NULL,
“log” date DEFAULT NULL
) ENGINE = MEMORY;`

![](images/33-1.png)
7. Una vez ejecutado esos comando mostramos que todo halla salido bien con el comando `show tables;`
8. Nos deberia aparecer los siguiente

![](images/34.png)

## Subiendo al servidor
1. Ejecutamos lo siguiente `C:\xampp\htdocs`

![](images/35.png)
2. Nos abirar una ventana en el explorador de archivos

![](images/36.png)
3. Creamos una nueva carpeta

![](images/37.png)
4. Dentro de la carpeta creamos una archivo llamado `index.php`

![](images/38.png)
5. Lo abrimos con algun editor de texto

![](images/39.png)
6. Añadimos el siguiente código:

![](images/index.php.png)
7. Guardamos
8. Deberia quedarnos así

![](images/40.png)
9. Abrimos el navegador y vamos a la siguiente dirección `http://localhost:8282/examen/`
10. Si todo salió bien deberiamos tener el siguiente mensaje

![](images/41.png)
##### Nota:
Mensaje esta repetido ya que se recargo la página, esto sucede si se recarga varias veces

![](images/42.png)
