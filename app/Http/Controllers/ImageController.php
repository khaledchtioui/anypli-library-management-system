<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ImageController extends Controller
{


    public function index(): View
    {
        return view('image');
    }





    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can save the image name to the database or perform other actions as needed.
            // Example: $imageModel->image_path = 'images/' . $imageName;
            // $imageModel->save();

            return 'Image uploaded successfully.';
        }

        return 'No image selected.';
    }
}
