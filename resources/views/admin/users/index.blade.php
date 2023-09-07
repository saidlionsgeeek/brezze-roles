<x-app-layout>
    {{-- <a href="{{route("admin.users.create")}}">create</a> --}}
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">name</th>
              <th scope="col">email</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($users as $user )
              @if (!$user->hasrole(["admin"]))
                  <tr>
              <th scope="row">1</th>
              <td>{{{$user->name}}}</td>
              <td>{{$user->email}}</td>
              <td>
                
                <form action="{{route("admin.users.destroy",$user->id)}}" method="POST">
                    @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">delete</button>
                </form>
            </td>
            </tr>
              @endif
                
              @endforeach
          </tbody>
        </table>
  </x-app-layout>