# 🏢 Ferretería Corcino - Página Web

Página web informativa profesional para la Ferretería Corcino con formulario de contacto.

---

## 📋 Tabla de Contenidos

1. [Descripción General](#descripción-general)
2. [Requisitos](#requisitos)
3. [Estructura del Proyecto](#estructura-del-proyecto)
4. [Instalación](#instalación)
5. [Características](#características)
6. [Uso](#uso)
7. [Solución de Problemas](#solución-de-problemas)

---

## 📖 Descripción General

Esta es una página web responsiva e informativa para la Ferretería Corcino que incluye:

- **Página Principal**: Información sobre la empresa
- **Secciones**: Misión, Visión, Valores
- **Galería de Productos**: Muestra de 4 categorías principales
- **Formulario de Contacto**: Funcional con validación
- **Diseño Responsivo**: Compatible con todos los dispositivos
- **Diseño Moderno**: Colores coordinados (Verde, Azul, Rojo)
- **Alarmas Visuales**: Notificaciones de envío con sonido y animaciones

---

## 🔧 Requisitos

- **PHP** 7.4 o superior
- **Servidor Web**: Apache, Nginx o similar
- **Bootstrap** 5.2.3 (incluido en el proyecto)
- **Navegador moderno** con JavaScript habilitado

---

## 📂 Estructura del Proyecto

```
proyectoFinalMiaYJohanny/
│
├── index.php                          ← Página principal
├── config.php                         ← Configuración de conexión BD
├── procesar_contacto.php              ← Procesa el formulario
├── bootstrap-5.2.3-dist/              ← Framework CSS Bootstrap
│   ├── css/
│   └── js/
└── README.md                          ← Este archivo
```

### Descripción de Archivos

| Archivo | Descripción |
|---------|-------------|
| `index.php` | Página principal con HTML, CSS y lógica de visualización |
| `config.php` | Archivo de configuración de conexión a la base de datos |
| `procesar_contacto.php` | Script PHP que procesa el formulario y lo guarda en la BD |
| `bootstrap-5.2.3-dist/` | Carpeta con CSS y JS de Bootstrap |

---

## 🗄️ Configuración de la Base de Datos

### Credenciales de Conexión

```
Host: localhost
Usuario: root
Contraseña: root
Base de Datos: ferreteriaCorcino2
Puerto: 3306 (predeterminado)
```

### Estructura de la Tabla `contactos`

```
┌──────────────┬──────────────┬──────────┬──────────────────────────┐
│ Campo        │ Tipo         │ Nulo     │ Descripción              │
├──────────────┼──────────────┼──────────┼──────────────────────────┤
│ id           │ INT          │ No       │ ID único (autoincremental)
│ nombre       │ VARCHAR(100) │ No       │ Nombre del cliente       │
│ email        │ VARCHAR(100) │ No       │ Correo electrónico       │
│ telefono     │ VARCHAR(20)  │ No       │ Número de teléfono       │
│ asunto       │ VARCHAR(150) │ No       │ Asunto del mensaje       │
│ mensaje      │ LONGTEXT     │ No       │ Contenido del mensaje    │
│ fecha_envio  │ DATETIME     │ No       │ Fecha/hora automática    │
└──────────────┴──────────────┴──────────┴──────────────────────────┘
```

---

## 🚀 Instalación

### Paso 1: Copiar Archivos

Copia todos los archivos del proyecto a tu carpeta web:
- **XAMPP**: `C:\xampp\htdocs\proyectoFinalMiaYJohanny\`
- **WAMP**: `C:\wamp\www\proyectoFinalMiaYJohanny\`
- **LAMP**: `/var/www/html/proyectoFinalMiaYJohanny/`

### Paso 2: Crear la Base de Datos

#### Opción A: phpMyAdmin

1. Abre phpMyAdmin: `http://localhost/phpmyadmin`
2. Haz clic en la pestaña **SQL**
3. Copia y pega el código de la sección [Códigos SQL](#códigos-sql) más abajo
4. Haz clic en **Ejecutar**

#### Opción B: Línea de Comandos

```bash
# En Windows (CMD o PowerShell)
mysql -h localhost -u root -proot < script.sql

# En Mac/Linux
mysql -h localhost -u root -proot < script.sql
```

#### Opción C: MySQL Workbench

1. Abre MySQL Workbench
2. Ve a **File → Open SQL Script**
3. Selecciona el archivo con el script SQL
4. Haz clic en **Execute**

### Paso 3: Verificar la Instalación

1. Abre tu navegador
2. Ve a: `http://localhost/proyectoFinalMiaYJohanny/`
3. Deberías ver la página principal de la ferretería

---

## ✨ Características

### Frontend

✅ **Diseño Responsivo**
- Compatible con dispositivos móviles, tablets y escritorio
- Breakpoints Bootstrap: xs, sm, md, lg, xl, xxl

✅ **Navbar Sticky**
- Barra de navegación que permanece en la parte superior
- Enlaces de navegación suave
- Efecto hover en los enlaces

✅ **Hero Section**
- Sección principal atractiva
- Gradiente de colores (Verde, Azul, Rojo)
- Botón CTA (Contáctanos)

✅ **Secciones de Información**
- Misión, Visión y Valores con tarjetas
- Galería de 4 productos
- Información de contacto en el footer

✅ **Formulario de Contacto**
- 5 campos: Nombre, Email, Teléfono, Asunto, Mensaje
- Validación en cliente (HTML5)
- Validación en servidor (PHP)
- Conectado a base de datos MySQL
- Mensajes de éxito/error
- Alarmas visuales con animaciones
- Notificaciones de sonido post-envío
- Notificaciones de escritorio

### Backend

✅ **Conexión a Base de Datos**
- Conexión segura a MySQL
- Sanitización de datos
- Prevención de SQL Injection

✅ **Procesamiento de Formulario**
- Validación de campos
- Sanitización de entrada
- Almacenamiento en BD
- Redirección con mensajes de confirmación

✅ **Gestión de Errores**
- Manejo de excepciones
- Mensajes de error claros
- Logs de errores

---

## 📝 Uso

### Enviar un Mensaje de Contacto

1. Navega a la sección "Contacto" de la página
2. Completa los siguientes campos:
   - **Nombre Completo**: Tu nombre
   - **Correo Electrónico**: Tu email válido
   - **Teléfono**: Tu número de teléfono
   - **Asunto**: Asunto de tu consulta
   - **Mensaje**: Tu mensaje

3. Haz clic en "Enviar Mensaje"

4. Si todo es correcto:
   - Verás un mensaje de éxito
   - Los datos se guardarán en la BD
   - Serás redirigido a la página principal

5. Si hay error:
   - Verás un mensaje de error
   - Podrás corregir los datos e intentar nuevamente

### Ver los Mensajes en la Base de Datos

1. Abre phpMyAdmin: `http://localhost/phpmyadmin`
2. Selecciona la base de datos: `ferreteriaCorcino2`
3. Haz clic en la tabla: `contactos`
4. Verás todos los mensajes enviados

---

## 💾 Códigos SQL

### 📌 Crear la Base de Datos

```sql
CREATE DATABASE IF NOT EXISTS ferreteriaCorcino2 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;
```

### 📌 Crear la Tabla de Contactos

```sql
CREATE TABLE IF NOT EXISTS contactos (
    id INT AUTO_INCREMENT PRIMARY KEY COMMENT 'ID único del contacto',
    nombre VARCHAR(100) NOT NULL COMMENT 'Nombre completo del cliente',
    email VARCHAR(100) NOT NULL COMMENT 'Correo electrónico',
    telefono VARCHAR(20) NOT NULL COMMENT 'Número de teléfono',
    asunto VARCHAR(150) NOT NULL COMMENT 'Asunto del mensaje',
    mensaje LONGTEXT NOT NULL COMMENT 'Contenido del mensaje',
    fecha_envio DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora del envío',
    INDEX idx_email (email) COMMENT 'Índice para búsquedas por email',
    INDEX idx_fecha (fecha_envio) COMMENT 'Índice para búsquedas por fecha'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci 
COMMENT='Tabla para almacenar contactos y consultas de clientes';
```

### 📌 SCRIPT COMPLETO (Ejecuta esto)

```sql
-- ========================================================================
-- FERRETERÍA CORCINO 2 - SCRIPT SQL COMPLETO
-- ========================================================================

-- Crear la Base de Datos
CREATE DATABASE IF NOT EXISTS ferreteriaCorcino2 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

-- Usar la base de datos
USE ferreteriaCorcino2;

-- Crear la tabla de contactos
CREATE TABLE IF NOT EXISTS contactos (
    id INT AUTO_INCREMENT PRIMARY KEY COMMENT 'ID único del contacto',
    nombre VARCHAR(100) NOT NULL COMMENT 'Nombre completo del cliente',
    email VARCHAR(100) NOT NULL COMMENT 'Correo electrónico',
    telefono VARCHAR(20) NOT NULL COMMENT 'Número de teléfono',
    asunto VARCHAR(150) NOT NULL COMMENT 'Asunto del mensaje',
    mensaje LONGTEXT NOT NULL COMMENT 'Contenido del mensaje',
    fecha_envio DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora del envío',
    INDEX idx_email (email) COMMENT 'Índice para búsquedas por email',
    INDEX idx_fecha (fecha_envio) COMMENT 'Índice para búsquedas por fecha'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci 
COMMENT='Tabla para almacenar contactos y consultas de clientes';

-- ========================================================================
-- FIN DEL SCRIPT
-- ========================================================================
```

---

## 🎨 Colores Utilizados

La página utiliza una paleta de colores coordinada:

```css
--verde-principal: #2d7a3e      /* Verde oscuro */
--verde-claro: #3d9a4e         /* Verde claro */
--azul-principal: #0066cc      /* Azul profesional */
--azul-oscuro: #004a99         /* Azul oscuro */
--rojo-principal: #e63946      /* Rojo moderno */
--gris-fondo: #f8f9fa          /* Gris claro */
--gris-texto: #555             /* Gris oscuro */
```

### Uso de Colores por Sección

- **Navbar**: Gradiente Verde → Azul
- **Hero**: Gradiente Verde → Azul → Rojo
- **Misión**: Borde superior verde
- **Visión**: Borde superior azul
- **Valores**: Borde superior rojo
- **Productos**: Gradientes variados
- **Contacto**: Gradiente Verde → Azul (fondo)
- **Footer**: Verde principal

---

## 🔐 Seguridad

### Medidas Implementadas

✅ **Sanitización de Datos**
- Los datos se escapan antes de insertarse en la BD
- Se previene SQL Injection

✅ **Validación de Datos**
- Validación en cliente (HTML5)
- Validación en servidor (PHP)
- Validación de formato de email

✅ **Manejo de Errores**
- Los errores se capturan y manejan apropiadamente
- Se evita exponer información sensible

### Mejoras Futuras Recomendadas

⚠️ **Para Producción:**

1. **Usar Prepared Statements** en lugar de `real_escape_string()`
   ```php
   $stmt = $conexion->prepare("INSERT INTO contactos (nombre, email, ...) VALUES (?, ?, ...)");
   $stmt->bind_param("ss...", $nombre, $email, ...);
   $stmt->execute();
   ```

2. **HTTPS** - Usar certificado SSL/TLS

3. **Rate Limiting** - Limitar envíos de formularios por IP

4. **CAPTCHA** - Agregar validación CAPTCHA al formulario

5. **Logs** - Mantener logs de errores y transacciones

6. **Backup** - Realizar backups periódicos de la BD

---

## 🐛 Solución de Problemas

### Problema: "Error al conectar a la base de datos"

**Solución:**
1. Verifica que MySQL esté corriendo
2. Verifica las credenciales en `config.php`
3. Verifica que la base de datos existe
4. En phpMyAdmin, ve a **Usuarios** y verifica los permisos

### Problema: "Tabla contactos no existe"

**Solución:**
1. Ejecuta el script SQL de la sección [Códigos SQL](#códigos-sql)
2. En phpMyAdmin, selecciona la BD `ferreteriaCorcino2`
3. Verifica que la tabla `contactos` existe

### Problema: El formulario no envía mensaje

**Solución:**
1. Abre las herramientas de desarrollador (F12)
2. Ve a la pestaña "Console"
3. Verifica que no haya errores de JavaScript
4. Verifica que el archivo `procesar_contacto.php` existe
5. Abre `procesar_contacto.php` directamente para probar

### Problema: "No se pueden insertar datos en la BD"

**Solución:**
1. Verifica los permisos del usuario MySQL
2. Verifica que la tabla tiene los campos correctos
3. En phpMyAdmin, prueba insertar un registro manualmente
4. Revisa el archivo de logs del servidor

---

## 📞 Información de Contacto (Placeholder)

**Ferretería Corcino**

- 📍 Dirección: Calle Principal 123, Ciudad
- 📞 Teléfono: (555) 123-4567
- 📧 Email: info@ferreteria.com

⚠️ **NOTA**: Reemplaza estos datos con la información real de la ferretería

---

## 📋 Checklist de Configuración

- [ ] Archivos copiados a la carpeta web
- [ ] MySQL está ejecutándose
- [ ] Base de datos creada (ejecutar script SQL)
- [ ] Tabla `contactos` verificada en phpMyAdmin
- [ ] Archivo `config.php` con credenciales correctas
- [ ] Página `index.php` visible en el navegador
- [ ] Formulario funciona sin errores
- [ ] Mensajes se guardan en la BD
- [ ] Página responsiva en móvil

---

## 📄 Información del Proyecto

| Aspecto | Detalle |
|--------|---------|
| **Nombre** | Ferretería Corcino - Página Web |
| **Versión** | 1.0 |
| **Creado** | Mayo 2026 |
| **Licencia** | Todos los derechos reservados © 2024 Ferretería Corcino |
| **Framework** | Bootstrap 5.2.3 |
| **Base de Datos** | MySQL 5.7+ |
| **PHP** | 7.4+ |

---

## 📚 Recursos Útiles

- [Bootstrap Documentation](https://getbootstrap.com/docs/)
- [MySQL Documentation](https://dev.mysql.com/doc/)
- [PHP Manual](https://www.php.net/manual/)
- [HTML5 Form Validation](https://developer.mozilla.org/en-US/docs/Learn/Forms/Form_validation)

---

## ✅ Próximos Pasos (Futuras Mejoras)

- [ ] Agregar panel de administración
- [ ] Envío de emails de confirmación
- [ ] Sistema de autenticación
- [ ] Carrito de compras
- [ ] Página de productos detallada
- [ ] Sistema de opiniones/comentarios
- [ ] Blog o sección de noticias
- [ ] Integración con redes sociales
- [ ] Chat en vivo
- [ ] Búsqueda de productos

---

**Última actualización**: Mayo 2026

**Preguntas o problemas**: Consulta la sección [Solución de Problemas](#solución-de-problemas)
