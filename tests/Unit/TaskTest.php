<?php

namespace Tests\Unit;

use App\Models\Task;
use Carbon\Carbon;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     * isOverdue
     *
     * @return void
     */
    public function testIsOverdue()
    {
        $now = Carbon::now();
        $task = factory(Task::class)->make([
            'due' => Carbon::yesterday()
        ]);

        $this->assertTrue($task->isOverdue($now));
    }
}
