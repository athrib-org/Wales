@extends('layouts.app')

@push('title')
    الأبار
@endpush
@push('breadcrumb')
    <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
        الأبار
    </a>
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/css/datatables.min.css') }}">
@endpush
@section('body')



    <div class="mt-6">
        <div class="p-4 bg-white rounded-lg shadow-sm xl:p-8">
            <div class="space-y-3 sm:flex sm:items-start sm:space-y-0 sm:justify-between">
                <h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">الأبار</h2>

                <a href="{{ route('basic-informations.create') }}"
                    class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <span>أضافة بئر</span>
                </a>

                <!-- component -->
                <!-- This is an example component -->

            </div>
            <form action="{{ route('search') }}" method="GET">
                @csrf
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="border-2 border-gray-300 bg-white h-10 px-8 pr-10 rounded-lg text-sm focus:outline-none"
                        type="search" name="search" placeholder="بحث" value="{{ request()->input('search') }}">
                    <button class="bg-indigo-500 text-white font-semie-bold py-2 px-4 rounded">بحث</button>
                </div>
            </form>


            <div class="flex flex-col mt-8">
                <div class="-my-2 overflow-x-auto xl:-mx-8">
                    <div class="inline-block min-w-full py-2 align-right sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200" id="basic-informations-table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-right">
                                            #
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            state
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            local
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Region
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Owner
                                        </th>
                                        {{-- <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Advisor
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Funded
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            P.M
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Date
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Days
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Cost
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                        </th> --}}


                                        <th>
                                            <a href="{{ route('report') }}">
                                                <button class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </a>
                                        </th>



                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($basicInformations as $basicInformation)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $basicInformation->id }}
                                            </td>

                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->state->name }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->local->name }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->region->name }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->owner }}
                                            </td>
                                            {{-- <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->advisor }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->funded }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->project_manager }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->start_date }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->execution_time }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->total_cost }}
                                            </td> --}}
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center space-x-2">
                                                    <a href="{{ route('basic-informations.show', $basicInformation->id) }}"
                                                        class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('basic-informations.edit', $basicInformation->id) }}"
                                                        class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <form
                                                        action="{{ route('basic-informations.destroy', $basicInformation->id) }}"
                                                        method="post">
                                                        @csrf {{ method_field('DELETE') }}
                                                        <button
                                                            class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            <div class="w-full mt-8 bg-white dark:bg-gray-800">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection


@push('js')
    {{-- <script src="{{ asset('vendor/js/datatables.min.js') }}"></script>
    <script src="vendor/pdfmake-0.1.36/pdfmake.js"></script>
    <script src="vendor/pdfmake-0.1.36/vfs_fonts.js"></script> --}}

    <script>
        // import pdfFonts from "pdfmake/build/vfs_fonts";
        // pdfMake.vfs = pdfFonts.pdfMake.vfs;

        //     //Datatable
        //     $(document).ready(function() {
        //         $('#basic-informations-table').DataTable({

        //             dom: 'Bfrtip',
        //             "order": [
        //                 [0, "desc"]
        //             ],
        //             "columnDefs": [{
        //                     "targets": [4],
        //                     "visible": false,
        //                     "searchable": false
        //                 },
        //                 {
        //                     "targets": [5],
        //                     "visible": false,
        //                     "searchable": false
        //                 },
        //                 {
        //                     "targets": [6],
        //                     "visible": false,
        //                     "searchable": false
        //                 },
        //                 {
        //                     "targets": [7],
        //                     "visible": false,
        //                     "searchable": false
        //                 },
        //                 {
        //                     "targets": [9],
        //                     "visible": false,
        //                     "searchable": false
        //                 },
        //                 {
        //                     "targets": [10],
        //                     "visible": false,
        //                     "searchable": false
        //                 },
        //             ],
        //             "language": {
        //                 "emptyTable": "لا توجد بيانات متوفرة في الجدول",
        //                 "search": "بحث:",
        //                 "lengthMenu": "_MENU_ السجلات",
        //                 "sInfo": "إظهار الصفحة _PAGE_ من _PAGES_",
        //                 "sInfoEmpty": "إظهار 0 إلى 0 من 0 السجلات",
        //                 "zeroRecords": "لم يتم العثور على سجلات مطابقة",
        //                 "infoFiltered": "(تمت تصفيته من إجمالي السجلات _MAX_)",
        //             },
        //             buttons: ['excel', {
        //                 extend: 'pdfHtml5',
        //                 text: 'PDF',
        //                 orientation: 'landscape',
        //                 title: 'Basic Information',
        //                 footer: true,
        //                 customize: function(doc) {
        //                     doc.defaultStyle={
        //                         font:"Alarabiya Font Normal",
        //                     },
        //                     // doc.styles.content = {
        //                     //     font: 'Cairo'
        //                     // },
        //                     doc.styles.title = {
        //                         color: 'white',
        //                         fontSize: '0',
        //                         background: 'white',
        //                         alignment: 'center',

        //                     }
        //                     doc['footer'] = (function(page, pages) {
        //                         return {
        //                             columns: [
        //                                 `Sudan - Khartoum - Riyad - 7/130
        //                                  T: +249 183 520205
        //                                  F: +249 183 520201 / 520202
        //                                  E: info@wales.sd
        //                                  www.wales.sd`,
        //                                 `ALL Copy Right to Wales 2022
        //                                Devolped and Desinged by  Athrib 
        //                                www.Athrib.com`,
        //                                 {
        //                                     // This is the right column
        //                                     alignment: 'right',
        //                                     text: ['page ', {
        //                                         text: page.toString()
        //                                     }, ' of ', {
        //                                         text: pages.toString()
        //                                     }]
        //                                 }
        //                             ],
        //                             margin: [10, 0]
        //                         }
        //                     });

        //                     doc.content.splice(1, 0, {
        //                         width: 450,
        //                         margin: [10, 0, 30, 20],
        //                         alignment: 'center',
        {{-- //                         image: 'data:image/jpeg;base64,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'
    //                     });
    //                     // Data URL generated by http://dataurl.net/#dataurlmaker
    //                 }
    //             }]
    //         });
    //     });
    // </script> --}}
    @endpush
