<?php

namespace Book\InputFilter;

use Zend\Filter\StringTrim;
use Zend\InputFilter\InputFilter as BaseInputFilter;
use Zend\Validator\Between;
use Zend\Validator\StringLength;
use Zend\Validator\Uuid;

class Review extends BaseInputFilter
{
    public function init()
    {
        $this->add([
            'name' => 'Name',
            'required' => true,
            'filters' => [
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => StringLength::class,
                    'options' => ['min' => 1],
                ],
            ],
        ]);
    }
}
