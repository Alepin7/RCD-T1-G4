const { Router, json } = require("express")
const router = Router();

router.get('/', (req, res) => {
    res.json({ "Titulo": "Hola Mundo" });
});

// Consumiendo Nombre


router.get('/nombre', (req, res) => {
    var nombre = req.query.nombre;
    var aux = nombre.split(" ");
    console.log(aux);
    for (let i = 0; i < aux.length; i++) {
        for (let j = 0; j < aux[i].length; j++) {
            if (aux[i][j] === '_') {
                aux[i] = aux[i].replace('_', ' ');
                console.log(aux[i][j]);
            }

        }
    }


    if (aux.length <= 2) {
        console.log("parametro mal ingresado :c");

    } else {
        if (aux.length >= 3) {
            for (let i = 0, j = 1; i < (aux.length) - 2; i++, j++) {
                console.log("Nombre " + j + ": ", aux[i]);
            }
            for (let i = (aux.length) - 2, j = 1; i < aux.length; i++, j++) {
                console.log("Apellido " + j + ": ", aux[i]);
            }
        }
    }

    var json = {};


    if (aux.length <= 2) {
        res.json('Parametro mal ingresado');
    } else {
        if (aux.length >= 3) {
            for (let i = 0, j = 1; i < (aux.length) - 2; i++, j++) {
                json['Nombre ' + j] = aux[i];

            }
            json['Apellido Paterno'] = aux[aux.length - 2];
            json['Apellido Materno'] = aux[aux.length - 1];
        }

        res.json(json);
    }




})


// funcion de calculo de digito verificador // cambiar esto
/*
router.get('/rut', (req, res) => {
    var rutdv = req.query.rut;
    var aux = 0,
        multi = 2,
        largo = 0,
        suman = 0;
    aux = rutdv;
    largo = (aux.toString().length);
    console.log("largo:", largo);
    for (let i = 0; i < largo; i++) {
        if (multi == 8)
            multi = 2;
        suman += multi * (aux % 10);
        aux /= 10;
        aux = Math.trunc(aux);
        multi++;
    }
    console.log(suman);
    var explo = suman / 11;
    console.log(explo);
    explo = Math.trunc(explo);
    console.log(explo);
    explo *= 11;
    console.log(explo);
    explo = suman - explo;
    console.log(suman);
    suman = 11 - explo;
    console.log(suman);
    if (suman == 10) {
        suman = 'k';
        res.json({ "rut": rutdv + "-" + suman });


    } else if (suman == 11) {
        suman = 0;
        res.json({ "rut": rutdv + "-" + suman });


    } else {
        res.json({ "rut": rutdv + "-" + suman });
    }


})

*/

router.get('/rut', (req, res) => {

    var rutdv = req.query.rut;
    var datos = rutdv.split("-")
    console.log( datos[0] )
    console.log( datos[1] )
       var aux = 0,
           multi = 2,
           largo = 0,
           suman = 0;
       aux = datos[0];
       largo = (aux.toString().length);
       console.log("largo:", largo);
       for (let i = 0; i < largo; i++) {
           if (multi == 8)
               multi = 2;
           suman += multi * (aux % 10);
           aux /= 10;
           aux = Math.trunc(aux);
           multi++;
       }
       console.log(suman);
       var explo = suman / 11;
       console.log(explo);
       explo = Math.trunc(explo);
       console.log(explo);
       explo *= 11;
       console.log(explo);
       explo = suman - explo;
       console.log(suman);
       suman = 11 - explo;
       console.log(suman);
       if (suman == 10) {
           suman = 'k';
           if (suman == datos[1]){
               res.json("el digito verificador es correcto");
           if (suman != datos[1])
               res.json("el digito verificador es inorrecto");
           }
   
   
       } else if (suman == 11) {
           suman = 0;
           if (suman == datos[1]){
               res.json("el digito verificador es correcto");
           if (suman != datos[1])
               res.json("el digito verificador es inorrecto");
           }
       }
       if (suman == datos[1]) {
           res.json("El Digito Verificador es Valido");
                   }
        if (suman != datos[1]) {
            res.json("El Digito Verificador es Incorrecto");
            }

})

module.exports = router;