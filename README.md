# Asistencias

**Programa de control de asistencia** para escuelas e institutos, desarrollado en **software libre**.

## Descripción

Asistencias es una aplicación web destinada a facilitar el proceso de pasar lista en entornos escolares. Está estructurada para ser fácil de adaptar y de usar, con una interfaz sencilla y funcionalidades esenciales para la gestión de asistencia.

## Estructura del proyecto

- **client/** — Contiene el código frontend (HTML, CSS, JavaScript).  
- **estilos/** — Hojas de estilo CSS para la presentación visual.  
- **media/** — Archivos multimedia (imágenes, íconos…).  
- **servidor/** — Backend y lógica del servidor (PHP, conexiones, lógica de control de asistencia).  
- **BBDD 31-3-23 (bien hecho).sql** — Script SQL para crear/llenar la base de datos (fecha: 31 de marzo de 2023).  
- **composer.json** — Gestor de dependencias de PHP.  
- **enviarPDF.php** — Script para generar y enviar un PDF (posiblemente con la lista de asistencia).  

## Requisitos

- Servicio web compatible con **PHP** (versión recomendada).  
- **MySQL** (o similar) para ejecutar el script SQL de la base de datos.  
- **Composer** para gestionar dependencias PHP (si se utiliza).  

## Instalación y configuración

1. Clona el repositorio:  
   ```bash
   git clone https://github.com/mtcraft22/Assitencies.git
   cd Assitencies
   ```
2. Instalamos las dependencias
   ```
   composer install
   ```
3. Desde phpmyaadmin importamos la bbdd:
         1. Acede el entorno:
           ```https://[tu ip]:[tu puerto]/phpmyadmin```
         2. Creamos una bbdd llamada assistencies.
         3. Lego selecionmos la bbdd y en el menu de aariva selecionamos importar.
     4. En el paartaaado de seleción de archivo selecionmos el script sl provisto en este repositorio.
     5. I finalmente pulsmos el boton de importar situdo bjo de todo de la pagina.
4.Copimos la carpeta Assitencies en nuesto servidor web.
5. I podesmos aceder a la aplicación 
