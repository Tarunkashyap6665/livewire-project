<div class="px-2 border bg-white {{$ticketId==0?'d-none':'d-block'}}">
    </div>
    <h2 class="text-center mt-3">Comments</h2>
    <hr>
    @error('newComment')
    <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror
    @if (session()->has('message'))
    <div class="alert alert-{{session('status')}} alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Message : </strong> {{session('message')}}.
    </div>

    @endif
    <section>
        @if($image)
        <img class="img-fluid" src="{{$image}}" style="width:200px" alt="">
        @endif
        <div class="form-group">
            <input id="image" wire:change="$emit('fileChoosen')" class="form-control-file" type="file" name="image">
           
        </div>
    </section>
    <form action="" wire:submit.prevent="addComment">
        <div class="row">

            <div class="col-10">
                <input type="text" wire:model.debounce.500ms="newComment" placeholder="Enter Comments"
                    class="form-control" name="comments">

            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-block btn-primary">Add</button>


            </div>
    </form>
    @foreach ($comments as $comment)
    <div class="col-12 my-3">

        <div class="card" style="width: 100%;">

            <div class="card-body d-flex justify-content-between">
                
                <div style="width:70%;">
                    <h5 class="card-title">{{$comment->creator->name}}</h5> 
                <h6 class="card-subtitle mb-2 text-muted">{{$comment->created_at->diffForHumans()}}</h6>
                <p class="card-text">{{$comment->body}}</p>
                </div>
                <div>
                    @if($comment->image)
                <img class="img-fluid" src="{{$comment->getImagePathAttribute()}}" style="width:100px" alt="">
                @endif
                <span class="ml-5 d-inline-block" wire:click="remove({{$comment->id}})"
                    style="font-size:20px;font-weight:bolder;float: right;color:rgb(224, 94, 94);cursor:pointer;">&times;</span>

                </div>
                
            </div>
        </div>

    </div>
    @endforeach
    {{$comments->links('pagination-links')}}

    <script>
        window.livewire.on('fileChoosen', postId => {
            let inputField = document.getElementById('image');
            let file = inputField.files[0];
            let reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onloadend = () => {
                window.livewire.emit('fileUpload', reader.result)
            }
        })
    </script>

</div>