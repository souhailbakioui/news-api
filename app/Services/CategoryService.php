<?php

namespace App\Services;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use Exception;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function createCategory(array $data)
    {
        try {
            return $this->categoryRepository->create($data);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function updateCategory(Category $category, array $data)
    {
        try {
            return $this->categoryRepository->update($category, $data);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function deleteCategory(Category $category)
    {
        try {
            $this->categoryRepository->delete($category);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getCategoryById($id)
    {
        try {
            return $this->categoryRepository->find($id);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getAllCategories()
    {
        try {
            return $this->categoryRepository->all();
        } catch (Exception $e) {
            throw $e;
        }
    }
}
