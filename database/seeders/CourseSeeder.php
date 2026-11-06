<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            ['MTH108', 'Discrete Mathematics I', 3, null, 'Introduction to the foundational math behind modern computing '],
            ['ITT102', 'Discrete Mathematics II', 3, null, 'Builds on your foundational logic to solve complex structural and computational problems'],
            ['ITT210', 'Database Management Systems', 3, 'ITT103', 'Relational database design, normalization, SQL and basic database administration.'],
            ['ITT208', 'Internet Authoring I', 3, null, 'Building static and responsive websites using HTML5 and CSS3.'],
            ['ITT201', 'Data Communication and Networks', 3, null, 'Network models, protocols, addressing, switching and routing basics.'],
            ['ITT200', 'Object-Oriented Programming', 3, 'ITT103', 'Classes, inheritance, polymorphism and design principles using a modern OO language.'],
            ['ITT310', 'Systems Analysis and Design', 3, null, 'Requirements gathering, modelling, and designing information systems.'],
            ['ITT420', 'Mobile Application Development', 3, null, 'Designing and building applications for mobile devices.'],
            ['ITT307', 'Internet Authoring II', 3, 'ITT208', 'Dynamic web development with JavaScript, PHP frameworks and progressive web apps.'],
            ['ITT401', 'Information Security', 3, 'ITT201', 'Security principles, threats, cryptography, and securing systems and networks.'],
        ];

        foreach ($courses as [$code, $name, $credits, $prereq, $desc]) {
            Course::updateOrCreate(
                ['code' => $code],
                ['name' => $name, 'credits' => $credits, 'prerequisites' => $prereq, 'description' => $desc]
            );
        }
    }
}
