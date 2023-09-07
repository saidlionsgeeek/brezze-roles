<x-app-layout>
  <a href="{{route("admin.roles.create")}}">create</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role )
                <tr>
            <th scope="row">1</th>
            <td>{{{$role->name}}}</td>
            <td><button  class="btn btn-primary "><a href="{{route("admin.roles.edit",$role->id)}}">edit</a></button></td>
            <td>@mdo</td>
          </tr>
            @endforeach
        </tbody>
      </table>
</x-app-layout>