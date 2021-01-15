<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardgame extends Model
{
    protected $fillable = ['playerName', 'playerHP', 'playerShield', 'enemyHP', 'enemyShield', 'turns', 'cardSalud', 'cardAtaque', 'cardShield'];
}