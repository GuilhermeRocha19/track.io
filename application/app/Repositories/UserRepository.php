<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(private User $model)
    {
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }   

    public function update(array $data, int $id)
    {
        return $this->model->find($id)->update($data);
    }
    

    public function delete(int $id)
    {
    
        return $this->model->find($id)->delete();
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }


}