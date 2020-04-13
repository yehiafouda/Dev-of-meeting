@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    أسئلة المقابلة
                </div><!--card-header-->
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>الإسم</th>
                                <th>العمر</th>
                                <th>الجنسية</th>
                                <th>الإختصاص</th>
                                <th>ما هو هدفك</th>
                                <th>ما الذي جذبك للانضمام معنا</th>
                                <th>هل لديك عمل</th>
                                <th>الجنس</th>
                                <th>المستوى</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($questions as $q)
                                <tr>
                                    <td>{{$q->name}}</td>
                                    <td>{{$q->age}}</td>
                                    <td>{{$q->nationality}}</td>
                                    <td>{{$q->specialty}}</td>
                                    <td>{{$q->goal}}</td>
                                    <td>{{$q->purpose}}</td>
                                    <td>{{$q->worked}}</td>
                                    <td>{{$q->gender}}</td>
                                    <td>{{$q->level}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
