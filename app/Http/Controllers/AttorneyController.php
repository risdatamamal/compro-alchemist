<?php

namespace App\Http\Controllers;

use App\Models\Attorneys;
use App\Models\ListAttorney;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class AttorneyController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = ListAttorney::query()->where('attorney_id', 1);

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
                                    <a class="dropdown-item" href="' . route('edit-attorney', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('delete-attorney', $item->id) . '" method="POST">
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
                ->rawColumns(['action', 'image_url'])
                ->make();
        }

        $attorney = Attorneys::where('id', 1)->first();

        return view('pages.attorneys.index', [
            'attorney' => $attorney
        ]);
    }

    // Update Title and Desc Attorney
    public function updateAttorney(Request $request, $id)
    {
        $data = $request->all();
        $item = Attorneys::findOrFail($id);

        $item->update($data);

        return redirect()->route('attorney');
    }

    public function create()
    {
        return view('pages.attorneys.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['image_url'] = $request->file('image_url')->store('assets/attorney', 'public');

        ListAttorney::create($data);

        return redirect()->route('attorney');
    }

    public function edit($id)
    {
        $item = ListAttorney::findOrFail($id);

        return view('pages.attorneys.edit', [
            'item' => $item
        ]);
    }

    public function updateListAttorney(Request $request, $id)
    {
        $data = $request->all();
        $item = ListAttorney::findOrFail($id);

        if ($request->file('image_url') == null) {
            $data['image_url'] = $item->image_url;
        } else if ($request->file('image_url') != null) {
            $data['image_url'] = $request->file('image_url')->store('assets/attorney', 'public');
        }

        $item->update($data);

        return redirect()->route('attorney');
    }

    public function destroy($id)
    {
        $item = ListAttorney::findorFail($id);
        $item->delete();

        return redirect()->route('attorney');
    }
}
