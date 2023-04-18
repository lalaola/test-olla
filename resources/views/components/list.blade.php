{{-- list  user --}}
<div class="container  mt-5">
    <h1 class="text-md-end text-center mb-5">List Of User </h1>
    <div class="row mb-3">
      <div class="col-md-3">
          <form action="{{ route('register.create') }}" method="GET">
              <div class="input-group">
                  <input type="text" class="form-control" name="search" placeholder="Cari nama atau email" value="{{ request('search') }}">
                  <button type="submit" class="btn btn-outline-secondary">Cari</button>
              </div>
          </form>
      </div>
      <div class="col-md-9">
        <div class="d-flex flex-wrap justify-content-between">
          {{-- filter data --}}
            <div class="filter mt-3 mt-md-0 col-12 col-md-7 d-flex">
              <p class="p-2">Filter data:</p>
              <form action="{{ route('register.create') }}" method="GET" class="mr-2">
                  <select name="gender" id="gender" class="form-select" onchange="this.form.submit()">
                      <option value="">Choose Gender</option>
                      <option value="Laki-laki" {{ request('gender') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                      <option value="Perempuan" {{ request('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                  </select>
              </form>
              <form action="{{ route('register.create') }}" method="GET" class="mx-2">
                  <select name="hobby" id="hobby" class="form-select" onchange="this.form.submit()">
                      <option value="">Choose Hobby</option>
                      <option value="membaca" {{ request('hobby') == 'membaca' ? 'selected' : '' }}>Membaca</option>
                      <option value="olahraga" {{ request('hobby') == 'olahraga' ? 'selected' : '' }}>olahraga</option>
                      <option value="musik" {{ request('hobby') == 'musik' ? 'selected' : '' }}>musik</option>
                  </select>
              </form>
            </div>
            {{-- sort Data --}}
            <div class="short col-md-5 col-12 d-flex justify-content-between">
              <p class="p-2 ">Sort Data By:</p>
              <div class="form-short d-flex col-7 justify-content-between">
                <form action="{{ route('register.create') }}" method="GET" class="mr-2">
                  <input type="hidden" name="sort_by" value="name">
                  <input type="hidden" name="sort_direction" value="{{ request('sort_direction') == 'asc' ? 'desc' : 'asc' }}">
                  <button type="submit" class="d-flex btn btn-sort {{ request('sort_by') == 'name' ? 'text-sort' : '' }}">
                      Nama {!! request('sort_by') == 'name' ? '<i class="ms-2 bi bi-sort-' . (request('sort_direction') == 'asc' ? 'up' : 'down') . '"></i>' : '' !!}
                  </button>
              </form>

              <form action="{{ route('register.create') }}" method="GET" class="mr-2">
                  <input type="hidden" name="sort_by" value="email">
                  <input type="hidden" name="sort_direction" value="{{ request('sort_direction') == 'asc' ? 'desc' : 'asc' }}">
                  <button type="submit" class="d-flex btn btn-sort {{ request('sort_by') == 'email' ? 'text-sort' : '' }}">
                      Email {!! request('sort_by') == 'email' ? '<i class="ms-2 bi bi-sort-' . (request('sort_direction') == 'asc' ? 'up' : 'down') . '"></i>' : '' !!}
                 </button>
              </form>
              </div>
            </div>
          </div>
      </div>                  
    </div>
  
   <div class="wrap-table">
    <table class="table  bg-light mt-0 mt-md-3 table-striped">
      <thead>
          <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Hobi</th>
              <th>Email</th>
              <th>Telp</th>
              <th>Username</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($registrations as $registration)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $registration->name }}</td>
                  <td>{{ $registration->gender }}</td>
                  <td>{{ $registration->hobby }}</td>
                  <td>{{ $registration->email }}</td>
                  <td>{{ $registration->phone }}</td>
                  <td>{{ $registration->username }}</td>
                  <td>
                    <form action="{{ route('register.destroy', $registration->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" data-id="{{$registration->name}}" class="btn btn-danger btn-sm btndelete">
                        <i class="bi bi-trash"></i>
                      </button>
                    </form>
                  </td>
              </tr>
          @endforeach
      </tbody>
    </table>
   </div>
  </div>
