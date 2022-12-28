<?php

namespace App\Http\Controllers;

use App\Models\ListClient;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables as DataTables;

class ClientController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = ListClient::query();

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
                                    <a class="dropdown-item" href="' . route('edit-client', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('delete-client', $item->id) . '" method="POST">
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

        return view('pages.client.index');
    }

    public function create()
    {
        return view('pages.client.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['image_url'] = $request->file('image_url')->store('assets/client', 'public');

        ListClient::create($data);

        return redirect()->route('client');
    }

    public function edit($id)
    {
        $item = ListClient::findOrFail($id);

        return view('pages.client.edit', [
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = ListClient::findOrFail($id);

        if ($request->file('image_url') == null) {
            $data['image_url'] = $item->image_url;
        } else if ($request->file('image_url') != null) {
            $data['image_url'] = $request->file('image_url')->store('assets/client', 'public');
        }

        $item->update($data);

        return redirect()->route('client');
    }

    public function destroy($id)
    {
        $item = ListClient::findorFail($id);
        $item->delete();

        return redirect()->route('client');
    }
}
