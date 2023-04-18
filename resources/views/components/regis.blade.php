<div class="regis col-10 mx-auto">
    <div class="hero ">
      <h1 class="col-md-6">Lets Create User Together to manage your list</h1>
      <p class="col-md-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consectetur quibusdam ab inventore laudantium officiis at facere distinctio alias ipsum necessitatibus esse sit rem error, laborum cupiditate asperiores, hic velit?</p>
    </div>
  <div class="d-flex mt-4">
      <div class=" col-10">
        <div class="div">
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3 ">
                <input class="input-fleid col-7" placeholder="What your Name... " type="text" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                <p class="text-danger">*{{ $message }}</p>
                @enderror
            </div>
        
           <div class="d-flex col-12 col-md-7 flex-wrap justify-between">
            <div class="mb-3 col-6">
              <label class="form-label">gender ...</label> 
              <br>
              <label class="form-label"><input class="form-check-input" type="radio" name="gender" value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'checked' : '' }}> Laki-laki</label>
              <label class="form-label"><input class="form-check-input" type="radio" name="gender" value="Perempuan" {{ old('gender') == 'Perempuan' ? 'checked' : '' }}> Perempuan</label>
              @error('gender')
              <p class="text-danger">*{{ $message }}</p>
              @enderror
          </div>
      
          <div class="mb-3">
              <label class="form-label">Your Hobby ...</label>
              <br>
              <label class="form-label"><input class="form-check-input" type="checkbox" name="hobby[]" value="Membaca" {{ in_array('Membaca', old('hobby', [])) ? 'checked' : '' }}> Membaca</label>
              <label class="form-label"><input class="form-check-input" type="checkbox" name="hobby[]" value="Olahraga" {{ in_array('Olahraga', old('hobby', [])) ? 'checked' : '' }}> Olahraga</label>
              <label class="form-label"><input class="form-check-input" type="checkbox" name="hobby[]" value="Musik" {{ in_array('Musik', old('hobby', [])) ? 'checked' : '' }}> Musik</label>
              @error('hobby')
              <p class="text-danger">*{{ $message }}</p>
              @enderror
          </div>
      
           </div>
           
            <div class="d-flex  flex-wrap ">
              <div class="mb-3">
                <input class="input-fleid flex" placeholder="Your Email ..." type="email" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                <p class="text-danger">*{{ $message }}</p>
                @enderror
              </div>
          
              <div class="mb-3 col-6 ms-md-3 ms-0">
                  <input class="input-fleid flex" placeholder="Your Phone ..." type="tel" name="phone" id="phone" value="{{ old('phone') }}" pattern="[0-9]+">
                  @error('phone')
                  <p class="text-danger">*{{ $message }}</p>
                  @enderror
              </div>
            </div>
            
            <div class="d-flex  flex-wrap ">
            <div class="mb-3">
              <input class="input-fleid flex" placeholder="Create Username ..." type="text" name="username" id="username" value="{{ old('username') }}" maxlength="10">
              @error('username')
              <p class="text-danger">*{{ $message }}</p>
              @enderror
            </div>
          
            <div class="mb-3 ms-md-3 ms-0">
              <input class="input-fleid flex" placeholder="Create Password ..." type="password" name="password" id="password">
              @error('password')
                   <p class="text-danger">*{{ $message }}</p>
              @enderror
            </div>
            </div>
          
            <div class="d-flex ">
              <button class="btn btn-light" type="submit">Daftar</button>
              <button class="btn btn-secondary ms-3" type="reset">Reset</button>
            </div>

            
          </form>
        </div>
      </div>
    </div>
  </div>