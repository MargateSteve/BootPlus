<?php

/**
 * Competitions Model
 */

// Include the initiation file
require_once '../src/init.php';

class M_Colors extends M_Common
{
    private $_xx = 'xxx';

    protected $_yy = 'xxx';

    public $_zz = 'xxx';

    public function __construct()  {

    }

    public function color_elements () {
        return [
            'Text' => [
                'e' => ['tag' => 'span',
                        'class' => 'text-'
                ]
            ],
            'Link' => [
                'e' => ['tag' => 'a',
                        'class' => 'text-',
                        'extra' => 'href="#"'
                ]
            ],
            'Background' => [
                'e' => ['tag' => 'span',
                        'class' => 'bg-'
                ]
            ],
            'Button' => [
                'e' => ['tag' => 'a',
                        'class' => 'btn btn-',
                        'extra' => 'href="#"'
                ]
            ],
            'Outline Button' => [
                'e' => ['tag' => 'a',
                        'class' => 'btn btn-outline-',
                        'extra' => 'href="#"'
                ]
            ],
            'Badge' => [
                'e' => ['tag' => 'a',
                        'class' => 'badge badge-',
                        'extra' => 'href="#"'
                ]
            ],
            'Pill Badge' => [
                'e' => ['tag' => 'a',
                        'class' => 'badge badge-pill badge-',
                        'extra' => 'href="#"'
                ]
            ]
        ];


    }

    public function color_elementsold () {
        return ['Text' => [ 'e' => '<span class="text-{class} contrast w-100">{name}</span>',
                            'd' => '<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-{class}"</span><span class="nt">&gt;</span>{name}<span class="nt">&lt;/span&gt;</span><br>'

                ],
                'Link' => [ 'e' => '<a href="#" class="text-{class} contrast w-100">{name}</a>',
                            'd' => '<span class="nt">&lt;a href="#"</span> <span class="na">class=</span><span class="s">"a.text-{class}"</span><span class="nt">&gt;</span>{name}<span class="nt">&lt;/a&gt;</span><br>'

                ],
                'Background' => [ 'e' => '<div class="bg-{class} contrast w-100">{name}</div>',
                                'd' => '<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bg-{class}"</span><span class="nt">&gt;</span>{name}<span class="nt">&lt;/div&gt;</span><br>'
                ],
                'Button' => [ 'e' => '<a href="#" class="text-{class} contrast w-100">{name}</a>',
                            'd' => '<span class="nt">&lt;a href="#"</span> <span class="na">class=</span><span class="s">"a.text-{class}"</span><span class="nt">&gt;</span>{name}<span class="nt">&lt;/a&gt;</span><br>'

                ]
            ];

    }



    public function isColor($c) {

        if(isset($this->base_colors()[$c]) || isset($this->extra_colors()[$c])) {
            return true;
        }
        return false;
    }


    public function count_base_colors () {

        return count($this->base_colors());
    } // count_base_colors()

    public function count_extra_colors () {
        return count($this->extra_colors());
    } // count_extra_colors()

    public function count_all_colors () {
        return count($this->base_colors () + $this->extra_colors());
    } // count_all_colors()

    public function get_base_colors () {
        return $this->base_colors();
    } // count_base_colors()

    public function get_extra_colors () {
        return $this->extra_colors();
    } // count_extra_colors()
}
