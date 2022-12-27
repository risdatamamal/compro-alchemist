<?php

namespace App\Http\Controllers;

use App\Models\ListOurService;
use App\Models\OurService;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables as DataTables;

class OurServiceController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = ListOurService::query();

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
                                    <a class="dropdown-item" href="' . route('edit-our-service', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('delete-our-service', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->editColumn('icon_url', function ($item) {
                    return $item->icon_url ? '<img src="' . Storage::url($item->icon_url) . '" style="max-height: 40px;"/>' : '';
                })
                ->rawColumns(['action', 'icon_url'])
                ->make();
        }

        $service = OurService::where('id', 1)->first();

        return view('pages.our-services.index', [
            'service' => $service
        ]);
    }

    public function create()
    {
        return view('pages.our-services.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['icon_url'] = $request->file('icon_url')->store('assets/ourservice', 'public');

        ListOurService::create($data);

        return redirect()->route('our-service');
    }

    public function edit($id)
    {
        $item = ListOurService::findOrFail($id);

        return view('pages.our-services.edit', [
            'item' => $item
        ]);
    }

    // Update List Our Service
    public function updateListOurService(Request $request, $id)
    {
        $data = $request->all();
        $data['icon_url'] = $request->file('icon_url')->store('assets/ourservice', 'public');
        $item = ListOurService::findOrFail($id);

        $item->update($data);

        return redirect()->route('our-service');
    }

    // Update Title and Desc Our Service
    public function updateOurService(Request $request, $id)
    {
        $data = $request->all();
        $item = OurService::findOrFail($id);

        $item->update($data);

        return redirect()->route('our-service');
    }

    public function destroy($id)
    {
        $item = ListOurService::findorFail($id);
        $item->delete();

        return redirect()->route('our-service');
    }
}
