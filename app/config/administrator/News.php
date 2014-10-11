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

    'title' => 'News',

    'single' => 'news',

    'model' => 'News',

    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title' => array(
            'title' => 'Title',
        ),
        'short' => array(
            'title' => 'Short',
        ),
        'content' => array(
            'title' => 'Content',
        ),
    ),

    /**
     * The filter set
     */
    /*'filters' => array(
        'id',
        'first_name' => array(
            'title' => 'First Name',
        ),
        'last_name' => array(
            'title' => 'Last Name',
        ),
        'films' => array(
            'title' => 'Films',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'birth_date' => array(
            'title' => 'Birth Date',
            'type' => 'date'
        ),
    ),
        */
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
        'content' => array(
            'title' => 'Content',
            'type' => 'text',
        ),
    ),

);