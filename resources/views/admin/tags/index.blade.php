<x-backend-layout>
    <div class="container pt-4"> 
        <div class="row mt-4">
            <div class="col-md-8 mt-4">
                <h2>Data Tag </h2>    
            </div>    
        </div>
        <div class="row"> 
            <div class="col-sm-7 mt-4">
            <a href="" class="btn btn-primary">
                Tag Baru
                </a>   
            </div>  
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm"> 
                <thead> 
                    <th scope="col">#</th>    
                    <th scope="col">Nama Tag</th>    
                    <th scope="col">Aksi</th>    
                </thead>
                <tbody> 
                    @empty(!$tags)
                        @foreach ($tags as $tag)
                            <tr> 
                                <td> {{ $tags->firstItem() + $loop->index}} </td>
                                <td> {{ $tag->name}} </td>
                                <td> 
                                    <a href="{{ route('tags.edit', $tag) }}">
                                        <button class="badge bg-warning">Edit </button>
                                    </a>
                                    <button type="button" class="bg-danger">Hapus </button>    
                                </td>
                            </tr>
                        @endforeach
                    @endempty
                </tbody>
            </table> 
            @if ($tags instanceof \Illuminate\Pagination\LengthAwarePaginator) 
                {{ $tags->links() }}
            @endif 
        </div>
    </div>
</x-backend-layout>