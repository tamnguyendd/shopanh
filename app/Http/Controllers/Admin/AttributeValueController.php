<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AttributeValue;
use App\Http\Controllers\Controller;
use App\Contracts\AttributeContract;
use App\Repositories\AttributeRepository;


class AttributeValueController extends Controller
{
    protected $attributeRepository;

    public function __construct(AttributeContract $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }

    public function getValues(Request $request)
    {
        $attributeId = $request->input('id');
        $attribute = $this->attributeRepository->findAttributeById($attributeId);

        $values = $attribute->values;
        //echo "<script>console.log('ID Objects: " . $attributeId . "' );</script>";
        return response()->json($values);
    }

    public function addValues(Request $request)
    {
        $value = new AttributeValue();
        $value->attribute_id = $request->input('id');
        $value->value = $request->input('value');
        $value->price = $request->input('price');
        $value->save();

        return response()->json($value);
    }

    public function updateValues(Request $request)
    {
        $value = AttributeValue::findOrFail($request->input('valueId'));
        $value->attribute_id = $request->input('id');
        $value->value = $request->input('value');
        $value->price = $request->input('price');
        $value->save();

        return response()->json($value);
    }
    public function deleteValues(Request $request)
    {
        $value = AttributeValue::findOrFail($request->input('id'));
        $value->delete();
    
        return response()->json(['status' => 'success', 'message' => 'Attribute value deleted successfully.']);
    }

}