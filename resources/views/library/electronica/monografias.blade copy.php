<x-render-files-library>
    @section('title', 'Monografías de Ingeniería Electrónica')

    <x-slot name="title">
        Ingenería Electrónica
    </x-slot>
    @if (App\Models\Electronic::where('category', 'monografias')->count() > 0)
        <div class="card">
            <h5 class="card-header">Documentos de Ingeniería Electrónica</h5>
            <div class="card-body">
                <table id="documents" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre <i class="far fa-file-pdf head"></i></th>
                            <th>Autores <i class="fas fa-user head"></i></th>
                            <th>Fecha <i class="far fa-clock head"></i></th>
                            <th>Ver <i class="fas fa-eye head"></i>
                                <-> Descargar <i class="fas fa-download head">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($monografias as $monografia)
                            <tr>
                                <td>
                                    <p class="text-mute">
                                        <img class="head" src="{{ asset('images/files.svg') }}" alt="file"
                                            width="30" />
                                        &nbsp;{{ $monografia->document->name }}
                                    </p>
                                </td>
                                <td>
                                    <p>{{ $monografia->authors }}</p>
                                </td>
                                <td>
                                    <p class="text-muted">{{ $monografia->document->date }}</p>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-customized" href="{{ $monografia->url }}" target="_blank"
                                            data-toggle="popover-hover" data-placement="left" title="Ver"
                                            data-content="Has clic para ver el archivo en otra pestaña">
                                            <i class="fas fa-eye"></i></a>
                                        <a class="btn btn-customized-2" href="{{ $monografia->url }}"
                                            download="{{ $monografia->document->original_name }}"
                                            data-toggle="popover-hover" data-placement="right" title="Descargar"
                                            data-content="Has clic para descarga directa del archivo">
                                            <i class="fas fa-download"></i></a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    @else
        {{-- <div class="container">
                <div class="my-3 mx-auto">
                    <div class="alert alert-primary" role="alert">
                        <p class="h5 text-success">Aun no hay archivos disponibles</p>
                    </div>
                </div>
            </div> --}}

        <div class="container my-3">

            <div class="row">

                <div class="col-sm-6 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Recusandae cumque placeat tempore, itaque provident laboriosam voluptas perspiciatis,
                                tenetur praesentium accusamus totam voluptate. Excepturi libero voluptate fugit maxime!
                                Veritatis, quas similique!</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat numquam cumque
                                quibusdam magni cupiditate ullam iure eos dolores! Quod accusamus quos, quidem eos
                                dolorum perferendis amet inventore ipsum? Numquam, non?
                            </p>
                            <a href="#" class="btn btn-primary"> <i class="fas fa-eye"></i> Ver</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                                minus vel eveniet cum vitae consectetur delectus doloribus inventore, eos dolorum
                                mollitia nemo repellat, assumenda quasi ea facilis quis tempora. Illo.</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores error officiis ipsam
                                voluptatem totam eum atque quasi sint. Vel, a rerum? Reprehenderit ad sapiente,
                                perferendis voluptas exercitationem libero officia omnis.
                            </p>
                            <a href="#" class="btn btn-primary"> <i class="fas fa-eye"></i> Ver</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    @endif

</x-render-files-library>
