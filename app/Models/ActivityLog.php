<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ActivityLog extends Model
{
    use LogsActivity;
    protected $table = 'activity_log';

    public function ceritaRakyat()
    {
        return $this->morphTo(CeritaRakyat::class, 'subject_type', 'subject_id');
    }

    public function sejarah()
    {
        return $this->morphTo(Sejarah::class, 'subject_type', 'subject_id');
    }

    // public function getDecodedPropertiesAttribute()
    // {
    //     return json_decode($this->properties, true);
    // }
    public function getPropertiesAttribute($value)
    {
        return json_decode($value, false);
    }

    public function scopeLatestCreated($query)
    {
        return $query->where('description', 'created')->has('ceritaRakyat')->has('sejarah');
    }
}
