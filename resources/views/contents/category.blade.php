    <!-- Content Header (Page header) -->    <section class="content-header">        <h1>            Catagory        </h1>        <ol class="breadcrumb">            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>            <li class="active">Category</li>        </ol>    </section>    <!-- Main content -->    <section class="content">        <div class="row">            <div class="col-xs-12">                <div class="box">                    <div class="box-header">                        <h3 class="box-title">Category</h3>                        <!-- /.box-header -->                        <div class="box-body">                            <table id="categories" class="table table-bordered table-hover">                                <thead>                                <tr>                                    <th>#</th>                                    <th>Name</th>                                    <th>Description</th>                                    <th>Action</th>                                </tr>                                </thead>                                <tbody>                                @if(! empty($cates))                                    <?php $i = 1;?>                                    @foreach($cates as $cate)                                        <tr>                                            <td style="width: 50px;"><?php echo $i;?></td>                                            <td><?php echo $cate->name;?></td>                                            <td><?php echo $cate->description;?></td>                                            <td style="width: 200px;">                                            <span class=" action bg-yellow preview" data-toggle="modal" title="preview"                                                  data-target="#preview"                                                  style="padding: 8px; margin: 5px; border-radius: 10px; cursor: pointer;"                                                  cateName="<?php echo $cate->name;?>"                                                  cateDescription="<?php echo $cate->description;?>"                                                  cateDate="<?php echo $cate->created_at;?>"><i                                                        class="fa fa-eye fa-lg"></i></span>                                            <span class="action bg-blue edit" data-toggle="modal" title="edit"                                                  data-target="#edit" cate_id = "<?php echo $cate->id;?>" cate_name="{{$cate->name}}"                                                  cate_description = "{{$cate->description}}" style="padding: 8px; margin: 5px; border-radius: 10px; cursor: pointer;"><i                                                        class="fa fa-pencil-square-o fa-lg"></i></span>                                            <span class="action  bg-red btn-remove" cate_id="<?php echo $cate->id;?>" title="delete"                                                  style="padding: 8px; margin: 5px; border-radius: 10px; cursor: pointer;"><i                                                        class="fa fa-trash fa-lg"></i></span>                                            </td>                                        </tr>                                        <?php $i++; ?>                                    @endforeach                                @endif                                </tbody>                            </table>                        </div>                        <!-- /.box-body -->                    </div>                    <!-- /.box -->                </div>                <div class="col-xs-12">                    <button class="btn btn-info add-cate" style="font-weight: bold" data-toggle="modal"                            data-target="#add" title="Add category"><i class="fa fa-plus-circle"                                                  style="font-size: 20px; margin-right: 5px"></i>Add                        Category                    </button>                </div>            </div>            <!-- /.col -->        </div>        <!-- /.row -->    </section>    <!-- /.content -->    <!-- Model-->    <div class="modal fade" id="preview" role="dialog">        <div class="modal-dialog">            <!-- Modal content-->            <div class="modal-content">                <div class="modal-header">                    <button type="button" class="close" data-dismiss="modal">&times;</button>                    <h4 class="modal-title">Preview Category</h4>                </div>                <div class="modal-body">                    <div class="row col-xs-12">                        <div class="col-xs-3">                            <label>Name</label>                            <div class="cateName"></div>                        </div>                        <div class="col-xs-5">                            <label>Desciption</label>                            <div class="cateDesciption"></div>                        </div>                        <div class="col-xs-4">                            <label>Created At</label>                            <div class="cateDate"></div>                        </div>                    </div>                    <div class="clear" style="clear: both"></div>                </div>            </div>        </div>    </div>    <div class="modal fade" id="add" role="dialog">        <div class="modal-dialog">            <!-- Modal content-->            <div class="modal-content">                <div class="modal-header">                    <button type="button" class="close" data-dismiss="modal">&times;</button>                    <h4 class="modal-title" style="font-weight: bold">New Category</h4>                </div>                <div class="modal-body">                    <form action="{{route('addCategory')}}" method="POST">                        {{csrf_field()}}                        <div class="row col-xs-12">                            @if($errors->has('name'))                                <div class="col-xs-12 form-group has-error" style="margin: 15px 0px;">                                    <label>Name</label>                                    <input class="form-control" type="text" name="name" placeholder="Name" required                                           value="{{old('name')}}}">                                    <span class="help-block">{{ $errors->first('name') }}</span>                                </div>                            @else                                <div class="col-xs-12 form-group" style="margin: 15px 0px;">                                    <label>Name</label>                                    <input class="form-control" type="text" name="name" placeholder="Name" required                                           value="{{old('name')}}">                                </div>                            @endif                            @if($errors->has('description'))                                <div class="col-xs-12 form-group has-error" style="margin: 15px 0px ">                                    <label>Desciption</label>                                    <input type="text" class="form-control" name="description" placeholder="Description"                                           required value="{{old('description')}}"/>                                    <span class="help-block">{{$errors->first('description')}}</span>                                </div>                            @else                                <div class="col-xs-12 form-group" style="margin: 15px 0px ">                                    <label>Desciption</label>                                    <input type="text" class="form-control" name="description" placeholder="Description"                                           required value="{{old('description')}}"/>                                </div>                            @endif                        </div>                        <div class="box-footer" style="padding-left: 15px">                            <button type="submit" class="btn btn-primary">Add</button>                        </div>                    </form>                    <div class="clear" style="clear: both"></div>                </div>            </div>        </div>    </div>    <div class="modal fade" id="edit" role="dialog">        <div class="modal-dialog">            <!-- Modal content-->            <div class="modal-content">                <div class="modal-header">                    <button type="button" class="close" data-dismiss="modal">&times;</button>                    <h4 class="modal-title">Category</h4>                </div>                <div class="modal-body">                    <div class="row col-xs-12">                        <form action="{{url('editCategory')}}" method="POST" class="form-edit">                            <input type="hidden" name="_token" value="{{csrf_token()}}">                            <input type="hidden" name="cate-id"/>                            <div class="col-xs-12 form-group">                                <label class="col-xs-2">Name</label>                                <input name="name" class="form-contrl" placeholder="Name" required/>                            </div>                            <div class="col-xs-12 form-group">                                <label class="col-xs-2">Desciption</label>                                <textarea name="description" rows="5" cols="50" class="form-controll" placeholder="Description" required></textarea>                            </div>                            <div class="col-xs-12">                                <input class="btn btn-info" type="submit" value="Save"/>                            </div>                        </form>                    </div>                    <div class="clear" style="clear: both"></div>                </div>            </div>        </div>    </div>@stop@section('extra-css-lib')    <!-- DataTables -->    <link rel="stylesheet" href="{{url('/public/assets')}}/plugins/datatables/dataTables.bootstrap.css">    <link rel="stylesheet" href="{{url('/public/assets')}}/dist/css/sweetalert.css">@stop@section('extra-js-lib')    <script src="{{url('public/assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>    <script src="{{url('public/assets')}}/plugins/datatables/dataTables.bootstrap.min.js"></script>    <script src="{{url('public/assets')}}/dist/js/sweetalert.min.js"></script>    <script>        $(function () {            $('#categories').DataTable({                "paging": true,                "lengthChange": false,                "searching": true,                "ordering": true,                "info": true,                "autoWidth": false            });        });//        $(document).ready(function () {            @if ($errors->any())                  $('#add').modal('show');            @endif            $('.btn-remove').click(function () {                var cate_id = $(this).attr('cate_id');                swal({                            title: "Are you sure?",                            text: "You will not be able to recover this category!",                            type: "warning",                            showCancelButton: true,                            confirmButtonColor: "#DD6B55",                            confirmButtonText: "Yes, delete it!",                            cancelButtonText: "No, cancel plx!",                            closeOnConfirm: false,                            closeOnCancel: false                        },                        function (isConfirm) {                            if (isConfirm) {                                console.log(cate_id);                                removeCategory(cate_id);                            } else {                                swal("Cancelled", "Category is safe :)", "error");                            }                        });            });            $('.preview').click(function () {                var cateName = $(this).attr('cateName');                var cateDescription = $(this).attr('cateDescription');                var cateDate = $(this).attr('cateDate');                $('#preview').find('.cateName').text(cateName);                $('#preview').find('.cateDesciption').text(cateDescription);                $('#preview').find('.cateDate').text(cateDate);            });            $('.edit').click(function () {                var cateId = $(this).attr('cate_id');                var name = $(this).attr('cate_name');                var description = $(this).attr('cate_description');                $('.form-edit').find('input[name=cate-id]').attr('value', cateId);                $('.form-edit').find('input[name=name]').attr('value', name);                $('.form-edit').find('textarea[name=description]').val(description);            });//        });        function removeCategory(id) {            if (id != null && id !== '') {                $.ajax({                    type: "POST",                    url: "{{url('removeCategory ')}}",                    dataType: 'JSON',                    headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},                    data: {                        id: id                    },                    success: function (data) {                        if (data.status == 'Success') {                            swal("Deleted!", "The category  has been deleted.", "success");                            location.reload(true);                        } else {                            swal("Fail", "The category  has some error", "error");                        }                    },                    error: function () {                        swal("Fail", "The category  has some error", "error");                    }                });            }        }    </script>