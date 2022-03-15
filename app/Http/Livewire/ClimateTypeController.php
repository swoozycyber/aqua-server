<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ClimateType;


class ClimateTypeController extends Component
{
    public $type_soils, $type_soils_id, $type_soil;
    public $isDialogOpen = 0;


    public function render()
    {
        $this->type_soils = ClimateType::all();

        return view('livewire.type_soils.type-soil-controller');
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
    }

    private function resetCreateForm(){

        $this->type_soil = '';

    }


    public function store()
    {
        
        $this->validate([
            'type_soil' => 'required',
        ]);


        ClimateType::updateOrCreate(['id' => $this->type_soils_id], [
            'type_soil' => $this->type_soil,

        ]);

        session()->flash('message', $this->type_soils_id ? 'Tipo de Suelo actualizado!' : 'Tipo de Suelo Creado!');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }


    public function edit($id)
    {
        $type_soils = ClimateType::findOrFail($id);
        $this->type_soils_id = $id;
        $this->type_soil = $type_soils->type_soil;


        $this->openModalPopover();
    }

    public function delete($id)
    {
        ClimateType::find($id)->delete();
        session()->flash('message', 'Tipo de Suelo eliminado!');
    }
}