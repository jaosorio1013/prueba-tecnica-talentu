# Prueba Técnica Talentu para desarrolladores PHP Backend

## Setup inicial

1. Agregar al archivo **hosts** `127.0.0.1    prueba-tecnica-talentu.local`
2. Para arrancar el proyecto ejecutar `docker-compose up -d --build nginx`
3. Cuando se encuentren disponibles los contenedores ejecutar:
    - `docker-compose run --rm composer install`
    - `docker-compose run --rm artisan key:generate`

### En caso de realizar modificaciones en la configuración de nginx o php
Ejecutar el comando `docker-compose up -d --build nginx`

## Tener en cuenta

- [ ] Autenticación utilizando JWT
- [ ] En un endpoint REST queremos almacenar registros de tipo usuario
- [ ] En otro endpoint queremos almacenar registros de tipo Oferta Laboral
- [ ] Un endpoint REST que permita obtener todas las ofertas con candidatos asociados

### Consideraciones

- [ ] Instrucciones de despliegue para pruebas.
- [ ] Legibilidad del código.
- [ ] Cantidad de datos precargados para pruebas de performance (Seeders).
- [ ] Tests unitarios o integración.

### Bono

- [ ] Despliegue Dockerizado
- [ ] Github Actions
- [ ] Despliegue en cualquier entorno open source (Heroku)