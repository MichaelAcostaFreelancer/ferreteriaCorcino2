# Ferretería Corcino 2 - Documentación del Proyecto

Este documento describe la implementación actual de la página web de la Ferretería Corcino 2 en La Culata.

---

## 🎨 Maqueta y Estructura

La maqueta del sitio está contenida en `index.php` y sigue la siguiente estructura visual y de contenido:

- **Navbar**: logotipo y enlaces a secciones internas.
- **Hero principal**: título, texto descriptivo y botones de llamada a la acción.
- **Sección Quiénes Somos**: tarjetas con misión, valores y servicio principal.
- **Sección Productos y Servicios**: tarjetas de servicios ferreteros.
- **Galería**: imágenes del local tomadas de la carpeta `images/`.
- **Formulario de Contacto**: campos para nombre, email, teléfono, asunto y mensaje.
- **Ficha de información**: detalles de contacto, horario y redes sociales.
- **Footer**: datos básicos de la ferretería y enlaces de navegación.

---

## 🧩 Tecnologías utilizadas

- **HTML5**
- **CSS3** (estilos inline en `index.php`)
- **PHP**
- **Bootstrap 5.2.3**
- **Bootstrap Icons**
- **MySQL**

---

## 📁 Estructura del proyecto

```
proyectoFinalMiaYJohanny/
│
├── index.php                 ← Página principal con la maqueta y estilo
├── config.php                ← Configuración de conexión a la base de datos
├── procesar_contacto.php     ← Lógica de envío y guardado del formulario
├── style.css                 ← Estilos adicionales opcionales
├── bootstrap-5.2.3-dist/     ← Librería Bootstrap local
├── images/                   ← Imágenes del local y logo
└── README.md                 ← Documentación del proyecto
```

---

## 🧠 Documentación del código

### `index.php`

- Contiene el HTML de la página principal.
- Define estilos CSS inline para el diseño visual.
- Usa Bootstrap para la estructura responsiva.
- Incluye secciones para hero, información, servicios, galería y contacto.
- Carga imágenes desde `images/`.
- Presenta el logo `images/logo.png` en el navbar.

### `config.php`

- Contiene la configuración de la conexión a MySQL.
- Define host, usuario, contraseña y nombre de la base de datos.
- Se utiliza desde `procesar_contacto.php` para conectar al servidor.

### `procesar_contacto.php`

- Recibe datos del formulario vía `POST`.
- Realiza validación y sanitización básica de los campos.
- Inserta los registros en la tabla `contactos` de la base de datos.
- Redirige a `index.php` con un estado de éxito o error.

---

## 🚀 Uso actual

1. Colocar el proyecto en el servidor web local.
2. Configurar `config.php` con las credenciales de MySQL.
3. Asegurarse de que la base de datos y la tabla de contactos existen.
4. Abrir `index.php` en el navegador.
5. Completar y enviar el formulario de contacto.

---

## ✅ Checklist de documentación

- [ ] Explicar la maqueta y estructura en `index.php`
- [ ] Documentar el uso de imágenes en `images/`
- [ ] Describir la configuración de la base de datos en `config.php`
- [ ] Detallar el funcionamiento de `procesar_contacto.php`
- [ ] Incluir la estructura de archivos del proyecto

---

## 📌 Observaciones

Este README describe únicamente lo que está implementado actualmente en el proyecto y la estructura de los archivos.

**Última actualización:** Mayo 2026
