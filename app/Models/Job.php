<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    // Sert à dire à Laravel d'utiliser la table 'job_listings' plutôt que 'jobs' car la table 'jobs' existe déjà
    protected $table = 'job_listings';
}
