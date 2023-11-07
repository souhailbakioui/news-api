<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Services\CategoryService;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        try {
            $categories = $this->categoryService->getAllCategories();
            return CategoryResource::collection($categories);
        } catch (Exception $e) {
            return new JsonResponse(['error' => 'An error occurred.'], 500);
        }
    }

    public function store(CreateCategoryRequest $request)
    {
        try {
            $data = $request->validated();
            $category = $this->categoryService->createCategory($data);
            return new CategoryResource($category);
        } catch (Exception $e) {
            return new JsonResponse(['error' => 'An error occurred.'], 500);
        }
    }

    public function show(Category $category)
    {
        try {
            return new CategoryResource($category);
        } catch (Exception $e) {
            return new JsonResponse(['error' => 'An error occurred.'], 500);
        }
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        try {
            $data = $request->validated();
            $updatedCategory = $this->categoryService->updateCategory($category, $data);
            return new CategoryResource($updatedCategory);
        } catch (Exception $e) {
            return new JsonResponse(['error' => 'An error occurred.'], 500);
        }
    }

    public function destroy(Category $category)
    {
        try {
            $this->categoryService->deleteCategory($category);
            return response()->noContent();
        } catch (Exception $e) {
            return new JsonResponse(['error' => 'An error occurred.'], 500);
        }
    }
}
