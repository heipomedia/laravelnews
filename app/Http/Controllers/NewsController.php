<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use App\User;
use Auth;

class NewsController extends Controller
{
    /**
     * Gibt das Formular aus, um eine News zu erstellen
     * Hier werden zudem alle Kategorien aus der Datenbank geladen, um sie im Formular anzuzeigen
     *
     */
    public function create()
    {
        $categories = Category::all();
        return view('news.create', compact('categories'));
    }

    /**
     * Speichert die News in der Datenbank ab
     *
     */
    public function save(Request $request)
    {
        // Hier wird die Eingabe des Nutzers validiert
        $this->validate($request, [
            'titel' => 'required|max:255',
            'text' => 'required',
            'category' => 'required',
        ]);

        // Hier holen wir die aktuelle ID des eingeloggten Nutzers um sie zu speichern
        $user_id = Auth::id();

        // Neues News-Model
        $news = new News;

        // Das Model wird mit Daten gefüllt...
        $news->titel = $request->titel;
        $news->text = $request->text;
        $news->user_id = $user_id;

        // ...und gespeichert
        $news->save();

        // Hiermit werden die Kategorien mit der News verbunden
        $news->categories()->sync($request->category);

        // Der User wird bei erfolgreichem Speichern zurück zum Formular geschickt
        return redirect()->back()->with('status', 'News saved');
	}

    /**
     * Gibt alle News auf der Startseite in einer Liste aus
     *
     */
    public function overview()
    {
        // Alle News in der Variable $news speichern
        $news = News::orderBy('id', 'desc')->get();

        // Hier wird der View /news/overview.blade.php ausgegeben mit den Daten aus $news
        return view('news.overview', compact('news'));
    }

    /**
     * Gibt eine einzelne News aus
     *
     */
    public function view($id)
    {
        // Hier wird die genaue News aus der Datenbank geladen inkl. Kategorien
        $news = News::where('id', $id)->with('categories')->first();
        // Wir brauchen auch den User, der die News geschrieben hat. Der wird hier ausgegeben.
        $user = User::where('id', $news->user_id)->first();
        // Hier geben wir die News dann aus
        return view('news.view', compact('news', 'user'));
    }
}
