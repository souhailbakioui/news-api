<?php

namespace App\Repositories;

use App\Models\News;

class NewsRepository
{
    public function create($data)
    {
        return News::create($data);
    }

    public function update(News $news, $data)
    {
        $news->update($data);
        return $news;
    }

    public function delete(News $news)
    {
        $news->delete();
    }

    public function getById($id)
    {
        return News::find($id);
    }

    public function getAll()
    {
        return News::all();
    }
}
