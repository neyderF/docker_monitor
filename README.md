# Monitor del sistema

Este contenedor permite generar una página html la cual es usada para monitorizar los recursos del servidor en el que se encuentre, la información presentada en la página html incluye:

*  El uso de disco por directorios montados
*  La cantidad de memoria ram libre
*  El uso del procesador
*  El estado los demás contenedores

Esta imagen está basada en [Apache HTTP Server](https://hub.docker.com/_/httpd) por lo que la página generada se encuentra expuesta en la red.

## ¿Cómo usar esta imagen?

Para que los contenedores creados a partir de esta imagen funcionen correctamente es necesario realizar una configuración en el servidor ya que este es quien debe proporcionar la información al contenedor.

### Paso 1

Ejecutar el siguiente comando para crear el contenedor. Tener en cuenta  que el directorio del servidor especificado al crear el volumen debe poder ser modificable. 

```shell
docker run -dit --name mi-monitor -p 80:80 -v "/home/<nombre_usuario>/monitor":/usr/local/apache2/htdocs/ systemMonitor:v1
```
### Paso 2

Ejecutar el siguiente comando el cual copiara los archivos necesarios para generar la página html en el volumen compartido, esto se hace con el fin de que el usuario pueda ejecutar el script maestro desde el servidor.

```shell
docker exec -d mi-monitor cp -a /usr/local/apache2/tmp/. /usr/local/apache2/htdocs/
```
### Paso 3

En el servidor en la ruta  `/home/<nombre_usuario>/monitor` ubicar el archivo `monitor.sh` y ejecutarlo. En caso de no tener permisos de ejecución se le debe proporcionar con el comando `chmod +x monitor.sh`
```shell
./monitor.sh
```
Si todo va bien, al dirigirse a la dirección http://localhost:80 podrá ver la página html con la información del sistema.

Descargar los archivos alojados en [Este Repositorio](https://github.com/neyderF/docker_monitor), tras descomprimir el archivo deberá ver una estructura de carpetas como la siguiente:
```shell
├── ...
├── monitor                    # Test files (alternatively `spec` or `tests`)
│   ├── generated          # Load and stress tests
│   ├── temp-part1.html         # End-to-end, integration tests (alternatively `e2e`)
│   ├── temp-part2.html         # End-to-end, integration tests (alternatively `e2e`)
│   └── monitor.sh               # Script que genera
└── ...
```
* [Windows](https://docs.docker.com/windows/started)
* [OS X](https://docs.docker.com/mac/started/)
* [Linux](https://docs.docker.com/linux/started/)

### Usage

#### Container Parameters

List the different parameters available to your container

```shell
docker run give.example.org/of/your/container:v0.2.1 parameters
```

One example per permutation 

```shell
docker run give.example.org/of/your/container:v0.2.1
```

Show how to get a shell started in your container too

```shell
docker run give.example.org/of/your/container:v0.2.1 bash
```

#### Environment Variables

* `VARIABLE_ONE` - A Description
* `ANOTHER_VAR` - More Description
* `YOU_GET_THE_IDEA` - And another

#### Volumes

* `/your/file/location` - File location

#### Useful File Locations

* `/some/special/script.sh` - List special scripts
  
* `/magic/dir` - And also directories

## Built With

* List the software v0.1.3
* And the version numbers v2.0.0
* That are in this container v0.3.2

## Find Us

* [GitHub](https://github.com/your/repository)
* [Quay.io](https://quay.io/repository/your/docker-repository)

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the 
[tags on this repository](https://github.com/your/repository/tags). 

## Autores

* **Neyder Figueroa** - *Software developer* - [Ver más](https://github.com/neyderF)
* **Jean Michael Mendoza** - *Software developer* - [Ver más](https://github.com/maik1998)

