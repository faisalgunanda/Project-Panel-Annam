@section('css')
    <link type="text/css" rel="stylesheet" href="{{asset('backend/node_modules/materialize-css/dist/css/materialize.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{asset('backend/node_modules/prismjs/themes/prism.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{asset('backend/node_modules/datatables.net-dt/css/jquery.dataTables.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/app.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/helper.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/responsive.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/theme/default.css') }}" />

@endsection
@section('js')
    <script src="{{asset('backend/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('backend/node_modules/materialize-css/dist/js/materialize.min.js')}}"></script>
    <script src="{{asset('backend/node_modules/prismjs/prism.js')}}"></script>
    <script src="{{asset('backend/node_modules/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
    <script src="{{asset('backend/assets/js/search.js')}}"></script>
    <script src="{{asset('backend/node_modules/sweetalert/dist/sweetalert.min.js')}}"></script>

        <script>
        $(document).ready(function() {
            
            $('#example').DataTable();
            let response = $('.box').attr('response');
            let message = $('.box').attr('message');

        if (response == 'success') {
            swal("Action Success!", message, "success");
        } else if (response == 'error') {
            swal("Action Error!", message, "error");
        }
        
        $(document).on('click','.update_button',function (event) {
         event.preventDefault();
         var id = $(this).attr('idUser');
         let key = $(this).attr('key');
         updateUser(id,key)
         });

       function loaddata() {
         $.ajax({
           url: location.origin+'/user/loaddata',
           type: 'get',
           success : function(data){
             $('.loaddataUser').html(data);
           }
         });
       }

       function updateUser (id,key) {
        let color = '';
        let message = '';
        if (key == 'aktif') {
            message = 'Yakin mengaktifkan user'
            color = '#5cb85c'
        } else {
            message = 'Yakin menonaktifkan user'
            color = '#DD6B55'
        }
         swal({
             title: "Apa Anda Yakin?",
             text: message, type: "warning",
             showCancelButton: true,
             confirmButtonColor: color,
             confirmButtonText: "Iya",
             closeOnConfirm: false
            }, 
           function () {
              $.ajax({
                headers:{
                   'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content'),
                 },
                url : location.origin+'/user/'+ id,
                method:'PUT',
                data: {
                    id: id,
                    status: key
                    },
                success : function(data){
                  if (data == 'aktif') {
                    swal("Success!", "User berhasil diaktifkan.", "success");
                    loaddata();
                  }
                  else if (data == 'nonaktif') {
                    swal("Success!", "User berhasil dinonaktifkan.", "success");
                    loaddata();
                  }
                }
              });
            });
        }
      });
    </script>

        });
    </script>
@endsection