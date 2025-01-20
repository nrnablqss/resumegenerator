<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EducationsFixture
 */
class EducationsFixture extends TestFixture
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
                'code' => 'Lorem ip',
                'name' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-01-19 02:12:03',
                'modified' => '2025-01-19 02:12:03',
                'status' => 1,
            ],
        ];
        parent::init();
    }
}
