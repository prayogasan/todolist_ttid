<?php

namespace App\Services\Post;

use App\Models\Table\PostTable;
use App\Models\Entity\Post;
use App\Services\AppService;
use App\Services\AppServiceInterface;


class PostService extends AppService implements AppServiceInterface
{

    public function __construct(PostTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return PostTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return PostTable::findOrFail($id);
    }

    public function getAll()
    {
        return Post::all();
    }

    public function create($data)
    {
        return Post::create([
            'name' => $data['name'],
            'activity' => $data['activity']
        ]);
    }

    public function update($id, $data)
    {
        $row = PostTable::findOrFail($id);
        $row->update([
            'name' => $data['name'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = Post::find($id);
        $row->delete();
        return $row;
    }
}
