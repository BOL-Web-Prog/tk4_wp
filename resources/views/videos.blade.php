<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        
        <div class="relative flex items-top min-h-screen bg-gray-100 dark:bg-gray-900 py-4 sm:pt-0">
        
            <div class="relative flex flex-col mt-10">
            <form id="fileUploadForm" action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if ($errors->any())
                    <div class="alert alert-danger text-white">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="flex flex-col mx-10 border-2 border-white">
                    <div class="flex flex-col mx-3 my-3">
                        <div class="flex text-white">
                        <label>Video Title </label>
                        </div>
                        <div class="flex">
                            <input type="input" placeholder="Input Video Title"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="video_title"
                            required
                            >
                        </div>
                    </div>

                    <div class="flex flex-col mx-3 my-3">
                        <div class="flex text-white">
                        <label>Video File </label>
                        </div>
                        <div class="flex">
                            <div class="flex flex-col">
                                <div class="flex">
                                    <input type="file" 
                                    name="video_filename"
                                    class="block w-full text-gray-900 bg-gray-50 rounded border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    required
                                    >
                                </div>
                                <div class="flex">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Only receive <b>Mp4</b> format.</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="flex progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                        </div> --}}
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 progress invisible">
                            <div class="progress-bar bg-blue-600 h-2.5 rounded-full" style="width: 0%"></div>
                          </div>
                    </div>
            </div>
                <div class="form flex flex-col mx-10  border-2 border-white">
                <button 
                type="submit"
                class="bg-white hover:bg-[#111827] text-[#111827] font-semibold hover:text-white py-2 px-4 border border-[#111827] hover:border-transparent">
                UPLOAD
                </button>
                </div>
            </form>
            </div>
            <div class="relative flex flex-col mt-10">
            <div class="overflow-x-auto relative">
    <table class="w-full md:w-[900px] text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            
                <th scope="col" class="py-3 px-6 text-center items-center w-44 text-white">
                    Video Title
                </th>
                <th scope="col" class="py-3 px-6 text-center items-center text-white">
                    Video 
                </th>
            
        </thead>
        <tbody id="video_table">
        {{-- @foreach($video as $data)
            <tr class="border-b dark:bg-gray-800 dark:border-gray-700 items-center text-center">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$data->video_title}}
                </th>
                <td class="py-4 px-6">
                    {{$data->video_filename}}
                </td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>
</div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
        <script>
            $(function () {
                fetch_data();
                $(document).ready(function () {
                    $('#fileUploadForm').ajaxForm({
                        beforeSend: function () {
                            var percentage = '0';
                            $('.progress').addClass('visible');
                            $('.progress').removeClass('invisible');
                        },
                        uploadProgress: function (event, position, total, percentComplete) {
                            var percentage = percentComplete;
                            $('.progress .progress-bar').css("width", percentage+'%', function() {
                              return $(this).attr("aria-valuenow", percentage) + "%";
                            })
                        },
                        complete: function (xhr) {
                            console.log(xhr);
                            $('.progress').addClass('invisible');
                            $('.progress').removeClass('visible');
                            
                        }
                    });
                });

                function fetch_data(){
                    var table = document.getElementById('video_table');
                    fetch('http://127.0.0.1:8000/api/show')
                    .then((response) => response.json())
                    .then((data) => 
                    data.forEach((object) => {
                        var tr = document.createElement('tr');
                        tr.innerHTML = 
                        '<th  scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' + object.video_title + '</th>' +
                        '<td class="justify-content py-4 px-6"><video width="320" height="240" controls><source src="http://127.0.0.1:8000/'+ object.video_filename +'" type="video/mp4">Your browser does not support the video tag.</video>';   
                            + '</td>';
                        table.appendChild(tr);
                    })
                    );
                }
            });
        </script>
    </body>
</html>
