<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        book
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Book</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Book</h3>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="bookgories" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Number</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(! empty($books))
                                <?php $i = 1;?>
                                @foreach($books as $book)
                                    <tr>
                                        <td style="width: 50px;"><?php echo $i;?></td>
                                        <td><?php echo $book->customer->name;?></td>
                                        <td><?php echo $book->date;?></td>
                                        <td><?php echo $book->number;?></td>
                                        <td style="width: 250px;">
                                            <span class=" action bg-yellow preview" data-toggle="modal" title="preview"
                                                  data-target="#preview"
                                                  style="padding: 8px; margin: 5px; border-radius: 10px; cursor: pointer;"
                                                  bookName="<?php echo $book->customer->name;?>"
                                                  bookNumber="<?php echo $book->number;?>"
                                                  bookDate="<?php echo $book->date;?>"
                                                  bookCreatedDate="<?php echo $book->created_at;?>">
                                                <i class="fa fa-eye fa-lg"></i></span>
                                            <span class="action bg-blue edit" data-toggle="modal" title="edit"
                                                  data-target="#edit" book_id="<?php echo $book->id;?>"
                                                  book_name="{{$book->customer->name}}"
                                                  book_date="{{$book->date}}"
                                                  book_number="{{$book->number}}"
                                                  customer_id="{{$book->customer_id}}"
                                                  style="padding: 8px; margin: 5px; border-radius: 10px; cursor: pointer;"><i
                                                        class="fa fa-pencil-square-o fa-lg"></i></span>
                                            <span class="action  bg-red btn-remove" title="delete"
                                                  book_id="<?php echo $book->id;?>"
                                                  style="padding: 8px; margin: 5px; border-radius: 10px; cursor: pointer;"><i
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
            {{--<div class="col-xs-12">--}}
                {{--<button class="btn btn-info add-book" style="font-weight: bold" data-toggle="modal"--}}
                        {{--data-target="#add"><i class="fa fa-plus-circle"--}}
                                              {{--style="font-size: 20px; margin-right: 5px"></i>Add Book--}}
                {{--</button>--}}
            {{--</div>--}}
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
                <h4 class="modal-title">Preview Book</h4>
            </div>
            <div class="modal-body">
                <div class="row col-xs-12">
                    <div class="col-xs-12">
                        <label>Name</label>
                        <div class="bookName"></div>
                        <hr/>
                    </div>
                    <div class="col-xs-12">
                        <label>Date</label>
                        <div class="bookDate"></div>
                        <hr/>
                    </div>
                    <div class="col-xs-12">
                        <label>Party umber</label>
                        <div class="bookNumber"></div>
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
                <h4 class="modal-title" style="font-weight: bold">New book</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('addBook')}}" method="POST">
                    {{csrf_field()}}
                    <div class="row col-xs-12">
                        @if($errors->has('name'))
                            <div class="col-xs-12 form-group has-error" style="margin: 15px 0px;">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Name" required
                                       value="{{old('name')}}}">
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            </div>
                        @else
                            <div class="col-xs-12 form-group" style="margin: 15px 0px;">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Name" required
                                       value="{{old('name')}}">
                            </div>
                        @endif
                        @if($errors->has('date'))
                            <div class="col-xs-12 form-group has-error" style="margin: 15px 0px ">
                                <label>Email</label>
                                <input type="date" class="form-control" name="email" placeholder="Date"
                                       required value="{{old('date')}}"/>
                                <span class="help-block">{{$errors->first('date')}}</span>
                            </div>
                        @else
                            <div class="col-xs-12 form-group" style="margin: 15px 0px ">
                                <label>Email</label>
                                <input type="date" class="form-control" name="email" placeholder="Date"
                                       required value="{{old('date')}}"/>
                            </div>
                        @endif
                        <div class="col-xs-12 form-group" style="margin: 15px 0px ">
                            <label>Number</label>
                          <input type="number" name="number" placeholder="Party Number">
                        </div>
                        @if($errors->has('number'))
                            <div class="col-xs-12 form-group has-error" style="margin: 15px 0px ">
                                <label>Party Number</label>
                                <input type="text" class="form-control" name="number" placeholder="Party Numerber
                                       required value="{{old('number')}}"/>
                                <span class="help-block">{{$errors->first('number')}}</span>
                            </div>
                        @else
                            <div class="col-xs-12 form-group" style="margin: 15px 0px ">
                                <label>Party Number</label>
                                <input type="number" class="form-control" name="number" placeholder="Number"
                                       required value="{{old('number')}}"/>
                            </div>
                        @endif
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
                <h4 class="modal-title" style="font-weight: bold">Edit Book</h4>
            </div>
            <div class="modal-body">
                <div class="row col-xs-12">
                    <form action="{{route('editBook')}}" method="POST" class="form-edit">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="book-id"/>
                        <input type="hidden" name="customer_id">
                        <div class="col-xs-12 form-group">
                            <label class="col-xs-2">Name</label>
                            <input name="name" class="form-contrl" placeholder="Name" required/>
                        </div>
                        <div class="col-xs-12 form-group">
                            <label class="col-xs-2">Date</label>
                            <input type="date" name="date" class="form-controll"
                                   placeholder="date"/>
                        </div>
                        <div class="col-xs-12 form-group">
                            <label class="col-xs-2">Number</label>
                            <input type="number" placeholder="Party number" name="number"/>
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
        @if(session()->has('edit'))
            console.log(1);
            swal("Edit success!", "Edit Success!", "success")
        @endif
        $(function () {
            $('#bookgories').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
            {{--@if ($errors->any())--}}
                  {{--$('#add').modal('show');--}}
            {{--@endif--}}
            $('.btn-remove').click(function () {
                var id = $(this).attr('book_id');
                swal({
                            title: "Are you sure?",
                            text: "You will not be able to recover this book!",
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
                                removebook(id);
                            } else {
                                swal("Cancelled", "book is safe :)", "error");
                            }
                        });
            });
            $('.preview').click(function () {
                var bookName = $(this).attr('bookName');
                var bookDate = $(this).attr('bookDate');
                var bookNumber = $(this).attr('bookNumber');
                var bookNumber = $(this).attr('bookNumber');
                $('#preview').find('.bookName').text(bookName);
                $('#preview').find('.bookDate').text(bookDate);
                $('#preview').find('.bookNumber').text(bookNumber);
            });

            $('.edit').click(function () {
                var bookId = $(this).attr('book_id');
                var name = $(this).attr('book_name');
                var number = $(this).attr('book_number');
                var date = $(this).attr('book_date');
                var customer_id = $(this).attr('customer_id');


                $('.form-edit').find('input[name=book-id]').attr('value', bookId);
                $('.form-edit').find('input[name=name]').attr('value', name);
                $('.form-edit').find('input[name=date]').attr('value', date);
                $('.form-edit').find('input[name=number]').attr('value', number);
                $('.form-edit').find('input[name=customer_id]').attr('value', customer_id);
            });

            $('.btn-done').click(function () {
                id = $(this).attr('book_id');
                reserver(id);
            });

        function removebook(id) {
            if (id != null && id !== '') {
                $.ajax({
                    type: "POST",
                    url: "{{url('admin/book/remove')}}",
                    dataType: 'JSON',
                    headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
                    data: {
                        id: id
                    },
                    success: function (data) {
                        if (data.status == 'Success') {
                            swal("Deleted!", "The book  has been deleted.", "success");
                            location.reload(true);
                        } else {
                            swal("Fail", "The book  has some error", "error");
                        }
                    },
                    error: function () {
                        swal("Fail", "The book  has some error", "error");
                    }
                });
            }
        }
        function reserver(id) {
            if (id != null && id !== '') {
                $.ajax({
                    type: "POST",
                    url: "{{url('reserverbook ')}}",
                    dataType: 'JSON',
                    headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
                    data: {
                        id: id
                    },
                    success: function (data) {
                        if (data.status == 'Success') {
                            console.log("Fail");
                        }
                        location.reload(true);
                    },
                    error: function () {
                        swal("Fail", "The book  has some error", "error");
                    }
                });
            }
        }
        @if(! empty(session()->has('bookStatus')))
        swal("Success!", "Your register is successfully", "success");
        @endif
    </script>
