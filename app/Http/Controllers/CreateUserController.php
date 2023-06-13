<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Validator;


class CreateUserController extends Controller
{
    public function createUser(Request $request)
    {
        // Validez les données du formulaire
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            // Ajoutez d'autres règles de validation pour les autres champs
        ]);

        // Si la validation échoue, renvoyez les erreurs
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Enregistrez les données dans la base de données
        $utilisateur = new Utilisateur();
        $utilisateur->nom = $request->input('nom');
        $utilisateur->prenom = $request->input('prenom');
        $utilisateur->email = $request->input('email');
        // Définissez les autres attributs du modèle en fonction des champs du formulaire
        $utilisateur->save();

        // Réponse JSON en cas de succès
        return response()->json(['message' => 'Utilisateur créé avec succès']);
    }
}
