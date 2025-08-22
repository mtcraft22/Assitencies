# Assitencies

**Programa de control d’assistència** per a escoles i instituts, desenvolupat en **software lliure**.

## Descripció

Assitencies és una aplicació web destinada a facilitar el procés de passar llista en entorns escolars. Està estructurada per a ser fàcil d'adaptar i d'utilitzar, amb una interfície senzilla i funcionalitats essencials per a la gestió d'assistència.

## Estructura del projecte

- **client/** — Conté el codi frontend (HTML, CSS, JavaScript).
- **estils/** — Fulls d’estil CSS per a la presentació visual.
- **media/** — Arxius multimèdia (imatges, icones…).
- **servidor/** — Backend i lògica del servidor (PHP, connexions, lògica de control d’assistència).
- **BBDD 31-3-23 (ben fet).sql** — Script SQL per crear/omplir la base de dades (data: 31 de març de 2023).
- **composer.json** — Gestor de dependències de PHP.
- **enviarPDF.php** — Script per generar i enviar un PDF (possiblement amb la llista d'assistència).

## Requisits

- Servei web compatible amb **PHP** (versió recomanada).
- **MySQL** (o similar) per executar el script SQL de la BBDD.
- **Composer** per gestionar dependències PHP (si s’utilitza).

## Instal·lació i configuració

1. Clona el repositori:
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
