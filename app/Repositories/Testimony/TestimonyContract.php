<?php
namespace App\Repositories\Testimony;
interface TestimonyContract {
    public function create($request);
    public function findAll();
    public function findById($id);
    public function findBySlug($slug);
    public function update($request, $id);
    public function remove($id);
    public function getFirstThree();
}
