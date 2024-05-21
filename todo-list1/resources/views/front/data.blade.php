@extends('layouts.app')
@section('data')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4 mt-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Görev Adı</th>
                                <th>Görev Tarihi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->gorevAdi }} </td>
                                    <td>{{ $task->gorevTarih }}<form action="{{ route('sil',$task->id)}}" method="POST">
                                            @csrf
                                            <button name="sil"  type="submit" class="btn btn-danger">Sil</button>
                                        </form>
                                        <div class="menu-inner-shadow"></div>

                                        <ul class="menu-inner py-1">
                                            <li class="menu-item">
                                                <a href="{{ route('edit',$task->id) }}" class="btn btn-primary">
                                                    <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                                                    <div>guncelle</div>
                                                </a>

                                            </li>
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

@endsection



