<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Contracts\SlideContract;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends BaseController
{
    /**
     * @var SlideContract
     */
    protected $slideRepository;

    /**
     * SlideController constructor.
     * @param SlideContract $slideRepository
     */
    public function __construct(SlideContract $slideRepository)
    {
        $this->slideRepository = $slideRepository;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $slides = $this->slideRepository->listSlides();
        
        $this->setPageTitle('Slides', 'List of all slides');
        return view('admin.slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPageTitle('Slides', 'Create Slide');
        return view('admin.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     =>  'required|max:191',
            'link'      =>  'required|max:191',
            'image'     =>  'required|mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $slide = $this->slideRepository->createSlide($params);

        $msg = 'Slide 「'.$slide->title.'」 added successfully';

        if (!$slide) {
            return $this->responseRedirectBack('Error occurred while creating slide.', 'error', true, true);
        }
        return $this->responseRedirect('admin.slides.index', $msg ,'success',false, false);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $slide = $this->slideRepository->findSlideById($id);

        $this->setPageTitle('Slides', 'Edit Slide : '.$slide->Title);
        return view('admin.slides.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title'     =>  'required|max:191',
            'link'      =>  'required|max:191',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $slide = $this->slideRepository->updateSlide($params);

        $msg = 'Slide 「'.$slide->title.'」 updated successfully';

        if (!$slide) {
            return $this->responseRedirectBack('Error occurred while updating slide.', 'error', true, true);
        }
        return $this->responseRedirect('admin.slides.index', $msg,'success',false, false);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $targetSlide = $this->slideRepository->findSlideById($id);

        $slide = $this->slideRepository->deleteSlide($id);

        $msg = 'Slide 「'.$targetSlide->title.'」 deleted successfully';

        if (!$slide) {
            return $this->responseRedirectBack('Error occurred while deleting slide.', 'error', true, true);
        }
        return $this->responseRedirect('admin.slides.index', $msg ,'success',false, false);
    }
}
