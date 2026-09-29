# Ejercicios de PHP · DWES

**Español** · [English](README.en.md)

Ejercicios de **Desarrollo Web en Entorno Servidor**, realizados durante mi segundo curso de Desarrollo de Aplicaciones Web (DAW). El repositorio recoge prácticas de PHP y algoritmos básicos para afianzar el lenguaje y la resolución de problemas.

## Contenido

| Carpeta o archivo | Contenido |
| --- | --- |
| [Relacion1](Relacion1/) | 21 archivos numerados del 0 al 20: ejemplos iniciales, estructuras de datos y algoritmos. |
| [Adicional](Adicional/) | Una práctica complementaria de conversión de binario a decimal. |
| [index.php](index.php) | Portada local con enlaces a los ejercicios. |

El archivo 0 es una introducción «Hola mundo»; los ejercicios 1–20 conservan su numeración y sus nombres. Los ejemplos utilizan valores definidos en el propio código.

## Índice de la relación 1

| Nº | Archivo | Contenido |
| --- | --- | --- |
| 0 | [0Hola-mundo.php](Relacion1/0Hola-mundo.php) | Primer programa |
| 1 | [1hello-world.php](Relacion1/1hello-world.php) | Hello world, versión y fechas |
| 2 | [2variables.php](Relacion1/2variables.php) | Tipos escalares y salida formateada |
| 3 | [3superGlobales.php](Relacion1/3superGlobales.php) | Variables superglobales y entorno del servidor |
| 4 | [4arrays.php](Relacion1/4arrays.php) | Arrays indexados |
| 5 | [5arrayAsociativo.php](Relacion1/5arrayAsociativo.php) | Arrays asociativos y temperaturas |
| 6 | [6claseFruta.php](Relacion1/6claseFruta.php) | Clases, objetos, constructor, getter y setter |
| 7 | [7calculoNota.php](Relacion1/7calculoNota.php) | Media de notas y penalización por faltas |
| 8 | [8arrayAsociativosParalelos.php](Relacion1/8arrayAsociativosParalelos.php) | Media ponderada con arrays paralelos |
| 9 | [9triangulos.php](Relacion1/9triangulos.php) | Clasificación de triángulos |
| 10 | [10ecuacionSegundo.php](Relacion1/10ecuacionSegundo.php) | Ecuaciones de segundo grado |
| 11 | [12notaATexto.php](Relacion1/12notaATexto.php) | Ecuaciones y casos especiales |
| 12 | [13factorial.php](Relacion1/13factorial.php) | Calificaciones numéricas a texto |
| 13 | [14sumaNPrimeros.php](Relacion1/14sumaNPrimeros.php) | Factorial |
| 14 | [15esPrimo.php](Relacion1/15esPrimo.php) | Suma de los primeros números naturales |
| 15 | [16lista-divisor.php](Relacion1/16lista-divisor.php) | Comprobación de números primos |
| 16 | [17calculoDivisionNaturales.php](Relacion1/17calculoDivisionNaturales.php) | Divisores destacados en un listado |
| 17 | [18maxComDivEuclides.php](Relacion1/18maxComDivEuclides.php) | División entera mediante restas |
| 18 | [19decimalBinario.php](Relacion1/19decimalBinario.php) | Máximo común divisor por Euclides |
| 19 | [20binarioMejorado.php](Relacion1/20binarioMejorado.php) | Conversión decimal a binario |
| 20 | [11ecuaciones2.php](Relacion1/11ecuaciones2.php) | Conversión decimal a binario, octal y hexadecimal |

La práctica adicional está en [19incorrectoBinarioDecimalE.php](Adicional/19incorrectoBinarioDecimalE.php). Se conserva su nombre original, aunque su recorrido del array ya está corregido.

## Ejecutar en local

Necesitas **PHP 8 o superior, de 64 bits**, y un navegador. Git permite clonar el repositorio; también puedes descargarlo como ZIP.

```bash
git clone https://github.com/cgonmat0908b/Ejercicios_PHP.git
cd Ejercicios_PHP
php -S localhost:8000
```

Abre [http://localhost:8000](http://localhost:8000) y selecciona un ejercicio. También puedes abrir directamente [el ejercicio 19](http://localhost:8000/Relacion1/19decimalBinario.php).

Para detener el servidor, pulsa `Ctrl+C`. Los archivos PHP necesitan un intérprete: abrirlos directamente con doble clic no ejecuta su código.

Para probar otros casos, cambia los valores iniciales de un ejercicio y recarga la página. Por ejemplo, en el ejercicio 17 puedes cambiar el dividendo a `16` y el divisor a `8` para comprobar una división exacta.

## Notas de las prácticas

- Los ejercicios 1 y 3 muestran información de PHP y del servidor como parte de la práctica; ejecútalos en tu entorno local.
- El ejercicio 12 conserva la conversión a entero: `4.99` se convierte en `4`.
- El ejercicio 13 admite valores de `0` a `20` para mantener el factorial dentro del rango de enteros de 64 bits.
- El ejercicio 18 utiliza la variante por restas de Euclides; con números muy desiguales puede tardar más que la variante por restos.
- Los comentarios están en español, siguiendo el contexto de las clases; la documentación general también está disponible en inglés.

## Autor

**Cristian González Mateo** · [Perfil de GitHub](https://github.com/cgonmat0908b) · [Contacto](mailto:cgonmat0908b@g.educaand.es)
