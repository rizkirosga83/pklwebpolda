@extends('layouts.master')
@section('content')

<div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-primary">Pelaksanaan Kegiatan</h1>
            </div>


            
            <div class="card shadow mb-4">

                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pelaksanaan Kegiatan</h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="50px">No.</th>
                                        <th>Keterangan Kegiatan</th>
                                        <th>Rencana Kegiatan</th>
                                        <th>Telah Dilaksanakan</th>
                                        <th>Sisa</th>
                                        <th>Grafik</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Ket. kegiatan 1</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>100%</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Ket. kegiatan 2</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>50%</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Ket. kegiatan 3</td>
                                        <td>5</td>
                                        <td>3</td>
                                        <td>2</td>
                                        <td>60%</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Ket. kegiatan 1</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>100%</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Ket. kegiatan 1</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>100%</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Ket. kegiatan 1</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>100%</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <td>01</td>
                                        <td>Ket. kegiatan 1</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>100%</td>
                                        <td>
                                            <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a>
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