<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class Accounts extends Component
{
   public $state=[];

    public $user;

    public $userIdBeingRemoved = null;

    public $showEditModal = false;

   

    /**
     * Delete user
     * 
     * 
     */
    public function deleteUser()
    {
       $user = User::findOrFail($this->userIdBeingRemoved);

       $user->delete();

       $this->dispatchBrowserEvent('hide-delete-modal', [ 'message' => 'User deleted successfully!']);
    }

    public function confirmUserRemoval($userId)
    {
       $this->userIdBeingRemoved = $userId;
      
    //    $this->dispatchBrowserEvent('show-delete-modal');
    $this->dispatchBrowserEvent('show-delete-confirmation');
        
    }
    /**
     * /////Delete user
     * 
     */
    
     /**Update  */

    public function edit(User $user)
    {
        $this->reset();

        $this->showEditModal = true;
        
        $this->user = $user;

        $this->state = $user->toArray();

        $this->dispatchBrowserEvent('show-form');
    }

    public function updateUser()
    {
        
        $validatedData = Validator::make($this->state, [
            'name' => 'required|max:50',
            'username' => 'required|unique:users,username,'.$this->user->id,
            'password' => 'sometimes|min:3|max:20',
            'role' => 'required',
            'confirmPassword' => 'sometimes|same:password|min:3|max:20',
            

        ])->validate();

        if(!empty(($validatedData['password'])))
        {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        $this->user->update($validatedData);

        // session()->flash('message' ,'User added successfully!');

        $this->dispatchBrowserEvent('hide-form', [ 'message' => 'User updated successfully!']);

        
    }

    /** /////Update */
    
    /**Create */
    public function createUser()
    {
        
        
        $validatedData = Validator::make($this->state, [
            'name' => 'required|max:50',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:3|max:20',
            'role' => 'required',
            'confirmPassword' => 'required|same:password|min:3|max:20',
            

        ])->validate();

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
            
        // session()->flash('message' ,'User added successfully!');

        $this->dispatchBrowserEvent('hide-form', ['message' => 'User added successfully!']);
        
    }
    public function addUser()
    {
        $this->reset();
        $this->showEditModal = false;
        $this->dispatchBrowserEvent('show-form');
    }

    /**/////create */


    /**Show */
    public function render()
    {
        
        return view('livewire.admin.accounts' , [
            'users' => User::latest()->paginate(10), 
        ]);
    }

    /**-------Show-------- */


}
