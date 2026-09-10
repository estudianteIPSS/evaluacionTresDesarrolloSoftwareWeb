<?php

namespace App\Swagger;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: '1.0.0',
    title: 'Tech Solutions - API de Gestión de Proyectos',
    description: 'API REST para la gestión de proyectos de Tech Solutions.'
)]
#[OA\Server(
    url: 'http://127.0.0.1:8000',
    description: 'Servidor local de desarrollo'
)]
#[OA\Tag(
    name: 'Proyectos',
    description: 'Operaciones relacionadas con la gestión de proyectos'
)]
#[OA\Tag(
    name: 'Autenticación',
    description: 'Registro e inicio de sesión de usuarios'
)]
#[OA\SecurityScheme(
    securityScheme: 'bearerAuth',
    type: 'http',
    scheme: 'bearer',
    bearerFormat: 'JWT'
)]
class OpenApiSpec
{
}