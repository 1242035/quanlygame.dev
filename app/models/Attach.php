<?php
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

Class Attach extends Eloquent implements StaplerableInterface
{
// We'll need to use the Stapler Eloquent trait in our model (see setup for more info).
use EloquentTrait;

    /**
    * We can add our attachments to the fillable array so that they're
    * mass assignable on the model.
    *
    * @var array
    */
    protected $fillable = ['Image', 'File'];

    /**
    * Inside our model's constructor, we'll define some stapler attachments:
    *
    * @param attributes
    */
    public function __construct(array $attributes = array())
    {
        // Define an attachment named 'foo', with both thumbnail (100x100) and large (300x300) styles,
        // using custom url and default_url configurations:
        $this->hasAttachedFile('Image', [
            'styles' => [
                'thumbnail' => '100x100',
                'large' => '300x300'
            ],
            'extension' => array('.jpg','.jpeg','.png','.gif'),
            'url' => '/system/:attachment/:id_partition/:style/:filename',
            'default_url' => '/:attachment/:style/missing.jpg'
        ]);

        // Define an attachment named 'bar', with both thumbnail (100x100) and large (300x300) styles,
        // using custom url and default_url configurations, with the keep_old_files flag set to true
        // (so that older file uploads aren't deleted from the file system) and image cropping turned on:
        $this->hasAttachedFile('File', [
        'styles' => [
                'thumbnail' => '100x100#',
                'large' => '300x300#'
                ],
            'url' => '/system/:attachment/:id_partition/:style/:filename',
            'keep_old_files' => true
        ]);


        // IMPORTANT:  the call to the parent constructor method
        // should always come after we define our attachments.
        parent::__construct($attributes);
    }
}