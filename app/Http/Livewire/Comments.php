<?php

namespace App\Http\Livewire;

use App\Comment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;
class Comments extends Component
{
    use WithPagination;

    public $newComment;
    public $image;
    public $ticketId;
    protected $listeners = [
        'fileUpload' => 'handleFileUpload',
        'ticketSelected',
    
    ];

    public function handleFileUpload($imageData){
        $this->image=$imageData;
    }

    public function ticketSelected($ticketId){
        $this->ticketId=$ticketId;
    }
    public function updated(){
        $this->validate([
            'newComment'=>'required|max:100'
        ]);
    }

    public function storeImage(){

        if(!$this->image){
            return null;
        }

        $imageName=Str::random(10).'.jpg';
        $img=ImageManagerStatic::make($this->image)->encode('jpg');
        Storage::disk('public')->put('images/'.$imageName,$img);
        return $imageName;
    }
    public function addComment(){
        $this->validate([
            'newComment'=>'required|max:100',
        ]);
        $image=$this->storeImage();
        $createdComment=Comment::create([
                'user_id'=>Auth::user()->id,
                'body'=>$this->newComment,
                'image'=>$image,
                'support_ticket_id'=>$this->ticketId,
        ]);
        $this->newComment="";
        $this->image="";
        session()->flash('message','Successfully Comment Added....');
        session()->flash('status','success');
        $this->resetPage();
    }
    
    public function remove($commentId){
        $comment=Comment::find($commentId);
        $comment->delete();
        Storage::disk('public')->delete('images/'.$comment->image);
        session()->flash('message','Successfully Comment Deleted....');
        session()->flash('status','danger');
    }
    public function render()
    {
        return view('livewire.comments',['comments'=>Comment::latest()->where([['support_ticket_id',$this->ticketId],['user_id',Auth::user()->id]])->paginate(1)]);
    }
}
