<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

define('WIDTH_MIN', 300);     // Largeur max de l'image en pixels
define('HEIGHT_MIN', 300);
// todo: specified size to user

class FileController extends Controller
{

    /**
     * Display all annonce in specified category.
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    static function picture(UploadedFile $request)
    {
        $result = [];

        if ($request != NULL) {

            // On recupere les dimensions du fichier
            $infosImg = getimagesize($request->path());

            //dd($infosImg);

            if (($infosImg[0] >= WIDTH_MIN) && ($infosImg[1] >= HEIGHT_MIN)) {
                //get filename with extension
                $filenamewithextension = $request->getClientOriginalName();

                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                $filename = str_replace($filename, " ", "");

                //get file extension
                $extension = $request->getClientOriginalExtension();


                //filename to store
                $filenametostore = $filename . '_' . time() . '_dgc.' . $extension;

                //Upload File
                $request->move(public_path('/upload/photo/'),  $filenametostore);

                $filePath_traite = '/upload/photo/' . $filenametostore;


                $result['state'] = true;
                $result['url'] =  $filePath_traite;
                $result['message'] = "Image uploadée avec succès!";

                return $result;
                //change the route as per your flow
            } else {
                $result['state'] = false;
                $result['message'] = "Les dimensions de votre images sont trop petites, les dimensions minimales recommandées sont 300px X 300px.";

                return $result;
            }
        } else {
            $result['state'] = false;
            $result['message'] = "Image n\'a pas été uploadé";

            return $result;
        }
    }

    static function avatar(UploadedFile $request)
    {
        $result = [];

        if ($request != NULL) {

            //get filename with extension
            $filenamewithextension = $request->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $filename = str_replace($filename, " ", "");

            //get file extension
            $extension = $request->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '_profil.' . $extension;

            //Upload File
            $request->move(public_path('/upload/avatar/'),  $filenametostore);

            $filePath_traite = '/upload/avatar/' . $filenametostore;

            $result['state'] = true;
            $result['url'] =  $filePath_traite;
            $result['message'] = "Fichier uploadé avec succès!";

            return $result;
            //change the route as per your flow
        } else {
            $result['state'] = false;
            $result['message'] = "Le fichier n\'a pas été uploadé";

            return $result;
        }
    }

    static function stock(UploadedFile $request)
    {
        $result = [];

        if ($request != NULL) {

            //get filename with extension
            $filenamewithextension = $request->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $filename = str_replace($filename, " ", "");

            //get file extension
            $extension = $request->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '_stock.' . $extension;

            //Upload File
            $request->move(public_path('/upload/stock/'),  $filenametostore);

            $filePath_traite = '/upload/stock/' . $filenametostore;

            $result['state'] = true;
            $result['url'] =  $filePath_traite;
            $result['message'] = "Fichier uploadé avec succès!";

            return $result;
            //change the route as per your flow
        } else {
            $result['state'] = false;
            $result['message'] = "Le fichier n\'a pas été uploadé";

            return $result;
        }
    }

    static function importation(UploadedFile $request, $type)
    {
        $result = [];

        if ($request != NULL) {

            //get filename with extension
            $filenamewithextension = $request->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $filename = str_replace($filename, " ", "");

            //get file extension
            $extension = $request->getClientOriginalExtension();

            //filename to store
            $filenametostore = $type . '_' . time() . '_importation.' . $extension;

            //Upload File
            $request->move(public_path('/upload/importation/'),  $filenametostore);

            $filePath_traite = '/upload/importation/' . $filenametostore;

            $result['state'] = true;
            $result['url'] =  $filePath_traite;
            $result['message'] = "Fichier uploadé avec succès!";

            return $result;
            //change the route as per your flow
        } else {
            $result['state'] = false;
            $result['message'] = "Le fichier n\'a pas été uploadé";

            return $result;
        }
    }

    static function destroy($image)
    {
        Storage::disk('s3')->delete($image);
        return back()->withSuccess('Image a été supprimé avec succès.');
    }
}
