<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Validator;
use DB;
use App\Date;
use App\Event;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index() {
        $event = Event::where('user_id', app('current_user')->id)
        ->orderBy('event_day', 'DESC')
        ->get();
        return view('index', ['events' => $event]);
    }

    public function create() {
        return view('event/create');
    }

    public function store(Request $request) {
        try {
            $event = DB::transaction(function() use($request) {
                $event = Event::create($request->input());
                return $event;
            });
            return redirect()->route('date.index', ['event' => $event]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', '予期せぬエラーが発生しました。運営元へご連絡下さい。');
        }
    }

    public function show($id) {
        $event = Event::find($id);
        return view('event/show',['event' => $event]);
    }

    public function edit($id) {
        $event = Event::find($id);
        return view('event/edit',['event' => $event]);
    }

    public function update(Request $request) {
        try {
            $event = DB::transaction(function() use($request) {
                $event = Event::find($request->id);
                $event->fill($request->all())->update();
                return $event;
            });
            return redirect()->route('date.index', ['event' => $event]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', '予期せぬエラーが発生しました。運営元へご連絡下さい。');
        }
    }

    public function destroy($id) {
        try {
            $event = DB::transaction(function() use($id) {
                $event = Event::find($id);
                $event->delete();
                return $event;
            });
            return redirect()->route('date.index', ['event' => $event]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', '予期せぬエラーが発生しました。運営元へご連絡下さい。');
        }
    }
}
