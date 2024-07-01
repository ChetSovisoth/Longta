<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [   
                'user_id' => 2,
                'title'=> 'Graphic Design',
                'company_name'=>'KomsanHub',
                'description'=> 'Are you a creative Graphic Designer looking for an exciting opportunity? Join our team to create visually compelling designs for print and digital platforms. The role requires proficiency in Adobe Creative Suite and a keen eye for detail. This is your chance to showcase your creativity and contribute to impactful design projects.',
                'location'=> 'Sen Sok, Phnom Penh',
                'employment_type'=> 'Part-Time',
                'salary' => '250$ - 400$',
                'experience'=> 'Above 2 years',
                'contact_email'=> 'mike@gmail.com',
                'contact_phone'=> '084123874'
            ],
            [
                'user_id' => 4,
                'title' => 'Software Developer',
                'company_name' => 'Tech Innovations',
                'description' => 'We are seeking a motivated Software Developer to join our dynamic team. The ideal candidate will assist in the design, development, and testing of software solutions, utilizing their knowledge of programming languages such as Python and JavaScript.',
                'location' => 'Daun Penh, Phnom Penh',
                'employment_type' => 'Full-Time',
                'salary' => '700$ - 1200$',
                'experience' => '3+ years',
                'contact_email' => 'hr@techinnovations.com',
                'contact_phone' => '093876432'
            ],
            
            [
                'user_id' => 4,
                'title' => 'Digital Marketing Specialist',
                'company_name' => 'Marketing Solutions',
                'description' => 'We are looking for a Digital Marketing Specialist to manage our online presence and drive brand awareness. The role involves developing and implementing digital marketing campaigns across various channels, including social media, email, and SEO.',
                'location' => 'Toul Kork, Phnom Penh',
                'employment_type' => 'Full-Time',
                'salary' => '500$ - 800$',
                'experience' => '2+ years',
                'contact_email' => 'jobs@marketingsolutions.com',
                'contact_phone' => '089234567'
            ],
            
            [
                'user_id' => 5,
                'title' => 'Customer Support Representative',
                'company_name' => 'CustomerFirst',
                'description' => 'Join our team as a Customer Support Representative and be the face of our company to our valued customers. This role involves handling inquiries, providing product information, and resolving issues in a timely and professional manner.',
                'location' => 'Chamkarmon, Phnom Penh',
                'employment_type' => 'Part-Time',
                'salary' => '300$ - 500$',
                'experience' => '1+ years',
                'contact_email' => 'support@customerfirst.com',
                'contact_phone' => '092345678'
            ],
            
            [
                'user_id' => 3,
                'title' => 'Data Analyst',
                'company_name' => 'DataInsights',
                'description' => 'We are hiring a Data Analyst to interpret data and turn it into actionable insights. The role involves collecting and analyzing data sets, creating visualizations, and presenting findings to stakeholders.',
                'location' => 'Sen Sok, Phnom Penh',
                'employment_type' => 'Full-Time',
                'salary' => '600$ - 1000$',
                'experience' => '3+ years',
                'contact_email' => 'analytics@datainsights.com',
                'contact_phone' => '091234567'
            ],
            
            [
                'user_id' => 3,
                'title' => 'Web Developer',
                'company_name' => 'WebTech',
                'description' => 'We are looking for a talented Web Developer to join our innovative team. The ideal candidate will be responsible for designing, coding, and modifying websites, from layout to function, according to our clients\' specifications.',
                'location' => 'Russey Keo, Phnom Penh',
                'employment_type' => 'Full-Time',
                'salary' => '800$ - 1500$',
                'experience' => '3+ years',
                'contact_email' => 'careers@webtech.com',
                'contact_phone' => '095678123'
            ],
            
            [
                'user_id' => 4,
                'title' => 'Project Manager',
                'company_name' => 'BuildRight',
                'description' => 'We are seeking a skilled Project Manager to oversee construction projects from conception to completion. The ideal candidate will coordinate with various teams, ensure timely delivery, and maintain project budgets.',
                'location' => 'Phnom Penh Thmei, Phnom Penh',
                'employment_type' => 'Full-Time',
                'salary' => '1000$ - 2000$',
                'experience' => '5+ years',
                'contact_email' => 'pm@buildright.com',
                'contact_phone' => '087654321'
            ],
            
            [
                'user_id' => 5,
                'title' => 'Accountant',
                'company_name' => 'FinancePros',
                'description' => 'Join our team as an Accountant responsible for managing financial records, performing audits, and preparing financial reports. The ideal candidate will have strong analytical skills and experience with accounting software.',
                'location' => 'Chbar Ampov, Phnom Penh',
                'employment_type' => 'Full-Time',
                'salary' => '600$ - 900$',
                'experience' => '3+ years',
                'contact_email' => 'jobs@financepros.com',
                'contact_phone' => '090345678'
            ],
            
            [
                'user_id' => 2,
                'title' => 'HR Manager',
                'company_name' => 'People Solutions',
                'description' => 'We are seeking an experienced HR Manager to lead our human resources department. The role involves recruitment, employee relations, performance management, and ensuring compliance with labor laws.',
                'location' => 'Meanchey, Phnom Penh',
                'employment_type' => 'Full-Time',
                'salary' => '700$ - 1100$',
                'experience' => '4+ years',
                'contact_email' => 'hr@peoplesolutions.com',
                'contact_phone' => '088765432'
            ],
            
            [
                'user_id' => 3,
                'title' => 'Sales Executive',
                'company_name' => 'SalesCorp',
                'description' => 'We are looking for a driven Sales Executive to join our team. The ideal candidate will be responsible for generating leads, closing sales, and maintaining client relationships to achieve sales targets.',
                'location' => 'Sen Sok, Phnom Penh',
                'employment_type' => 'Full-Time',
                'salary' => '500$ - 1000$',
                'experience' => '2+ years',
                'contact_email' => 'sales@salescorp.com',
                'contact_phone' => '093456789'
            ],
            
            [
                'user_id' => 5,
                'title' => 'Content Writer',
                'company_name' => 'CreativeWriters',
                'description' => 'We are hiring a Content Writer to create engaging and original content for our website and marketing materials. The ideal candidate will have excellent writing skills and experience in SEO.',
                'location' => 'Toul Kork, Phnom Penh',
                'employment_type' => 'Part-Time',
                'salary' => '300$ - 600$',
                'experience' => '2+ years',
                'contact_email' => 'content@creativewriters.com',
                'contact_phone' => '089876543'
            ]
            
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}
