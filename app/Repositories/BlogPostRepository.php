<?php

namespace App\Repositories;


use App\Models\BlogPost as Model;


class BlogPostRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }
    /**
     * Получить список статей для вывода пагинатором
     * @param int|null $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAllWithPaginate()
    {
        $columns = ['id', 'title', 'slug', 'is_published', 'published_at', 'user_id', 'category_id'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->orderBy('id', 'DESC')
            //->with(['category', 'user'])
            ->with([
                //or
                'category' => function ($query) {
                    $query->select(['id', 'title']); // нужно два поля 
                },
                //or
                'user:id,name'
            ])
            ->paginate(25);



        return $result;
    }
}
