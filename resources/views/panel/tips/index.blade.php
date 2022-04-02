@extends('panel.layouts.app')

@section('title', 'Panel - Dicas')

@section('main')

    <section class="content">

        <div class="row">
            <div class="col-12">
                <a href="{{ route('panel.tips') }}" class="btn btn-header indigo-hover">
                    <i class="fas fa-list"></i> <span>Dicas</span>
                </a><!-- .btn-header -->
                <a href="{{ route('panel.tips.create') }}" class="btn btn-header blue-hover">
                    <i class="fas fa-plus"></i> <span>Cadastrar</span>
                </a><!-- .btn-header -->
            </div><!-- .col-12 -->
        </div><!-- .row -->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Dicas</h3>
            </div><!-- .card-header -->
            <div class="card-body">
                <div class="dataTables_wrapper dt-bootstrap4">

                    <div class="table-conteiner">
                        <table class="table table-bordered table-striped dataTable dtr-inline" role="grid">
                            <thead>
                                <tr>
                                    <th rowspan="1" colspan="1">Dicas</th>
                                    <th rowspan="1" colspan="1">Marca</th>
                                    <th rowspan="1" colspan="1">Modelo</th>
                                    <th rowspan="1" colspan="1">Opção</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tips as $tip)
                                    <tr>
                                        <td>{{ $tip->tip }}</td>
                                        <td>{{ $tip->brand->brand }}</td>
                                        <td>{{ $tip->model->model }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-dot" type="button" data-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item orange-hover" href="{{ route('panel.tips.update', $tip->id) }}"><i class="far fa-edit"></i> <span>Editar</span></a>
                                                    <form action="{{ route('panel.tips.destroy', $tip->id) }}" method="post">
                                                        @method('DELETE') @csrf
                                                        <button type="submit" class="dropdown-item btn-delete red-hover" title="Deseja excluir esta Dica?"><i class="far fa-trash-alt"></i> <span>Excluir</span></button>
                                                    </form>
                                                </div><!-- .dropdown-menu -->
                                            </div><!-- .dropdown -->
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="empty-table">
                                        <td colspan="100%">
                                            <p>Nenhum registro encontrado!</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Dicas</th>
                                    <th rowspan="1" colspan="1">Marca</th>
                                    <th rowspan="1" colspan="1">Modelo</th>
                                    <th rowspan="1" colspan="1">Opção</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers">
                                <ul class="pagination">
                                    {!! $tips->links() !!}
                                </ul><!-- .pagination -->
                            </div><!-- .dataTables_paginate -->
                        </div><!-- .col-md-7 -->
                    </div><!-- .row -->
                </div><!-- .dataTables_wrapper -->
            </div><!-- .card-body -->
        </div><!-- .card -->
    </section>

@endsection

@section('scripts')
    <!-- Exibir alerta de configrmação quando clicar em excluir -->
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.script.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
@endsection
