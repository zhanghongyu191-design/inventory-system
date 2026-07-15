# Inventory System - Development Setup

## Environment

- Frontend: Next.js
- Backend: Laravel 13
- Database: PostgreSQL 17
- PHP: 8.4
- Docker Desktop

## Start Project

```bash
docker compose up -d
```

## Stop Project

```bash
docker compose down
```

## Rebuild Laravel Container

```bash
docker compose build --no-cache app
docker compose up -d
```

## Laravel

Enter container

```bash
docker exec -it inventory-app bash
```

Run migration

```bash
php artisan migrate
```

## Frontend

http://localhost:3000

## Backend API

http://localhost:8000

## Nginx

http://localhost:8080