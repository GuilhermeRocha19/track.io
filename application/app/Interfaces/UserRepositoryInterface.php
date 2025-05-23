<?php declare(strict_types=1);

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function create(array $data);

    public function update(array $data, int $id);

    public function delete(int $id);

    public function find(int $id);
}