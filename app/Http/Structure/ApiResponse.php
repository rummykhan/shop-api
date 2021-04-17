<?php


namespace App\Http\Structure;


use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Pagination\LengthAwarePaginator;

class ApiResponse implements Arrayable, Jsonable
{
    /**
     * @var LengthAwarePaginator
     */
    protected $paginator;

    public function __construct($paginator)
    {
        $this->paginator = $paginator;
    }

    public function toArray()
    {
        return [
            'meta' => [
                'from' => $this->paginator->firstItem(),
                'to' => $this->paginator->lastItem(),
                'total' => $this->paginator->total(),
                'currentPage' => $this->paginator->currentPage(),
                'perPage' => $this->paginator->perPage(),
                'nextPageUrl' => $this->paginator->appends('api-token', request()->get('api-token'))->nextPageUrl(),
                'previousPageUrl' => $this->paginator->appends('api-token', request()->get('api-token'))->previousPageUrl(),
            ],
            'data' => $this->paginator->items(),
        ];
    }

    public function toJson($options = 0)
    {
        return json_encode($this->toArray());
    }
}
