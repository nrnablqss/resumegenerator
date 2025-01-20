<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetailsFixture
 */
class DetailsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'client_id' => 1,
                'edu_id' => 1,
                'exp_id' => 1,
                'language_id' => 1,
                'qualification_id' => 1,
                'skill_id' => 1,
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'contact_number' => 'Lorem ipsum dolor sit amet',
                'education_level' => 'Lorem ipsum dolor sit amet',
                'institution_name' => 'Lorem ipsum dolor sit amet',
                'instituition_location' => 'Lorem ipsum dolor sit amet',
                'start_date' => '2025-01-20',
                'end_date' => '2025-01-20',
                'result' => 'Lorem ipsum dolor sit amet',
                'job_title' => 'Lorem ipsum dolor sit amet',
                'company_name' => 'Lorem ipsum dolor sit amet',
                'job_description' => 'Lorem ipsum dolor sit amet',
                'language_name' => 'Lorem ipsum dolor sit amet',
                'profieniency' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'achieve_year' => 'Lorem ipsum dolor sit amet',
                'skill_name' => 'Lorem ipsum dolor sit amet',
                'skill_proficiency' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-01-20 02:59:02',
                'modified' => '2025-01-20 02:59:02',
                'status' => 1,
            ],
        ];
        parent::init();
    }
}
