<?php

namespace Rocket\Http\Controllers\Backend;

use Illuminate\Http\Request;

use Rocket\Http\Requests;
use Rocket\Models\Slider;

class SliderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $sliders = Slider::all();
        return view('backend.slider.index', ['sliders' => $sliders]);
    }

    public function create()
    {
        return view('backend.slider.form');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function store(Request $request)
    {
        $image = $request->file('file');

        $imageName = time().$image->getClientOriginalName();

        $image->move(public_path('sliders'),$imageName);

        Slider::create([
            'name' => $imageName
        ]);

        return redirect()->route('backend.slider.index')->with('success', 'Successfully uploaded slider image');
    } 

    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('backend.slider.index')->with('success', 'Successfully deleted slider image');

    }   
}
