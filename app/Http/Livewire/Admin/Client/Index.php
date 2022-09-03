<?php

namespace App\Http\Livewire\Admin\Client;

use Livewire\Component;
use App\Models\Client;
use Livewire\WithPagination;

class Index extends Component
{
use WithPagination;
protected $paginationTheme = 'bootstrap';
public $client_id;
    public function deleteClient($client_id)
    {
       $this->client_id = $client_id;
    }
    public function destroyClient()
    {
        $client_id = Client::find( $this->client_id );
        $client_id ->delete($client_id);
        session()->flash('message', 'Cliente delete'); 

    }
    public function render()
    {
       $clients = Client::orderBy('id','asc')->paginate(5);
        return view('livewire.admin.client.index',['clients'=>$clients]);
    }

    
}
