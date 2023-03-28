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
                            <h4>Liste des services</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Nom servicce</th>
                                        <th>Categorie</th>
                                        <th>Description</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>{{ $service->idservice }}</td>
                                            <td>
                                                <a href="{{ asset('storage/'.$service->path) }}">
                                                    <img src="{{ asset('storage/'.$service->path) }}"
                                                         class="img-rounded" width="100px" height="100px" alt=""
                                                         srcset="">
                                                </a>
                                            </td>
                                            <td>{{ $service->service }}</td>
                                            <td>{{ $service->categorie }}</td>
                                            <td>{{ $service->description }}</td>
                                            <td>
                                                <a href="{{ route('edite_service', $service->idservice) }}"
                                                   class="btn btn-icon icon-left btn-success"><i class="fa fa-edit"
                                                                                                aria-hidden="true"></i>
                                                    Modifier</a>
                                                <a href="{{ route('delete_service', [$service->idservice, $service->idcategorie, $service->idimage]) }}"
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
