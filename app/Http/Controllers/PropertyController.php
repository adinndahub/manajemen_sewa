<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Property; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PropertyController extends Controller
{
    public function index() {
        $data = [
            'title'     => 'Data Property',
            'property'  => Property::with('user')->get(), 
        ];

        return view('admin.property.index', $data);
    }

    public function create() {
        $data = array(
            'title'     => 'Add Data Property',
            'user'      => User::where('role', 'Admin')->get(), 
            // "menuAdminUser"     => "active",
        );

        return view('admin/property/create', $data);
    }

    public function store(Request $request) {
        $request->validate([
            'user_id'   => 'required',
            'name'      => 'required',
            'type'      => 'required',
            'address'   => 'required|string',
            'price'     => 'required|numeric|min:0',
            'rent_type' => 'required|in:monthly,yearly',
            'status'    => 'required|in:available,booked',
        ],[
            'user_id.required'   => 'User must be selected',
            'name.required'      => 'Name has not been entered',
            'type.required'      => 'Type must be selected',
            'address.required'   => 'Address has not been entered',
            'address.string'     => 'Address must be in text format',
            'price.required'     => 'Price has not been entered',
            'price.numeric'      => 'Price must be a number',
            'price.min'          => 'Price cannot be less than 0',
            'rent_type.required' => 'Rent type must be selected',
            'rent_type.in'       => 'Rent type must be either monthly or yearly',
            'status.required'    => 'Status must be selected',
            'status.in'          => 'Status must be either available or booked',
        ]);
        
        $user = User::findOrFail($request->user_id);
        $property = new Property;
        $property->user_id   = $request->user_id;
        $property->name      = $request->name;
        $property->type      = $request->type;
        $property->address   = $request->address;
        $property->price     = $request->price;
        $property->rent_type = $request->rent_type;
        $property->status    = $request->status;
        $property->save();

        return redirect()->route('property')->with('success', 'Data has been successfully added!'); 
    }

    public function edit($id) {
        $data = array(
            'title'         => 'Edit Data Tenant',
            'property'      => Property::with('user')->findOrFail($id),
            // "menuAdminUser"     => "active",
        );

        return view('admin/property/edit', $data);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name'      => 'required',
            'type'      => 'required',
            'address'   => 'required|string',
            'price'     => 'required|numeric|min:0',
            'rent_type' => 'required|in:monthly,yearly',
            'status'    => 'required|in:available,booked',
        ],[
            'name.required'      => 'Name has not been entered',
            'type.required'      => 'Type must be selected',
            'address.required'   => 'Address has not been entered',
            'address.string'     => 'Address must be in text format',
            'price.required'     => 'Price has not been entered',
            'price.numeric'      => 'Price must be a number',
            'price.min'          => 'Price cannot be less than 0',
            'rent_type.required' => 'Rent type must be selected',
            'status.required'    => 'Status must be selected',
        ]);
        
        $property = Property::findOrFail($id);
        $property->name      = $request->name;
        $property->type      = $request->type;
        $property->address   = $request->address;
        $property->price     = $request->price;
        $property->rent_type = $request->rent_type;
        $property->status    = $request->status;
        $property->save();

        return redirect()->route('property')->with('success', 'Data has been successfully updated!'); 
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return redirect()->route('property')->with('success', 'Data berhasil dihapus');
    }

}
