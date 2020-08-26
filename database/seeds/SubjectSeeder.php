<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
               'name_suject' =>'Programacion Java',
               'price' =>25,
               'content' =>'tipos de datos, estructusar de control,arreglos,matrices, programacion orientadas a objetos',
               'description'=>'Para iniciar de una manera sofisticada en la programacion es necesario entender bien los fundamentos',
               'teacher_id'=>1
            ],
            [
                'name_suject' =>'Titulo de la Materia 1',
                'price' =>30,
                'content' =>'tema uno, tema dos, tema tres, tema de tal cosa,temas economia',
                'description'=>'esta card es una prueva pertenece a la carrera de ing sistemas',
                'teacher_id'=>1
             ],
             [
                'name_suject' =>'Titulo de la Materia 2',
                'price' =>30,
                'content' =>'tema uno, tema dos, tema tres, tema de tal cosa,contenido de prueba',
                'description'=>'esta card es una prueva pertenece a la carrera de ing. informatica',
                'teacher_id'=>3
             ],
             [
                'name_suject' =>'Titulo de la Materia 3',
                'price' =>25,
                'content' =>'tema uno, tema dos, tema tres, tema de tal cosa,contenido de prueba',
                'description'=>'esta card es una prueva pertenece a la carrera de ing. Informatica',
                'teacher_id'=>3
             ],
             [
                'name_suject' =>'Titulo de la Materia 4',
                'price' =>25,
                'content' =>'tema uno, tema dos, tema tres, tema de tal cosa,contenido de prueba',
                'description'=>'esta card es una prueva pertenece a la carrera de lic. economia',
                'teacher_id'=>4
             ],
        ];
        foreach ($items as $key => $value) {
            Subject::create($value);
        }
    }
}
