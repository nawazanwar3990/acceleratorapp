<?php

namespace App\Services\CMS;
use App\Models\CMS\Team;
use function __;

class TeamService
{

    public function findById($id)
    {
        return Team::find($id);
    }

    public function listByPagination()
    {
        return Team::orderBy('id', 'ASC')->paginate(20);
    }
}
