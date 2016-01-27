<?php

namespace TCG\Voyager\Models;

use Illuminate\Database\Eloquent\Model;

class DataType extends Model
{
    protected $table = 'data_types';

    public function rows(){
    	return $this->hasMany('TCG\Voyager\Models\DataRow');
    }
}
