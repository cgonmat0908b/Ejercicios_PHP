# PHP exercises · Server-side web development

[Español](README.md) · **English**

Exercises from **Server-side Web Development**, completed during my second year of the Web Application Development (DAW) vocational programme in Spain. This repository contains PHP practice and basic algorithms to strengthen my understanding of the language and problem solving.

## Contents

| Folder or file | Contents |
| --- | --- |
| [Relacion1](Relacion1/) | 21 files numbered 0–20: introductory examples, data structures and algorithms. |
| [Adicional](Adicional/) | One additional binary-to-decimal conversion exercise. |
| [index.php](index.php) | Local landing page linking to the exercises. |

File 0 is an introductory “Hello world” example; exercises 1–20 retain their original numbering and filenames. The examples use values defined in the source code.

## Exercise set 1

| No. | File | Contents |
| --- | --- | --- |
| 0 | [0Hola-mundo.php](Relacion1/0Hola-mundo.php) | First PHP program |
| 1 | [1hello-world.php](Relacion1/1hello-world.php) | Hello world, PHP version and dates |
| 2 | [2variables.php](Relacion1/2variables.php) | Scalar types and formatted output |
| 3 | [3superGlobales.php](Relacion1/3superGlobales.php) | Superglobals and server environment |
| 4 | [4arrays.php](Relacion1/4arrays.php) | Indexed arrays |
| 5 | [5arrayAsociativo.php](Relacion1/5arrayAsociativo.php) | Associative arrays and temperatures |
| 6 | [6claseFruta.php](Relacion1/6claseFruta.php) | Classes, objects, constructor, getter and setter |
| 7 | [7calculoNota.php](Relacion1/7calculoNota.php) | Average grade and absence penalty |
| 8 | [8arrayAsociativosParalelos.php](Relacion1/8arrayAsociativosParalelos.php) | Weighted average using parallel arrays |
| 9 | [9triangulos.php](Relacion1/9triangulos.php) | Triangle classification |
| 10 | [10ecuacionSegundo.php](Relacion1/10ecuacionSegundo.php) | Quadratic equations |
| 11 | [12notaATexto.php](Relacion1/12notaATexto.php) | Equations and special cases |
| 12 | [13factorial.php](Relacion1/13factorial.php) | Numeric grades to text |
| 13 | [14sumaNPrimeros.php](Relacion1/14sumaNPrimeros.php) | Factorial |
| 14 | [15esPrimo.php](Relacion1/15esPrimo.php) | Sum of the first natural numbers |
| 15 | [16lista-divisor.php](Relacion1/16lista-divisor.php) | Prime number check |
| 16 | [17calculoDivisionNaturales.php](Relacion1/17calculoDivisionNaturales.php) | Highlighted divisors in a list |
| 17 | [18maxComDivEuclides.php](Relacion1/18maxComDivEuclides.php) | Integer division by subtraction |
| 18 | [19decimalBinario.php](Relacion1/19decimalBinario.php) | Greatest common divisor using Euclid |
| 19 | [20binarioMejorado.php](Relacion1/20binarioMejorado.php) | Decimal to binary conversion |
| 20 | [11ecuaciones2.php](Relacion1/11ecuaciones2.php) | Decimal to binary, octal and hexadecimal conversion |

The additional exercise is [19incorrectoBinarioDecimalE.php](Adicional/19incorrectoBinarioDecimalE.php). Its original filename is preserved, although the array traversal has been corrected.

## Run locally

You need **64-bit PHP 8 or later** and a browser. Use Git to clone the repository, or download it as a ZIP file.

```bash
git clone https://github.com/cgonmat0908b/Ejercicios_PHP.git
cd Ejercicios_PHP
php -S localhost:8000
```

Open [http://localhost:8000](http://localhost:8000) and choose an exercise. You can also open [exercise 19](http://localhost:8000/Relacion1/19decimalBinario.php) directly.

Press `Ctrl+C` to stop the server. PHP files need an interpreter: opening them directly by double-clicking will not execute the code.

To try other cases, change an exercise's initial values and refresh the page. For example, in exercise 17, set the dividend to `16` and the divisor to `8` to test an exact division.

## Exercise notes

- Exercises 1 and 3 display PHP and server information as part of the assignment; run them in your local environment.
- Exercise 12 preserves the integer conversion: `4.99` becomes `4`.
- Exercise 13 accepts values from `0` to `20` to keep the factorial within the range of 64-bit integers.
- Exercise 18 uses Euclid's subtraction method; very unequal inputs can take longer than the remainder-based method.
- Source comments are in Spanish to match the classes; the general documentation is also available in English.

## Author

**Cristian González Mateo** · [GitHub profile](https://github.com/cgonmat0908b) · [Contact](mailto:cgonmat0908b@g.educaand.es)
