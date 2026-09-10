# Sistema de Gestión de Proyectos Tech Solutions 

El proyecto fue desarrollado usando el esqueleto y base de los 
controladores fue creado como parte de la Unidad 1 y los modelos fueron creados como parte de la 
unidad 2

---

## 1. Tecnologías utilizadas

* **PHP 8.5+**
* **Laravel 13**
* **SQLite**
* **Eloquent ORM**
* **Laravel Blade**
* **Tailwind CSS**
* **Vite**
* **JWT (JSON Web Token)**
* **Composer**
* **Node.js / npm**
* **L5-Swagger / OpenAPI**

---

## 2. Requerimientos del sistema

Para ejecutar el proyecto se requiere tener instalado:

* PHP 8.5 o compatible con Laravel 13
* Composer
* Node.js
* npm
* Extensión SQLite para PHP
* Git

Se recomienda utilizar las versiones actuales y estables de estas herramientas compatibles con Laravel 13.

---

# 3. Funcionalidades

El sistema permite:

* Registrar usuarios.
* Iniciar sesión mediante interfaz web.
* Cerrar sesión.
* Crear proyectos.
* Visualizar proyectos.
* Editar proyectos.
* Eliminar proyectos.
* Consultar el valor de la UF.
* Separar los proyectos según el usuario autenticado.
* Proteger las rutas web mediante middleware de autenticación.
* Proteger las rutas API mediante middleware JWT.
* Autenticar usuarios mediante JWT en la API.
* Registrar usuarios mediante la API.
* Crear y administrar proyectos mediante la API.
* Validar los datos recibidos.
* Cifrar las contraseñas antes de almacenarlas.
* Autorizar el acceso a los proyectos mediante Policies.
* Documentar y probar la API mediante Swagger/OpenAPI.

---

# 4. Arquitectura general

La aplicación utiliza Laravel siguiendo una arquitectura basada en:

```text
Usuario
   │
   │ 1:N
   ▼
Proyecto
```

Cada proyecto posee un campo:

```text
created_by
```

Este campo corresponde al `id` del usuario que creó el proyecto.

La relación se representa de la siguiente manera:

```text
users
────────────────────
id
name
email
password
────────────────────
        │
        │
        │ 1:N
        ▼
projects
────────────────────
id
nombre
fecha_inicio
estado
responsable
monto
created_by
────────────────────
```

Por lo tanto, un usuario puede tener múltiples proyectos, mientras que cada proyecto pertenece a un único usuario.

---

# 5. Estructura principal del proyecto

```text
app/
├── Http/
│   ├── Controllers/
│   │   ├── AuthController.php
│   │   ├── ProjectController.php
│   │   ├── ProjectPageController.php
│   │   └── WebAuthController.php
│   │
│   └── Middleware/
│       └── JwtMiddleware.php
│
├── Models/
│   ├── User.php
│   └── Project.php
│
├── Policies/
│   └── ProjectPolicy.php
│
├── Services/
|   └── UfService.php
|
└── Swagger/
    └── OpenApiSpec.php

database/
├── migrations/
└── seeders/
    └── DatabaseSeeder.php

resources/
├── css/
├── js/
└── views/
    ├── components/
    ├── layouts/
    └── pages/

routes/
├── api.php
└── web.php

config/
├── auth.php
├── l5-swagger.php
└── ...

.env.example
composer.json
package.json
artisan
```

---

# 6. Instalación

## 6.1. Clonar o Descargar el repositorio

```bash
git clone https://github.com/estudianteIPSS/evaluacionTresDesarrolloSoftwareWeb.git
cd "carpeta del repositorio"
```

---

## 6.2. Instalar dependencias de PHP

```bash
composer install
```

Esto instalará las dependencias definidas en `composer.json` y `composer.lock`.

---

## 6.3. Instalar dependencias de JavaScript

```bash
npm install
```

---

# 7. Configuración del entorno

El archivo `.env` no se incluye en el repositorio debido a que contiene configuraciones específicas del entorno y secretos.

Crear el archivo `.env` a partir del archivo de ejemplo.

### Windows PowerShell

```powershell
Copy-Item .env.example .env
```

### Linux / macOS

```bash
cp .env.example .env
```

---

# 8. Generar la clave de Laravel

Ejecutar:

```bash
php artisan key:generate
```

Esto generará automáticamente una nueva variable:

```env
APP_KEY=...
```

No es necesario utilizar la clave del entorno de desarrollo original.

---

# 9. Configuración de SQLite

El proyecto utiliza **SQLite** como motor de base de datos.

La configuración esperada es:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/desarrollo_software_1.sqlite
```

Crear el archivo de base de datos:

### Windows PowerShell

```powershell
New-Item database/desarrollo_software_1.sqlite -ItemType File
```

### Linux / macOS

```bash
touch database/desarrollo_software_1.sqlite
```

La base de datos no necesita ser incluida en el repositorio, ya que puede ser reconstruida mediante las migraciones y el Seeder.

---

# 10. Configuración de JWT

El proyecto utiliza JWT para la autenticación de la API.

En el archivo `.env` debe existir:

```env
JWT_ALGO=HS256
JWT_SECRET=
```

Generar un nuevo secreto JWT utilizando:

```bash
php artisan jwt:secret
```

Esto generará automáticamente el valor de `JWT_SECRET`.

El secreto JWT es específico de cada instalación y no debe ser publicado en el repositorio.

---

# 11. Crear la base de datos

Una vez configurado SQLite y JWT, ejecutar:

```bash
php artisan migrate:fresh --seed
```

Este comando:

1. Elimina las tablas existentes.
2. Ejecuta todas las migraciones.
3. Crea las tablas necesarias.
4. Ejecuta `DatabaseSeeder`.
5. Crea un usuario inicial.
6. Crea tres proyectos asociados al usuario inicial.

---

# 12. Datos iniciales

El `DatabaseSeeder` crea automáticamente el siguiente usuario:

```text
Nombre: root
Correo: admi@tech.com
Contraseña: desarrollo_software_1
```

También crea tres proyectos asociados a este usuario.

### Proyectos iniciales

```text
1. Sistema de Gestión de Proyectos
   Estado: En desarrollo
   Responsable: Eduardo
   Monto: $1.500.000

2. Plataforma Web Corporativa
   Estado: Pendiente
   Responsable: Eduardo
   Monto: $2.800.000

3. Aplicación de Control de Inventario
   Estado: En desarrollo
   Responsable: Eduardo
   Monto: $3.200.000
```

El campo `created_by` de cada proyecto corresponde al `id` del usuario creado por el Seeder.

---

# 13. Compilar los recursos frontend

Ejecutar:

```bash
npm run build
```

Esto compila los recursos utilizados por Vite y Tailwind CSS.

---

# 14. API REST

La aplicación incorpora una API REST protegida mediante autenticación **JWT**.

## Rutas de proyectos

| Método | Ruta | Descripción | Respuesta |
| ------ | ---- | ----------- | --------- |
| GET | `/api/projects` | Obtiene los proyectos del usuario autenticado | 200 |
| POST | `/api/projects` | Crea un proyecto | 201 |
| GET | `/api/projects/{project}` | Obtiene un proyecto por ID | 200 / 404 |
| PUT/PATCH | `/api/projects/{project}` | Actualiza un proyecto | 200 / 404 |
| DELETE | `/api/projects/{project}` | Elimina un proyecto | 204 / 404 |

Las rutas de proyectos requieren un token JWT válido mediante:

```text
Authorization: Bearer {token}
```

# 15. Documentación y pruebas mediante Swagger

La API está documentada mediante OpenAPI utilizando L5-Swagger.

Generar la documentación con:

```bash
php artisan l5-swagger:generate
```

Iniciar el servidor:

```bash
composer run dev
```
Swagger UI estará disponible en:

```bash
http://127.0.0.1:8000/api/documentation
```
## Obtener token JWT mediante Postman

Para probar los endpoints protegidos de la API, primero se debe obtener un token JWT mediante el endpoint de inicio de sesión.

En Postman crear una solicitud:

```text
POST http://127.0.0.1:8000/api/login
```
En Body → raw → JSON, ingresar:

```bash
{
    "email": "admi@tech.com",
    "password": "desarrollo_software_1"
}
```

La API devolverá una respuesta similar a:

```text
{
    "message": "Inicio de sesión correcto.",
    "token": "eyJ...",
    "token_type": "Bearer"
}
```

Copiar el valor de token y utilizarlo para autenticar las solicitudes protegidas.

## Para probar los endpoints protegidos:

Obtener el token JWT.
Seleccionar Authorize en Swagger.
Ingresar el token.
Ejecutar los endpoints de la API.

# 16. Evidencia de pruebas

Las pruebas de la API fueron realizadas mediante Swagger UI.

## Endpoints y pruebas realizadas

|Prueba	|Método	|Resultado
| ------ | ---- | ---------- |
|Crear proyecto	|POST	|201
|Obtener proyectos	|GET	|200
|Obtener proyecto por ID	|GET	|200
|ID inexistente	|GET	|404
|Actualizar proyecto	|PUT/PATCH	|200
|Eliminar proyecto	|DELETE	|204
|ID inexistente	|PUT/PATCH/DELETE	|404

## Las capturas de evidencia se encuentran en:

docs/evidencias/

Incluyen las pruebas principales de creación, consulta, actualización, eliminación y manejo de IDs inexistentes.


Esta versión es suficiente: **documenta la API, explica cómo abrir Swagger y deja constancia de las pruebas sin convertir el README en el informe de la evaluación.**
