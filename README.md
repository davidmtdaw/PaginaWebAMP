# wordpress-content — Repositorio auxiliar

Este es un repositorio auxiliar de WebFusion Digital S.L.
Es descargado automáticamente por el contenedor git-sync del proyecto principal.

## Estructura

```
wordpress-content/
└── wp-content/
    └── themes/
        └── webfusion/
            ├── style.css       ← Estilos + metadatos del tema
            ├── functions.php   ← Configuración del tema
            ├── index.php       ← Plantilla principal
            ├── header.php      ← Cabecera HTML
            └── footer.php      ← Pie de página HTML
```

## Cómo funciona

El contenedor git-sync del docker-compose.yml principal clona este repositorio
y copia la carpeta wp-content/ dentro de /var/www/html/ del contenedor WordPress.

Para activar el tema: Wordpress Admin -> Apariencia -> Temas -> WebFusion Digital -> Activar

## Actualizar el contenido

1. Edita un archivo PHP de este repositorio
2. Haz git push al repositorio
3. En el proyecto principal ejecutar:

```bash
vagrant provision
```

Los cambios se actualizan automáticamente en el Wordpress.
