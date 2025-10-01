# 📘 Resumen de Comandos Podman

## 🔹 Manejo de contenedores

-   **Listar contenedores en ejecución**

    ``` bash
    podman ps
    ```

    > Añade `-a` para ver todos, incluso los detenidos:

    ``` bash
    podman ps -a
    ```

-   **Detener un contenedor**

    ``` bash
    podman stop <container_id|nombre>
    ```

-   **Iniciar un contenedor detenido**

    ``` bash
    podman start <container_id|nombre>
    ```

-   **Eliminar un contenedor**

    ``` bash
    podman rm <container_id|nombre>
    ```

    > Si quieres eliminar todos los contenedores detenidos:

    ``` bash
    podman rm $(podman ps -aq)
    ```

------------------------------------------------------------------------

## 🔹 Manejo de imágenes

-   **Listar imágenes**

    ``` bash
    podman images
    ```

-   **Eliminar una imagen**

    ``` bash
    podman rmi <image_id|nombre:tag>
    ```

    > Eliminar todas las imágenes no usadas:

    ``` bash
    podman image prune
    ```

------------------------------------------------------------------------

## 🔹 Construcción y ejecución

-   **Construir una imagen desde un `Dockerfile`**

    ``` bash
    podman build -t mi_imagen:latest .
    ```

-   **Ejecutar un contenedor**

    ``` bash
    podman run -it --name mi_contenedor mi_imagen:latest
    ```

------------------------------------------------------------------------

## 🔹 Ejecutar comandos dentro de un contenedor

-   **Abrir un bash en un contenedor en ejecución**

    ``` bash
    podman exec -it <container_id|nombre> bash
    ```

    > Si no tiene `bash`, puedes usar `sh`.

------------------------------------------------------------------------

## 🔹 Podman Compose (docker-compose equivalente)

-   **Levantar servicios definidos en un `docker-compose.yaml` o
    `podman-compose.yaml`**

    ``` bash
    podman-compose up -d
    ```

-   **Detener los servicios**

    ``` bash
    podman-compose down
    ```

-   **Ver logs**

    ``` bash
    podman-compose logs
    ```

------------------------------------------------------------------------

## 🔹 Tips útiles

-   **Ver logs de un contenedor específico**

    ``` bash
    podman logs <container_id|nombre>
    ```

-   **Inspeccionar un contenedor o imagen**

    ``` bash
    podman inspect <container_id|image_id>
    ```

-   **Ver estadísticas de uso**

    ``` bash
    podman stats
    ```
    
## Crear contenedores con php y apache
### Crear Apache
docker run -dit --name my-apache-app -p 8080:80 -v "$PWD":/usr/local/apache

### Crear Apache con PHP
docker run -dit --name my-running-script -v "$PWD":/var/www/html -p 8081:80 php:8.4-rc-apache
