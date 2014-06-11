<?php
return array('membre' => array(

    array(
        'name'     => 'id',
        'required' => true,
        'filters'  => array(
            array('name' => 'Int'),
        ),
    ),

    array(
        'name'     => 'pseudo',
        'required' => true,
        'filters'  => array(
            array('name' => 'StripTags'),
            array('name' => 'StringTrim'),
        ),
        'validators' => array(
            array(
                'name'    => 'StringLength',
                'options' => array(
                    'encoding' => 'UTF-8',
                    'min'      => 3,
                    'max'      => 30,
                ),
            ),
        ),
    ),

    array(
        'name'     => 'mdp',
        'required' => true,
        'filters'  => array(
            array('name' => 'StripTags'),
            array('name' => 'StringTrim'),
        ),
        'validators' => array(
            array(
                'name'    => 'StringLength',
                'options' => array(
                    'encoding' => 'UTF-8',
                    'min'      => 5,
                    'max'      => 20,
                ),
            ),
        ),
    ),

    array(
        'name'       => 'mdpconfirm',
        'validators' => array(
            array(
                'name'    => 'Identical',
                'options' => array(
                    'token' => 'mdp',
                ),
            ),
        ),
    ),

    array(
        'name'     => 'mail',
        'required' => true,
        'filters'  => array(
            array('name' => 'StripTags'),
            array('name' => 'StringTrim'),
        ),
        'validators' => array(
            array(
                'name'    => 'EmailAddress'),
            array(
                'name'    => 'StringLength',
                'options' => array(
                    'encoding' => 'UTF-8',
                    'min'      => 5,
                    'max'      => 30,
                ),
            ),
        ),
    ),

    array(
        'name'     => 'sexe',
        'required' => true,
    ),

    array(
        'name'     => 'description',
        'required' => false,
        'filters'  => array(
            array('name' => 'StripTags'),
            array('name' => 'StringTrim'),
        ),
        'validators' => array(
            array(
                'name'    => 'StringLength',
                'options' => array(
                    'encoding' => 'UTF-8',
                    'min'      => 1,
                    'max'      => 200,
                ),
            ),
        ),
    ),

    array(
        'name'     => 'civilite',
        'required' => true,
    ),


    array(
        'name'     => 'pays',
        'required' => true,
    ),

    array(
        'name'     => 'age',
        'required' => true,
        'filters'  => array(
            array('name' => 'Int'),
        ),
        'validators' => array(
            array(
                'name'    => 'digits'),
        ),
    ),
));