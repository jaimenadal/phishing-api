# 🛡️ Phishing Detection API – Laravel Minimal Project

## 🚀 Descripción

Este proyecto es una **API de prueba para detección básica de URLs de phishing**, creada con Laravel 11 y PHP 8.4.  

El objetivo es demostrar la capacidad de:

- Crear **APIs REST** siguiendo buenas prácticas de Laravel.  
- Validar entradas del usuario de forma segura.  
- Usar **Redis** para cache de resultados.  
- Implementar **testing automatizado** con PHPUnit.  
- Desplegar la aplicación de forma reproducible usando **Docker/Podman**.  

> Este proyecto es un ejemplo profesional pensado para mostrar habilidades backend, ideal para candidatos que provienen de un perfil Linux Sysadmin.

## 📦 Estructura del proyecto

```text
phishing-api/
├── app/
│   └── Http/
│       └── Controllers/
│           └── ScanController.php    # Lógica principal de la API
│   └── Providers/                    # Service providers de Laravel
├── routes/
│   ├── api.php                       # Rutas de la API (Endpoints)
│   └── web.php                       # Rutas web mínimas
├── tests/
│   └── Feature/
│       └── ScanTest.php              # Pruebas automáticas de integración
├── Dockerfile                        # Definición de imagen del contenedor
├── docker-compose.yml                # Orquestación de servicios (App, DB, Redis)
├── composer.json                     # Dependencias del proyecto
└── README.md                         # Documentación

```

## ⚙️ Tecnologías usadas

- **Laravel 11** – Framework PHP moderno  
- **PHP 8.4** – Tipado estricto  
- **Redis** – Cache de resultados  
- **MySQL 8** – Base de datos relacional  
- **Docker / Podman** – Entorno reproducible y portátil  
- **PHPUnit** – Testing automatizado de endpoints  
- **Git** – Control de versiones  

---

## 🛠️ Levantar el proyecto

1. Clonar el repositorio:

git clone jaimenadal/phishing-api
cd phishing-api


2. Construir y levantar los contenedores:

podman-compose up --build


Esto levantará:

Contenedor app con Laravel

Contenedor mysql con base de datos

Contenedor redis para cache

La API estará disponible en:

http://localhost:8000

📌 Endpoints
POST /api/v1/scan

Descripción: Analiza una URL y devuelve un resultado básico de phishing.


```json

Body JSON de ejemplo:
{
  "url": "http://fake.com"
}


Respuesta esperada:

{
  "url": "http://fake.com",
  "is_phishing": true,
  "score": 90
}

```
is_phishing → true si la URL contiene indicios de phishing (simulación)

score → valor numérico de riesgo (simulado)

Actualmente la detección es simbólica y fácilmente ampliable a análisis real.

🧪 Testing automatizado

Se incluyen tests de Feature para comprobar la API:

php artisan test


Tests incluidos:

URL sospechosa → is_phishing: true

URL segura → is_phishing: false

## 💡 Buenas prácticas demostradas

- Uso de **controllers** en lugar de closures en rutas
- Validación de **inputs** del usuario
- Uso de **Redis** para cache de resultados y optimización de performance
- Endpoint **versionado** (/v1/scan) para futuras mejoras
- **Testing automatizado** para endpoints clave
- Despliegue reproducible con **Docker/Podman**

---

## 🔧 Próximos pasos sugeridos

- Reemplazar lógica de simulación con análisis real de phishing (heurísticas o API externas)
- Añadir **autenticación** y **rate-limiting**
- Implementar **logging y métricas**
- Versionado avanzado de API (/v2/scan)
