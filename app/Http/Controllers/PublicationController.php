<?php

namespace App\Http\Controllers;

use App\Models\ListPublication;
use App\Models\Publication;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PublicationController extends Controller
{

    public function index()
    {
        if (request()->ajax()) {
            $query = ListPublication::query()->where('publication_id', 1);

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
                                    <a class="dropdown-item" href="' . route('edit-publication', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('delete-publication', $item->id) . '" method="POST">
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

        $publication = Publication::where('id', 1)->first();

        return view('pages.publication.index', [
            'publication' => $publication
        ]);
    }

    // Update Title and Desc Publication
    public function updatePublication(Request $request, $id)
    {
        $data = $request->all();
        $item = Publication::findOrFail($id);

        $item->update($data);

        return redirect()->route('publication');
    }

    public function create()
    {
        return view('pages.publication.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['image_url'] = $request->file('image_url')->store('assets/publication', 'public');

        $data['slug'] = Str::slug($request->title);

        ListPublication::create($data);

        return redirect()->route('publication');
    }

    public function edit($id)
    {
        $item = ListPublication::findOrFail($id);

        return view('pages.publication.edit', [
            'item' => $item
        ]);
    }

    public function updateListPublication(Request $request, $id)
    {
        $data = $request->all();
        $item = ListPublication::findOrFail($id);

        if ($request->file('image_url') == null) {
            $data['image_url'] = $item->image_url;
        } else if ($request->file('image_url') != null) {
            $data['image_url'] = $request->file('image_url')->store('assets/publication', 'public');
        }

        $data['slug'] = Str::slug($request->title);

        $item->update($data);

        return redirect()->route('publication');
    }

    public function destroy($id)
    {
        $item = ListPublication::findorFail($id);
        $item->delete();

        return redirect()->route('publication');
    }

    public function more()
    {
        $data = [
            'publication' => Publication::where('id', 1)->first(),
            'socialMedia' => SocialMedia::where('id', 1)->first(),
            'listPublication' => ListPublication::where('publication_id', 1)->get(),
        ];

        return view('pages.publication.more', $data);
    }

    public function moreCategory($category)
    {
        $data = [
            'publication' => Publication::where('id', 1)->first(),
            'listPublication' => ListPublication::where([
                ['publication_id', 1],
                ['category', $category],
            ])->get(),

            'socialMedia' => SocialMedia::where('id', 1)->first(),
        ];

        return view('pages.publication.category', $data);
    }

    public function detail($category, $slug)
    {
        $data = [
            'publication' => ListPublication::where([
                ['publication_id', 1],
                ['category', $category],
                ['slug', $slug],
            ])->firstOrFail(),

            'socialMedia' => SocialMedia::where('id', 1)->first(),
        ];

        return view('pages.publication.detail', $data);
    }
}
