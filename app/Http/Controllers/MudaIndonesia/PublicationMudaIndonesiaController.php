<?php

namespace App\Http\Controllers\MudaIndonesia;

use App\Http\Controllers\Controller;
use App\Models\Header;
use App\Models\Publication;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class PublicationMudaIndonesiaController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            // $query = ListPublication::query()->where('publication_id', 2);

            // return DataTables::of($query)
            return DataTables::of()
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

        $publication = Publication::where('id', 2)->first();

        return view('pages.muda-indonesia.publication.index', [
            'publication' => $publication
        ]);
    }

    // Update Title and Desc Publication
    public function updatePublication(Request $request, $id)
    {
        $data = $request->all();
        $item = Publication::findOrFail($id);

        $item->update($data);

        return redirect()->route('publication-muda-indonesia');
    }

    public function more()
    {
        $data = [
            'header' => Header::where('id', 2)->first(),
            'publication' => Publication::where('id', 2)->first(),
            'socialMedia' => SocialMedia::where('id', 2)->first(),
        ];

        return view('pages.muda-indonesia.publication.more', $data);
    }

    public function detail()
    {
        $data = [
            'header' => Header::where('id', 2)->first(),
            'socialMedia' => SocialMedia::where('id', 2)->first(),
        ];

        return view('pages.muda-indonesia.publication.detail', $data);
    }
}
