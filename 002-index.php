<?php

echo 'Con comillas simples puedes utilizar una linea
    o también mas de una linea,
    escapo comilla simple \' y backslash \\ con el backslash \\
    las variables se toman como texto, no nos muestran su valor $numero1
';

echo "<br>";

$nombre = "Alexander";

echo "mi nombre es $nombre y con comillas dobles pude imprimir mi variable nombre";

echo "<br>";

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

echo "imprimir variables complejas osea mas de un nivel en un array por ejemplo utilizar llaves {} {$courses['backend'][0]}";

echo "<br>";

class User {
    public $name = 'Alexander';
}

$user = new User;

echo "$user->name Quiere aprender php (ejemplo imprimiendo una variable de acceso simple como la propiedad de un objeto solo se usa ->, si tiene mas niveles utilizar llaves {})";

$array_courses = [
    'backend' => 'PHP'
];

echo "<br>";

echo "imprimiendo un array con clave especifica {$array_courses['backend']}, tambien tenemos que usar llaves {}";


echo "<hr>";
echo "<hr>";
echo "Entendiendo variables variables <br>";

$teacher = 'italo';
$italo = 'Profesor de PHP';

echo "$teacher es ${$teacher}";
echo "<br>";
function getTeacher() {
    return 'teacher';
}

echo "{${getTeacher()}} enseña PHP";

