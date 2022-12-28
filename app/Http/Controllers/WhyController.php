<?php

namespace App\Http\Controllers;

use App\Models\ListWhy;
use App\Models\Why;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables as DataTables;

class WhyController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = ListWhy::query();

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
                                    <a class="dropdown-item" href="' . route('edit-why', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('delete-why', $item->id) . '" method="POST">
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

        $why = Why::where('id', 1)->first();

        return view('pages.why.index', [
            'why' => $why
        ]);
    }

    public function create()
    {
        return view('pages.why.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        ListWhy::create($data);

        return redirect()->route('why');
    }

    public function edit($id)
    {
        $item = ListWhy::findOrFail($id);

        return view('pages.why.edit', [
            'item' => $item
        ]);
    }

    // Update List Why
    public function updateListWhy(Request $request, $id)
    {
        $data = $request->all();
        $item = ListWhy::findOrFail($id);

        $item->update($data);

        return redirect()->route('why');
    }

    public function destroy($id)
    {
        $item = ListWhy::findorFail($id);
        $item->delete();

        return redirect()->route('why');
    }

    // Update Title, Desc and Image Why
    public function updateWhy(Request $request, $id)
    {
        $data = $request->all();
        $item = Why::findOrFail($id);

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
            $data['image_url'] = $request->file('image_url')->store('assets/why', 'public');
        }

        $item->update($data);

        return redirect()->route('why');
    }
}
