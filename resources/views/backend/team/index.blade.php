@extends('backend.layout.app')
@section('title', 'Ekip Listele')
@section('content')
    <div class="col-12 col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <h4 class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Ekip Listesi [{{ $All->count() }}]
                    </h4>
                </div>
                <div class="d-flex justify-content-between">
                    <a class="btn btn-primary btn-sm me-1" href="{{  url()->previous() }}" title="Geri">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 18v-6a3 3 0 0 0 -3 -3h-10l4 -4m0 8l-4 -4" /></svg>
                        Geri
                    </a>
                    <a class="btn btn-primary btn-sm me-1" href="{{ route('team.create') }}" title="Ekip Ekle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Ekip Ekle
                    </a>
                </div>
            </div>

            <div class="table-responsive p-2">
                <table class="table table-hover table-striped table-bordered table-center">
                    <thead>
                        <tr>
                            <th>Resim</th>
                            <th>Başlık</th>
                            <th>Durum</th>
                            <th class="d-none d-lg-table-cell">Kategori</th>
                            <th class="d-none d-lg-table-cell">Oluşturma Tarihi</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody id="orders">
                    @foreach($All as $item)
                    <tr id="page_{{$item->id}}">
                        <td>
                            <span class="avatar me-2" style="background-image: url({{$item->getFirstMediaUrl()}})"></span>
                        </td>
                        <td>
                            <div class="font-weight-medium">{{ $item->title }}</div>
                        </td>
                        <td class="text-center">
                            <label class="form-check form-check-single form-switch">
                                <input class="form-check-input switch" status-id="{{ $item->id }}"  type="checkbox" @if ($item->status == 1) checked @endif>
                            </label>
                        </td>

                        <td class="text-muted d-none d-lg-table-cell">
                            {{ $item->getCategory->title }}
                        </td>
                        <td class="d-none d-lg-table-cell">
                            {{ $item->created_at->diffForHumans() }}
                        </td>
                        <td>
                            <div class="btn-list flex-nowrap">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle align-text-top btn-sm" data-bs-boundary="viewport" data-bs-toggle="dropdown">
                                        Eylemler
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item justify-content-between" href="{{ route('team.edit', $item->id) }}" title="Düzenle">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" /><path d="M16 5l3 3" /><path d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999" /></svg>
                                            Düzenle
                                        </a>
                                        <a data-bs-toggle="modal" data-bs-target="#silmeonayi{{ $item->id }}" class="dropdown-item justify-content-between">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                            Sil
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <div class="modal modal-blur fade" id="silmeonayi{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Silme Onayı</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Silmek üzeresiniz. Bu işlem geri alınmamaktadır.
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg>
                                        İptal Et
                                    </a>
                                    <form action="{{ route('team.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm ms-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                            Silmek İstiyorum
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="card">

            <div class="card-header d-flex justify-content-between">
                <div>
                    <h4 class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Ekip Kategori [{{ $Kategori->count() }}]
                    </h4>
                </div>
                <div>
                    <a class="btn btn-tabler btn-sm" href="{{ route('team-categories.index') }}" title="Ekip Ekle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Kategoriler
                    </a>
                </div>
            </div>

            <div class="table-responsive p-2">
                <table class="table table-hover table-striped table-bordered table-center">
                    <thead>
                        <tr>
                            <th>Resim</th>
                            <th>Başlık</th>
                            <th>Üst Kategori</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th colspan="4">
                            <a class="btn btn-success btn-block btn-sm" href="{{ route('team-categories.create') }}" title="Yeni Kategori Ekle">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                Yeni Ekle
                            </a>
                        </th>
                    </tr>
                    </tfoot>
                    <tbody>

                    @foreach($Kategori  as $item)
                        <tr>
                            <td>
                                <span class="avatar me-2" style="background-image: url({{$item->getFirstMediaUrl() }})"></span>
                            </td>
                            <td>
                                <div class="font-weight-medium">{{ $item->title }}</div>
                            </td>
                            <td class="text-muted">
                                {{ ($item->parent_id == null) ? 'Üst Kategori' : 'Alt Kategori'  }}
                            </td>
                            <td>
                                <div class="btn-list">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top btn-sm" data-bs-boundary="viewport" data-bs-toggle="dropdown">
                                            Eylemler
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item justify-content-between" href="{{ route('team-categories.edit', $item->id) }}" title="Düzenle">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" /><path d="M16 5l3 3" /><path d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999" /></svg>
                                                Düzenle
                                            </a>
                                            <a data-bs-toggle="modal" data-bs-target="#silmeonayicat{{ $item->id }}" class="dropdown-item justify-content-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                Sil
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal modal-blur fade" id="silmeonayicat{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Silme Onayı</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Silmek üzeresiniz. Bu işlem geri alınmamaktadır.
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg>
                                            İptal Et
                                        </a>
                                        <form action="{{ route('team-categories.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm ms-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                Silmek İstiyorum
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('customJS')
    <script>
        $(document).ready(function() {
            $('#orders').sortable({
                update:function()
                {
                    let siralama = $('#orders').sortable('serialize');
                    $.get("{{ route('team.getOrder') }}?"+siralama,() => {
                        $("#rank").show(500).delay(2500).fadeOut();
                        document.getElementById("rank").innerHTML="Sıralama başarıyla güncellendi.";
                        setInterval(function(){
                            location.reload();
                        }, 3000);
                    });
                }
            });

            $('.switch').change(function() {
                const id = $(this)[0].getAttribute('status-id');
                const status = $(this).prop('checked');

                $.get("{{route('team.getSwitch')}}", {id:id,status:status},
                    () => {
                        if(status) {}
                    });
            })
        })
    </script>
@endsection
