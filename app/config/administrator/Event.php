<?php
/**
 * Created by PhpStorm.
 * User: honganh
 * Date: 11/10/2014
 * Time: 23:02
 */

/**
 * News model config
 */

return array(

    'title' => 'Events',

    'single' => 'Event',

    'model' => 'Event',

    /**
     * The display columns
     */
    'columns' => array(
        'title' => array(
            'title' => 'Title',
        ),
        'short' => array(
            'title' => 'Short',
        ),
        'description' => array(
            'title' => 'Content',
        ),
        'start_date' => array(
            'title' => 'Start'
        ),
        'end_date' => array(
            'title'=> 'End'
        ),
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'title' => array(
            'title' => 'Title',
            'type' => 'text',
        ),
        'short' => array(
            'title' => 'Short',
            'type' => 'text',
        ),
        'description' => array(
            'title' => 'Content',
            'type' => 'text',
        ),
        'start_date' => array(
            'title' => 'Start',
            'type' => 'date',
        ),
        'end_date' => array(
            'title'=> 'End',
            'type' => 'date',
        ),
    ),

);