<?php
use Plenty\Repositories\Models\PaginatedResult;

public function index(): Response {
    $columns = ['*'];
    $page = $this -> request -> get("page", 1);
    $items = $this -> request -> get("itemsPerPage", 25);
    $filter = [];
    $sortBy = $this -> request -> get("sortBy", 'id');
    $sortOrder = $this -> request -> get("sortOrder", 'desc');

    $searchName = $this -> request -> get("name");
    $filter['name'] = $searchName;

    $paginatedResultData = $this -> Repository -> query($columns, $page, $items, $filter, $sortBy, $sortOrder);

    return $this -> response -> make($paginatedResultData -> toJson(), Response::HTTP_OK);
}