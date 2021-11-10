@extends('layouts.admin.master')
@section('title', 'Pengguna Air')
@section('content')

    <div class="content">

        <div class="page-inner mt--5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if (Session::has('pesan'))
            <script>
                swal("Good job!", "{Session::get('pesan') !!}", {
                    icon: "success",
                    buttons: {
                        confirm: {
                            className: 'btn btn-success'
                        }
                    },
                });
            </script>

        @endif



        <form action="/add_pengguna" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal fade mt-5" id="exampleModalLong" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Tambah data Pengguna</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-circle"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nama" name="nama_lengkap"
                                    value="{{ old('nama_lengkap') }}">
                            </div>
                            <div class=" has-error text-danger">
                                @error('nama_lengkap')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-users"></i>
                                    </span>
                                </div>
                                <input type="number" class="form-control" placeholder="Nik" name="nik"
                                    value="{{ old('nik') }}">
                            </div>
                            <div class=" has-error text-danger">
                                @error('nik')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fab fa-whatsapp"></i>
                                    </span>
                                </div>
                                <input type="number" class="form-control" placeholder="Nomer WhatsApp" name="nomer_hp"
                                    value="{{ old('nomer_hp') }}">
                            </div>
                            <div class=" has-error text-danger">
                                @error('nomer_hp')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-venus-mars"></i>
                                    </span>
                                </div>

                                <select id="jenis_kelamin" class="form-control" name="jenis_kelamin"
                                    value="{{ old('jenis_kelamin') }}">
                                    <option value="" disabled selected>Jenis Kelamin</option>
                                    <option value="0">Perempuan</option>
                                    <option value="1">Laki-Laki</option>
                                </select>
                            </div>
                            <div class=" has-error text-danger">
                                @error('jenis_kelamin')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Alamat" name="alamat_pengguna"
                                    value="{{ old('alamat_pengguna') }}">
                            </div>
                            <div class=" has-error text-danger">
                                @error('alamat_pengguna')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-power-off"></i>
                                    </span>
                                </div>
                                <select id="status_pengguna" class="form-control" name="status_pengguna"
                                    value="{{ old('status_pengguna') }}">

                                    <option value="" disabled selected>Status Pengguna</option>
                                    <option value="0">Tidak Aktif</option>
                                    <option value="1">Aktif</option>
                                </select>

                            </div>
                            <div class=" has-error text-danger">
                                @error('status_pengguna')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="page-inner">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#exampleModalLong"><i class="fas fa-plus-circle "></i>
                    </button>
                    <a href="" class="btn btn-success btn-sm"><i class="fas fa-file-excel "></i></a>
                    <a href="" class="btn btn-danger btn-sm"><i class="fas fas fa-file-pdf "></i></a>
                    <a href="" class="btn btn-primary btn-sm"><i class="fas fa-sync "></i></a>
                </div>

                <div class="card-body">
                    <div class="accordion accordion-secondary">
                        <div class="card">
                            <div class="card-header btn-warning" id="headingOne" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="span-icon">
                                    <div class="fas fa-bullhorn"></div>
                                </div>
                                <div class="span-title">
                                    Hati-hati!
                                </div>
                                <div class="span-mode"></div>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it
                                    squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica,
                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                    synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Pengguna</th>
                                        <th>Nama Pengguna</th>
                                        <th>NIK</th>
                                        <th>Nomer WhatsApp</th>
                                        <th>JK</th>
                                        <th>Status</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($pengguna_air as $pa)
                                        <tr>

                                            <td>{{ $no++ }}</td>
                                            <td>{{ $pa->id_pengguna }}</td>
                                            <td>{{ $pa->nama_lengkap }}</td>
                                            <td>{{ $pa->nik }}</td>
                                            <td>{{ $pa->nomer_hp }}</td>

                                            <?php if($pa->jenis_kelamin==0){ ?>
                                            <td> Perempuan</td>
                                            <?php }else{ ?>
                                            <td>Laki-Laki</td>
                                            <?php } ?>

                                            <?php if($pa->status_pengguna==0){ ?>
                                            <td> Tidak Aktif</td>
                                            <?php }else{ ?>
                                            <td>Aktif</td>
                                            <?php } ?>
                                            <td>{{ $pa->alamat_pengguna }}</td>
                                            <td>
                                                <a href="" class="btn btn-warning btn-xs">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a href="" class="btn btn-danger btn-xs">
                                                    <i class="fas fa-trash"></i>
                                                </a>
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
    </div>
@endsection
