<?php

namespace App\Http\Controllers;

use App\Models\ListPracticingArea;
use App\Models\PracticingArea;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PracticingAreaController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = ListPracticingArea::query()->where('practicing_area_id', 1);

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
                                    <a class="dropdown-item" href="' . route('edit-practicing-area', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('delete-practicing-area', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>';
                })
                ->editColumn('image_url', function ($item) {
                    return $item->image_url ? '<img src="' . Storage::url($item->image_url) . '" style="max-height: 40px;"/>' : '';
                })
                ->editColumn('desc', function ($item) {
                    return $item->desc ? $item->desc : '';
                })
                ->rawColumns(['action', 'desc', 'image_url'])
                ->make();
        }

        $practicing_area = PracticingArea::where('id', 1)->first();

        return view('pages.practicing-areas.index', [
            'practicing_area' => $practicing_area
        ]);
    }

    // Update Title, Desc Practicing Area
    public function updatePracticingArea(Request $request, $id)
    {
        $data = $request->all();
        $item = PracticingArea::findOrFail($id);

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

        $item->update($data);

        return redirect()->route('practicing-area');
    }

    public function create()
    {
        return view('pages.practicing-areas.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['image_url'] = $request->file('image_url')->store('assets/practicingarea', 'public');

        ListPracticingArea::create($data);

        return redirect()->route('practicing-area');
    }

    public function edit($id)
    {
        $item = ListPracticingArea::findOrFail($id);

        return view('pages.practicing-areas.edit', [
            'item' => $item
        ]);
    }

    // Update List Practicing Area
    public function updateListPracticingArea(Request $request, $id)
    {
        $data = $request->all();
        $item = ListPracticingArea::findOrFail($id);

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
            $data['image_url'] = $request->file('image_url')->store('assets/practicingarea', 'public');
        }

        $item->update($data);

        return redirect()->route('practicing-area');
    }

    public function destroy($id)
    {
        $item = ListPracticingArea::findorFail($id);
        $item->delete();

        return redirect()->route('practicing-area');
    }
}
