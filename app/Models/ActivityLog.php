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
    public function adatLahiran()
    {
        return $this->morphTo(AdatLahiran::class, 'subject_type', 'subject_id');
    }
    public function adatPernikahan()
    {
        return $this->morphTo(AdatLahiran::class, 'subject_type', 'subject_id');
    }
    public function alatMusik()
    {
        return $this->morphTo(AlatMusik::class, 'subject_type', 'subject_id');
    }
    public function senjata()
    {
        return $this->morphTo(Senjata::class, 'subject_type', 'subject_id');
    }
    public function tradisiBelikong()
    {
        return $this->morphTo(TradisiBelikong::class, 'subject_type', 'subject_id');
    }
    public function tradisiHudoq()
    {
        return $this->morphTo(TradisiHudoq::class, 'subject_type', 'subject_id');
    }
    public function tradisiNugal()
    {
        return $this->morphTo(TradisiNugal::class, 'subject_type', 'subject_id');
    }
    public function tradisiTabuko()
    {
        return $this->morphTo(TradisiTabuko::class, 'subject_type', 'subject_id');
    }

    public function getPropertiesAttribute($value)
    {
        return json_decode($value, false);
    }

    public function scopeLatestCreated($query)
    {
        return $query->where('description', 'created')
            ->has('ceritaRakyat')
            ->has('sejarah')
            ->has('adatLahiran')
            ->has('adatPernikahan')
            ->has('alatMusik')
            ->has('senjata')
            ->has('tradisiBelikong')
            ->has('tradisiHudoq')
            ->has('tradisiNugal')
            ->has('tradisiTabuko')
            ->orderBy('updated_at', 'desc');
    }
}
