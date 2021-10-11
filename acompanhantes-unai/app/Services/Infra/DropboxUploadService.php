<?php

namespace App\Services\Infra;

use Exception;
use Illuminate\Support\Facades\Storage;
use Spatie\Dropbox\Client;

class DropboxUploadService implements UploadServiceContract
{
    public function upload($file, $directory): string
    {
        try {
            $logo_url = Storage::disk('dropbox')->put($directory, $file, 'public');
            $client = new Client(env('DROP_BOX_ACCESS_TOKEN'));
            $untreatedPath = $client->createSharedLinkWithSettings($logo_url)['url'];
            return str_replace('www.dropbox.com', 'dl.dropboxusercontent.com', $untreatedPath);
        } catch (ApplicationException $ex) {
            throw $ex;
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
