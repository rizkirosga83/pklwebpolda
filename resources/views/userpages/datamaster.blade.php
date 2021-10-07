@extends('layouts.master')
@section('content')

<div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-primary">Data Master</h1>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data</h6>
                    <div class="dropdown no-arrow"> 
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> 
                        </a> 
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" 
                            aria-labelledby="dropdownMenuLink">  
                            <a class="dropdown-item" href="#"><i class="fas fa-print fa-sm fa-fw mr-2"></i>Print</a>  
                        </div> 
                    </div> 
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <form class="d-none d-sm-inline-block form-inline mr-auto navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="50px">No.</th>
                                        <th>Sprin No.</th>
                                        <th>Tentang</th>
                                        <th width="50px">Pilih</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>2819</td>
                                        <td>Kegiatan 1</td>
                                        <td><input type="checkbox" id="pilihan" name="pilihan" value="pilih">
                                            <label for="pilih1"></label><br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

</div>
    
@endsection