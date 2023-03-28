<x-app-layout>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('message') }}</li>
                        </div>
                    @endif

                    @if (session()->has('message2'))
                        <div class="alert alert-success">
                            {{ Session::get('message2') }}</li>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            Ajouter un service
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" action="{{ route('admin.services.store') }}"
                                          enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="form-group col-6">
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

                                            <div class="form-group col-6">
                                                <label>Nom du service</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-calculator"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="name" value="{{ old('name') }}" required
                                                           maxlength="128" class="form-control">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label>Categorie du service</label>
                                                <div class="input-group">
                                                    <div class="col-sm-12 col-md-12">
                                                        <select name="category_id" class="form-control selectric">
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Description du service</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-list"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="description" value="{{ old('description') }}" required
                                                           maxlength="128" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-12">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                AJOUTER SERVICE
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-app-layout>
