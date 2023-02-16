<?php

namespace App\Service;

class BaseService implements ServiceInterface
{
    public $repository;

    public function all()
    {
        return $this->repository->all();
    }
    public function find(int $id)
    {
        return $this->repository->find($id);
    }
    public function create(array $data)
    {
        return $this->repository->create($data);
    }
    public function update(array $data, $id)
    {
        return $object = $this->repository->update($data, $id);
    }
    public function delete($id)
    {
        return $object = $this->repository->delete($id);
    }
}
