# Prueba Técnica Talentu para desarrolladores PHP Backend

## Setup inicial

1. Agregar al archivo **hosts** `127.0.0.1    prueba-tecnica-talentu.local`
2. Crear el archivo de configuración `cp .env.example .env`
3. En caso de tener el puerto **3306** __(para mysql)__ ocupado agregar la variable `FORWARD_DB_PORT={PUERTO-MYSQL}` al archivo `.env`
4. En caso de tener el puerto **6379** __(para redis)__ ocupado agregar la variable `FORWARD_DB_PORT={PUERTO-REDIS}` al archivo `.env`
5. Para arrancar el proyecto ejecutar `docker-compose up -d --build nginx`
6. Cuando se encuentren disponibles los contenedores ejecutar:
    - `docker-compose run --rm composer install`
    - `docker-compose run --rm artisan key:generate`
    - `docker-compose run --rm artisan migrate:fresh --seed`

### En caso de realizar modificaciones en la configuración de nginx o php
Ejecutar el comando `docker-compose up -d --build nginx`

---
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

- [X] Despliegue Dockerizado
- [ ] Github Actions
- [ ] Despliegue en cualquier entorno open source (Heroku)