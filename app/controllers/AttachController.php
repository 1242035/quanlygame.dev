<?php
use Illuminate\Support\Facades\Input;

/**
 * Created by PhpStorm.
 * User: honganh
 * Date: 12/10/2014
 * Time: 01:40
 */

class AttachController extends BaseController{
    public function __construct()
    {
        // Boot stapler:
        Stapler::boot();

        // Set the configuration driver (we're using the default config driver here; if you choose to implement your own you'll need to implement Codesleeve\Stapler\Config\ConfigurableInterface):
        $config = new Codesleeve\Stapler\Config\NativeConfig;
        Stapler::setConfigInstance($config);

        // Set the location to your application's document root:
        $config->set('stapler.public_path', base_path() );

        // Set the location to your application's base folder.
        $config->set('stapler.base_path', app_path());
        parent::__contruct();
    }
    public function imageAction()
    {
        $image = new Attach();
        $image->Image = Input::file('Image');
        $image->save();
        return $image;
    }
    public function fileAction()
    {
        $file = new Attach();
        $file->File = Input::file('File');
        $file->save();
        return $file;
    }

} 