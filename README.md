## Fundamentos y PHP moderno

Objetivo: sentar bases de ejecución en servidor, integración con lenguajes de marcas, formularios, sesiones, acceso a datos y pruebas, tal como recogen las programaciones y RA del módulo. Metodológicamente, se priorizan situaciones-problema y aprendizaje activo con verificación mediante plan de pruebas, en línea con las orientaciones pedagógicas oficiales.

- Contenidos: HTTP y arquitectura cliente/servidor; PHP 8.x (tipos, OOP, namespaces, excepciones); Composer y autoloading; plantillas básicas; formularios y validación; sesiones/cookies; acceso a datos con PDO y migraciones simples; seguridad básica (XSS, CSRF, inyección); testing con PHPUnit; despliegue básico en servidor web.

- Prácticas guiadas: CRUD con PHP y PDO; autenticación con sesiones; validación del lado servidor + mensajes en vistas; mini batería de pruebas funcionales; checklist de seguridad.

- Proyecto corto: una aplicación con generación dinámica de páginas, integración de marcas y consumo simple de un servicio externo para evidenciar RA sobre servicios y datos.

- Evaluación: rúbrica por RA con énfasis en “genera páginas dinámicas”, “integra lenguaje de marcas” y “verifica componentes mediante pruebas”.

## Laravel end-to-end

Objetivo: desarrollar una aplicación completa cubriendo rutas, controladores, vistas, ORM, validación, autenticación, colas, API Resources, pruebas y despliegue continuo, siguiendo itinerarios didácticos consolidados. Este bloque maximiza productividad y alineación con prácticas actuales de aprendizaje y roadmap profesional de Laravel.[Roadmap](https://laraveldaily.com/roadmap-learning-path)

- Contenidos: estructura y ciclo de vida; routing y controllers; Blade; validación y Form Requests; Eloquent (relaciones, scopes, resources/transformers); migraciones y seeders; auth (starter kits o Fortify); políticas y gates; colas y jobs; caching; API Resources y versionado; pruebas (Feature/HTTP); configuración por entorno; logging; documentación básica de endpoints.[Best resources](https://codecourse.com/articles/the-best-resources-to-learn-laravel-in-2025)

- Prácticas guiadas: CRUD completo con paginación y policies; autenticación y autorización por roles; carga de ficheros y almacenamiento; colas para notificaciones; API REST con Resources y pruebas HTTP.

- Proyecto integrador: producto end-to-end con vistas Blade y API pública para un front externo, incorporando migraciones, seeds, .env y pipeline de despliegue básico.

- Evaluación: rúbrica por funcionalidades, calidad (tests, validación, seguridad), documentación y despliegue; uso de roadmap por niveles para trazar progreso.

## Spring Boot APIs

Objetivo: diseñar y construir APIs REST robustas con enfoque enterprise, incorporando validación, JPA, seguridad y documentación OpenAPI, con prácticas de verificación contra especificación. Este bloque refuerza competencias de servicios web y pruebas de contrato, muy demandadas en desarrollo backend con Java.

- Contenidos: Spring Initializr y estructura; Spring Web y controladores REST; DTOs y Bean Validation; JPA/Hibernate, repositorios, paging/sorting; gestión de errores (ControllerAdvice); seguridad con Spring Security (auth básica/API keys o JWT); OpenAPI/Swagger UI con springdoc-openapi; pruebas con Spring Boot Test, REST Assured y validación contra especificación; consideraciones de rendimiento y empaquetado.[OpenAPI](https://www.baeldung.com/spring-rest-openapi-documentation)

- APIs reactivas con Spring Webflux

- Prácticas guiadas: especificación OpenAPI primero, generación de controladores y validación automática de requests/responses; CRUD con JPA y validación; seguridad mínima por endpoint; documentación navegable con Swagger UI.

- Mini proyecto: microservicio con endpoints versionados y suite de integración que valida contrato OAS en CI, demostrando consumo correcto y errores bien gestionados.

- Evaluación: rúbrica por diseño REST, completitud de documentación OAS, cobertura de pruebas y seguridad aplicada, siguiendo guías actuales de documentación y validación.
