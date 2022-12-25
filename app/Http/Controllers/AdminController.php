<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = User::query();

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
                                    <a class="dropdown-item" href="' . route('admin.edit', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('admin.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.index');
    }

    public function create()
    {
        return view('pages.admin.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($request->password);

        $item = User::where("email", $request->email)->first();

        if ($item != null) {
            $item = $item->email;
        } else {
            $item = '';
        }

        if ($request->email == $item) {
            $request->session()->flash('failed', 'Data gagal dibuat karena ' . 'Email ' . $request->email . ' sudah digunakan!');

            return back()->withInput();
        }

        User::create($data);

        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $item = User::findOrFail($id);

        return view('pages.admin.edit', [
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = User::findOrFail($id);

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            unset($data['password']);
        }

        $item->update($data);

        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id);

        $item->delete();

        return redirect()->route('admin.index');
    }
}
