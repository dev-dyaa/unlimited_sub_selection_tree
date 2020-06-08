<?php 
namespace App\Controllers;
use App\Models\Category as CategoryModel;
class Category extends BaseController
{
	public function index()
	{
		$categoryModel = new CategoryModel();
		$categories = $categoryModel->where('parent_id', 0)->findAll();
		return view('category', ['main' => $categories]);
	}


	public function getSub($id = 0)
	{
		$response['status'] = 200;
		$response['sub_categories'] =null;
		try {
			if ($id) {
				$categoryModel = new CategoryModel();
				$subCategories = $categoryModel->where('parent_id', $id)->findAll();
				$response['sub_categories'] = $subCategories;
			}
		} catch (\Exception $e) {
			$response['status'] = 400;
		}
		echo json_encode($response);
	}
	//--------------------------------------------------------------------

}
