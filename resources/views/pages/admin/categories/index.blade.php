<x-app-layout>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">

                    @if (session('success') == true)
                        <div class="alert alert-success">
                            {{ session('message') }}</li>
                        </div>
                    @elseif(session('success') === false)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach (session('message') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                        @if (Session::get('message2'))
                            <div class="alert alert-success">
                                {{ Session::get('message2') }}</li>
                            </div>
                        @endif

                    <div class="card">
                        <div class="card-header">
                            Ajouter une categorie de service
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="POST" action="{{ route('admin.categories.store') }}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Image : .jpg, .png | max : 300Kb</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-file-image"></i>
                                                    </div>
                                                </div>
                                                <input type="file" name="image" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="name" value="{{ old('name') }}" required
                                                   placeholder="Nom de la categorie" maxlength="128" class="form-control">
                                        </div>
                                        <div class="form-group col-12">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                AJOUTER CATEGORIE
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4>Catégories des services</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Nom catégorie</th>
                                        <th>Actions</th>
                                        {{-- <th>name</th> --}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->idcategorie }}</td>
                                            <td>
                                                <a href="{{ asset('storage/'.$category->path) }}">
                                                    <img src="{{ asset('storage/'.$category->path) }}"
                                                         class="img-rounded" width="100px" height="100px" alt=""
                                                         srcset="">
                                                </a>
                                            </td>
                                            <td>{{ $category->name }}</td>
                                            {{-- <td>{{ count($categories) }}</td> --}}
                                            <td>
                                                <a href="{{ route('edit', $category->idcategorie) }}"
                                                   class="btn btn-icon icon-left btn-success"><i class="fa fa-edit"
                                                                                                 aria-hidden="true"></i>
                                                    Modifier</a>
                                                <a href="{{ route('delete_cat', [$category->idcategorie, $category->idimage] ) }}"
                                                   class="btn btn-icon icon-left btn-danger"><i class="fa fa-trash"
                                                                                                aria-hidden="true"></i>
                                                    Supprimer</a>
                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-app-layout>
