<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TypeAvocado;

class TypeAvocadoController extends Component
{
    public $typeavocado, $typeavocado_id, $type_avocado;
    public $isDialogOpen = 0;
    public $isconfirm =0;
    public $getid =0;

    public function render()
    {
        $this->typeavocado = TypeAvocado::all();
        return view('livewire.type_avocados.type-avocado-controller');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isDialogOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isDialogOpen = false;
        $this->validate([
            'type_avocado.required' => '',
        ]);
    }

    private function resetCreateForm(){
        $this->type_avocado = '';
    }

    public function openModaldelete()
    {
        $this->isconfirm = true;
    }

    public function closeModaldelete()
    {
        $this->isconfirm = false;
    }

    protected $messages = [
      'type_avocado.required' =>'Este campo debe estar lleno'
    ];

    public function store()
    {
        $this->validate([
            'type_avocado' => 'required|alpha',
        ]);

        TypeAvocado::updateOrCreate(['id' => $this->typeavocado_id], [
            'type_avocado' => $this->type_avocado,
        ]);

        session()->flash('message', $this->typeavocado_id ? 'Tipo de aguacate actualizado!' : 'Tipo de aguacate Creado!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function edit($id)
    {
        $typeavocado = TypeAvocado::findOrFail($id);
        $this->typeavocado_id = $id;
        $this->type_avocado = $typeavocado->type_avocado;

        $this->openModalPopover();
    }

    public function ConfirmaDelete($id){
        $this->openModaldelete();
        $this->getid = $id;
    }

    public function delete()
    {
        TypeAvocado::find($this->getid)->delete();
        session()->flash('message', 'Tipo de aguacate eliminado!');
        $this->closeModaldelete();
    }
}
