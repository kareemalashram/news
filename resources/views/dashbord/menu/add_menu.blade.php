@extends('layouts.baseDashbord')
@section('content')
    <section class="content-header">
        <h1>
            إضافة قائمة جديدة
        </h1>
    </section>
    <section class="content">
        <div class="row" >
            <form id="add_new_menu">
                @csrf
                <div class="col-md-12">
                    <div class="form-group">
                        <label> اسم القائمة</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>inde</label>
                        <input type="number" name="inde" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label> route_name</label>
                        <input type="text" name="route_name" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> القائمة</label>
                        <select class="form-control" name="menu">
                            <option value="1">القائمة الداخلية</option>
                            <option value="2">القائمة الخارجية</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> متاحة للمستخدمين</label>
                        <select multiple class="form-control" name="role[]">
                            <option value="user">للمستخدمين</option>
                            <option value="super">للمشرفين</option>
                            <option value="admin">للمدراء</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <button id="submit" type="button" class="btn btn-primary btn-block"> حفظ  </button>
                    </div>
                </div>
            </form>
        </div>
    </section>


<script>
    $("#submit").on('click',function () {
        var conf = confirm("تاكيد عميلة اضافة القائمة") ;
        if (conf == true){
            var form = $("#add_new_menu").serialize();
            $.ajax({
                url  : '{{ route('add_new_menu') }}',
                data : form,
                type : 'POST',
                success:function (e) {
                    success_add('completed add success');
                    console.log(e);
                },error:function (e) {
                    console.log(e)

                }
            })
        }

    })
    function success_add(god) {
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: god,
        showConfirmButton: false,
        timer: 1500
    })

    }
</script>

@endsection
