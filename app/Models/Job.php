<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // Sert à dire à Laravel d'utiliser la table 'job_listings' plutôt que 'jobs' car la table 'jobs' existe déjà
    protected $table = 'job_listings';
}
