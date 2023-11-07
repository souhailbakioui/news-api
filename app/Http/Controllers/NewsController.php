<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Services\NewsService;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Http\JsonResponse;

class NewsController extends Controller
{
    protected $newsService;

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    public function index()
    {
        try {
            $news = $this->newsService->getAllNews();
            return NewsResource::collection($news);
        } catch (Exception $e) {
            return new JsonResponse(['error' => 'An error occurred.', "message" => $e->getMessage()], 500);
        }
    }

    public function store(CreateNewsRequest $request)
    {
        try {
            $data = $request->validated();
            $news = $this->newsService->createNews($data);
            return new NewsResource($news);
        } catch (Exception $e) {
            return new JsonResponse(['error' => 'An error occurred.', "message" => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {

            $news = $this->newsService->getNewsById($id);

            if (!$news) {
                return response()->json(['message' => 'News not found'], 404);
            }
            $news = $this->newsService->getNewsById($id);
            return response()->json(['data' => new NewsResource($news), 'message' => "News article added successfully."]);
        } catch (Exception $e) {
            return new JsonResponse(['error' => 'An error occurred.', "message" => $e->getMessage()], 500);
        }
    }

    public function update(UpdateNewsRequest $request, $id)
    {
        try {
            $data = $request->validated();
            $news = $this->newsService->getNewsById($id);

            if (!$news) {
                return response()->json(['message' => 'News not found'], 404);
            }

            $news = $this->newsService->updateNews($news, $data);
            return response()->json(['data' => new NewsResource($news), 'message' => "News article updated successfully."]);
        } catch (Exception $e) {
            return new JsonResponse(['error' => 'An error occurred.', "message" => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $news = $this->newsService->getNewsById($id);

            if (!$news) {
                return response()->json(['message' => 'News not found'], 404);
            }

            $this->newsService->deleteNews($news);
            return response()->json(null, 204);
        } catch (Exception $e) {
            return new JsonResponse(['error' => 'An error occurred.', "message" => $e->getMessage()], 500);
        }
    }

    public function getLatestNews()
    {
        try {
            $news = News::latest('date_debut')->where('date_expiration', '>', now())->get();

            return response()->json(['data' =>  NewsResource::collection($news)]);
        } catch (Exception $e) {
            return new JsonResponse(['error' => 'An error occurred.', "message" => $e->getMessage()], 500);
        }
    }

    public function getNewsByCategory($category)
    {
        try {
            $news = News::whereHas('category', function ($query) use ($category) {
                $query->where('name', $category);
            })->where('date_expiration', '>', now())->get();
            return NewsResource::collection($news);
        } catch (Exception $e) {
            return new JsonResponse(['error' => 'An error occurred.', "message" => $e->getMessage()], 500);
        }
    }
}
