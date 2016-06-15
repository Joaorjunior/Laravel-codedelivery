<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Http\Requests;
use Illuminate\Http\Request;
use CodeDelivery\Http\Requests\AdminCategoryRequest;

class CategoriesController extends Controller
{
    /**
     * @var OrderRepository;
     */
    private $repository;
    /**
     * @var UserRepository;
     */
    private $userRepository;

    /**
     * @var ProductRepository;
     */
    private $productRepository;
   // private $repository;

    //Método construtor
    // public function  _construct(CategoryRepository $repository)
    //{
        //$this->repository = $repository;
    //}

    public function index(CategoryRepository $repository)
    {
        $categories = $repository->paginate(5);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(AdminCategoryRequest $request, CategoryRepository $repository)
    {
        //Recebe todos os dados
         $data = $request -> all();
        //Array c/ as informações que esta recebendo via request
        $repository->create($data);
        //Redireciona o usuário para a página inicial
        return redirect()->route('admin.categories.index');

    }

    public function edit($id,  CategoryRepository $repository)
    {
        $category = $repository->find($id);
        return view('admin.categories.edit',compact('category'));
    }

    public function update(AdminCategoryRequest $request, $id, CategoryRepository $repository)
    {
        $data = $request -> all();
        $repository->update($data,$id);
        return redirect()->route('admin.categories.index');

    }
}
