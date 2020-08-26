<?php

use Illuminate\Database\Seeder;
use App\Teacher;

class TeacherSeeder extends Seeder
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
                'university' => 'umss',
                'description' => 'Soy estudiante de ingeneria de Sistemas con habilidades en la programación dispuesto a impartir conocimiento de una forma sencilla y eficas.',
                'user_id' =>1,
                'college_career'=> 'Ing.Sistemas'      
            ],
            [
                'university' => 'umss',
                'description' => 'Estudiante de Administración de empresas muy buena con las estadisticas y la contabilidad, con gran conocimiento en estrategias de abministación de activos',
                'user_id' =>2, 
                'college_career'=> 'lic. Acministacion'     
            ],
            [
                'university' => 'umss',
                'description' => 'Soy experto en seguridad informatica, con grandes conocimientos en linux, revisa mi perfil para poder tener acceso a mis proyectos',
                'user_id' =>3,  
                'college_career'=> 'Ing. Informatica'    
            ],
            [
                'university' => 'umss',
                'description' => 'Experta en manejo de dinero y estadisticas, soy estudiante de la universidad Mayor de San Simon visita mi perfil para mas informacion sobre mis clases',
                'user_id' =>4,
                'college_career'=> 'Lic.Economia'      
            ],
            [
                'university' => 'umss',
                'description' => 'Soy estudiante de Medicina doy clases de explicación sobre cardiología, tengo experiensia explicando.',
                'user_id' =>5, 
                'college_career'=> 'Lic. Medicina'     
            ],
            [
                'university' => 'umss',
                'description' => 'Soy Axuliar de la UMSS doy clases de auditoria 2 con explicacion clara desde cero',
                'user_id' =>5, 
                'college_career'=> 'Lic. Auditoria'     
            ],
            [
                'university' => 'umss',
                'description' => 'Estudiante de ing. Civil muy bueno en estructuras de soporte y diseño base, con conocimientos bastos de topografia',
                'user_id' =>7,  
                'college_career'=> 'Lic. Contaduria'    
            ],
        ];
        foreach ($items as $key => $value) {
            Teacher::create($value);
        }
    }
}
