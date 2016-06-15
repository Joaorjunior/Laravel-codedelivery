<?php

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Http\Requests;
use CodeDelivery\Repositories\ProductRepository;
use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Http\Requests\AdminProductRequest;
use CodeDelivery\Http\Requests\AdminCategoryRequest;


class ProductsController extends Controller
{

    private $repository;
    private $categoryRepository;
    private $ProductRepository;

    //Método construtor
    // public function  _construct(CategoryRepository $repository)
    //{
        //$this->repository = $repository;
    //}

    public function index(ProductRepository $repository)
    {
        $products = $repository->paginate();

        return view('admin.products.index', compact('products'));
    }

    public function create(CategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->lists1();
        return view('admin.products.create', compact('categories'));
    }

    public function store(AdminProductRequest $request, ProductRepository $repository)
    {
        //Recebe todos os dados
        $data = $request -> all();
        //Array c/ as informações que esta recebendo via request
        $repository->create($data);
        //Redireciona o usuário para a página inicial
        return redirect()->route('admin.products.index');

    }

    public function edit($id,  ProductRepository $repository, CategoryRepository $categoryRepository)
    {
        $product = $repository->find($id);
        $categories = $categoryRepository->lists1();
        return view('admin.products.edit',compact('product','categories'));
    }

    public function update(AdminProductRequest $request, $id, ProductRepository $repository)
    {

        $data = $request -> all();
        $repository->update($data,$id);

        return redirect()->route('admin.products.index');

    }

    public function destroy($id,ProductRepository $repository)
    {
        $repository->delete($id);
        return redirect() -> route('admin.products.index');

    }
}
