<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name='مهندس';
    public $ok= false;
    public $grade=['سلام '] ;

    public function render()
    {
        return view('livewire.hello-world');
    }
    // public function mount(){
    //     $this->name="شادی";
    // }
    public function resetname( $name="abolfazl" ){
        $this->name = $name;
    }
}
