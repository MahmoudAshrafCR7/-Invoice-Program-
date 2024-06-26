@extends('layouts.master')
@section('title')

@stop

<title>Invoices</title>
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الفواتير</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة الفواتير</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">


					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')



@if (session()->has('delete_invoice'))
        <script>
            window.onload = function() {
                notif({
                    msg: "تم حذف الفاتورة بنجاح",
                    type: "success"
                });
            }
        </script>
    @endif

@if (session()->has('Status_Update'))
<script>
    window.onload = function() {
        notif({
            msg: "تم تحديث حالة الدفع بنجاح",
            type: "success"
        })
    }

</script>
@endif

@if (session()->has('restore_invoice'))
<script>
    window.onload = function() {
        notif({
            msg: "تم استعادة الفاتورة بنجاح",
            type: "success"
        })
    }

</script>
@endif
				<!-- row -->
				<div class="row">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="card-header pb-0">
                                        <a href="invoices/create" class="modal-effect btn btn-sm btn-primary" style="color:white"><i
                                            class="fas fa-plus"></i>&nbsp; اضافة فاتورة</a>


                                        <a class="modal-effect btn btn-sm btn-primary" href="{{ url('export_invoices') }}"
                                        style="color:white"><i class="fas fa-file-download"></i>&nbsp;تصدير اكسيل</a>

                                    </div>
                                <div class="card-body">
                                    <div class="table ">
                                        <table id="example1" class="table key-buttons text-md-nowrap">
                                    <thead >
                                    <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">رقم الفاتورة</th>
                                    <th class="border-bottom-0">تاريخ القاتورة</th>
                                    <th class="border-bottom-0">تاريخ الاستحقاق</th>
                                    <th class="border-bottom-0">المنتج</th>
                                    <th class="border-bottom-0">القسم</th>
                                    <th class="border-bottom-0">الخصم</th>
                                    <th class="border-bottom-0">نسبة الضريبة</th>
                                    <th class="border-bottom-0">قيمة الضريبة</th>
                                    <th class="border-bottom-0">الاجمالي</th>
                                    <th class="border-bottom-0">الحالة</th>
                                    <th class="border-bottom-0">ملاحظات</th>
                                    <th class="border-bottom-0">العمليات</th>
                                    </tr>
                                    </thead>
                                            <tbody>
                                                @php
                                                $i = 0;
                                                @endphp
                                                @foreach ($invoices as $invoice)
                                                    @php
                                                    $i++
                                                    @endphp
                                                    <tr>
                                                        <td class="text-center">{{ $i }}</td>
                                                        <td class="text-center">{{ $invoice->invoice_number }} </td>
                                                        <td class="text-center">{{ $invoice->invoice_Date }}</td>
                                                        <td class="text-center">{{ $invoice->due_date }}</td>
                                                        <td class="text-center">{{ $invoice->product }}</td>
                                                        <td class="text-center">
                                                            <a
                                                                href="{{ url('InvoicesDetails') }}/{{ $invoice->id }}">{{ $invoice->section->section_name }}
                                                            </a>
                                                        </td>
                                                        <td class="text-center">{{ $invoice->Discount }}</td>
                                                        <td class="text-center">{{ $invoice->Rate_Vat }}</td>
                                                        <td class="text-center">{{ $invoice->Value_Vat }}</td>
                                                        <td class="text-center">{{ $invoice->Total }}</td>
                                                        <td class="text-center">

                                                            @if ($invoice->value_status == 1)
                                                                <span class="text-success">{{ $invoice->Status }}</span>
                                                            @elseif($invoice->value_status == 2)
                                                                <span class="text-danger">{{ $invoice->Status }}</span>
                                                            @else
                                                                <span class="text-warning">{{ $invoice->Status }}</span>
                                                            @endif

                                                        </td>



                                                        <td class="text-center">{{ $invoice->note }}</td>
                                                        <td class="text-center">
                                                            <div class="dropdown">
                                                                <button aria-expanded="false" aria-haspopup="true"
                                                                class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                                type="button">العمليات<i class="fas fa-caret-down ml-1"></i></button>
                                                                <div class="dropdown-menu tx-13">

                                                                    <a class="dropdown-item" href=" {{ url('edit_invoice') }}/{{ $invoice->id }}">
                                                                        <i class="text-danger fas fa-pen-alt"></i> تعديل الفاتورة</a>



                                                                        <a class="dropdown-item" href="#" data-invoice_id="{{ $invoice->id }}"
                                                                            data-toggle="modal" data-target="#delete_invoice">
                                                                            <i class="text-danger fas fa-trash-alt"></i>&nbsp;&nbsp;حذف
                                                                            الفاتورة</a>


                                                                        <a class="dropdown-item"
                                                                            href="{{ URL::route('Status_show', [$invoice->id]) }}"><i
                                                                                class=" text-success fas fa-money-bill"></i>&nbsp;&nbsp;تغيرحالةالدفع
                                                                        </a>



                                                                        <a class="dropdown-item" href="#" data-invoice_id="{{ $invoice->id }}"
                                                                            data-toggle="modal" data-target="#Transfer_invoice"><i
                                                                                class="text-warning fas fa-exchange-alt"></i>&nbsp;&nbsp;نقل الي
                                                                            الارشيف</a>




                                                                        <a class="dropdown-item" href="Print_invoice/{{ $invoice->id }}"><i
                                                                                class="text-success fas fa-print"></i>&nbsp;&nbsp;طباعة الفاتورة
                                                                        </a>


                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>




                                                    @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/div-->

                        <!--div-->

                    </div>


                    <div class="modal fade" id="delete_invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">حذف الفاتورة</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <form action="{{ route('invoices.destroy', 'test') }}" method="post">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                            </div>
                            <div class="modal-body">
                                هل انت متاكد من عملية الحذف ؟
                                <input type="hidden" name="invoice_id" id="invoice_id" value="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                <button type="submit" class="btn btn-danger">تاكيد</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- ارشيف الفاتورة -->
                <div class="modal fade" id="Transfer_invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ارشفة الفاتورة</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <form action="{{ route('invoices.destroy', 'test') }}" method="post">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                            </div>
                            <div class="modal-body">
                                هل انت متاكد من عملية الارشفة ؟
                                <input type="hidden" name="invoice_id" id="invoice_id" value="">
                                <input type="hidden" name="id_page" id="id_page" value="2">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                <button type="submit" class="btn btn-success">تاكيد</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>



				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>

<script>
    $('#delete_invoice').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var invoice_id = button.data('invoice_id')
        var modal = $(this)
        modal.find('.modal-body #invoice_id').val(invoice_id);
    })

</script>

<script>
    $('#Transfer_invoice').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var invoice_id = button.data('invoice_id')
        var modal = $(this)
        modal.find('.modal-body #invoice_id').val(invoice_id);
    })

</script>
@endsection
