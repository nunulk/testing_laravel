<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @package App\Models
 *
 * @property Carbon $due
 */
class Task extends Model
{
    protected $dates = [
        'due',
    ];

    public function isOverdue(Carbon $datetime)
    {
        return $this->due->lessThan($datetime);
    }
}
