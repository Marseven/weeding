<?php

namespace App\Http\Controllers\Admin;

use App\Exports\RegistrationExport;
use App\Http\Controllers\Controller;
use App\Models\Compagnie;
use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RegistrationController extends Controller
{
    //
    public function index()
    {
        $registrations = Registration::with('attendee')->where('deleted', NULL)->get();
        return view('admin.registration.index', compact('registrations'));
    }

    public function ajaxItem(Request $request)
    {
        $registration = Registration::find($request->id);

        $title = "";
        if ($request->action == "view") {
        } elseif ($request->action == "edit") {

            $body = '<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelOne">Mettre à jour l\'invité N° : ' . $registration->id . '</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>

            <form action="' . url('admin/update/registration/' . $registration->id) . '" method="POST">
                <div class="modal-body">
                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Table</label>
                            <input class="form-control" type="text" name="number_table" value="' . $registration->number_table . '" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
            </form>';
        } else {

            $body = '
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelOne">Supprimer l\'invitation N° : ' . $registration->id . '</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>

            <form action="' . url('admin/update/registration/' . $registration->id) . '" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <input type="hidden" name="delete" value="true">
                    Êtes-vous sûr de vouloir supprimer cette invitation ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </div>
            </form>
            ';
        }

        $response = array(
            "title" => $title,
            "body" => $body,
        );

        return response()->json($response);
    }

    public function update(Request $request, $registration)
    {
        $registration = Registration::find($registration);

        if (isset($_POST['delete'])) {
            $registration->deleted = true;
            $registration->deleted_at = now();
            if ($registration->save()) {
                return back()->with('success', "L'invité a été supprimée.");
            } else {
                return back()->with('error', "L'invité n'a pas été supprimée.");
            }
        } else {
            $registration->number_table = $request->number_table;
            if ($registration->save()) {
                return back()->with('success', 'Invité mis à jour avec succès.');
            } else {
                return back()->with('error', 'Un problème est survenu.');
            }
        }
    }

    public function export()
    {
        return Excel::download(new RegistrationExport(), 'Liste_invites_deniseguy_' . now() . '.xlsx');
    }
}
