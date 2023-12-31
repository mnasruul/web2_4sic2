<x-backend-layout>
    <div class="container pt-4"> 
        <div class="row mt-4">
            <div class="col-md-8 mt-4">
                <h2>Data Kategori </h2>    
            </div>    
        </div>
        <div class="row"> 
            <div class="col-sm-7 mt-4">
            <a href="" class="btn btn-primary">
                Kategori Baru
                </a>   
            </div>  
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm"> 
                <thead> 
                    <th scope="col">#</th>    
                    <th scope="col">Nama Kategori</th>    
                    <th scope="col">Aksi</th>    
                </thead>
                <tbody> 
                    @empty(!$categories)
                        @foreach ($categories as $category)
                            <tr> 
                                <td> {{ $categories->firstItem() + $loop->index}} </td>
                                <td> {{ $category->name}} </td>
                                <td> 
                                    <a href="{{ route('categories.edit', $category) }}">
                                        <button class="badge bg-warning">Edit </button>
                                    </a>
                                    <button type="button" class="bg-danger">Hapus </button>    
                                </td>
                            </tr>
                        @endforeach
                    @endempty
                </tbody>
            </table> 
            @if ($categories instanceof \Illuminate\Pagination\LengthAwarePaginator) 
                {{ $categories->links() }}
            @endif 
        </div>
    </div>
</x-backend-layout>