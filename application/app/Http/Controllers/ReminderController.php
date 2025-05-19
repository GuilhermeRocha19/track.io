<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class ReminderController extends Controller
{
    use AuthorizesRequests;

    public function index(): View
    {
        $reminders = Reminder::where('user_id', Auth::id())
            ->orderBy('date', 'asc')
            ->get();

        return view('reminders.index', compact('reminders'));
    }

    public function create(): View
    {
        return view('reminders.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date'
        ]);

        $reminder = new Reminder($validated);
        $reminder->user_id = Auth::id();
        $reminder->save();

        return redirect()
            ->route('reminders.index')
            ->with('success', 'Lembrete criado com sucesso!');
    }

    public function edit(Reminder $reminder): View
    {
        $this->authorize('update', $reminder);
        return view('reminders.edit', compact('reminder'));
    }

    public function update(Request $request, Reminder $reminder): RedirectResponse
    {
        $this->authorize('update', $reminder);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date'
        ]);

        $reminder->update($validated);

        return redirect()
            ->route('reminders.index')
            ->with('success', 'Lembrete atualizado com sucesso!');
    }

    public function destroy(Reminder $reminder): RedirectResponse
    {
        $this->authorize('delete', $reminder);
        
        $reminder->delete();

        return redirect()
            ->route('reminders.index')
            ->with('success', 'Lembrete excluído com sucesso!');
    }
}
