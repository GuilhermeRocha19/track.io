<?php declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(private User $model) : void
    {
    }

    public function create(array $data) : User
    {
        return $this->model->create($data);
    }   

    public function update(array $data, int $id) : User
    {
        return $this->model->find($id)->update($data);
    }
    

    public function delete(int $id) : void
    {
    
        $this->model->find($id)->delete();
    }

    public function find(int $id) : User
    {
        return $this->model->find($id);
    }


}