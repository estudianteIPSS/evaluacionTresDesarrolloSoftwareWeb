<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use OpenApi\Attributes as OA;

class ProjectController extends Controller
{
    /**
     * Listar los proyectos del usuario autenticado.
     */
    #[OA\Get(
        path: '/api/projects',
        tags: ['Proyectos'],
        summary: 'Listar proyectos',
        description: 'Obtiene todos los proyectos pertenecientes al usuario autenticado.',
        security: [['bearerAuth' => []]],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Lista de proyectos',
                content: new OA\JsonContent(
                    type: 'array',
                    items: new OA\Items(
                        properties: [
                            new OA\Property(property: 'id', type: 'integer', example: 1),
                            new OA\Property(property: 'nombre', type: 'string', example: 'Sistema Web'),
                            new OA\Property(property: 'fecha_inicio', type: 'string', format: 'date', example: '2026-09-10'),
                            new OA\Property(property: 'estado', type: 'string', example: 'En progreso'),
                            new OA\Property(property: 'responsable', type: 'string', example: 'Juan Pérez'),
                            new OA\Property(property: 'monto', type: 'number', format: 'float', example: 1500000),
                            new OA\Property(property: 'created_by', type: 'integer', example: 1),
                            new OA\Property(property: 'created_at', type: 'string', format: 'date-time'),
                            new OA\Property(property: 'updated_at', type: 'string', format: 'date-time'),
                        ]
                    )
                )
            ),
            new OA\Response(
                response: 401,
                description: 'No autenticado'
            )
        ]
    )]
    public function index(): JsonResponse
    {
        $projects = Project::where(
            'created_by',
            auth('api')->id()
        )->get();

        return response()->json($projects);
    }

    /**
     * Crear un proyecto.
     */
    #[OA\Post(
        path: '/api/projects',
        tags: ['Proyectos'],
        summary: 'Crear proyecto',
        description: 'Crea un nuevo proyecto asociado al usuario autenticado.',
        security: [['bearerAuth' => []]],
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                required: ['nombre', 'fecha_inicio', 'estado', 'responsable', 'monto'],
                properties: [
                    new OA\Property(property: 'nombre', type: 'string', example: 'Sistema de Gestión'),
                    new OA\Property(property: 'fecha_inicio', type: 'string', format: 'date', example: '2026-09-10'),
                    new OA\Property(property: 'estado', type: 'string', example: 'En progreso'),
                    new OA\Property(property: 'responsable', type: 'string', example: 'Juan Pérez'),
                    new OA\Property(property: 'monto', type: 'number', format: 'float', example: 1500000),
                ]
            )
        ),
        responses: [
            new OA\Response(
                response: 201,
                description: 'Proyecto creado correctamente'
            ),
            new OA\Response(
                response: 422,
                description: 'Datos de entrada inválidos'
            ),
            new OA\Response(
                response: 401,
                description: 'No autenticado'
            )
        ]
    )]
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'fecha_inicio' => ['required', 'date'],
            'estado' => ['required', 'string', 'max:255'],
            'responsable' => ['required', 'string', 'max:255'],
            'monto' => ['required', 'numeric', 'min:0'],
        ]);

        // El usuario viene del JWT, no del cliente.
        $validated['created_by'] = auth('api')->id();

        $project = Project::create($validated);

        return response()->json($project, 201);
    }

    /**
     * Obtener un proyecto por ID.
     */
    #[OA\Get(
        path: '/api/projects/{project}',
        tags: ['Proyectos'],
        summary: 'Obtener proyecto por ID',
        description: 'Obtiene un proyecto específico por su identificador.',
        security: [['bearerAuth' => []]],
        parameters: [
            new OA\Parameter(
                name: 'project',
                description: 'ID del proyecto',
                in: 'path',
                required: true,
                schema: new OA\Schema(type: 'integer'),
                example: 1
            )
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Proyecto encontrado'
            ),
            new OA\Response(
                response: 401,
                description: 'No autenticado'
            ),
            new OA\Response(
                response: 403,
                description: 'Sin permiso para acceder al proyecto'
            ),
            new OA\Response(
                response: 404,
                description: 'Proyecto no encontrado'
            )
        ]
    )]
    public function show(Project $project): JsonResponse
    {
        $this->authorizeProject($project);

        return response()->json($project);
    }

    /**
     * Actualizar un proyecto.
     */
    #[OA\Put(
        path: '/api/projects/{project}',
        tags: ['Proyectos'],
        summary: 'Actualizar proyecto',
        description: 'Actualiza los datos de un proyecto existente.',
        security: [['bearerAuth' => []]],
        parameters: [
            new OA\Parameter(
                name: 'project',
                description: 'ID del proyecto',
                in: 'path',
                required: true,
                schema: new OA\Schema(type: 'integer'),
                example: 1
            )
        ],
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                properties: [
                    new OA\Property(property: 'nombre', type: 'string', example: 'Sistema actualizado'),
                    new OA\Property(property: 'fecha_inicio', type: 'string', format: 'date', example: '2026-09-10'),
                    new OA\Property(property: 'estado', type: 'string', example: 'Finalizado'),
                    new OA\Property(property: 'responsable', type: 'string', example: 'Juan Pérez'),
                    new OA\Property(property: 'monto', type: 'number', format: 'float', example: 2000000),
                ]
            )
        ),
        responses: [
            new OA\Response(
                response: 200,
                description: 'Proyecto actualizado correctamente'
            ),
            new OA\Response(
                response: 401,
                description: 'No autenticado'
            ),
            new OA\Response(
                response: 403,
                description: 'Sin permiso para modificar el proyecto'
            ),
            new OA\Response(
                response: 404,
                description: 'Proyecto no encontrado'
            ),
            new OA\Response(
                response: 422,
                description: 'Datos de entrada inválidos'
            )
        ]
    )]
    #[OA\Patch(
        path: '/api/projects/{project}',
        tags: ['Proyectos'],
        summary: 'Actualizar parcialmente un proyecto',
        description: 'Actualiza parcialmente los datos de un proyecto existente.',
        security: [['bearerAuth' => []]],
        parameters: [
            new OA\Parameter(
                name: 'project',
                description: 'ID del proyecto',
                in: 'path',
                required: true,
                schema: new OA\Schema(type: 'integer'),
                example: 1
            )
        ],
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                properties: [
                    new OA\Property(property: 'nombre', type: 'string', example: 'Sistema actualizado'),
                    new OA\Property(property: 'fecha_inicio', type: 'string', format: 'date', example: '2026-09-10'),
                    new OA\Property(property: 'estado', type: 'string', example: 'Finalizado'),
                    new OA\Property(property: 'responsable', type: 'string', example: 'Juan Pérez'),
                    new OA\Property(property: 'monto', type: 'number', format: 'float', example: 2000000),
                ]
            )
        ),
        responses: [
            new OA\Response(
                response: 200,
                description: 'Proyecto actualizado correctamente'
            ),
            new OA\Response(
                response: 404,
                description: 'Proyecto no encontrado'
            )
        ]
    )]
    public function update(
        Request $request,
        Project $project
    ): JsonResponse {
        $this->authorizeProject($project);

        $validated = $request->validate([
            'nombre' => ['sometimes', 'required', 'string', 'max:255'],
            'fecha_inicio' => ['sometimes', 'required', 'date'],
            'estado' => ['sometimes', 'required', 'string', 'max:100'],
            'responsable' => ['sometimes', 'required', 'string', 'max:255'],
            'monto' => ['sometimes', 'required', 'numeric', 'min:0'],
        ]);

        $project->update($validated);

        return response()->json($project);
    }

    /**
     * Eliminar un proyecto.
     */
    #[OA\Delete(
        path: '/api/projects/{project}',
        tags: ['Proyectos'],
        summary: 'Eliminar proyecto',
        description: 'Elimina un proyecto existente.',
        security: [['bearerAuth' => []]],
        parameters: [
            new OA\Parameter(
                name: 'project',
                description: 'ID del proyecto',
                in: 'path',
                required: true,
                schema: new OA\Schema(type: 'integer'),
                example: 1
            )
        ],
        responses: [
            new OA\Response(
                response: 204,
                description: 'Proyecto eliminado correctamente'
            ),
            new OA\Response(
                response: 401,
                description: 'No autenticado'
            ),
            new OA\Response(
                response: 403,
                description: 'Sin permiso para eliminar el proyecto'
            ),
            new OA\Response(
                response: 404,
                description: 'Proyecto no encontrado'
            )
        ]
    )]
    public function destroy(Project $project): Response
    {
        $this->authorizeProject($project);

        $project->delete();

        return response()->noContent();
    }

    /**
     * Verificar que el proyecto pertenezca al usuario autenticado.
     */
    private function authorizeProject(Project $project): void
    {
        abort_unless(
            (int) $project->created_by === (int) auth('api')->id(),
            403,
            'No tienes permiso para acceder a este proyecto.'
        );
    }
}