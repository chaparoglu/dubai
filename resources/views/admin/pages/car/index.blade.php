@extends('admin.layouts.master')

@section('title')
Maşınlar
@endsection

@section('content')

<div class="main_content_iner ">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Maşınlar
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <h4>Table</h4>

                                    <div class="add_button ms-2">
                                        <a href="{{ route('admin.car.create') }}" class="btn_1">Əlavə et</a>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Şəkil</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Brend</th>
                                            <th scope="col">Qiymət</th>
                                            <th scope="col">Sıra</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Prosesler</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       
                                        @foreach ($cars as $item)
                                         <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td><img width="70px" height="70px" src="{{ asset($item->img) }}" alt=""></td>
                                            <td>{{ Str::limit($item->model,20,'...') }}</td>
                                            <td>{{ Str::limit($item->brend,20,'...') }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->order }}</td>
                                            <td>@if ($item->status==1)
                                                <span style="color: green;font-size:16px;font-weight:600">Aktiv</span>
                                            @else
                                                <span style="color: red;font-size:16px;font-weight:600">Deaktiv</span>
                                            @endif</td>
                                            <td class="d-flex" style="font-size: 20px;">
                                                <a class="btn btn-primary" href="{{ route('admin.car.edit',$item->id) }}"><i class="ti-pencil"></i></a>
                                                <a class="btn btn-danger delete" href="{{ route('admin.car.delete',$item->id) }}"><i class="ti-trash"></i></a>
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
            <div class="col-12">
            </div>
        </div>
    </div>
</div>
</div>

@push('js')
<script>
    $('.delete').on('click', function(e) {
        e.preventDefault();
        let url = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(url)
                    .then(resp => resp.json())
                    .then(data => {
                        if (data.code == 204) {
                            Swal.fire(
                                'Deleted!',
                                data.message,
                                'success'
                            );

                            setInterval(() => {
                                window.location.reload();
                            }, 2500);
                        }
                    })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data.message,
                    footer: '<a href="">Why do I have this issue?</a>'
                })
            }
        })
    });

</script>
@endpush

@endsection
