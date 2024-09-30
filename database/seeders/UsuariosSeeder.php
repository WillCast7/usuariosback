<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        DB::table('usuarios')->insert([
            [
                "nombre" => "Juan Pérez",
                "usuario" => "jperez",
                "correo" => "jperez@example.com",
                "telefono" => 3001234567
            ],
            [
                "nombre" => "María Gómez",
                "usuario" => "mgomez",
                "correo" => "mgomez@example.com",
                "telefono" => 3001234568
            ],
            [
                "nombre" => "Carlos Martínez",
                "usuario" => "cmartinez",
                "correo" => "cmartinez@example.com",
                "telefono" => 3001234569
            ],
            [
                "nombre" => "Ana López",
                "usuario" => "alopez",
                "correo" => "alopez@example.com",
                "telefono" => 3001234570
            ],
            [
                "nombre" => "Pedro González",
                "usuario" => "pgonzalez",
                "correo" => "pgonzalez@example.com",
                "telefono" => 3001234571
            ],
            [
                "nombre" => "Laura Rodríguez",
                "usuario" => "lrodriguez",
                "correo" => "lrodriguez@example.com",
                "telefono" => 3001234572
            ],
            [
                "nombre" => "Jorge Ramírez",
                "usuario" => "jramirez",
                "correo" => "jramirez@example.com",
                "telefono" => 3001234573
            ],
            [
                "nombre" => "Paula Fernández",
                "usuario" => "pfernandez",
                "correo" => "pfernandez@example.com",
                "telefono" => 3001234574
            ],
            [
                "nombre" => "Miguel Sánchez",
                "usuario" => "msanchez",
                "correo" => "msanchez@example.com",
                "telefono" => 3001234575
            ],
            [
                "nombre" => "Sara Castillo",
                "usuario" => "scastillo",
                "correo" => "scastillo@example.com",
                "telefono" => 3001234576
            ],
            [
                "nombre" => "Andrés Morales",
                "usuario" => "amorales",
                "correo" => "amorales@example.com",
                "telefono" => 3001234577
            ],
            [
                "nombre" => "Patricia Ruiz",
                "usuario" => "pruiz",
                "correo" => "pruiz@example.com",
                "telefono" => 3001234578
            ],
            [
                "nombre" => "Luis Torres",
                "usuario" => "ltorres",
                "correo" => "ltorres@example.com",
                "telefono" => 3001234579
            ],
            [
                "nombre" => "Elena Díaz",
                "usuario" => "ediaz",
                "correo" => "ediaz@example.com",
                "telefono" => 3001234580
            ],
            [
                "nombre" => "Ricardo Romero",
                "usuario" => "rromero",
                "correo" => "rromero@example.com",
                "telefono" => 3001234581
            ],
            [
                "nombre" => "Sofía Medina",
                "usuario" => "smedina",
                "correo" => "smedina@example.com",
                "telefono" => 3001234582
            ],
            [
                "nombre" => "Daniel Vargas",
                "usuario" => "dvargas",
                "correo" => "dvargas@example.com",
                "telefono" => 3001234583
            ],
            [
                "nombre" => "Camila Silva",
                "usuario" => "csilva",
                "correo" => "csilva@example.com",
                "telefono" => 3001234584
            ],
            [
                "nombre" => "Fernando Pineda",
                "usuario" => "fpineda",
                "correo" => "fpineda@example.com",
                "telefono" => 3001234585
            ],
            [
                "nombre" => "Verónica Navarro",
                "usuario" => "vnavarro",
                "correo" => "vnavarro@example.com",
                "telefono" => 3001234586
            ],
            [
                "nombre" => "Héctor Ortiz",
                "usuario" => "hortiz",
                "correo" => "hortiz@example.com",
                "telefono" => 3001234587
            ],
            [
                "nombre" => "Lorena Mendoza",
                "usuario" => "lmendoza",
                "correo" => "lmendoza@example.com",
                "telefono" => 3001234588
            ],
            [
                "nombre" => "Diego León",
                "usuario" => "dleon",
                "correo" => "dleon@example.com",
                "telefono" => 3001234589
            ],
            [
                "nombre" => "Valeria Castro",
                "usuario" => "vcastro",
                "correo" => "vcastro@example.com",
                "telefono" => 3001234590
            ],
            [
                "nombre" => "Guillermo Correa",
                "usuario" => "gcorrea",
                "correo" => "gcorrea@example.com",
                "telefono" => 3001234591
            ],
            [
                "nombre" => "Mónica Guzmán",
                "usuario" => "mguzman",
                "correo" => "mguzman@example.com",
                "telefono" => 3001234592
            ],
            [
                "nombre" => "Felipe Salazar",
                "usuario" => "fsalazar",
                "correo" => "fsalazar@example.com",
                "telefono" => 3001234593
            ],
            [
                "nombre" => "Lucía Herrera",
                "usuario" => "lherrera",
                "correo" => "lherrera@example.com",
                "telefono" => 3001234594
            ],
            [
                "nombre" => "Manuel Álvarez",
                "usuario" => "malvarez",
                "correo" => "malvarez@example.com",
                "telefono" => 3001234595
            ],
            [
                "nombre" => "Inés Gutiérrez",
                "usuario" => "igutierrez",
                "correo" => "igutierrez@example.com",
                "telefono" => 3001234596
            ],
            [
                "nombre" => "Pablo Ortega",
                "usuario" => "portega",
                "correo" => "portega@example.com",
                "telefono" => 3001234597
            ],
            [
                "nombre" => "Gabriela Ramos",
                "usuario" => "gramos",
                "correo" => "gramos@example.com",
                "telefono" => 3001234598
            ],
            [
                "nombre" => "Rafael Aguilar",
                "usuario" => "raguilar",
                "correo" => "raguilar@example.com",
                "telefono" => 3001234599
            ],
            [
                "nombre" => "Victoria Peña",
                "usuario" => "vpena",
                "correo" => "vpena@example.com",
                "telefono" => 3001234600
            ],
            [
                "nombre" => "Álvaro Rojas",
                "usuario" => "arojas",
                "correo" => "arojas@example.com",
                "telefono" => 3001234601
            ],
            [
                "nombre" => "Alejandra Duarte",
                "usuario" => "aduarte",
                "correo" => "aduarte@example.com",
                "telefono" => 3001234602
            ],
            [
                "nombre" => "Francisco Molina",
                "usuario" => "fmolina",
                "correo" => "fmolina@example.com",
                "telefono" => 3001234603
            ],
            [
                "nombre" => "Diana Suárez",
                "usuario" => "dsuarez",
                "correo" => "dsuarez@example.com",
                "telefono" => 3001234604
            ],
            [
                "nombre" => "Rodrigo Cabrera",
                "usuario" => "rcabrera",
                "correo" => "rcabrera@example.com",
                "telefono" => 3001234605
            ],
            [
                "nombre" => "Isabel Ortega",
                "usuario" => "iortega",
                "correo" => "iortega@example.com",
                "telefono" => 3001234606
            ],
            [
                "nombre" => "Enrique Tapia",
                "usuario" => "etapia",
                "correo" => "etapia@example.com",
                "telefono" => 3001234607
            ],
            [
                "nombre" => "Fabiola Núñez",
                "usuario" => "fnunez",
                "correo" => "fnunez@example.com",
                "telefono" => 3001234608
            ],
            [
                "nombre" => "Adrián Villalobos",
                "usuario" => "avillalobos",
                "correo" => "avillalobos@example.com",
                "telefono" => 3001234609
            ],
            [
                "nombre" => "Nicolás Herrera",
                "usuario" => "nherrera",
                "correo" => "nherrera@example.com",
                "telefono" => 3001234610
            ],
            [
                "nombre" => "Rebeca Luna",
                "usuario" => "rluna",
                "correo" => "rluna@example.com",
                "telefono" => 3001234611
            ],
            [
                "nombre" => "David Prieto",
                "usuario" => "dprieto",
                "correo" => "dprieto@example.com",
                "telefono" => 3001234612
            ],
            [
                "nombre" => "Natalia Pardo",
                "usuario" => "npardo",
                "correo" => "npardo@example.com",
                "telefono" => 3001234613
            ],
            [
                "nombre" => "Sebastián Vera",
                "usuario" => "svera",
                "correo" => "svera@example.com",
                "telefono" => 3001234614
            ],
            [
                "nombre" => "Esteban Lara",
                "usuario" => "elara",
                "correo" => "elara@example.com",
                "telefono" => 3001234615
            ],
            [
                "nombre" => "Cecilia Cruz",
                "usuario" => "ccruz",
                "correo" => "ccruz@example.com",
                "telefono" => 3001234616
            ],
            [
                "nombre" => "Tomás Vázquez",
                "usuario" => "tvazquez",
                "correo" => "tvazquez@example.com",
                "telefono" => 3001234617
            ],
            [
                "nombre" => "Irene Jiménez",
                "usuario" => "ijimenez",
                "correo" => "ijimenez@example.com",
                "telefono" => 3001234618
            ],
            [
                "nombre" => "Gustavo Campos",
                "usuario" => "gcampos",
                "correo" => "gcampos@example.com",
                "telefono" => 3001234619
            ],
            [
                "nombre" => "Claudia Orozco",
                "usuario" => "corozco",
                "correo" => "corozco@example.com",
                "telefono" => 3001234620
            ],
            [
                "nombre" => "Ángela Serrano",
                "usuario" => "aserrano",
                "correo" => "aserrano@example.com",
                "telefono" => 3001234621
            ],
            [
                "nombre" => "Javier Medina",
                "usuario" => "jmedina",
                "correo" => "jmedina@example.com",
                "telefono" => 3001234622
            ],
            [
                "nombre" => "Adela Morales",
                "usuario" => "amorales",
                "correo" => "amorales@example.com",
                "telefono" => 3001234623
            ],
            [
                "nombre" => "Luis Vargas",
                "usuario" => "lvargas",
                "correo" => "lvargas@example.com",
                "telefono" => 3001234624
            ],
            [
                "nombre" => "Emilia Acosta",
                "usuario" => "eacosta",
                "correo" => "eacosta@example.com",
                "telefono" => 3001234625
            ],
            [
                "nombre" => "Pablo Castillo",
                "usuario" => "pcastillo",
                "correo" => "pcastillo@example.com",
                "telefono" => 3001234626
            ],
            [
                "nombre" => "Alejandro Sánchez",
                "usuario" => "asanchez",
                "correo" => "asanchez@example.com",
                "telefono" => 3001234627
            ],
            [
                "nombre" => "Gabriela Contreras",
                "usuario" => "gcontreras",
                "correo" => "gcontreras@example.com",
                "telefono" => 3001234628
            ],
            [
                "nombre" => "Daniela Flores",
                "usuario" => "dflores",
                "correo" => "dflores@example.com",
                "telefono" => 3001234629
            ],
            [
                "nombre" => "Eduardo Espinosa",
                "usuario" => "eespinosa",
                "correo" => "eespinosa@example.com",
                "telefono" => 3001234630
            ],
            [
                "nombre" => "Margarita Ponce",
                "usuario" => "mponce",
                "correo" => "mponce@example.com",
                "telefono" => 3001234631
            ],
            [
                "nombre" => "Renata Herrera",
                "usuario" => "rherrera",
                "correo" => "rherrera@example.com",
                "telefono" => 3001234632
            ],
            [
                "nombre" => "Simón Ramos",
                "usuario" => "sramos",
                "correo" => "sramos@example.com",
                "telefono" => 3001234633
            ],
            [
                "nombre" => "Jimena Soto",
                "usuario" => "jsoto",
                "correo" => "jsoto@example.com",
                "telefono" => 3001234634
            ],
            [
                "nombre" => "Francisco Navarro",
                "usuario" => "fnavarro",
                "correo" => "fnavarro@example.com",
                "telefono" => 3001234635
            ],
            [
                "nombre" => "Catalina Villalba",
                "usuario" => "cvillalba",
                "correo" => "cvillalba@example.com",
                "telefono" => 3001234636
            ],
            [
                "nombre" => "Patricio Quintero",
                "usuario" => "pquintero",
                "correo" => "pquintero@example.com",
                "telefono" => 3001234637
            ],
            [
                "nombre" => "Luciana Ortiz",
                "usuario" => "lortiz",
                "correo" => "lortiz@example.com",
                "telefono" => 3001234638
            ],
            [
                "nombre" => "Emilio Muñoz",
                "usuario" => "emunoz",
                "correo" => "emunoz@example.com",
                "telefono" => 3001234639
            ],
            [
                "nombre" => "Raquel Arias",
                "usuario" => "rarias",
                "correo" => "rarias@example.com",
                "telefono" => 3001234640
            ],
            [
                "nombre" => "Ignacio Mejía",
                "usuario" => "imejia",
                "correo" => "imejia@example.com",
                "telefono" => 3001234641
            ],
            [
                "nombre" => "Marcos Serrano",
                "usuario" => "mserrano",
                "correo" => "mserrano@example.com",
                "telefono" => 3001234642
            ],
            [
                "nombre" => "Julieta Vélez",
                "usuario" => "jvelez",
                "correo" => "jvelez@example.com",
                "telefono" => 3001234643
            ],
            [
                "nombre" => "Mauricio Franco",
                "usuario" => "mfranco",
                "correo" => "mfranco@example.com",
                "telefono" => 3001234644
            ],
            [
                "nombre" => "Estela Robles",
                "usuario" => "erobles",
                "correo" => "erobles@example.com",
                "telefono" => 3001234645
            ],
            [
                "nombre" => "Álvaro Méndez",
                "usuario" => "amendez",
                "correo" => "amendez@example.com",
                "telefono" => 3001234646
            ],
            [
                "nombre" => "Marcela Valencia",
                "usuario" => "mvalencia",
                "correo" => "mvalencia@example.com",
                "telefono" => 3001234647
            ],
            [
                "nombre" => "Ramón Reyes",
                "usuario" => "rreyes",
                "correo" => "rreyes@example.com",
                "telefono" => 3001234648
            ],
            [
                "nombre" => "Alejandra Correa",
                "usuario" => "acorrea",
                "correo" => "acorrea@example.com",
                "telefono" => 3001234649
            ],
            [
                "nombre" => "Bárbara Figueroa",
                "usuario" => "bfigueroa",
                "correo" => "bfigueroa@example.com",
                "telefono" => 3001234650
            ]
            
            
            // Agrega más registros según sea necesario...
        ]);
    }
}
