# RCD-T1-G4 Hola
Trabajo 1: Web Services SOAP/ REST

Integrantes : Alex Pino Moya, Vicente Gallegos Muñoz, Martin Martínez Allende, Diego Pizarro Soto, Felipe Jerez Alvarez.

Grupo N°4 

Objetivo:
Construir un web Service SOAP y un Web Service Rest, que incluyan los 2 métodos descritos más abajo. Adicionalmente, deberá construirse un Cliente para cada uno de los 2 servicios antes solicitados. El lenguaje programación usado para construir los Servicios debe ser distinto del usado para construir los Clientes, además los lenguajes usados para construir ambos servicios, también deben ser diferentes entre sí. Como apoyo para la validación de los servicios, se sugiere utilizar alguna herramienta para consumir los servicios como SOAP UI, REST Client, u otro.

Métodos a Implementar:
VALIDADOR DÍGITO VERIFICADOR: El método debe recibir la parte entera de un rut y un dígito verificador (por ejemplo 12345678; K) como campos separados y devolver como respuesta un indicador de si el dígito verificador entregado es o no correcto para el rut en cuestión (considerar algoritmo de dígito verificador usado en Chile).

“SPLIT” NOMBRE PROPIO: El método debe recibir un nombre completo (nombres y apellidos, separados por espacio); se asume que siempre vienen primero los nombres y luego los apellidos (paterno y luego materno), considerando que una persona puede tener uno o más nombres. El método debe devolver una estructura jerárquica como la descrita a continuación:

* Nombres:
  - Nombre 1
  - Nombre 2
 
* Apellidos:
  - Apellido Materno
  - Apellido Paterno

Considerar:
  - Los nombres de los campos antes descritos son referenciales, pudiendo ser modificados si asi lo desea (por ejemplo, “nombres” en vez de “Nombres”).
  - La estructura “Nombres” debe ser un arreglo de varios elementos, donde cada elemento debe ser del mismo tipo (y por ende, nombre) que el resto.

El cliente que consume debe ser una aplicación web, cuya construcción evidencie una separación por capas en su arquitectura. Es decir, al menos se debe ver una capa de presentación y una capa de servicios. Adicionalmente, podrían aparecer capas de utilitarios, funciones de wrapping de terceros, etc.
