<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Contracts\AttributeContract;
use Illuminate\Support\Facades\DB;

class AttributeController extends BaseController
{
    //
    protected $attributeRepository;

    public function __construct(AttributeContract $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }

    public function index()
    {
        $attributes = $this->attributeRepository->listAttributes();

        $this->setPageTitle('Attributes', 'List of all attributes');
        return view('admin.attributes.index', compact('attributes'));
    }

    public function create()
    {
        $this->setPageTitle('Attributes', 'Create Attribute');
        return view('admin.attributes.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'code'          =>  'required',
            'name'          =>  'required'
        ]);

        $params = $request->except('_token');

        $attribute = $this->attributeRepository->createAttribute($params);

        $msg = 'Attribute「'.$attribute->name.'」 added successfully';

        if (!$attribute) {
            return $this->responseRedirectBack('Error occurred while creating attribute.', 'error', true, true);
        }
        return $this->responseRedirect('admin.attributes.index', $msg ,'success',false, false);
    }
    
    public function edit($id)
    {
        $attribute = $this->attributeRepository->findAttributeById($id);

        $this->setPageTitle('Attributes', 'Edit Attribute : '.$attribute->name);
        return view('admin.attributes.edit', compact('attribute'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'code'          =>  'required',
            'name'          =>  'required'
        ]);

        $params = $request->except('_token');

        $attribute = $this->attributeRepository->updateAttribute($params);

        $msg = 'Attribute「'.$attribute->name.'」 updated successfully';

        if (!$attribute) {
            return $this->responseRedirectBack('Error occurred while updating attribute.', 'error', true, true);
        }

        return $this->responseRedirect('admin.attributes.index', $msg ,'success',false, false);
    }

    public function delete($id)
    {
        // delete foreign key attribute_id
        $attributeValues = DB::table('attribute_values')
                ->where('attribute_id', $id)
                ->get();// $this->attributeRepository->deleteAttribute($id);
        if($attributeValues){
            DB::table('attribute_values')->where('attribute_id', $id)->delete();
        }

        $targetAttribute = $this->attributeRepository->findAttributeById($id);

        // delete attribute
        $attribute = $this->attributeRepository->deleteAttribute($id);
        
        $msg = 'Attribute「'.$targetAttribute->name.'」 deleted successfully';

        if (!$attribute) {
            return $this->responseRedirectBack('Error occurred while deleting attribute.', 'error', true, true);
        }
        return $this->responseRedirect('admin.attributes.index', $msg ,'success',false, false);
    }

}
