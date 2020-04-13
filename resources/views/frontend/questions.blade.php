@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

    <div class="container new ">
        <form action="{{route("frontend.questions_save")}}" method="post">
            @csrf
            <h2> اسئلة مقابلة "مشروع الشريف"</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name"> الاسم </label>
                        <input name="name" type="text" class="form-control" placeholder="" id="name">
                    </div>
                </div>
                <!--  col-md-6   -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="age"> العمر</label>
                        <input name="age" type="number" class="form-control" placeholder="" id="age" required>
                    </div>
                </div>
                <!--  col-md-6   -->
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nationality"> الجنسية </label>
                        <input name="nationality" type="text" class="form-control" placeholder="" id="nationality" required>
                    </div>
                </div>
                <!--  col-md-6   -->

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="specialty"> كيف تستطيع مساعدتنا؟ </label>
                        <input name="specialty" type="text" class="form-control" id="specialty" placeholder="ما هي موهبتك او اختصاصك " required>
                    </div>
                </div>
                <!--  col-md-6   -->
            </div>
            <!--  row   -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="purpose"> ما الذي جذبك للانضمام معنا في الفريق؟ </label>
                        <input name="purpose" type="text" class="form-control" id="purpose" placeholder="اكتب ما بخاطرك او قلبك كن صريحا مع نفسك" required>
                    </div>
                </div>
                <!--  col-md-6   -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="goal">ما هو هدفك</label>
                        <input name="goal" type="text" class="form-control" id="goal" placeholder="خبرة ام مساعدة الآخرين ام تريد ان نساعدك وتساعد الآخرين" required>
                    </div>
                </div>

                <!--  col-md-6   -->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender"> الجنس</label>
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">ذكر </label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">أنثى </label>
                    </div>

                </div>
                <!--  col-md-6   -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="worked">هل لديك عمل حاليا</label>
                        <input type="radio" id="yes" name="worked" value="yes" required>
                        <label for="yes">نعم</label>
                        <input type="radio" id="no" name="worked" value="no">
                        <label for="no">لا </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="level">ما هو مستواك في موهبتك او اختصاصك ؟</label>
                        <input type="radio" id="junior" name="level" value="junior" required>
                        <label for="junior">مبتدئ</label>
                        <input type="radio" id="intermediate" name="level" value="intermediate">
                        <label for="intermediate"> متوسط</label>
                        <input type="radio" id="professional" name="level" value="professional">
                        <label for="professional"> محترف</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">تأكيد</button>
        </form>
    </div>

@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif

    <style>
        .new {
            margin-top: 60px;
        }

        h2 {
            font-size: 23px;
            font-weight: bold;
            color: #2196f3;
            justify-content: center;
            display: flex;
        }

        .form-control {
            border: 1px solid #2196F3;
            border-radius: 15px;
        }

        .input {
            border: groove 1em red;
        }

        .label {
            color: gray;
        }

    </style>
@endpush
