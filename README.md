 Sistema de Gestión de Usuarios - Técnica Impulsora
Este proyecto es una aplicación web desarrollada con Laravel 10 que permite la administración de usuarios con roles de Administrador y Coordinador. Los usuarios pueden registrarse, iniciar sesión y gestionar información de manera eficiente.
 Tecnologías Utilizadas
•	Backend: PHP 8 con Laravel 10
•	Base de Datos: MySQL en Railway
•	Frontend: Bootstrap 4
•	Autenticación: Laravel Breeze con roles y permisos
•	Servidor Local: Laragon
•	Control de Versiones: Git y GitHub
________________________________________
 Configuración del Proyecto 1. Clonar el repositorio
Ejecuta el siguiente comando en la terminal:
    git clone https://github.com/devilador/tecnica-impulsora.git
    cd tecnica-impulsora
2. Instalar dependencias
Asegúrate de que tienes Composer instalado y ejecuta:
    composer install
3. Configurar variables de entorno
Copia el archivo de configuración .env.example y renómbralo a .env:
    cp .env.example .env
Luego, actualiza las siguientes variables en el archivo .env para conectar la base de datos:
DB_CONNECTION=mysql
DB_PORT= puerto de base de datos
DB_DATABASE= nobre base de datos
DB_USERNAME= usuario base de datos
DB_PASSWORD= contraseña base de datos
4. Generar la clave de aplicación
Ejecuta el siguiente comando para generar una clave única:
    php artisan key:generate
5. Ejecutar las migraciones y poblar la base de datos
    php artisan migrate --seed
Esto creará las tablas y generará datos de prueba.
________________________________________
Ejecución del Proyecto
 1. Iniciar el servidor local
Ejecuta el siguiente comando para correr Laravel en modo local:
    php artisan serve
Accede a la aplicación desde tu navegador en:
    http://127.0.0.1:8000
________________________________________
 Credenciales de Prueba
Puedes usar estas credenciales para probar el sistema:
 Administrador:
 admin@test.com
 password: 123456789
 Coordinador: 
 coordinador@test.com
 password: 123456789
________________________________________
 Funciones Implementadas
Registro e inicio de sesión con Laravel Breeze
Autenticación con roles (Administrador y Coordinador)
Panel de administración de usuarios
Creación, edición y eliminación de usuarios
Interfaz estilizada con Bootstrap 4
________________________________________
 Estructura del Proyecto
📂 tecnica-impulsora
 ├── 📂 app/Http/Controllers  # Controladores
 ├── 📂 app/Models            # Modelos de base de datos
 ├── 📂 database/migrations   # Migraciones de la BD
 ├── 📂 resources/views       # Vistas Blade
 ├── 📂 routes/web.php        # Rutas de la aplicación
 ├── 📂 public                # Archivos públicos
 ├── .env                     # Configuración del entorno
 ├── composer.json            # Dependencias de PHP
 ├── package.json             # Dependencias de JS
 └── README.md                # Instrucciones del proyecto
________________________________________


Despliegue en Producción
Para desplegar en un servidor real, puedes utilizar Railway Pasos recomendados:
1.	Configurar .env con credenciales de producción
2.	Subir cambios con Git
3.	Ejecutar php artisan migrate --force
4.	Usar php artisan config:cache
________________________________________
