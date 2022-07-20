
<style>

    img{
        border-radius: 50%;
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 50%;
    width: 2.5rem;
    }
</style>

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

    @include('layouts.style')
@include('layouts.lightmode')
<!-- Navbar -->
@include('layouts.topnavbar')
@include('layouts.usersidebar')
<!-- /.navbar -->
        <div class="content-wrapper">


            <br>
            <h1>&nbsp;&nbsp;User List</h1>

            <div class="container-fluid">
                <table class="table table-bordered table-sm table-hover  border-primary">
                    <a href="{{ route('admin.user.create') }}">
                        <button type="button" class="btn btn-primary">

                            Create New Industry
                        </button>
                    </a>
                    <br><br>
                    <thead class="table-active bg-primary">
                        <tr>
                            <th style="width: 5%">
                                ID
                            </th>
                            <th style="width: 10%">
                                industry
                            </th>
                            <th style="width: 15%">
                                Name
                            </th>
                            <th style="width: 25%">
                                Email
                            </th>
                            <th style="width: 20%">
                                Profile
                            </th>
                            <th style="width: 20%">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="align-middle">{{$user->id}}</td>
                            <td class="align-middle">{{$user->role}}</td>
                            <td class="align-middle">{{$user->name}}</td>
                            <td class="align-middle">{{$user->email}}</td>
                            <td class="align-middle">
                                @if ($user->avatar)
                                    <img src="{{ asset('images/' . $user->avatar) }}"
                                    style="height:70px;" style="width:100px;"
                                    alt="25">
                                @else
                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">

                                @endif
                            </td>
                            <td class="align-middle"> <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                   
                                </a>
                                &nbsp;
                                <a class="btn btn-info btn-sm" href="/admin/user/{{$user->id}}/edit">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                &nbsp;

                                <form method="POST" action="/admin/user/{{ $user->id }}" style="display:inline" >
                                     {{-- {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="DELETE"> --}}
                                    @csrf
                                    @method('delete')

                                      <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete?')">
                                    <i class="fas fa-trash">
                                    </i>
                                      </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mx-auto d-flex justify-content-center">
                    {{ $users->links() }}
             </div>
            </div>
        </div>
        @include('layouts.footer')
        <script>
            var loadFile = function (event) {
                var image = document.getElementById("output");
                image.src = URL.createObjectURL(event.target.files[0]);
            };
        
        </script>
        @include('layouts.script')

    </div>


