<div class="container">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-12 col-md-2 my-2 d-flex justify-content-center">
        <div class="card" style="width: 15rem; min-height:20rem">
            <div class="card-body">
            <h5 class="card-title">{{$article->title}}</h5>
            <p class="card-text">{{$article->body}}</p>
            <button class="btn btn-sm btn-danger" wire:click="deleteArticle({{ $article }})">Cancella</button>
            <button class="btn btn-sm btn-primary">Mostra</button>
            </div>
          </div>
        </div>

        
                
            
    @endforeach     
    </div> 
</div>
