# 🚗 Sistema de Gestión de Automotora - CloudSolutions SPA

Este repositorio contiene una solución completa de CRUD (Crear, Leer, Actualizar, Eliminar) para el inventario de una automotora, diseñada para ser desplegada en **AWS EC2** mediante **Docker**.

---

##  Arquitectura del Proyecto
La aplicación utiliza una arquitectura de microservicios contenerizados:
* **Frontend/Backend:** PHP 8.2 con Apache y Bootstrap 5.
* **Base de Datos:** PostgreSQL 15 con persistencia de datos.
* **Infraestructura:** AWS EC2 (Ubuntu 24.04 LTS).

---

##  Guía de Despliegue (Paso a Paso)

Sigue estos pasos en orden para levantar el proyecto.

### 1. Configuración de la Instancia AWS
* Cree una instancia **EC2 t2.micro** con **Ubuntu Server 24.04**.
* En el **Security Group**, abra los puertos:
    * `22 (SSH)`: Restringido a su IP.
    * `80 (HTTP)`: Abierto a todo el mundo (`0.0.0.0/0`).
* Se recomienda aumentar el tamaño de disco a 15 o 20 gb.

### 2. Instalación Limpia de Docker y Compose
Para evitar el error de "build unknown" o versiones obsoletas, ejecute estos comandos uno por uno en su terminal de Ubuntu:

```bash
# Actualizar sistema y remover versiones viejas
sudo apt-get update
sudo apt-get remove docker-compose -y

# Instalar motor de Docker
sudo apt-get install docker.io -y

# Descargar la versión más reciente de Docker Compose (v2+)
sudo curl -L "[https://github.com/docker/compose/releases/latest/download/docker-compose-$](https://github.com/docker/compose/releases/latest/download/docker-compose-$)(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

# Dar permisos y crear enlace directo
sudo chmod +x /usr/local/bin/docker-compose
sudo ln -sf /usr/local/bin/docker-compose /usr/bin/docker-compose

# Configurar permisos de usuario (para no usar 'sudo' en docker)
sudo usermod -aG docker ubuntu
newgrp docker

# Clonar el proyecto (asegúrese de estar en la carpeta personal ~/ )
cd ~
git clone https://github.com/cristianZkn/proyecto-cloud-automotriz.git
cd proyecto-cloud-automotriz

# Construir y levantar
docker-compose up -d --build
