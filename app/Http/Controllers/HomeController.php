<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.index');
    }

    public function usersTable()
    {
        try {
            $users =  User::with('roles')->whereHas('roles', function ($q) {
                $q->whereNotIn('name', ['Author']);
            });
            return DataTables::of($users)
                ->addColumn('role', function ($data) {
                    if (isset($data->roles->toArray()[0]['name'])) {
                        return $data->roles->toArray()[0]['name'];
                    } else {
                        return '-';
                    }
                })
                ->addColumn('created_at', function ($data) {
                    return Carbon::parse($data->created_at)->format('M-d-Y h:i A');
                })
                ->filterColumn('created_at', function ($query, $keyword) {
                    $sql = 'DATE_FORMAT(created_at, "%b-%d-%Y %h:%i %p") like ?';
                    $query->whereRaw($sql, ["%{$keyword}%"]);
                })
                ->make(true);
        } catch (Exception $e) {
            Log::error('Exception in usersTable in HomeController --- ' . $e->getMessage());
        }
    }

    public function authorsTable()
    {
        try {
            $authors =  User::with('roles')->whereHas('roles', function ($q) {
                $q->whereIn('name', ['Author']);
            });
            return DataTables::of($authors)
                ->addColumn('created_at', function ($data) {
                    return Carbon::parse($data->created_at)->format('M-d-Y h:i A');
                })
                ->filterColumn('created_at', function ($query, $keyword) {
                    $sql = 'DATE_FORMAT(created_at, "%b-%d-%Y %h:%i %p") like ?';
                    $query->whereRaw($sql, ["%{$keyword}%"]);
                })
                ->make(true);
        } catch (Exception $e) {
            Log::error('Exception in authorsTable in HomeController --- ' . $e->getMessage());
        }
    }

    public function booksTable()
    {
        try {
            $authors =  Books::where('user_id', auth()->user()->id);
            return DataTables::of($authors)
                ->addColumn('created_at', function ($data) {
                    return Carbon::parse($data->created_at)->format('M-d-Y h:i A');
                })
                ->filterColumn('created_at', function ($query, $keyword) {
                    $sql = 'DATE_FORMAT(created_at, "%b-%d-%Y %h:%i %p") like ?';
                    $query->whereRaw($sql, ["%{$keyword}%"]);
                })
                ->make(true);
        } catch (Exception $e) {
            Log::error('Exception in booksTable in HomeController --- ' . $e->getMessage());
        }
    }

    public function addNewSystemUser(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'lastName' => 'required',
                'email' => 'required|email|unique:users',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->all());
            }
        } catch (Exception $e) {
            Log::error('Exception in addNewSystemUser in HomeController --- ' . $e->getMessage());
        }
    }

    public function profile()
    {
        try {
            return view('pages.profile', [
                'data' => User::find(auth()->user()->id)
            ]);
        } catch (Exception $e) {
            Log::error('Exception in profile in HomeController --- ' . $e->getMessage());
        }
    }
}
