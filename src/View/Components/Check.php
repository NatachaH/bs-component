<?php

namespace Nh\BsComponent\View\Components;

use Illuminate\View\Component;

class Check extends Component
{
    /**
     * The label of the check.
     *
     * @var string
     */
    public $label;

    /**
     * The type of the check.
     *
     * @var string
     */
    public $type;

    /**
     * The name of the check.
     *
     * @var string
     */
    public $name;

    /**
     * The default value of the check.
     *
     * @var string
     */
    public $value;

    /**
     * Is the check disabled.
     *
     * @var boolean
     */
    public $isDisabled;

    /**
     * Is the check checked.
     *
     * @var boolean
     */
    public $isChecked;

    /**
     * Generate the id of the checkbox
     *
     * @var string
     */
     public function id(){
        return str_replace('[]', '', $this->name).'Field'.strtoupper($this->value);
     }

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = '', $type = 'checkbox', $name, $value = '', $disabled = false, $checked = false)
    {
        $this->label        = $label;
        $this->type         = in_array($type, ['checkbox','radio']) ? $type : 'checkbox';
        $this->name         = $name;
        $this->value        = $value;
        $this->isDisabled   = $disabled;
        $this->isChecked    = $checked;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('bs-component::check');
    }
}
