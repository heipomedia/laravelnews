<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Gibt das Formular aus, um eine News zu erstellen
     *
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Speichert eine neue Kategorie in der Datenbank
     *
     */
    public function save(Request $request)
    {
        // Validator
        // Der Name der Kategorie muss vorhanden sein und darf maximal 50 Zeichen lang sein
        $this->validate($request, [
            'name' => 'required|max:50',
        ]);

        // Neue Instanz des Category-Models wird angelegt
        $category = new Category;

        // Das neue Category-Model wird mit Daten aus dem Formular gefüllt
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');

        // Die Kategorie wird gespeichert. Hier trägt sie Laravel in der Datenbank ein.
        $category->save();

        // Hier wird der Nutzer zurück zum Formular geleitet
        return redirect()->back()->with('status', 'Kategorie gespeichert');
    }
}
