# Laravel News API

## Overview

This Laravel project is aimed at creating a RESTful API to manage news articles, providing essential features for adding, updating, and deleting news. It also offers the capability to display a list of news articles in descending order of their publication date, excluding expired news.

## Instructions

### Step 1: Setting Up the Laravel Application

- Create a new Laravel 10 application to get started.

### Step 2: Define News Data Model

- Configure a data model for news articles with the following fields:
  - Title
  - Content
  - Category
  - Start Date
  - Expiration Date

### Step 3: Category Data Model

- Create a data model for a hierarchical structure of news categories. Each category should have a name and a parent/child relationship, forming a tree of categories.

### Step 4: News CRUD Controller

- Create a controller to handle CRUD operations for news articles, including creating, reading, updating, and deleting.

### Step 5: User Authentication Middleware

- Implement a middleware to restrict API access to authenticated users. Apply this middleware to API routes.

### Step 6: Define API Routes

- Define API routes for CRUD operations on news articles, using HTTP methods (GET, POST, PUT, DELETE). Ensure that the API returns data in JSON format.

### Step 7: Listing News Articles

- Create a dedicated route to display news articles in descending order of their publication date, excluding expired news.

### Step 8: Recursive Category Search

- Implement a recursive search algorithm that traverses the category hierarchy to find the requested category and retrieve all articles associated with that category and its subcategories.

### Step 9: Search by Category Name

- Develop a new API route to search for a specific category in the hierarchy based on its name and return all associated articles, including those from subcategories. Display only non-expired news articles in the results.

### Step 10: HTTP Status Codes

- Ensure that the API responds with the appropriate HTTP status codes for each operation, e.g., 200 for success, 201 for creation, 204 for deletion, 400 for request errors, etc.

## Evaluation Criteria

Your work will be evaluated based on the following criteria:

1. Correct setup of the Laravel application.
2. Creation of the data model for news articles.
3. Creation of a CRUD controller for news articles.
4. Implementation of the user authentication middleware.
5. Definition of API routes for CRUD operations.
6. Correct display of the list of news articles as per the specified requirements.
7. Appropriate API responses with correct HTTP status codes.

## Appendix: Category Tree Seeder

- To set up the category tree for the application, use the provided seeder to populate the categories and their hierarchy. Run the seeder to initialize the categories and their relationships.

