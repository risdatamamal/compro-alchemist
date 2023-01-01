<?php

namespace App\Http\Controllers\MudaIndonesia;

use App\Http\Controllers\Controller;
use App\Models\ListOurService;
use App\Models\OurService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables as DataTables;

class OurServiceMudaIndonesiaController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = ListOurService::query()->where('our_service_id', 2);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1 rounded-pill"
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('edit-our-service-muda-indonesia', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('delete-our-service-muda-indonesia', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>';
                })
                ->editColumn('desc', function ($item) {
                    return $item->desc ? $item->desc : '';
                })
                ->rawColumns(['action', 'desc'])
                ->make();
        }

        $ourService = OurService::where('id', 2)->first();

        return view('pages.muda-indonesia.our-services.index', [
            'ourService' => $ourService
        ]);
    }

    public function create()
    {
        return view('pages.muda-indonesia.our-services.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        ListOurService::create($data);

        return redirect()->route('our-service-muda-indonesia');
    }

    public function edit($id)
    {
        $item = ListOurService::findOrFail($id);

        return view('pages.muda-indonesia.our-services.edit', [
            'item' => $item
        ]);
    }

    // Update List Our Service
    public function updateListOurService(Request $request, $id)
    {
        $data = $request->all();
        $item = ListOurService::findOrFail($id);

        $item->update($data);

        return redirect()->route('our-service-muda-indonesia');
    }

    public function destroy($id)
    {
        $item = ListOurService::findorFail($id);
        $item->delete();

        return redirect()->route('our-service-muda-indonesia');
    }

    // Update Title, Desc and Image Our Service
    public function updateOurService(Request $request, $id)
    {
        $data = $request->all();
        $item = OurService::findOrFail($id);

        if ($request->title) {
            $data['title'] = $request->title;
        } else {
            unset($data['title']);
        }

        if ($request->desc) {
            $data['desc'] = $request->desc;
        } else {
            unset($data['desc']);
        }

        if ($request->file('image_url') == null) {
            $data['image_url'] = $item->image_url;
        } else if ($request->file('image_url') != null) {
            $data['image_url'] = $request->file('image_url')->store('assets/our-service', 'public');
        }

        $item->update($data);

        return redirect()->route('our-service-muda-indonesia');
    }
}
