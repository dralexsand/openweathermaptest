<?php

namespace App\Services;

use App\Models\Project;

class ProjectService
{
    // Артикул	Рейтинг	Частотность по дням	Категории	Заказы по дням	Цена по дням

    public function getProjectsByUserId(int $userId)
    {
        $projects = Project::whereUserId($userId)->get();
        return response($projects);
    }

    public function getProjectDetails(int $projectId)
    {
        $project = Project::whereId($projectId)->get();
        return response($project);
    }

}
