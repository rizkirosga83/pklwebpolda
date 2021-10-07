@extends('layouts.master')
@section('content')

<div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-primary">Rencana Kegiatan</h1>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Rencana Kegiatan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="button" class="btn btn-info add-new"><i
                                                class="fa fa-plus"></i> Add New</button>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="50px">No.</th>
                                        <th>Sprin No.</th>
                                        <th>Tentang</th>
                                        <th>Personil</th>
                                        <th>Giat</th>
                                        <th>Pelaporan</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>2819</td>
                                        <td>Kegiatan 1</td>
                                        <td>Personil 1</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>2820</td>
                                        <td>Kegiatan 2</td>
                                        <td>Personil 2</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>2821</td>
                                        <td>Kegiatan 3</td>
                                        <td>Personil 3</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>2821</td>
                                        <td>Kegiatan 3</td>
                                        <td>Nur Widya Anisa Muslim</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>2821</td>
                                        <td>Kegiatan 3</td>
                                        <td>Personil 3</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>2821</td>
                                        <td>Kegiatan 3</td>
                                        <td>Personil 3</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>2821</td>
                                        <td>Kegiatan 3</td>
                                        <td>Personil 3</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>2821</td>
                                        <td>Kegiatan 3</td>
                                        <td>Personil 3</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>2821</td>
                                        <td>Kegiatan 3</td>
                                        <td>Personil 3</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

    
@endsection