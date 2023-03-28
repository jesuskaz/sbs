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
                            Modifier une categorie de service
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="POST" action="{{ route('admin.categories.update', $category[0]->idcategorie, $category[0]->idimage) }}"
                                          enctype="multipart/form-data">
                                        @method('put')
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
                                                <input type="hidden" name="idimage" value="{{ $category[0]->idimage }}" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nom de la categorie</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <input type="text" name="name" value="{{ $category[0]->name }}" required
                                                       placeholder="Nom de la categorie" maxlength="128" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                AJOUTER CATEGORIE
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-md-6">
                                    <div class="ml-lg-5">
                                        <a href="{{ asset('storage/'.$category[0]->path) }}">
                                            <img src="{{ asset('storage/'.$category[0]->path) }}"
                                                 class="img-rounded" width="400px" height="400px" alt=""
                                                 srcset="">
                                                 
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

</x-app-layout>
