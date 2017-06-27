<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Item
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">item</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">item</h3>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="itemgories" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(! empty($items))
                                <?php $i = 1;?>
                                @foreach($items as $item)
                                    <tr>
                                        <td style="width: 50px;"><?php echo $i;?></td>
                                        <td><?php echo $item->name;?></td>
                                        <td><?php echo $item->description;?></td>
                                        <td><?php echo $item->category->name?></td>
                                        <td style="width: 200px;">
                                            <span class=" action bg-yellow preview" data-toggle="modal"
                                                  data-target="#preview" title="preview"
                                                  style="padding: 8px; margin: 5px; border-radius: 10px; cursor:pointer"
                                                  itemName="<?php echo $item->name;?>"
                                                  itemDescription="<?php echo $item->description;?>"
                                                  itemDate="<?php echo $item->created_at;?>"
                                                  itemPrice="<?php echo $item->price?>"
                                                  itemCategory="<?php echo $item->category->name;?>"
                                            ><i
                                                        class="fa fa-eye fa-lg"></i></span>
                                            <span class="action bg-blue edit" data-toggle="modal" title="edit"
                                                  data-target="#edit" item_id="<?php echo $item->id;?>"
                                                  item_name="{{$item->name}}" item_price = "{{$item->price}}"
                                                  category_name = "{{$item->category->name}}"
                                                  item_description="{{$item->description}}"
                                                  style="padding: 8px; margin: 5px; border-radius: 10px; cursor:pointer "><i
                                                        class="fa fa-pencil-square-o fa-lg"></i></span>
                                            <span class="action  bg-red btn-remove" title="delete" item_id="<?php echo $item->id;?>"
                                                  style="padding: 8px; margin: 5px; border-radius: 10px; cursor:pointer"><i
                                                        class="fa fa-trash fa-lg"></i></span>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-xs-12">
                <button class="btn btn-info add-item" title="Add item" style="font-weight: bold" data-toggle="modal"
                        data-target="#add"><i class="fa fa-plus-circle"
                                              style="font-size: 20px; margin-right: 5px"></i>Add
                    item
                </button>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

<!-- Model-->
<div class="modal fade" id="preview" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Preview item</h4>
            </div>
            <div class="modal-body">
                <div class="row col-xs-12">
                    <div class="col-xs-12">
                        <label>Name</label>
                        <div class="itemName"></div>
                        <hr/>
                    </div>
                    <div class="col-xs-12">
                        <label>Desciption</label>
                        <div class="itemDesciption"></div>
                        <hr/>
                    </div>
                    <div class="col-xs-12">
                        <label>Price</label>
                        <div class="itemPrice"></div>
                        <hr/>
                    </div>
                    <div class="col-xs-12">
                        <label>Category</label>
                        <div class="itemCategory"></div>
                        <hr/>
                    </div>
                    <div class="col-xs-12">
                        <label>Created At</label>
                        <div class="itemDate"></div>
                        <hr/>
                    </div>

                </div>
                <div class="clear" style="clear: both"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="add" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="font-weight: bold">New Item</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('addItem')}}" method="POST">
                    {{csrf_field()}}
                    <div class="row col-xs-12">
                        @if($errors->has('name'))
                            <div class="col-xs-12 form-group has-error" style="margin: 15px 0px;">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Name" required
                                       value="{{old('name')}}">
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            </div>
                        @else
                            <div class="col-xs-12 form-group" style="margin: 15px 0px;">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Name" required
                                       value="{{old('name')}}">
                            </div>
                        @endif
                        @if($errors->has('description'))
                            <div class="col-xs-12 form-group has-error" style="margin: 15px 0px ">
                                <label>Desciption</label>
                                <input type="text" class="form-control" name="description" placeholder="Description"
                                       required value="{{old('description')}}"/>
                                <span class="help-block">{{$errors->first('description')}}</span>
                            </div>
                        @else
                            <div class="col-xs-12 form-group" style="margin: 15px 0px ">
                                <label>Desciption</label>
                                <input type="text" class="form-control" name="description" placeholder="Description"
                                       required value="{{old('description')}}"/>
                            </div>
                        @endif
                        @if($errors->has('price'))
                            <div class="col-xs-12 form-group has-error" style="margin: 15px 0px ">
                                <label>Price</label>
                                <input type="text" class="form-control" name="price" placeholder="Price"
                                       required value="{{old('price')}}"/>
                                <span class="help-block">{{$errors->first('price')}}</span>
                            </div>
                        @else
                            <div class="col-xs-12 form-group" style="margin: 15px 0px ">
                                <label>Price</label>
                                <input type="text" class="form-control" name="price" placeholder="Price"
                                       required value="{{old('price')}}"/>
                            </div>
                        @endif
                        <div class="col-xs-12 form-group" style="margin: 15px 0px ">
                            <label>Category</label>
                            <div class="col-xs-12">
                                <select name="category">
                                    @if(! empty($categories))
                                        @foreach($categories as $category)
                                            <option cate_id="<?php echo $category->id;?>"><?php echo $category->name?></option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer" style="padding-left: 15px">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
                <div class="clear" style="clear: both"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">item</h4>
            </div>
            <div class="modal-body">
                <div class="row col-xs-12">
                    <form action="{{url('editItem')}}" method="POST" class="form-edit">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="item-id"/>
                        <div class="col-xs-12 form-group">
                            <label class="col-xs-2">Name</label>
                            <input name="name" class="form-contrl" placeholder="Name" required/>
                        </div>
                        <div class="col-xs-12 form-group">
                            <label class="col-xs-2">Desciption</label>
                            <textarea name="description" rows="5" cols="50" class="form-controll"
                                      placeholder="Description"></textarea>
                        </div>
                        <div class="col-xs-12 form-group">
                            <label class="col-xs-2">Price</label>
                            <input name="price" class="form-contrl" placeholder="Price" required/>
                        </div>
                        <div class="col-xs-12">
                            <label class="col-xs-2">Category</label>
                                <select name="category">
                                    @if(! empty($categories))
                                        @foreach($categories as $category)
                                            <option cate_id="<?php echo $category->id;?>"><?php echo $category->name?></option>
                                        @endforeach
                                    @endif
                                </select>
                        </div>
                        <div class="col-xs-12">
                            <input class="btn btn-info" type="submit" value="Save"/>
                        </div>
                    </form>
                </div>

                <div class="clear" style="clear: both"></div>
            </div>
        </div>
    </div>
</div>
@stop
@section('extra-css-lib')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('/public/assets')}}/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="{{url('/public/assets')}}/dist/css/sweetalert.css">
@stop
@section('extra-js-lib')
    <script src="{{url('public/assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('public/assets')}}/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="{{url('public/assets')}}/dist/js/sweetalert.min.js"></script>
    <script>
        $(function () {
            $('#itemgories').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
//        $(document).ready(function () {
            @if ($errors->any())
                  $('#add').modal('show');
            @endif
            $('.btn-remove').click(function () {
                var id = $(this).attr('item_id');
                swal({
                            title: "Are you sure?",
                            text: "You will not be able to recover this item!",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Yes, delete it!",
                            cancelButtonText: "No, cancel plx!",
                            closeOnConfirm: false,
                            closeOnCancel: false
                        },
                        function (isConfirm) {
                            if (isConfirm) {
                                removeItem(id);
                            } else {
                                swal("Cancelled", "item is safe :)", "error");
                            }
                        });
            });
            $('.preview').click(function () {
                var itemName = $(this).attr('itemName');
                var itemDescription = $(this).attr('itemDescription');
                var itemDate = $(this).attr('itemDate');
                var itemPrice = $(this).attr('itemPrice');
                var itemCategory = $(this).attr('itemCategory');

                $('#preview').find('.itemName').text(itemName);
                $('#preview').find('.itemDesciption').text(itemDescription);
                $('#preview').find('.itemDate').text(itemDate);
                $('#preview').find('.itemPrice').text(itemPrice);
                $('#preview').find('.itemCategory').text(itemCategory);
            });

            $('.edit').click(function () {
                var itemId = $(this).attr('item_id');
                var name = $(this).attr('item_name');
                var description = $(this).attr('item_description');
                var price = $(this).attr('item_price');
                var category = $(this).attr('category_name');

                $('.form-edit').find('input[name=item-id]').attr('value', itemId);
                $('.form-edit').find('input[name=name]').attr('value', name);
                $('.form-edit').find('textarea[name=description]').val(description);
                $('.form-edit').find('input[name=price]').val(price);
                $('.form-edit').find('select[name=category]').val(category);
            });
//        });

        function removeItem(id) {
            if (id != null && id !== '') {
                $.ajax({
                    type: "POST",
                    url: "{{url('removeItem')}}",
                    dataType: 'JSON',
                    headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
                    data: {
                        id: id
                    },
                    success: function (data) {
                        if (data.status == 'Success') {
                            swal("Deleted!", "The item  has been deleted.", "success");
                            location.reload(true);
                        } else {
                            swal("Fail", "The item  has some error", "error");
                        }
                    },
                    error: function () {
                        swal("Fail", "The item  has some error", "error");
                    }
                });
            }
        }
    </script>
