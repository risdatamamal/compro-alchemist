<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\ListExperience;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables as DataTables;

class ExperienceController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = ListExperience::query();

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
                                    <a class="dropdown-item" href="' . route('edit-experience', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('delete-experience', $item->id) . '" method="POST">
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

        $experience = Experience::where('id', 1)->first();

        return view('pages.experiences.index', [
            'experience' => $experience
        ]);
    }

    // Update Title and Desc Experience
    public function updateExperience(Request $request, $id)
    {
        $data = $request->all();
        $item = Experience::findOrFail($id);

        $item->update($data);

        return redirect()->route('experience');
    }

    public function create()
    {
        return view('pages.experiences.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['image_url'] = $request->file('image_url')->store('assets/experience', 'public');

        ListExperience::create($data);

        return redirect()->route('experience');
    }

    public function edit($id)
    {
        $item = ListExperience::findOrFail($id);

        return view('pages.experiences.edit', [
            'item' => $item
        ]);
    }

    public function updateListExperience(Request $request, $id)
    {
        $data = $request->all();
        $item = ListExperience::findOrFail($id);

        if ($request->file('image_url') == null) {
            $data['image_url'] = $item->image_url;
        } else if ($request->file('image_url') != null) {
            $data['image_url'] = $request->file('image_url')->store('assets/experience', 'public');
        }

        $item->update($data);

        return redirect()->route('experience');
    }

    public function destroy($id)
    {
        $item = ListExperience::findorFail($id);
        $item->delete();

        return redirect()->route('experience');
    }
}
