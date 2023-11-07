<?php

namespace App\Services;

use App\Models\News;
use App\Repositories\NewsRepository;
use Exception;

class NewsService
{
    protected $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function createNews($data)
    {
        try {
            return $this->newsRepository->create($data);
        } catch (Exception $e) {
            // Handle the exception, log it, or re-throw it.
            throw $e;
        }
    }

    public function updateNews(News $news, $data)
    {
        try {
            return $this->newsRepository->update($news, $data);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function deleteNews(News $news)
    {
        try {
            $this->newsRepository->delete($news);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getNewsById($id)
    {
        try {
            return $this->newsRepository->getById($id);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getAllNews()
    {
        try {
            return $this->newsRepository->getAll();
        } catch (Exception $e) {
            throw $e;
        }
    }
}
